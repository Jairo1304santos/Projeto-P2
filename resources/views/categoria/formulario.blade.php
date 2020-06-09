@extends('template.default')

@section('conteudo')

<h1>CATEGORIA</h1>
<h1>CATEGORIA</h1>

<form action="/categoria" method="post">
    @csrf

    <input type="hidden" name="id" id="id" value="{{$categoria->id}}">

    <div class="form-group row">
        <label for="nome" class="col-sm-2 col-form-label">Nome *:</label>
        <div class="col-sm-10">
            <input required type="text" class="form-control" name="nome" id="nome" value="{{$categoria->nome}}">
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-danger" href="/categoria">Voltar</a>
    </div>
</form>
@endsection