<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advantages')->insert([
            [
                'icon' => '1.png',
                'title' => 'Best Experience',
                'description' => 'Advanced features like real time usage update and charge-free bill payment guarantee the best possible app experience',

            ],
            [
                'icon' => '2.png',
                'title' => 'Easy to use',
                'description' => 'Our app is designed to give you a great experience. Features like personalized wallet, adding cashout charges makes our app easy and convenient to use & designed only for you',

            ],
            [
                'icon' => '3.png',
                'title' => '24/7 Support',
                'description' => '24/7 support services are here to ensure our customers success and business productivity – whether for on-site assistance, technical, or remote support.',

            ],
            [
                'icon' => '4.png',
                'title' => 'Complete Security',
                'description' => 'Full-proof security is ensured through features like blockchain technology and device authentication',

            ]
        ]);
    }
}
