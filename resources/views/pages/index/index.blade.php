@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="px-12 py-12 pt-md-12 pb-md-12 mx-auto">
  <img src="https://staticmobly.akamaized.net/cms/marketing/campanha/2018/outubro/20181030-ApostasComercial-Desktop-3.jpg" class="img-fluid banner" alt="Responsive image">
  
  <div class="container">
    <div class="row">
      @foreach($categorias as $categoria)
          <div class="col-sm-4">
              <categoria-component
                  cor="{{ $categoria->color }}"
                  nome="{{ $categoria->nome }}"
                  link="{{ route('categorias', $categoria->key ) }}">                
              </categoria-component>
          </div>
      @endforeach
    </div>
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
@endsection