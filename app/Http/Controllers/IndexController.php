<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function CategoryWiseProduct($cat_id){
		$products = Product::where('cate_id',$cat_id)->orderBy('id','DESC')->paginate(7);
		$categories = Category::orderBy('name','ASC')->get();
		return view('products.productAll',compact('products','categories'));
	}

	public function ProductDetails($pro_id){
		$product = Product::findOrFail($pro_id);
	 	return view('products.single-product',compact('product'));
	}

}
