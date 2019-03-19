<?php

namespace Global4Communications\LaraMenu\Database\Seeds;

use Global4Communications\LaraMenu\Models\CoreMenu;
use Illuminate\Database\Seeder;

class SeedWeeklyBroadband extends Seeder
{
    use \Global4Communications\LaraMenu\Traits\Functions;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $item){
            CoreMenu::create($item);
        }
    }

    private function data()
    {
        return [
            [
                'namespace' => 'weeklybroadband',
                'type' => 'dropdown',
                'text' => 'Weekly Broadband',
                'priority' => 4,
                'allow_permissions' => 'view-weekly-broadband-dropdown'
            ],
            [
                'namespace' => 'weeklybroadband.signup-form',
                'type' => 'link',
                'text' => 'Sign Up Form',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/signup/clear'),
                'priority' => 1,
            ],
            [
                'namespace' => 'weeklybroadband.statistics',
                'type' => 'link',
                'text' => 'Statistics',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/statistics/boards'),
                'priority' => 2,
            ],
            [
                'namespace' => 'weeklybroadband.statistics-monthly',
                'type' => 'link',
                'text' => 'Statistics Monthly',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/statistics/monthly'),
                'priority' => 3,
            ],
            [
                'namespace' => 'weeklybroadband.customers',
                'type' => 'link',
                'text' => 'Signed Up Customers',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/customers'),
                'priority' => 4,
            ],
            [
                'namespace' => 'weeklybroadband.leads',
                'type' => 'link',
                'text' => 'Leads',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/leads'),
                'priority' => 5,
            ],
            [
                'namespace' => 'weeklybroadband.bills',
                'type' => 'link',
                'text' => 'Bills',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/bills'),
                'priority' => 6,
            ],
            [
                'namespace' => 'weeklybroadband.bills-outstanding',
                'type' => 'link',
                'text' => 'Bills - Outstanding',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/bills/outstanding'),
                'priority' => 7,
            ],
            [
                'namespace' => 'weeklybroadband.bills-dead',
                'type' => 'link',
                'text' => 'Bills - Dead',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/bills/dead'),
                'priority' => 8,
            ],
            [
                'namespace' => 'weeklybroadband.bills-to-date',
                'type' => 'link',
                'text' => 'Bills To Date',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/customers/bills-to-date'),
                'priority' => 9,
            ],
            [
                'namespace' => 'weeklybroadband.recent-payments',
                'type' => 'link',
                'text' => 'Recent Payments',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/bills/recent-payments'),
                'priority' => 10,
            ],
            [
                'namespace' => 'weeklybroadband.bills-items',
                'type' => 'link',
                'text' => 'Bills Items to Upload',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/bills/items'),
                'priority' => 11,
            ],
            [
                'namespace' => 'weeklybroadband.bills-tomorrow',
                'type' => 'link',
                'text' => 'Bills Customers Tomorrow',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/bills/tomorrow'),
                'priority' => 12,
            ],
            [
                'namespace' => 'weeklybroadband.customers-initialised',
                'type' => 'link',
                'text' => 'Missed Customers',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/customers/initialised'),
                'priority' => 13,
            ],
            [
                'namespace' => 'weeklybroadband.register-interest',
                'type' => 'link',
                'text' => 'Registered Interest',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/weeklybroadband/customers/register-interest'),
                'priority' => 14,
            ],
            [
                'namespace' => 'weeklybroadband.website',
                'type' => 'link',
                'text' => 'Website',
                'route' => $this->urlgen('https://www.weeklybroadband/clear-and-signup'),
                'priority' => 15,
            ],
        ];
    }
}
