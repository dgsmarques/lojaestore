@extends('layouts.app')

@section('title', $produto->nome)

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <div>
                <img width="100%" class="img-fluid border" src="{{ $produto->imagem }}" alt="" />
            </div>
            <br />
            <h3>Descrição</h3>
            <p class="text-justify">{{ $produto->descricao }}</p>
        </div>
        <div class="col-4">
            <h2>{{ $produto->nome }}</h2>
            <h3>
                <small>por:</small> 
                <span class="text-success font-weight-bold">{{ $produto->preco }}</span>
            </h3>
            <a class="btn btn-success btn-lg btn-block" href="{{ route('adicionar-carrinho', $produto) }}"
                onclick="event.preventDefault();
                                document.getElementById('add-form').submit();">
                Comprar
            </a>

            <form id="add-form" action="{{ route('adicionar-carrinho', $produto) }}" method="POST" style="display: none;">
                @csrf
            </form>
            <br />
            <h5 class="card-title">Características</h5>
            <hr />
            <ul class="list-group">
                @foreach($produto->caracteristicas as $caracteristica)
                    <li class="list-group-item text-capitalize">
                        <i class="{{ $caracteristica->icon }}"></i>
                        <b>{{ $caracteristica->nome }}:</b>
                        <span>{{ $caracteristica->pivot->valor }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection