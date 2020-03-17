<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Bread',
                'code' => 'bread',
            ],
            [
                'name' => 'Fruit',
                'code' => 'fruit',
            ],
            [
                'name' => 'Herbs & Sprouts',
                'code' => 'herbs-sprouts',
            ],
            [
                'name' => 'Milk',
                'code' => 'milk',
            ],
            [
                'name' => 'Vegetable',
                'code' => 'vegetable',
            ],
            [
                'name' => 'Sundries',
                'code' => 'sundries',
            ],
        ]);
    }
}
