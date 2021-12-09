<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchant_payments')->insert([
            [
                'title' => 'Merchant Payment',
                'description' => 'Any offline merchant can use EPS to receive the payment into his/her bank/MFS/e-wallet account from a walking customer’s bank/MFS/e-wallet account.',
                'image' => 'Untitled-1.png',
            ]
        ]);
    }
}
