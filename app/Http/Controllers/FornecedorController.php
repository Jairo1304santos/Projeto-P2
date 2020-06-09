<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedor.index', compact('fornecedores'));
    }

    public function create()
    {
        $fornecedor = new Fornecedor();
        return view('fornecedor.formulario', compact('fornecedor'));
    }

    public function store(Request $request)
    {
        $fornecedor = $request->id ? Fornecedor::find($request->id) : new Fornecedor();
        $fornecedor->fill($request->all());
        $fornecedor->save();

        return redirect('/fornecedor');
    }

    public function show($id)
    {
        //
    }

    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedor.formulario', compact('fornecedor'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();
         return redirect('/fornecedor');
    }
}
