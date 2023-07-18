@extends('_layouts.basev2')

@section('titulo','Assistir Curso')
@section('diretorio', 'Área do aluno / Assistir Curso')

@section('conteudo')
    
    <style>
        .right.col-12.col-xl-7 {
            max-width: 100%;
            width: 100%;
            padding: 0px;
            margin-bottom: 10px;
        }  
        .right.col-12.col-xl-7 iframe {
            width: 100%;
            border-radius: 5px;
        }
    </style>
    
    @include('_sections.view-curso')

@endsection