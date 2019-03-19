<?php

use Illuminate\Database\Seeder;

class SeedIdealBroadband extends Seeder
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
                'namespace' => 'idealbroadband',
                'type' => 'dropdown',
                'text' => 'Ideal Broadband',
                'priority' => 3,
                'allow_permissions' => 'view-ideal-broadband-dropdown'
            ],
            [
                'namespace' => 'idealbroadband.signup-form',
                'type' => 'link',
                'text' => 'Sign Up Form',
                'route' => 'https://crm.global4.co.uk/admin/idealbroadband/signup/clear',
                'priority' => 1,
            ],
            [
                'namespace' => 'idealbroadband.signuped-customers',
                'type' => 'link',
                'text' => 'Signed Up Customers',
                'route' => 'https://crm.global4.co.uk/admin/idealbroadband/customers',
                'priority' => 2,
            ],
        ]);
    }
}
