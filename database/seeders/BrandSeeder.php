<?php

namespace Database\Seeders;

use App\Models\Brand;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'Seat',            
        ]);

        DB::table('brands')->insert([
            'name' => 'Ford',
        ]);

        DB::table('brands')->insert([
            'name' => 'Fiat',
        ]);

        DB::table('brands')->insert([
            'name' => 'BMW',
        ]);

    }
}
