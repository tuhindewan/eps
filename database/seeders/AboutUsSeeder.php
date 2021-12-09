<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            [
                'title' => 'Easy To Manage All Your Transaction Using EPS App',
                'description' => '<p class="my-3" style="margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.8; color: rgb(119, 119, 119); font-family: Poppins, sans-serif;">EPS strives to make digital transaction effortless by enabling mass people with an easy and instant payment system. Easy Payment System (EPS) is an innovative payment solution permitted by Bangladesh Bank as a Payment System Operator (PSO). EPS eases the transaction providing services including fund transfer, merchant payment, bill payment, balance enquiry, mobile top-up, etc.</p><p class="d-none d-sm-block my-3" style="margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 1.8; color: rgb(119, 119, 119); font-family: Poppins, sans-serif;">EPS is developed by Optimum Solution and Services Ltd. (OSSL), a global technology solution provider.</p>',
                'image' => 'about.png',
            ]
        ]);
    }
}
