<?php

namespace Global4Communications\LaraMenu\Database\Seeds;

use Illuminate\Database\Seeder;

class SeedServices extends Seeder
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
                'namespace' => 'services',
                'type' => 'dropdown',
                'text' => 'Services',
                'priority' => 11,
                'allow_permissions' => 'view-services-dropdown'
            ],
            [
                'namespace' => 'services.on-call',
                'type' => 'link',
                'text' => 'On Call Engineer',
                'route' => $this->urlgen('https://crm.global4.co.uk/services/on-call'),
                'priority' => 1,
            ]
        ]);
    }
}
