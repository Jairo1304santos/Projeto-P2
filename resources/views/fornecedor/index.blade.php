@extends('template.default')

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

            