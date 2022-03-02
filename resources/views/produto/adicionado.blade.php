@extends('layout.principal')

@section('conteudo')
    @if (empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else
        <h1>Listagem de produtos</h1>
        <table class="table table-striped ...">
            @foreach ($produtos as $p)
                <tr>
                    <td> {{ $p->nome }} </td>
                    <td> {{ $p->valor }} </td>
                    <td> {{ $p->descricao }} </td>
                    <td> {{ $p->quantidade }} </td>

                    <td>
                        <a href="/produtos/mostra?id={{ $p->id }}"> Visualizar <span
                                class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    <h4>
        <span class="label label-danger pull-right">
            um ou menos itens no estoque
        </span>
    </h4>

    <div class="alert alert-success">
        <strong>Sucesso!</strong>
        O produto old{{'nome'}} foi adicionado.
    </div>

@endsection
