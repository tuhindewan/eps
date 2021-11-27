<?php

namespace Database\Seeders;

use App\Models\BillPayment;
use App\Models\MobileTop;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
            ]
        ]);

        $this->call([
            BalanceTransferSeeder::class,
            BillPaymentSeeder::class,
            MerchantPaymentSeeder::class,
            BalanceEnquirySeeder::class,
            MobileTop::class,
        ]);
    }
}
