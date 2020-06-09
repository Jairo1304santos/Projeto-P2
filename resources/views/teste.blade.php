<div class="form-group row">
        <label for="fornecedor_id" class="col-sm-2 col-form-label">Fornecedor</label>
        <div class="col-sm-10">
            <select required name="fornecedor_id" id="fornecedor_id" class="form-control">
                <option value="">Selecione aqui</option>
            @foreach($fornecedores as $fornecedor)
                 <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
            @endforeach
            </select>
        </div>
    </div>
           
           
           
            $table->bigIncrements('id');
            $table->integer('codigo');
            $table->string('nome', 50);
            $table->string('telefone', 13);
            $table->string('cnpj', 18);
            $table->string('email', 50);
            $table->string('cep', 10)->nullable();
            $table->string('logradouro', 30)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->string('bairro', 20)->nullable();
            $table->string('uf', 2);
            $table->string('municipio', 30)->nullable();
            $table->softDeletes();
            $table->timestamps();    



model =  


Formulario = @extends('template.default')

@section('conteudo')

<h1>FORNECEDORES</h1>
<h1>FORNECEDORES</h1>

<form action="/fornecedor" method="post">
    @csrf

    <input type="hidden" name="id" id="id" value="{{$fornecedor->id}}">

    <div class="form-group row">
        <label for="codigo" class="col-sm-2 col-form-label">Código *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="codigo" id="codigo" value="{{$fornecedor->codigo}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="nome" id="nome" value="{{$fornecedor->nome}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="telefone" class="col-sm-2 col-form-label">Telefone *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="telefone" id="telefone" value="{{$fornecedor->telefone}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="cnpj" class="col-sm-2 col-form-label">CNPJ *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="email" id="email" value="{{$fornecedor->email}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="cep" class="col-sm-2 col-form-label">Cep:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="cep" id="cep" value="{{$fornecedor->cep}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="logradouro" class="col-sm-2 col-form-label">Logradouro:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{$fornecedor->logradouro}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="complemento" class="col-sm-2 col-form-label">Complemento:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{$fornecedor->complemento}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="bairro" class="col-sm-2 col-form-label">Bairro:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$fornecedor->bairro}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="uf" class="col-sm-2 col-form-label">UF:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="uf" id="uf" value="{{$fornecedor->uf}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="municipio" class="col-sm-2 col-form-label">Municipio:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="municipio" id="municipio" value="{{$fornecedor->municipio}}">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/fornecedor">Voltar</a>
    </div>
</form>
@endsection


Index = @extends('template.default')

@section('conteudo')

<h1>FORNECEDORES</h1>
<h1>FORNECEDORES</h1>

<a class="btn btn-warning" href="/fornecedor/create">Novo</a>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Código</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CNPJ</th>
            <th>Email</th>
            <th>Cep</th>
            <th>Logradouro</th>
            <th>complemento</th>
            <th>Bairro</th>
            <th>UF</th>
            <th>Municipio</th>
        </tr>
    </thead>

    <tbody>
        @foreach($fornecedores as $fornecedor)
        <tr>
            <td>
                <a href="/fornecedor/{{$fornecedor->id}}/edit"><span class="fa fa-edit"></span></a>
                <a href="/fornecedor/{{$fornecedor->id}}/destroy" class="excluir"><span class="fa fa-trash-alt"></span></a>
            </td>
            <td>{{$fornecedor->id}}</td>
            <td>{{$fornecedor->codigo}}</td>
            <td>{{$fornecedor->nome}}</td>
            <td>{{$fornecedor->telefone}}</td>
            <td>{{$fornecedor->cnpj}}</td>
            <td>{{$fornecedor->email}}</td>
            <td>{{$fornecedor->cep}}</td>
            <td>{{$fornecedor->logradouro}}</td>
            <td>{{$fornecedor->complemento}}</td>
            <td>{{$fornecedor->bairro}}</td>
            <td>{{$fornecedor->uf}}</td>
            <td>{{$fornecedor->municipio}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection


Controller = <?php

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

