<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function billList()
    {
        return view('bills',[
            'users'=>User::all(),
        ]);
    }

    public function addToBill(Request $request)
    {
        \Bill::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        session()->flash('success', 'Product is Added to Bill Successfully !');

        return redirect()->route("products.list");
    }
}
