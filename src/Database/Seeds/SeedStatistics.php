<?php
namespace Global4Communications\LaraMenu\Database\Seeds;


use Illuminate\Database\Seeder;

class SeedStatistics extends Seeder
{
    use \Global4Communications\LaraMenu\Traits\Functions;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('core_menus')->insert([
            [
                'namespace' => 'statistics',
                'type' => 'dropdown',
                'text' => 'Statistics',
                'priority' => 7,
                'allow_permissions' => 'view-statistics-dropdown'
            ],
            [
                'namespace' => 'statistics.affinity',
                'type' => 'link',
                'text' => 'Affinity',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/tickets/teams/overview'),
                'priority' => 1,
            ],
            [
                'namespace' => 'statistics.hometelecom-affinity',
                'type' => 'link',
                'text' => 'Home Telecom Affinity Overview',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/overview/orders/hometelecom'),
                'priority' => 2,
            ],
            [
                'namespace' => 'statistics.global4-billing-management',
                'type' => 'link',
                'text' => 'Global 4 Billing Management Report',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/global4-billing-management-report'),
                'priority' => 3,
            ],
            [
                'namespace' => 'statistics.hometelecom-billing-management',
                'type' => 'link',
                'text' => 'Home Telecom Billing Management Report',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/hometelecom-billing-management-report'),
                'priority' => 4,
            ],
            [
                'namespace' => 'statistics.weekly-billing-management',
                'type' => 'link',
                'text' => 'Weekly Broadband Billing Management Report',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/weeklybroadband-billing-management-report'),
                'priority' => 5,
            ],
            [
                'namespace' => 'statistics.access-database',
                'type' => 'link',
                'text' => 'Access Database Statistics',
                'route' => $this->urlgen('https://crm.global4.co.uk/access/statistics'),
                'priority' => 6,
            ],
            [
                'namespace' => 'statistics.accounts',
                'type' => 'link',
                'text' => 'Accounts',
                'route' => $this->urlgen('https://crm.global4.co.uk/statistics/accounts'),
                'priority' => 7,
            ],
        ]);
    }
}
