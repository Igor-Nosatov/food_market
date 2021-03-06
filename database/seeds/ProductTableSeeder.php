<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Bakers Delight Cape Seed Loaf - Large',
                'image' => 'images/products/1.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'Bakers Delight Cape Seed Loaf - Small',
                'image' => 'images/products/2.webp',
                'price' => '53',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 1,

            ],
            [
                'name' => 'Bakers Delight Country Grain Loaf',
                'image' => 'images/products/3.webp',
                'price' => '11',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 1,
            ],
            [
                'name' => 'Bakers Delight White Loaf',
                'image' => 'images/products/4.webp',
                'price' => '23',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 1,
            ],
            [
                'name' => 'Bakers Delight Wholemeal Loaf',
                'image' => 'images/products/5.webp',
                'price' => '53',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 1,
            ],
            [
                'name' => 'Duo of Bakers Delight Country Grain Loaves',
                'image' => 'images/products/6.webp',
                'price' => '33',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 1,
            ],
            [
                'name' => 'Duo of Bakers Delight White Loaves',
                'image' => 'images/products/7.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 1,
            ],
            [
                'name' => 'Duo of Bakers Delight Wholemeal Loaves',
                'image' => 'images/products/8.webp',
                'price' => '8',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 1,
            ],
            [
                'name' => 'Apples - Ballarat - per kg',
                'image' => 'images/products/9.webp',
                'price' => '23',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 2,
            ],
            [
                'name' => 'Apples - New Season Royal Gala (NZ) - per',
                'image' => 'images/products/10.webp',
                'price' => '53',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 2,
            ],
            [
                'name' => 'Apples - New Season Royal Gala (NZ) - per',
                'image' => 'images/products/11.webp',
                'price' => '11',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Bananas - per kg',
                'image' => 'images/products/12.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 2,
            ],
            [
                'name' => 'Blueberries NZ - Chip',
                'image' => 'images/products/13.webp',
                'price' => '53',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 2,
            ],
            [
                'name' => 'Grapefruit (NZ) - per kg',
                'image' => 'images/products/14.webp',
                'price' => '33',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 2,
            ],
            [
                'name' => 'Grapes - Green per kg',
                'image' => 'images/products/15.webp',
                'price' => '23',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 2,
            ],
            [
                'name' => 'Grapes - Red per kg',
                'image' => 'images/products/16.webp',
                'price' => '8',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Kiwifruit Italian - Green - Per kg',
                'image' => 'images/products/17.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 2,
            ],
            [
                'name' => 'Lemons USA - per kg',
                'image' => 'images/products/18.webp',
                'price' => '53',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 2,
            ],
            [
                'name' => 'Limes - NZ - kg',
                'image' => 'images/products/19.webp',
                'price' => '11',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 2,
            ],
            [
                'name' => 'Mandarins - USA per kg',
                'image' => 'images/products/20.webp',
                'price' => '23',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 2,
            ],
            [
                'name' => 'Mangoes- Peru - Each',
                'image' => 'images/products/21.webp',
                'price' => '53',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Nashi - per kg',
                'image' => 'images/products/22.webp',
                'price' => '33',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 2,
            ],
            [
                'name' => 'Nectarines - White Flesh - NZ per kg',
                'image' => 'images/products/23.webp',
                'price' => '23',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 2,
            ],
            [
                'name' => 'Nectarines - Yellow Flesh - NZ per kg',
                'image' => 'images/products/24.webp',
                'price' => '8',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 2,
            ],
            [
                'name' => 'Oranges - USA - per kg',
                'image' => 'images/products/25.webp',
                'price' => '12',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 2,
            ],
            [
                'name' => 'Pears - Bosc - per kg',
                'image' => 'images/products/26.webp',
                'price' => '12',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 2,
            ],
            [
                'name' => 'Pears - NZ - Belle De Jumet- per kg',
                'image' => 'images/products/27.webp',
                'price' => '8',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 2,
            ],

            [
                'name' => 'Alfalfa Sprouts- 75gm Punnet',
                'image' => 'images/products/28.webp',
                'price' => '8',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 3,
            ],
            [
                'name' => 'Asian Bean Sprouts - 200gm Bag',
                'image' => 'images/products/29.webp',
                'price' => '23',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 3,
            ],
            [
                'name' => 'Basil - Living Herbs',
                'image' => 'images/products/30.webp',
                'price' => '53',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 3,
            ],
            [
                'name' => 'Chives - Living Herbs',
                'image' => 'images/products/31.webp',
                'price' => '11',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Chunky Mix - 200gm Punnet',
                'image' => 'images/products/32.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 3,
            ],
            [
                'name' => 'Coriander - Living Herbs',
                'image' => 'images/products/33.webp',
                'price' => '53',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 3,
            ],
            [
                'name' => 'Crushed Garlic - 1kg Tub',
                'image' => 'images/products/34.webp',
                'price' => '33',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 3,
            ],
            [
                'name' => 'Garlic & Herb Spread - 1kg Tub',
                'image' => 'images/products/35.webp',
                'price' => '23',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 3,
            ],
            [
                'name' => 'Italian Parsley - Living Herb',
                'image' => 'images/products/36.webp',
                'price' => '8',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 3,
            ],
            [
                'name' => 'Lemongrass - Loose - per 100g',
                'image' => 'images/products/37.webp',
                'price' => '12',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 3,
            ],
            [
                'name' => 'Micro-Mix - 60gm Punnet',
                'image' => 'images/products/38.webp',
                'price' => '12',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 3,
            ],
            [
                'name' => 'Milk - Anchor Blue - 1Ltr',
                'image' => 'images/products/39.webp',
                'price' => '53',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 4,
            ],
            [
                'name' => 'Milk - Anchor Blue - 2Ltr',
                'image' => 'images/products/40.webp',
                'price' => '33',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 4,
            ],
            [
                'name' => 'Milk - Anchor Calci-Trim - 1Ltr',
                'image' => 'images/products/41.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 4,
            ],
            [
                'name' => 'Milk - Anchor Calci-Trim - 2Ltr',
                'image' => 'images/products/42.webp',
                'price' => '8',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 4,
            ],
            [
                'name' => 'Milk - Anchor Lite Blue - 1Ltr',
                'image' => 'images/products/43.webp',
                'price' => '12',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 4,
            ],
            [
                'name' => 'Milk - Anchor Lite Blue - 2Ltr',
                'image' => 'images/products/44.webp',
                'price' => '12',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 4,
            ],
            [
                'name' => 'Milk - Anchor Blue - 1Ltr',
                'image' => 'images/products/45.webp',
                'price' => '18',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 5,
            ],
            [
                'name' => 'Broccolini (Slender Stems) 250g bag',
                'image' => 'images/products/46.webp',
                'price' => '23',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 5,
            ],
            [
                'name' => 'Capsicum - Red Each (NZ)',
                'image' => 'images/products/47.webp',
                'price' => '23',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 5,
            ],
            [
                'name' => 'Capsicum - Yellow Each (NZ)',
                'image' => 'images/products/48.webp',
                'price' => '7',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 5,
            ],
            [
                'name' => 'Lettuce - Hydroponic Each (Green)',
                'image' => 'images/products/49.webp',
                'price' => '14',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 5,
            ],
            [
                'name' => 'Mushrooms - Flat per kg',
                'image' => 'images/products/50.webp',
                'price' => '12',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 5,
            ],
            [
                'name' => 'Natural Delights Pitted Dates - per 340gm',
                'image' => 'images/products/51.webp',
                'price' => '23',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 6,
            ],
            [
                'name' => 'Natural Delights Un-Pitted Dates - per 340g',
                'image' => 'images/products/52.webp',
                'price' => '76',
                'brand_id' => 2,
                'country_producer_id' => 2,
                'category_id' => 6,
            ],
            [
                'name' => 'Dates - per kilo',
                'image' => 'images/products/53.webp',
                'price' => '45',
                'brand_id' => 3,
                'country_producer_id' => 3,
                'category_id' => 6,
            ],
            [
                'name' => 'Crushed Garlic - 1kg Tub',
                'image' => 'images/products/54.webp',
                'price' => '7',
                'brand_id' => 1,
                'country_producer_id' => 1,
                'category_id' => 6,
            ],
            [
                'name' => 'Garlic & Herb Spread - 1kg Tub',
                'image' => 'images/products/55.webp',
                'price' => '14',
                'brand_id' => 4,
                'country_producer_id' => 4,
                'category_id' => 6,
            ],
            [
                'name' => 'Mainland Butter 500g (Salted)',
                'image' => 'images/products/56.webp',
                'price' => '22',
                'brand_id' => 5,
                'country_producer_id' => 5,
                'category_id' => 6,
            ],

        ]);
    }
}
