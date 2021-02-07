<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rides')->insert([
            'driver_id' => '1',
            'customer_id' => '2',
            'vehicle_id' => '1',
            'fee' => '6.2',
            'canceled' => '2',
            'date' => date('Y-m-d')
        ]);

        DB::table('rides')->insert([
            'driver_id' => '2',
            'customer_id' => '1',
            'vehicle_id' => '2',
            'fee' => '6.2',
            'canceled' => '1',
            'date' => date('Y-m-d')
        ]);

        DB::table('rides')->insert([
            'driver_id' => '1',
            'customer_id' => '2',
            'vehicle_id' => '1',
            'fee' => '6.2',
            'canceled' => '2',
            'date' => date('Y-m-d')
        ]);

        DB::table('rides')->insert([
            'driver_id' => '3',
            'customer_id' => '1',
            'vehicle_id' => '2',
            'fee' => '6.2',
            'canceled' => '1',
            'date' => date('Y-m-d')
        ]);
    }
}
