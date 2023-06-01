<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class PageController extends Controller
{
    public function index()
    {
        
        $products = product::all();
        return view('admin.products.index', compact('products'));

    }
    public function movies()
    {
        return view('movies');

    }
    public function news()
    {
        return view('news');

    }
}
