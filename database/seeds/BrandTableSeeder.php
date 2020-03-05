<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'name' => 'Cascadian Farm',
            ],
            [
                'name' => '365 Organic',
            ],
            [
                'name' => 'Earthbound Organics',
            ],
            [
                'name' => 'Marketside',
            ],
            [
                'name' => 'Harvest Farms',
            ],
        ]);
    }
}
