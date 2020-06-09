@extends('template.default')

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


            