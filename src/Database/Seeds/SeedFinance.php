<?php

namespace Global4Communications\LaraMenu\Database\Seeds;

use Illuminate\Database\Seeder;

class SeedFinance extends Seeder
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
                'namespace' => 'finance',
                'type' => 'dropdown',
                'text' => 'Finance',
                'priority' => 6,
                'allow_permissions' => 'view-finance-dropdown'
            ],
            [
                'namespace' => 'finance.import-accounts',
                'type' => 'link',
                'text' => 'Import Accounts Board Data',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/finance/imports/accounts'),
                'priority' => 1,
            ],
            [
                'namespace' => 'finance.billing-reconcile',
                'type' => 'link',
                'text' => 'Billing Reconcile',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/recon/value-invoice-to-affinity'),
                'priority' => 2,
            ],
            [
                'namespace' => 'finance.payment-portal',
                'type' => 'link',
                'text' => 'Payment Portal',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/payment'),
                'priority' => 3,
            ],
            [
                'namespace' => 'finance.outstanding-balance',
                'type' => 'link',
                'text' => 'Oustanding Balances',
                'route' => $this->urlgen('https://crm.global4.co.uk/affinity/balances'),
                'priority' => 4,
            ],
            [
                'namespace' => 'finance.payment-made',
                'type' => 'link',
                'text' => 'Payments Made',
                'route' => $this->urlgen('https://crm.global4.co.uk/admin/payment/payments-made'),
                'priority' => 5,
            ],
        ]);
    }
}
