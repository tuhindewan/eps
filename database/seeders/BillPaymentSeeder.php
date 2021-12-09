<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_payments')->insert([
            [
                'title' => 'Bill and Fee Payment',
                'description' => 'Using EPS App, the registered user will be able to pay bills and fees.',
                'image' => 'Untitled-1.png',
            ]
        ]);
    }
}
