@extends('_layouts.basev2')

@section('titulo','Área do usuário')
@section('diretorio', 'Dashboard / Meu Perfil')

@section('conteudo')

    <div class="row analytics">
        <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
            @include('_sections.profile_info')
        </div>

        <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
            <div class="bio layout-spacing ">
                @include('_sections.link_indicacao')

                @include('_sections.bio')
            </div>
        </div>

        
    </div>
@endsection

