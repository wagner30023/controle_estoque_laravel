@extends('layout.principal')
<style>
 /**/   .single {
        padding: 30px 15px;
        margin-top: 40px;
        background: #fcfcfc;
        border: 1px solid #f0f0f0;
    }

    .single h3.side-title {
        margin: 0;
        margin-bottom: 10px;
        padding: 0;
        font-size: 20px;
        color: #333;
        text-transform: uppercase;
    }

    .single h3.side-title:after {
        content: '';
        width: 60px;
        height: 1px;
        background: #ff173c;
        display: block;
        margin-top: 6px;
    }

    .single ul {
        margin-bottom: 0;
    }

    .single li a {
        color: #666;
        font-size: 14px;
        text-transform: uppercase;
        border-bottom: 1px solid #f0f0f0;
        line-height: 40px;
        display: block;
        text-decoration: none;
    }

    .single li a:hover {
        color: #ff173c;
    }

    .single li:last-child a {
        border-bottom: 0;
    }

</style>
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- Category -->
                <div class="single category">
                    <h3 class="side-title">  produto: {{$p->nome}} </h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" title=""> Preço: <span class="pull-right">R$ {{ $p->valor }}</span></a></li>
                        </li>
                        <li>
                            <a href="" title=""> Descrição: <span class="pull-right">{{ $p->descricao }}</span></a></li>
                        </li>
                        <li>
                            <a href="" title="">  Quantidade em estoque: : <span class="pull-right"> {{ $p->quantidade }}</span></a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
