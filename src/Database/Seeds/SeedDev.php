<?php

use Illuminate\Database\Seeder;

class SeedDev extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('core_menus')->insert([
            [
                'namespace' => 'dev',
                'type' => 'dropdown',
                'text' => 'Dev',
                'priority' => 1,
                'allow_roles' => 'dev'
            ],
            [
                'namespace' => 'dev.audits',
                'type' => 'sub-dropdown',
                'text' => 'Audits',
                'priority' => 1,
            ],
            [
                'namespace' => 'dev.audits.database-audit',
                'type' => 'link',
                'text' => 'Database Audits',
                'route' => 'https://crm.global4.co.uk/dev/audits',
                'priority' => 1,
            ],
            [
                'namespace' => 'dev.audits.controller-audit',
                'type' => 'link',
                'text' => 'Controller Audits',
                'route' => 'https://crm.global4.co.uk/laravel-controller-audit',
                'priority' => 2,
            ],
            [
                'namespace' => 'dev.audits.console-audit',
                'type' => 'link',
                'text' => 'Console Audits',
                'route' => 'https://crm.global4.co.uk/laravel-console-audit',
                'priority' => 3,
            ],
            [
                'namespace' => 'dev.phpinfo',
                'type' => 'link',
                'text' => 'PHP Info',
                'route' => 'https://crm.global4.co.uk/dev/phpinfo',
                'priority' => 2,
            ],
            [
                'namespace' => 'dev.logs',
                'type' => 'link',
                'text' => 'Logs',
                'route' => 'https://crm.global4.co.uk/dev/logs',
                'priority' => 3,
            ],
            [
                'namespace' => 'dev.jobs',
                'type' => 'sub-dropdown',
                'text' => 'Jobs',
                'priority' => 4,
            ],
            [
                'namespace' => 'dev.jobs.outstanding',
                'type' => 'link',
                'text' => 'Jobs Outstanding',
                'route' => 'https://crm.global4.co.uk/dev/jobs',
                'priority' => 1,
            ],
            [
                'namespace' => 'dev.jobs.failed',
                'type' => 'link',
                'text' => 'Jobs Failed',
                'route' => 'https://crm.global4.co.uk/dev/jobs/failed',
                'priority' => 2,
            ],
            [
                'namespace' => 'dev.jobs.completed',
                'type' => 'link',
                'text' => 'Jobs Completed',
                'route' => 'https://crm.global4.co.uk/dev/jobs/completed',
                'priority' => 3,
            ],
            [
                'namespace' => 'dev.environment',
                'type' => 'link',
                'text' => 'Environment',
                'route' => 'https://crm.global4.co.uk/dev/environment',
                'priority' => 5,
            ],
            [
                'namespace' => 'dev.affinity',
                'type' => 'sub-dropdown',
                'text' => 'Affinity',
                'priority' => 6,
            ],
            [
                'namespace' => 'dev.affinity.functions',
                'type' => 'link',
                'text' => 'Affinity Functions',
                'route' => 'https://crm.global4.co.uk/affinity/functions',
                'priority' => 1,
            ],
            [
                'namespace' => 'dev.affinity.types',
                'type' => 'link',
                'text' => 'Affinity Types',
                'route' => 'https://crm.global4.co.uk/affinity/types',
                'priority' => 1,
            ],
            [
                'namespace' => 'dev.wip-tickets',
                'type' => 'link',
                'text' => 'WIP Tickets',
                'route' => 'https://crm.global4.co.uk/admin/tickets/tickets',
                'priority' => 7,
            ],
            [
                'namespace' => 'dev.statistics',
                'type' => 'link',
                'text' => 'Statistics',
                'route' => 'https://crm.global4.co.uk/admin/laravel-logger/statistics',
                'priority' => 8,
            ],
            [
                'namespace' => 'dev.mycalls',
                'type' => 'link',
                'text' => 'MyCalls Compare',
                'route' => 'https://crm.global4.co.uk/dev/mycalls/compare-servers',
                'priority' => 8,
            ],
            [
                'namespace' => 'dev.elevate',
                'type' => 'sub-dropdown',
                'text' => 'Elevate',
                'priority' => 10,
            ],
            [
                'namespace' => 'dev.elevate.rental-products',
                'type' => 'link',
                'text' => 'Rental Products',
                'route' => 'https://crm.global4.co.uk/elevate/rental-products',
                'priority' => 1,
            ],

        ]);
    }
}
