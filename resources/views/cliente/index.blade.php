@extends('template.default')

@section('conteudo')

<h1>Clientes</h1>
<h1>Clientes</h1>

<a class="btn btn-warning" href="/cliente/create">Novo</a>
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Data Nascimento</th>
            <th>Cep</th>
            <th>Logradouro</th>
            <th>complemento</th>
            <th>Bairro</th>
            <th>UF</th>
            <th>Municipio</th>
        </tr>
    </thead>

    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>
                <a href="/cliente/{{$cliente->id}}/edit"><span class="fa fa-edit"></span></a>
                <a href="/cliente/{{$cliente->id}}/destroy" class="excluir"><span class="fa fa-trash-alt"></span></a>
            </td>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->telefone}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->data_nascimento}}</td>
            <td>{{$cliente->cep}}</td>
            <td>{{$cliente->logradouro}}</td>
            <td>{{$cliente->complemento}}</td>
            <td>{{$cliente->bairro}}</td>
            <td>{{$cliente->uf}}</td>
            <td>{{$cliente->municipio}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection