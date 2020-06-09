<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        $cliente = new Cliente();
        return view('cliente.formulario', compact('cliente'));
    }

    
    public function store(Request $request)
    {
        $cliente = $request->id ? Cliente::find($request->id) : new Cliente();
        $cliente->fill($request->all());
        $cliente->save();

        return redirect('/cliente');
    }

    
    public function show(Cliente $cliente)
    {
        //
    }

    
    public function edit(Cliente $cliente)
    {
        return view('cliente.formulario', compact('cliente'));
    }

    
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

   
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/cliente');
    }
}
