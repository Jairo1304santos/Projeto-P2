@extends('template.default')

@section('conteudo')

<h1>Produto</h1>
<h1>Produto</h1>

<form action="/produto" method="post">
    @csrf

    <input type="hidden" name="id" id="id" value="{{$produto->id}}">

    <div class="form-group row">
        <label for="codigo" class="col-sm-2 col-form-label">Código *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="codigo" id="codigo" value="{{$produto->codigo}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="nome" id="nome" value="{{$produto->nome}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="quantidade" class="col-sm-2 col-form-label">Quantidade *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="categoria_id" class="col-sm-2 col-form-label">Categoria</label>
        <div class="col-sm-10">
            <select required name="categoria_id" id="categoria_id" class="form-control">
                <option value="">Selecione aqui</option>
            @foreach($categorias as $categoria)
                 <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
            @endforeach
            </select>
        </div>
    </div>
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
    
    

    <div class="text-center">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/produto">Voltar</a>
    </div>
</form>
@endsection