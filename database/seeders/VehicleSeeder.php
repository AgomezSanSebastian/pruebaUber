<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'version_id' => '1',            
            'category_id' => '1',
            'plate' => 'Plomo',
            'color' => 'Oro',
            'seats' => '3',            
        ]);

        DB::table('vehicles')->insert([
            'version_id' => '2',            
            'category_id' => '2',
            'plate' => 'Plomo',
            'color' => 'Oro',
            'seats' => '3',            
        ]);

        
    }
}
