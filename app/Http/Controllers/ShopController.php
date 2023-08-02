<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }
    public function women()
    {
        $pro_cate = ProductCategory::find(1);
        $products = $pro_cate->products;
        return view('shop', compact('products'));
    }
    public function men()
    {
        $pro_cate = ProductCategory::find(2);
        $products = $pro_cate->products;
        return view('shop', compact('products'));
    }
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $comments = DB::table('product_comments')
            ->join('products', 'product_id', '=', 'products.id')
            ->join('users', 'user_id', '=', 'users.id')
            ->where('products.id', $id)
            ->select('product_comments.*', 'users.name')->get();
        return view('product_detail', compact('product', 'comments'));
    }
    public function search(Request $request)
    {
        $key = $request->input('keyword');
        $results = Product::where('name', 'like', '%' . $key . '%')->get();
        return view('action.search', compact('results'));
    }
    public function filter(Request $request)
    {
        $sort_by = $request->get('sort_by');

        switch ($sort_by) {
            case 'name_asc':
                $products = Product::orderBy('name', 'asc')->get();
                break;
            case 'name_desc':
                $products = Product::orderBy('name', 'desc')->get();
                break;
            case 'price_asc':
                $products = Product::orderBy('price', 'asc')->get();
                break;
            case 'price_desc':
                $products = Product::orderBy('price', 'desc')->get();
                break;
            default:
                $products = Product::all();
                break;
        }
        return view('action.filter', compact('products'));
    }
    public function postComment(Request $request, $id)
    {
        $data = [
            'product_id' => $id,
            'user_id' => Auth::id(),
            'messages' => $request->input('message')
        ];
        ProductComment::create($data);
        return redirect()->back()->with('success', 'Comment successful');;
    }
}
