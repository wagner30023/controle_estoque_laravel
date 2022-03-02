@extends('layout.principal')

@section('conteudo')
    <div class="container">
        @if (empty($produtos))
            <div class="alert alert-danger">
                Você não tem nenhum produto cadastrado.
            </div>
        @else
            <h2 class="sub-header">Listagem de produtos</h2>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Descricao</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                @foreach ($produtos as $p)
                    <tbody>
                        <tr>
                            <td> {{ $p->nome }} </td>
                            <td> R$ {{$p->valor }} </td>
                            <td> {{ $p->descricao }} </td>
                            <td> {{ $p->quantidade }} </td>

                            <td>
                                <a href="/produtos/mostra/{{ $p->id }}">
                                    <span class="glyphicon glyphicon-search"></span>
                                </a>
                                <a href="/produtos/remove/{{$p->id}}">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                <span></span>
                                <a href="produtos/edit/{{ $p->id }}">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
        @endif

    </div>
@endsection
