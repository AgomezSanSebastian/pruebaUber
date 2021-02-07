<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'coche',            
            'minimum' => '5.2',
            'per_minute' => '50.33',
        ]);

        DB::table('categories')->insert([
            'name' => '4x4',            
            'minimum' => '15.2',
            'per_minute' => '30.20',
        ]);
    }
}
