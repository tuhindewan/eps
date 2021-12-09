<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorporateServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('corporate_services')->insert([
            [
                'title' => 'Corporate Services',
                'description' => 'EPS will provide one-stop solution for the corporate clients dealing with large number of transactions. Easy Wage Disbursement is one of such services to be availed from EPS.',
                'image' => 'Untitled-1.png',
            ]
        ]);
    }
}
