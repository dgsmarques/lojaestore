@extends('layouts.app')

@section('title', 'Meus Pedidos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h2>Total: {{ $pedido->total }}</h2>
           <h2>Quantidade de Produtos: {{ $pedido->totalProdutos() }}</h2>
           <h2>Informações:</h2>
           {{ auth()->user()->name }}<br />
           {{ auth()->user()->email }}<br />
           {{ auth()->user()->telefone }}<br />
           {{ auth()->user()->data_nascimento }}<br />
           {{ auth()->user()->logardouro }} {{ auth()->user()->numero }} {{ auth()->user()->complemento }}<br />
           {{ auth()->user()->cidade }} - {{ auth()->user()->estado }} - {{ auth()->user()->pais }}
           <hr />
           @foreach($pedido->produtos as $item)
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
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
