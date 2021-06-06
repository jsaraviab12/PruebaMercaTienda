<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create')->with('categories',$categories);
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
        'name' => 'required',
        'category' => 'required',
        'price' => 'required',
        'count' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

        $image = $request -> file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $place = public_path('/images');
        $request -> image->move($place,$name);
           
       
        $product = new Product();
        $product->name = $request->get('name');
        $product->category_id = $request->get('category');
        $product->precio = $request->get('price');
        $product->cantidad = $request->get('count');
        $product->image = $name;
        $product->save();
        return redirect('/products');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('product.edit', compact('categories','product'));
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
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'count' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           ]);

        $product = Product::find($id);
        $image = $request -> file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $place = public_path('/images');
        $request -> image->move($place,$name);
           
       
       
        $product->name = $request->get('name');
        $product->category_id = $request->get('category');
        $product->precio = $request->get('price');
        $product->cantidad = $request->get('count');
        $product->image = $name;
        $product->save();
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
   
}
