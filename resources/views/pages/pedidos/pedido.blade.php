@extends('layouts.app')

@section('title', 'Meus Pedidos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(count($pedidos) == 0)
                <p class="text-center">Você não tem pedidos =/</p>
            @else
                @foreach($pedidos as $pedido)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h4>Total: {{ $pedido->total }}</h4>
                                <h5>Quantidade de Produtos: {{ $pedido->totalProdutos() }}</h5>
                                <span>{{ $pedido->created_at }}</span>
                            </div>
                            <div class="col-8 text-right">
                                <a class="p-2 btn btn-outline-primary text-right" href="{{ route('pedido-detalhe', $pedido) }}">
                                    Detalhes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                @endforeach
         @endif    
        </div>
    </div>
</div>
@endsection
