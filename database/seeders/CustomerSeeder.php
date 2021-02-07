<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'requests' => '5',
            'preferences' => 'blanco'
        ]);

        DB::table('customers')->insert([
            'requests' => '12',
            'preferences' => 'negro'
        ]);

        DB::table('customers')->insert([
            'requests' => '78',
            'preferences' => 'casa'
        ]);
    }
}
