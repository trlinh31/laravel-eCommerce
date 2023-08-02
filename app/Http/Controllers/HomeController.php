<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(4);
        return view('index', compact('products'))->with('message', 'Xin Chào');
    }
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product_detail', compact('product'));
    }
}
