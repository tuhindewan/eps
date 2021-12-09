<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndexContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('index_contents')->insert([
            [
                'content' => 'Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.',
                'image' => 'welcome-mockup-2.png',
            ]
        ]);
    }
}
