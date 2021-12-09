<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalanceTransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balance_transfers')->insert([
            [
                'title' => 'Balance Transfer',
                'description' => 'Under this service, an account holder in a bank/MFS/e-wallet can send money from his/her account to a receiver’s bank/MFS/e-wallet account using EPS.',
                'image' => 'Untitled-1.png',
            ]
        ]);
    }
}
