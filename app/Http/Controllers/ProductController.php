<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $productAll = Product::all();

        return view('products.index', compact('productAll'));
    }
    public function add(Request $request){

        $request->validate([
            'proImage'=>'required|string',
            'proName'=>'required|string',
            'proSize'=>'required|string',
            'proPrice'=>'required|string',
            'proCate_id'=>'required|string',
        ]);
        $product = new Product;
        $product->image = $request->proImage;
        $product->name = $request->proName;
        $product->size = $request->proSize;
        $product->price = $request->proPrice;
        $product->cate_id = $request->proCate_id;
        $product->save();

        return redirect()->back()->with('Success','Record Successful');
        
    }
}
