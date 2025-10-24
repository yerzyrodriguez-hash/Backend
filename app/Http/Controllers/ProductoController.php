<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos= producto::all();
        return response()-> json($productos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $producto= producto::create($request->all());
        return response()-> json($producto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $producto= producto::findOrFail($id);
        return response()-> json($producto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $producto= producto::findOrFail( $id);
        $producto= producto::update($request->all());
        return response()-> json($producto,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
