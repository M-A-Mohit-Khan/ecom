<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

//use Larinfo;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $larinfo = Larinfo::getInfo();
        // dd($larinfo["host"]["ip"]);
        $products=Product::all();
        //dd($products);
        return view('product',compact('products'));
    }
}
