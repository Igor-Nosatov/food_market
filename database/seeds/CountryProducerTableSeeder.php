<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryProducerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_producers')->insert([
            [
                'name' => 'Poland',
            ],
            [
                'name' => 'Ukraine',
            ],
            [
                'name' => 'Belarus',
            ],
            [
                'name' => 'Turkey',
            ],
            [
                'name' => 'Egypt',
            ],
        ]);
    }
}
