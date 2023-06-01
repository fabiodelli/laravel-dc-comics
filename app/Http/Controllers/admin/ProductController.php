<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
{
    $product = new Product();
    $product->title = $request->input('title');
    $product->description = $request->input('description');
    // Assegna i valori ad altri campi del prodotto

    $product->save();

    return redirect()->route('products.index')->with('success', 'Prodotto creato con successo.');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
{
    return view('admin.products.show', compact('product'));
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
{
    return view('admin.products.edit', compact('product'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, Product $product)
{
    $product->title = $request->input('title');
    $product->description = $request->input('description');
    // Assegna i valori ad altri campi del prodotto

    $product->save();

    return redirect()->route('products.index')->with('success', 'Prodotto aggiornato con successo.');
}


   /**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\Product  $product
 * @return \Illuminate\Http\Response
 */
public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
}



}
