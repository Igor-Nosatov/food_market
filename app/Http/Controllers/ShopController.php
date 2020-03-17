<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Brand;
use App\CountryProducer;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);
        $categories = Category::get();
        $brands = Brand::get();
        $country_producer = CountryProducer::get();

        return view('user.shop', compact('products','categories', 'brands', 'country_producer'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        $products = Product::where('category_id', $category)->get();
        $brands = Brand::get();
        $country_producer = CountryProducer::get();
        return view('user.category', compact('products','category', 'brands', 'country_producer'));
    }
}
