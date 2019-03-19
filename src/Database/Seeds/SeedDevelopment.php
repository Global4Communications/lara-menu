<?php

use Illuminate\Database\Seeder;

class SeedDevelopment extends Seeder
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
                'namespace' => 'development',
                'type' => 'dropdown',
                'text' => 'Development',
                'priority' => 2,
                'allow_roles' => 'dev'
            ],
            [
                'namespace' => 'development.team-schedule',
                'type' => 'link',
                'text' => 'Team Work Schedule',
                'route' => 'https://crm.global4.co.uk/dev/task/work-schedule',
                'priority' => 1,
            ],
            [
                'namespace' => 'development.separator1',
                'type' => 'separator',
                'priority' => 2,
            ],
            [
                'namespace' => 'development.new-requests',
                'type' => 'link',
                'text' => 'New Development Requests',
                'route' => 'https://crm.global4.co.uk/dev/task/new-request',
                'priority' => 3,
            ],
            [
                'namespace' => 'development.outstanding-requests',
                'type' => 'link',
                'text' => 'Outstanding Development Requests',
                'route' => 'https://crm.global4.co.uk/dev/task/outstanding-request',
                'priority' => 4,
            ],
            [
                'namespace' => 'development.company-crm',
                'type' => 'link',
                'text' => 'Company CRM',
                'route' => 'https://crm.global4.co.uk/dev/task/category/company_crm',
                'priority' => 4,
            ],
            [
                'namespace' => 'development.g4-website',
                'type' => 'link',
                'text' => 'Global 4 Website',
                'route' => 'https://crm.global4.co.uk/dev/task/category/g4_website',
                'priority' => 5,
            ],
            [
                'namespace' => 'development.weekly-broadband',
                'type' => 'link',
                'text' => 'Weekly Broadband',
                'route' => 'https://crm.global4.co.uk/dev/task/category/weekly_broadband',
                'priority' => 6,
            ],
            [
                'namespace' => 'development.sales-crm',
                'type' => 'link',
                'text' => 'Sales CRM',
                'route' => 'https://crm.global4.co.uk/dev/task/category/sales_crm',
                'priority' => 7,
            ],
            [
                'namespace' => 'development.ideal-broadband',
                'type' => 'link',
                'text' => 'Ideal Broadband',
                'route' => 'https://crm.global4.co.uk/dev/task/category/ideal_broadband',
                'priority' => 8,
            ],
            [
                'namespace' => 'development.ht-tili',
                'type' => 'link',
                'text' => 'Tili Jnr / HT Sales',
                'route' => 'https://crm.global4.co.uk/dev/task/category/tili_jnr',
                'priority' => 9,
            ],
            [
                'namespace' => 'development.uncategorized',
                'type' => 'link',
                'text' => 'Un-Categorized',
                'route' => 'https://crm.global4.co.uk/dev/task/category/uncategorized',
                'priority' => 10,
            ],
        ]);
    }
}