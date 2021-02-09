<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('versions')->insert([
            'name' => 'Ibiza',            
            'description' => 'Coche con ruedas',
            'brand_id' => '1',
        ]);

        DB::table('versions')->insert([
            'name' => 'Focus',            
            'description' => 'Coche con ruedas 2',
            'brand_id' => '2',
        ]);
    }
}
