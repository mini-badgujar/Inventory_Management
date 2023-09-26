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
    public function index(products $products)
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
        dd($request->all());
        $validated = $request->validate([
            'name' => 'require|max:255',
            'description' => 'required',
            'price' => 'required|min:150|max:6000',
            'quantity' => 'required|min:1|max:100'
        ]);

        products::create($request->all());
        dd('stored');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product, products $products)
    {
        dd("data deleted");
        return redirect()->route('products.index')->with('success', "Product deleted successfully");
    }
}