@extends('_layouts.basev2')

@section('titulo','Editar Qualidade da Conta')
@section('diretorio', 'Dashboard / Editar Qualidade da conta')

@section('conteudo')
    <div class="row analytics">
        
        @include('_sections.qualidade_conta')

    </div>
@endsection