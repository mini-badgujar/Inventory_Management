<?php

namespace App\Http\Controllers;

use App\Models\products;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|max:255',
            'description' => 'bail|required',
            'price' => 'bail|required|numeric|between:150,6000',
            'quantity' => 'bail|required|numeric|between:1,100',
        ]);
        products::create($request->all());

        return redirect()->route('products.index')->with('success', "Product added Successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = products::findorfail($id);
        return view('update', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {

        $data = $request->validate([
            'name' => 'bail|required|max:255',
            'description' => 'bail|required',
            'price' => 'bail|required|numeric|between:150,6000',
            'quantity' => 'bail|required|numeric|between:1,100',
        ]);
        products::find($product)->update($data);

        return redirect()->route('products.index')->with('success', "Product updated Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product, products $products)
    {
        //
    }
}
