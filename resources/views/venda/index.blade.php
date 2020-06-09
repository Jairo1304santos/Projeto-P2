@extends('template.default')

@section('conteudo')

    <h1>Vendas</h1>
    <h1>Vendas</h1>

    <a class="btn btn-warning" href="/venda/create">Novo</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor R$</th>
            </tr>
        </thead>

    <tbody>
      @foreach($vendas as $venda)
        <tr>
            <td>
                <a href="/venda/{{$venda->id}}/edit"><span class="fa fa-edit"></span></a>
                <a href="/venda/{{$venda->id}}/destroy"><span class="fa fa-trash-alt"></span></a>
            </td>
            <td>{{$venda->id}}</td>
            <td>{{$venda->cliente->nome}}</td>
            <td>{{$venda->produto->nome}}</td>
            <td>{{$venda->quantidade}}</td>
        </tr>
      @endforeach
    </tbody>
    </table>

@endsection