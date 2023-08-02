<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brian2694\Toastr\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'image' => $product->path,
            ],
        ]);
        return redirect()->back()->with('success', 'Add to cart successfully');
    }
    public function index()
    {
        return view('cart_detail');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back()->with('success', 'Delete product successfully');
    }
    public function update(Request $request, $rowId)
    {
        $qtyNew = $request->input('qty');
        Cart::update($rowId, $qtyNew);
        return redirect()->back()->with('success', 'Update cart successfully');
    }
    public function delete()
    {
        Cart::destroy();
        return redirect()->back()->with('success', 'Delete cart successfully');
    }
}
