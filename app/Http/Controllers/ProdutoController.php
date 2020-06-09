<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Fornecedor;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    
    public function create()
    {
        $produto = new Produto();
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        return view('produto.formulario', compact('produto', 'categorias', 'fornecedores'));
    }

   
    public function store(Request $request)
    {
        if (!$request->id) {
            $produto = new Produto($request->all());
        } else{
            $produto = Produto::find($request->id);
            $produto->fill($request->all());
        }
        
        $produto->save();
        return redirect('/produto');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        $fornecedores = Fornecedor::all();
        return view('produto.formulario', compact('produto', 'categorias','fornecedores'));
    }

    
    public function update(Request $request, Produto $produto)
    {
        //
    }

 
    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('/produto');
    }
}
