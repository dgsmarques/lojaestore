@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
<div class="px-12 py-12 pt-md-12 pb-md-12 mx-auto">
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
  </div>
</div>
@endsection