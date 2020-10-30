<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Console\StorageLinkCommand;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function admin()
    {

        return redirect()->route('prueba');
    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgeneslogo = $request->file('logo')->store('public/img');
        $logo = Storage::url($imgeneslogo);

        $imgenesgrafica = $request->file('grafica')->store('public/img');
        $grafica = Storage::url($imgenesgrafica);

        $imgenescostos = $request->file('costosimg')->store('public/img');
        $costosimg = Storage::url($imgenescostos);

        #  Product::create($request->all());

        $Product= new Product();

        $Product->name = $request->name;
        $Product->tipo = $request->tipo;
        $Product->logo = $logo;
        $Product->grafica = $grafica;
        $Product->historia = $request->historia;
        $Product->caracteristicas = $request->caracteristicas;
        $Product->aplicabilidad = $request->aplicabilidad;
        $Product->herramientas = $request->herramientas;
        $Product->ejemplos = $request->ejemplos;
        $Product->requerimientos = $request->requerimientos;
        $Product->costos = $request->costos;
        $Product->costosimg = $costosimg;
        $Product->video = $request->video;
        $Product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        
        $product->update();
        #$product->update($request->all());

        $imgeneslogo = $request->file('logo')->store('public/img');
        $logo = Storage::url($imgeneslogo);

        $imgenesgrafica = $request->file('grafica')->store('public/img');
        $grafica = Storage::url($imgenesgrafica);

        $imgenescostos = $request->file('costosimg')->store('public/img');
        $costosimg = Storage::url($imgenescostos);

        #  Product::create($request->all());

        $product->name = $request->name;
        $product->tipo = $request->tipo;
        $product->logo = $logo;
        $product->grafica = $grafica;
        $product->historia = $request->historia;
        $product->caracteristicas = $request->caracteristicas;
        $product->aplicabilidad = $request->aplicabilidad;
        $product->herramientas = $request->herramientas;
        $product->ejemplos = $request->ejemplos;
        $product->requerimientos = $request->requerimientos;
        $product->costos = $request->costos;
        $product->costosimg = $costosimg;
        $product->video = $request->video;
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
