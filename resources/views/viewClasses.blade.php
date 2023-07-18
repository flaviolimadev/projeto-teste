@extends('_layouts.basev2')

@section('titulo','Assistir Curso')
@section('diretorio', 'Área do aluno / Assistir Curso')

@section('conteudo')

<style>
    .card {
        border-radius: 7px !important;
        padding: 10px !important;
    }

    .card .card-header {
        border-bottom: none !important;
    }
    
    .card-header section > div {
        padding: 10px 0px !important;
        border-bottom: 0px !important;
    }
    
    .card .card-body {
        border-radius: 7px;
    }
    
    body .card .card-body {
        background: #fff !important;
    }
    
    body.dark .card .card-body {
        background: #1b2e4b !important;
    }
    
    body .card {
        color: #191e3a !important;
        background: #f0f1f2;
        border: 1px solid #e3e6ea;
    }
    
    body.dark .card {
        color: #e0e6ed !important;
    }
    
    body .card-header section > div.collapsed {
        color: #191e3a !important;
        font-weight: 600;
        font-size: 16px;
    }
    
    body.dark .card-header section > div.collapsed {
        color: #e0e6ed !important;
        font-weight: 600;
        font-size: 16px;
    }
    
    .card-header section > div:not(.collapsed) {
        font-size: 16px;
        font-weight: 700;
        color: #007bff !important;
    }
    
    body .widget-one_hybrid, body .widget-five {
        background: #dedede !important;
    }
    
    body.dark .widget-one_hybrid, body.dark .widget-five {
        background: #191e3a !important;
    }
    
    body .widget-one_hybrid .widget-heading .w-value, body .widget-one_hybrid .widget-heading h5, body .widget-five .widget-heading .w-title span {
        color: #3b3f5c;
    }
    
    body.dark .widget-one_hybrid .widget-heading .w-value, body.dark .widget-one_hybrid .widget-heading h5, body.dark .widget-five .widget-heading .w-title span {
        color: #fff;
    }
    
    .card-header section.mb-0.mt-0 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }
    
    body a.tag-play {
        color: #3b3f5c;
        font-weight: 600;
    }
    
    body.dark a.tag-play {
        color: #fff;
    }
    
    a.tag-back {
        background: #007bff !important;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 10px 20px;
        border-radius: 7px;
        max-width: 265px;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    
    @media (max-width: 991px) {
        #content .row.layout-top-spacing .col-lg-6.layout-spacing {
            padding-right: 15px !important;
            padding-left: 15px !important;
    }
</style>

<div class="col-12">
    <a href="#" class="tag-back">
        <i class="fa-solid fa-arrow-left"></i>
        Voltar para o Curso
    </a>    
</div>

<div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-five">

        <div class="widget-heading">

            <a href="javascript:void(0)" class="task-info">

                <div class="usr-avatar">
                    <span>FD</span>
                </div>

                <div class="w-title">

                    <h5>{{ $curso->name }}</h5>
                    <span>Aluno</span>

                </div>

            </a>

        </div>


        <div class="widget-content">

            <p>{{ $curso->description }}.</p>

            <div class="progress-data">

                <div class="progress-info">
                    <div class="task-count"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg><p>{{ count($concluidas) }} Concluidas</p></div>
                    <div class="progress-stats"><p>{{ number_format((count($concluidas) * 100 ) / count($aulas),2) }} %</p></div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ number_format((count($concluidas) * 100 ) / count($aulas),2) }}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </div>

            <div class="meta-info">

                <div class="due-time">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>Atualizada à 3 dias</p>
                </div>

            </div>


        </div>

    </div>

</div>


<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
    <div class="widget widget-one_hybrid widget-followers">
        <div class="widget-heading">
            <div class="w-title">
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="">
                    <p class="w-value">{{ count($aulas) }}</p>
                    <h5 class="">Aulas totais</h5>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="widget widget-one_hybrid widget-followers">
        <div class="widget-heading">
            <div class="w-title">
                <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="">
                    <p class="w-value">{{ count($salvas) }}</p>
                    <h5 class="">Aulas Salvas</h5>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
    <div class="simple-pill">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Aulas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Concluidas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Salvas</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div id="toggleAccordion" class="accordion">

                    @foreach ($aulas as $aula)


                    <div class="card">
                        <div class="card-header" id="...">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#defaultAccordion{{$aula->id}}" aria-expanded="false" aria-controls="defaultAccordionOne">
                                    {{$aula->name}}  <div class="icons"><svg> ... </svg></div>
                                </div>
                                
                                <a href="#" class="tag-play">
                                    Assistir
                                    <i class="fa-sharp fa-solid fa-circle-play"></i>   
                                </a>
                            </section>
                        </div>

                        <div id="defaultAccordion{{$aula->id}}" class="collapse" aria-labelledby="..." data-bs-parent="#toggleAccordion">
                            <div class="card-body">
                                {{$aula->description}}
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>

            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                @foreach ($concluidas as $aula)


                    <div class="card">
                        <div class="card-header" id="...">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#defaultAccordion{{$aula->id}}" aria-expanded="false" aria-controls="defaultAccordionOne">
                                    {{ $aula->aula->name}}  <div class="icons"><svg> ... </svg></div>
                                </div>
                                
                                <a href="#" class="tag-play">
                                    Assistir
                                    <i class="fa-sharp fa-solid fa-circle-play"></i>   
                                </a>
                            </section>
                        </div>

                        <div id="defaultAccordion{{$aula->id}}" class="collapse" aria-labelledby="..." data-bs-parent="#toggleAccordion">
                            <div class="card-body">
                                {{$aula->aula->description}}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                @foreach ($salvas as $aula)


                    <div class="card">
                        <div class="card-header" id="...">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#defaultAccordion{{$aula->id}}" aria-expanded="false" aria-controls="defaultAccordionOne">
                                    {{ $aula->aula->name}}  <div class="icons"><svg> ... </svg></div>
                                </div>
                                
                                <a href="#" class="tag-play">
                                    Assistir
                                    <i class="fa-sharp fa-solid fa-circle-play"></i>   
                                </a>
                            </section>
                        </div>

                        <div id="defaultAccordion{{$aula->id}}" class="collapse" aria-labelledby="..." data-bs-parent="#toggleAccordion">
                            <div class="card-body">
                                {{$aula->aula->description}}
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection
