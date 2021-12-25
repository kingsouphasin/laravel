<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categoryAll = Category::all();

        return view('indexCate', compact('categoryAll'));
    }
    public function index1(){

        $categories = Category::all();

        return view('welcome', compact('categories'));
    }
    public function add(Request $request){

        $request->validate([
            'name'=>'required|string|unique:categories'
        ]);
        $cate = new Category;
        $cate->name = $request->name;
        $cate->save();

        return redirect()->back()->with('Success','Record Successful');
        
    }
}
