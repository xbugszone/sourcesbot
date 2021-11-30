<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class countriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //"1-europe,2-asia,3-africa,4-america"
        DB::table('countries')->insert([
            'zone' => 1,
            'country' => 'Netherlands'
        ]);

        DB::table('countries')->insert([
            'zone' => 1,
            'country' => 'Spain'
        ]);

        DB::table('countries')->insert([
            'zone' => 4,
            'country' => 'Canada'
        ]);

        DB::table('countries')->insert([
            'zone' => 4,
            'country' => 'US'
        ]);

        DB::table('countries')->insert([
            'zone' => 2,
            'country' => 'China'
        ]);
    }
}
