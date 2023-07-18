@extends('_layouts.basev2')

@section('titulo','Mercado')
@section('page', 'Mercado')

@section('conteudo')
    <style>
        body .component-card_9 h5.card-title {
            color: #3b3f5c !important;
        }
        body.dark .component-card_9 h5.card-title {
            color: #e0e6ed !important;
        }
    </style>
    
    @include('_sections.busca_categoria')
    <div class="row analytics">
        @include('_sections.produtos')
    </div>
@endsection

