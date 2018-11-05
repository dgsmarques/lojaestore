@extends('layouts.app')

@section('title', $categoria->nome)

@section('content')
<div class="px-12 py-12 pt-md-12 pb-md-12 mx-auto">
  <div class="container">
    <h1>{{ $categoria->nome }}</h1>
    <hr />
    <div class="row">
      @foreach($categoria->produtos as $produto)
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
@endsection