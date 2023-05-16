<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autor;
use App;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $autors=App\Autor::all();
        return view('inicio',compact('autors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autorAgregar = new Autor();
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);
        $autorAgregar->nombre = $request->nombre;
        $autorAgregar->descripcion = $request->descripcion;
        $autorAgregar->save();
        return back()->with('agregar','El autor ha sido agregado correctamente');
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
        $autorActualizar = App\Autor::findOrFail($id);
        return view('editar',compact('autorActualizar'));
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
        $autorUpdate = App\Autor::findOrFail($id);
        $autorUpdate->nombre = $request->nombre;
        $autorUpdate->descripcion = $request->descripcion;
        $autorUpdate->save();
        return back()->with('update','Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $autorEliminar = App\Autor::findOrFail($id);
        $autorEliminar -> delete();
        return back()->with('eliminar','La nota ha sido eliminada');
    }
}
