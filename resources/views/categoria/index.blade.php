@extends('template.default')

@section('conteudo')

<h1>CATEGORIAS</h1>
<h1>CATEGORIAS</h1>

<a class="btn btn-warning" href="/categoria/create">Novo</a>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
        </tr>
    </thead>

    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>
                <a href="/categoria/{{$categoria->id}}/edit"><span class="fa fa-edit"></span></a>
                <a href="/categoria/{{$categoria->id}}/destroy" class="excluir"><span class="fa fa-trash-alt"></span></a>
            </td>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nome}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection