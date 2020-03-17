<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function category()
    {
        $categories = Category::all();
        return view('user.categories', compact('categories'));
    }
}
