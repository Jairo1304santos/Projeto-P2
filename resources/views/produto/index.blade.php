@extends('template.default')

@section('conteudo')

    <h1>Produtos</h1>
    <h1>Produtos</h1>

    <a class="btn btn-warning" href="/produto/create">Novo</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Fornecedor</th>
                
            </tr>
        </thead>

    <tbody>
      @foreach($produtos as $produto)
        <tr>
            <td>
                <a href="/produto/{{$produto->id}}/edit"><span class="fa fa-edit"></span></a>
                <a href="/produto/{{$produto->id}}/destroy"><span class="fa fa-trash-alt"></span></a>
            </td>
            <td>{{$produto->id}}</td>
            <td>{{$produto->codigo}}</td>
            <td>{{$produto->nome}}</td>
            <td>{{$produto->quantidade}}</td>
            <td>{{$produto->categoria_id}}</td>
            <td>{{$produto->fornecedor_id}}</td>
           
        </tr>
      @endforeach
    </tbody>
    </table>

@endsection