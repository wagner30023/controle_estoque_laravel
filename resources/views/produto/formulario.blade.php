@extends('layout.principal')

@section('conteudo')
    <h1> Novo produto </h1>
    <form action="/produtos/adiciona" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label> Nome </label>
            <input name="nome" class="form-control" />
        </div>

        <div class="form-group">
            <label> Descrição </label>
            <input name="descricao" class="form-control" />
        </div>

        <div class="form-group">
            <label> Valor </label>
            <input name="valor" class="form-control" />
        </div>

        <div class="form-group">
            <label> Quantidade </label>
            <input name="quantidade" type="number" class="form-control" />
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Adicionar </button>
        </div>
    </form>
@endsection
