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
            ],
            [
                'name' => 'Fruit',
            ],
            [
                'name' => 'Herbs & Sprouts',
            ],
            [
                'name' => 'Milk',
            ],
            [
                'name' => 'Vegetable',
            ],
            [
                'name' => 'Sundries',
            ],
        ]);
    }
}
