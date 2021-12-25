<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::all();
    }
    public function index1()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'cate_id' => 'required',
        ]);
        return Product::create($request->all());
    }
    public function store1(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        return Category::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::findOrfail($id);
    }
    public function show1($id)
    {
        return Category::findOrfail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrfail($id);
        $product->update($request->all());
        return $product;
    }
    public function update1(Request $request, $id)
    {
        $category = Category::findOrfail($id);
        $category->update($request->all());
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return  Product::destroy($id);
    }
    public function destroy1($id)
    {
        return Category::destroy($id);
    }
}
