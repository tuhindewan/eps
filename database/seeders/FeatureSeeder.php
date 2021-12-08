<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            [
                'title' => 'EPS Is The Only All In One Payment Gateway To Do Any Kind Of Transaction',
                'description' => 'VISION To accelerate the transformation to achieve a sustainable digital financial eco-system. MISSION To minimize the barriers of digital transaction, and support financial institutions by facilitating their customers/clients with digital payment services.',
                'users' => '2350',
                'accounts' => '1895',
                'developers' => '1580',
                'download' => '1358',
            ]
        ]);
    }
}
