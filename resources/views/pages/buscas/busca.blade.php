@extends('layouts.app')

@section('title', 'Busca')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><small>Buscando por:</small> {{ $termo }}</h3>
            <hr />
            <div class="row">
            @foreach($produtos as $produto)
                <div class="col-sm-4">
                    <produto-component 
                        nome="{{ $produto->nome }}" 
                        preco="{{ $produto->preco }}" 
                        imagem="{{ $produto->imagem }}"
                        link="{{ route('produto', $produto->key ) }}">
                    </produto-component>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
