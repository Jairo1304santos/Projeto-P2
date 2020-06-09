@extends('template.default')

@section('conteudo')

<h1>Nova Venda</h1>
<h1>Nova Venda</h1>

<form action="/venda" method="post">
    @csrf

    <input type="hidden" name="id" id="id" value="{{$venda->id}}">

    <div class="form-group row">
        <label for="cliente_id" class="col-sm-2 col-form-label">CLiente *:</label>
        <div class="col-sm-10">
            <select required name="cliente_id" id="cliente_id" class="form-control">
                <option value="">Selecione aqui</option>
            @foreach($clientes as $cliente)
                 <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
            @endforeach
            </select>
        </div>
    </div>
   

    <div class="form-group row">
        <label for="produto_id" class="col-sm-2 col-form-label">Produto *:</label>
        <div class="col-sm-10">
            <select required name="produto_id" id="produto_id" class="form-control">
                <option value="">Selecione aqui</option>
            @foreach($produtos as $produto)
                 <option value="{{$produto->id}}">{{$produto->nome}}</option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="quantidade" class="col-sm-2 col-form-label">Quantidade *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="quantidade" id="quantidade" value="{{$venda->quantidade}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="data" class="col-sm-2 col-form-label">Data :</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="data" id="data" value="{{$venda->data}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="valor" class="col-sm-2 col-form-label">Valor R$ :</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="valor" id="valor" value="{{$venda->valor}}">
        </div>
    </div>
    
    

    <div class="text-center">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/venda">Voltar</a>
    </div>
</form>
@endsection