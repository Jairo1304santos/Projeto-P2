@extends('template.default')

@section('conteudo')

<h1>Cliente</h1>
<h1>Cliente</h1>

<form action="/cliente" method="post">
    @csrf

    <input type="hidden" name="id" id="id" value="{{$cliente->id}}">

    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="nome" id="nome" value="{{$cliente->nome}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="telefone" id="telefone" value="{{$cliente->telefone}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="email" id="email" value="{{$cliente->email}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="data_nascimento" class="col-sm-2 col-form-label">Data Nascimento *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="data_nascimento" id="data_nascimento" value="{{$cliente->data_nascimento}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="cep" class="col-sm-2 col-form-label">Cep:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="cep" id="cep" value="{{$cliente->cep}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="logradouro" class="col-sm-2 col-form-label">Logradouro:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{$cliente->logradouro}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="complemento" class="col-sm-2 col-form-label">Complemento:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="complemento" id="complemento" value="{{$cliente->complemento}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="bairro" class="col-sm-2 col-form-label">Bairro:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="bairro" id="bairro" value="{{$cliente->bairro}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="uf" class="col-sm-2 col-form-label">UF:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="uf" id="uf" value="{{$cliente->uf}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="municipio" class="col-sm-2 col-form-label">Municipio:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="municipio" id="municipio" value="{{$cliente->municipio}}">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/cliente">Voltar</a>
    </div>
</form>
@endsection