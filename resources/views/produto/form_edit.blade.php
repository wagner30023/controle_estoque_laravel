@extends('layout.principal')

@section('conteudo')
    <h1> Editar produto </h1>
    <form action="/produtos/update/{{$produto->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label> Nome </label>
            <input name="nome" value="{{$produto->nome}}" class="form-control" />
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input name="descricao" value="{{$produto->descricao}}"  class="form-control" />
        </div>

        <div class="form-group">
            <label> Valor </label>
            R$: <input name="valor" value="{{$produto->valor}}" class="form-control" />
        </div>

        <div class="form-group">
            <label> Quantidade </label>
            <input name="quantidade" type="number" value="{{$produto->quantidade}}" class="form-control" />
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Editar </button>
        </div>
    </form>
@endsection
