<?php

namespace Global4Communications\LaraMenu\Database\Seeds;

use Illuminate\Database\Seeder;

class SeedAffinity extends Seeder
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
                'namespace' => 'affinity',
                'type' => 'dropdown',
                'text' => 'Affinity',
                'priority' => 10,
                'allow_permissions' => 'view-affinity-dropdown'
            ],
            [
                'namespace' => 'affinity.sites',
                'type' => 'link',
                'text' => 'Sites',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/sites'),
                'priority' => 1,
            ],
            [
                'namespace' => 'affinity.sub-sites',
                'type' => 'link',
                'text' => 'Sub Sites',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/sub-sites'),
                'priority' => 2,
            ],
            [
                'namespace' => 'affinity.clis',
                'type' => 'link',
                'text' => 'CLIs',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/clis'),
                'priority' => 3,
            ],
            [
                'namespace' => 'affinity.product-items',
                'type' => 'link',
                'text' => 'Product Items',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/product-items'),
                'priority' => 4,
            ],
            [
                'namespace' => 'affinity.credit-control',
                'type' => 'link',
                'text' => 'Credit Control',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/credit-control'),
                'priority' => 5,
            ],
            [
                'namespace' => 'affinity.bumped',
                'type' => 'link',
                'text' => 'Bumped Tickets',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/bumped'),
                'priority' => 6,
            ],
            [
                'namespace' => 'affinity.bumped-no-change',
                'type' => 'link',
                'text' => 'Bumped Tickets - No Change',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/bumped/no-change'),
                'priority' => 7,
            ],
            [
                'namespace' => 'affinity.call-report',
                'type' => 'link',
                'text' => 'Call Report',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/cdr/index'),
                'priority' => 8,
            ]
        ]);
    }
}
