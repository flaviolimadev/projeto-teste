@extends('_layouts.basev2')

@section('titulo','Área de indicações')
@section('page', 'Indique / Link de indicação')

@section('conteudo')
    @include('_sections.link_indicacao')
    
    @include('_sections.diretos')
@endsection