@extends('_layouts.basev2')

@section('titulo','Produto')
@section('diretorio', 'marketplace / produto')

@section('conteudo')
    <style>
        body.dark .descricao-produto .card {
            background: #191e3a;
        }
        .descricao-produto .card {
            border: 1px solid #3b3f5c;
            box-shadow: none;
        }
        .card-header section div{
            border-bottom: 0px !important;
        }
        .card-header section div p {
            margin-bottom: 0px !important;
        }
    </style>
    
    @include('_sections.produto')
@endsection

