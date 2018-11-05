@extends('layouts.app') 

@section('title', 'Carrinho')

@section('content')
<div class="jumbotron jumbotron-fluid" style="padding-right: 0 !important; padding-left: 0 !important;">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="font-weight-bold text-uppercase">Total a pagar: {{ $totalCarrinho }}</h3>
            </div>
            <div class="col-4 text-right">
                <a class="btn btn-success btn-lg" href="{{ route('salvar-pedido') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('add-form').submit();">
                    Concluir Compra({{ $countCarrinho }})
                </a>

                <form id="add-form" action="{{ route('salvar-pedido') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>   
    </div>    
</div>

<div class="container">

    @if(count($carrinho) == 0)
        <p>Sem itens no carrinho</p>
    @else

        @foreach($carrinho as $item)
        <div class="" style="margin-bottom: 10px;">
            <div class="card">
                <div class="card-body card-carrinho">
                    <div class="row">
                        <div class="col-2 text-center card-carrinho-text">
                            <span>{{ $item->preco }}</span>
                        </div>
                        <div class="col-8">
                            <img src="{{ $item->imagem }}" class="border" width="100px">
                            <span>{{ $item->nome }}</span>
                        </div>
                        <div class="col-2 text-center card-carrinho-text">
                            <a class="" href="{{ route('remover-carrinho', $item) }}"
                                onclick="event.preventDefault();
                                                document.getElementById('remove-form').submit();">
                                <i class="fas fa-trash"></i>
                            </a>

                            <form id="remove-form" action="{{ route('remover-carrinho', $item) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    @endif
</div>
@endsection