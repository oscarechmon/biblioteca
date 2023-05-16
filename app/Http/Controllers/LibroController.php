<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use App\Autor;
use App;

class LibroController extends Controller
{   

    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {   
        $autores = Autor::all(); 
        return view('libros.create',compact('autores'));
    }
  

    public function store(Request $request)
    {   
        $LibroAgregar = new Libro();
        $request->validate([
            'titulo'=>'required',
            'autor_id'=>'required',
        ]);
        $LibroAgregar->titulo = $request->titulo;
        $LibroAgregar->autor_id = $request->autor_id;
        $LibroAgregar->save();
        return back()->with('agregar','El libro ha sido agregado correctamente');
    
    }

    public function show($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.show', compact('libro'));
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'anio_publicacion' => 'required',
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update($request->all());

        return redirect()->route('libros.index')
            ->with('success', 'Libro actualizado correctamente');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro eliminado correctamente');
    }
}
