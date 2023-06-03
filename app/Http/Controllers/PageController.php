<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class PageController extends Controller
{
    public function home()
    {
        
        $products = product::all();
        return view('home',compact('products'));

    }
    public function movies()
    {
        return view('movies');

    }
    public function news()
    {
        return view('news');

    }
    public function index()
    {
        return view('index');

    }
}
