<?php

use Illuminate\Database\Seeder;

class SeedWebsite extends Seeder
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
                'namespace' => 'website',
                'type' => 'dropdown',
                'text' => 'Website',
                'priority' => 5,
                'allow_permissions' => 'view-website-dropdown'
            ],
            [
                'namespace' => 'website.home-page',
                'type' => 'link',
                'text' => 'Home Page',
                'route' => 'https://www.global4.co.uk',
                'priority' => 1,
            ],
            [
                'namespace' => 'website.blog',
                'type' => 'link',
                'text' => 'Blog / News',
                'route' => 'https://crm.global4.co.uk/cms/blog',
                'priority' => 2,
            ],
            [
                'namespace' => 'website.case-studies',
                'type' => 'link',
                'text' => 'Case Studies',
                'route' => 'https://crm.global4.co.uk/cms/case-studies',
                'priority' => 3,
            ],
            [
                'namespace' => 'website.testimonials',
                'type' => 'link',
                'text' => 'Testimonials',
                'route' => 'https://crm.global4.co.uk/cms/testimonials',
                'priority' => 4,
            ],
            [
                'namespace' => 'website.careers',
                'type' => 'link',
                'text' => 'Careers',
                'route' => 'https://crm.global4.co.uk/cms/careers',
                'priority' => 5,
            ],
            [
                'namespace' => 'website.jargon',
                'type' => 'link',
                'text' => 'Jargon Buster',
                'route' => 'https://crm.global4.co.uk/cms/jargons',
                'priority' => 6,
            ],
        ]);
    }
}
