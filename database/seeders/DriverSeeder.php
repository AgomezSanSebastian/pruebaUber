<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'photo_path' => 'conducto1',
            'hire_date' => date('Y-m-d'),
            'total_rides' => '4',
            'bank_account' => '1231234',
            'rating' => '5'
        ]);

        DB::table('drivers')->insert([
            'photo_path' => 'conducto2',
            'hire_date' => date('Y-m-d'),
            'total_rides' => '6',
            'bank_account' => '1233234',
            'rating' => '1'
        ]);

        DB::table('drivers')->insert([
            'photo_path' => 'conducto3',
            'hire_date' => date('Y-m-d'),
            'total_rides' => '2',
            'bank_account' => '1231734',
            'rating' => '2'
        ]);
    }
}
