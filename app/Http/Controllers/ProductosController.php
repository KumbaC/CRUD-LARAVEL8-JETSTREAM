<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercancia;
use App\Models\User;
class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $merca = Mercancia::with('user')->paginate(5);
   
       return view('productos.index', compact('merca'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Mercancia $mercancia)
    {
        $merca = Mercancia::create($request->all());

        return redirect()->route('productos.index', $merca)->with('info','¡Se creo un nuevo articulo en el inventario! ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mercancia $mercancia)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mercancia $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mercancia $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index')->with('info2','¡Se actualizo el articulo! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mercancia $producto)
    {
        $producto->delete();
        return Redirect()->route('productos.index')->with('info3','¡El producto se elimino con exito! ');
    }
}
