<?php

use Illuminate\Database\Seeder;

class SeedStatistics extends Seeder
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
                'namespace' => 'wallboard',
                'type' => 'dropdown',
                'text' => 'Wallboards',
                'priority' => 8,
                'allow_permissions' => 'view-wallboards-dropdown'
            ],
            [
                'namespace' => 'wallboard.heading1',
                'type' => 'header',
                'text' => 'Queues Overview',
                'priority' => 1,
            ],
            [
                'namespace' => 'wallboard.queue-overview',
                'type' => 'link',
                'text' => 'Call Queue Overview',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/queue-overview',
                'priority' => 2,
            ],
            [
                'namespace' => 'wallboard.queue-overview-compact',
                'type' => 'link',
                'text' => 'Call Queue Overview Compact',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/queue-overview-compact',
                'priority' => 3,
            ],
            [
                'namespace' => 'wallboard.separator1',
                'type' => 'separator',
                'priority' => 4,
            ],
            [
                'namespace' => 'wallboard.heading2',
                'type' => 'header',
                'text' => 'Department Overview',
                'priority' => 5,
            ],
            [
                'namespace' => 'wallboard.department-accounts',
                'type' => 'link',
                'text' => 'Accounts',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/g4-accounts',
                'priority' => 6,
            ],
            [
                'namespace' => 'wallboard.department-ht-credit',
                'type' => 'link',
                'text' => 'HT Credit Control',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/ht-creditcontrol',
                'priority' => 7,
            ],
            [
                'namespace' => 'wallboard.department-g4-credit',
                'type' => 'link',
                'text' => 'G4 Credit Control',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/g4-creditcontrol',
                'priority' => 8,
            ],
            [
                'namespace' => 'wallboard.separator2',
                'type' => 'separator',
                'priority' => 9,
            ],
            [
                'namespace' => 'wallboard.heading3',
                'type' => 'header',
                'text' => 'Department Agents Overview',
                'priority' => 10,
            ],
            [
                'namespace' => 'wallboard.agent-accounts',
                'type' => 'link',
                'text' => 'Accounts',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/g4-accounts/agent-overview',
                'priority' => 11,
            ],
            [
                'namespace' => 'wallboard.agent-htcredit',
                'type' => 'link',
                'text' => 'HT Credit Control',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/ht-creditcontrol/agent-overview',
                'priority' => 12,
            ],
            [
                'namespace' => 'wallboard.agent-g4credit',
                'type' => 'link',
                'text' => 'G4 Credit Control',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/g4-creditcontrol/agent-overview',
                'priority' => 13,
            ],
            [
                'namespace' => 'wallboard.agent-finance',
                'type' => 'link',
                'text' => 'All Finance',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/finance/agent-overview',
                'priority' => 14,
            ],
            [
                'namespace' => 'wallboard.agent-g4-sales',
                'type' => 'link',
                'text' => 'G4 Sales',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/g4-sales/agent-overview',
                'priority' => 15,
            ],
            [
                'namespace' => 'wallboard.agent-ht-sales',
                'type' => 'link',
                'text' => 'HT Sales',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/ht-sales/agent-overview',
                'priority' => 16,
            ],
            [
                'namespace' => 'wallboard.agent-ht-care',
                'type' => 'link',
                'text' => 'HT Customer Care',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/ht-customercare/agent-overview',
                'priority' => 17,
            ],
            [
                'namespace' => 'wallboard.agent-residential-provisions',
                'type' => 'link',
                'text' => 'Residential Provisions',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/residential-provisions/agent-overview',
                'priority' => 18,
            ],
            [
                'namespace' => 'wallboard.agent-business-provisions',
                'type' => 'link',
                'text' => 'Business Provisions',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/business-provisions/agent-overview',
                'priority' => 19,
            ],
            [
                'namespace' => 'wallboard.agent-business-technical',
                'type' => 'link',
                'text' => 'Business Technical',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/business-technical/agent-overview',
                'priority' => 20,
            ],
            [
                'namespace' => 'wallboard.separator3',
                'type' => 'separator',
                'priority' => 21,
            ],
            [
                'namespace' => 'wallboard.heading4',
                'type' => 'header',
                'text' => 'Global4 Views',
                'priority' => 21,
            ],
            [
                'namespace' => 'wallboard.global4-accounts',
                'type' => 'link',
                'text' => 'Accounts',
                'route' => 'https://crm.global4.co.uk/cdr/wallboard/accounts-slider',
                'priority' => 22,
            ],
            [
                'namespace' => 'wallboard.separator4',
                'type' => 'separator',
                'priority' => 23,
            ],
            [
                'namespace' => 'wallboard.heading5',
                'type' => 'header',
                'text' => 'Hometelecom Views',
                'priority' => 24,
            ],
        ]);
    }
}
