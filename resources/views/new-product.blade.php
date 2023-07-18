@extends('_layouts.basev2')

@section('titulo','Adicionar novo produto')
@section('page', 'Produtos / Cadastrar Produto')

@section('conteudo')

    <div class="row">
        @include('_sections.adicionar_produto')
    </div>

@endsection