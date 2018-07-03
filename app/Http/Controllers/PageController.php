<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }

    public function products()
    {
    	$products = Product::all();
    	return view('home.products', compact('products'));	
    }
}
