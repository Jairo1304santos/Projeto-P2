<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.formulario', compact('categoria'));
    }


    public function store(Request $request)
    {
        $categoria = $request->id ? Categoria::find($request->id) : new Categoria();
        $categoria->fill($request->all());
        $categoria->save();

        return redirect('/categoria');
    }


    public function show(Categoria $categoria)
    {
        //
    }


    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.formulario', compact('categoria'));
    }


    public function update(Request $request, Categoria $categoria)
    {
        //
    }


    public function destroy($id)
    {
        $categoria->delete();
         return redirect('/categoria');
    }
}
