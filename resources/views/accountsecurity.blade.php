@extends('_layouts.basev2')

@section('titulo','Dados de acesso da conta')
@section('diretorio', 'Dashboard / Dados de Acesso')

@section('conteudo')
    <div class="row analytics">
        
        @include('_sections.dados_acesso')

    </div>
@endsection