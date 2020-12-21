<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $legos = Product::all();
        return view('front.home',compact('legos'));
    }
    public function legos()
    {
        $legos = Product::all();
        return view('front.legos', compact('legos'));
    }
    public function lego($id)
    {
        $product = Product::find($id);
        return view('front.lego', compact('product'));    
    }

}
