<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Element::all();
        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('product.create', ['request' => $request]);
        $product = new Element();
        $product->name = $request->name;
        $product->email = $request->email;
        $product->description = $request->description;
        $product->img = $request->img;
        $product->save();
        // dd(Element::all());
        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($element)
    {
        $data = Element::find($element);
        return view('products.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($element)
    {
        $data = Element::find($element);
        return view('products.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Element $element)
    {
        $product = new Element();
        $product->name          = $request->name;
        $product->email         = $request->email;
        $product->description   = $request->description;
        $product->img           = $request->img;
        $product->save();
        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($element)
    {
        $product = Element::find($element);
        $product->delete();
        return redirect()->route('products.index');
    }
}
