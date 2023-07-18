@extends('_layouts.basev2')

@section('titulo','Home')
@section('page', 'Ínicio')

@section('conteudo')
@php

$count = 0;
$count2 = 0;

@endphp
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    <a class="card style-7" href="#" target="_blank">
        <iframe width="100%" height="400" src="https://www.youtube.com/embed/u1c9NMb8NYI" title="As Trevas Estremecem, Cadeias Quebrar, Em Espírito em Verdade, Rendido Estou / Lukas Agustinho" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="card-footer">
            <h5 class="card-title mb-0">Apresentação do sistema</h5>
            <p class="card-text">Gabriel Gomes</p>
        </div>
    </a>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <ol class="carousel-indicators">


            @foreach($tips_array as $key => $tip)
            @if(count($tip[0]) >= 8)

            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $count2 }}" class="{{ $count2 < 1 ? 'active m' : '' }}"></li>

            @php

            $count2 += 1;

            @endphp

            @endif
            @endforeach

        </ol>
        <div class="carousel-inner">
            @foreach($tips_array as $key => $tip)

            @if(count($tip[0]) >= 8)

            <div class="carousel-item {{ $count < 1 ? 'active' : '' }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $tip[0][1] }} </h5>
                        <p class="mb-0">
                            <p style="margin-bottom: 0px;"><a href="{{ 0 }}" target="_blank">{{ $tip[0][2] ?? 0}}</a></p>
                            <p><a href="{{ 0 }}" target="_blank">{{ $tip[1][0] ?? 0}}</a></p>
                        </p>
                    </div>
                </div>
            </div>
            @php

            $count += 1;

            @endphp
            @endif
            @endforeach

        </div>



    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
            <strong>Operações disponíveis!</strong> <a href="{{ route('getSinais') }}"><u> Acessar agora </u></a>.</button>
        </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('assets/img/telegram.png') }}" alt="First slide">
                <div class="carousel-caption d-none d-sm-block">
                    <h3>Fique Ligado</h3>
                    <h5>Participe do nosso grupo do Telegram e receba noticias e alertas do sistema.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/whatsapp.png') }}" alt="Second slide">
                <div class="carousel-caption d-none d-sm-block">
                    <h3>Suporte via Whatsapp</h3>
                    <h5>Acesse nosso chat no Whatsapp e tire todas as suas dúvidas.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('assets/img/sorteio.png') }}" alt="Third slide">
                <div class="carousel-caption d-none d-sm-block">
                    <h3>Ganhe bindes</h3>
                    <h5>Participe dos soretios exclusivos para clientes Antired.</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>


<div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-one">
        <div class="widget-heading">
            <h5 class="">Top Operações</h5>

        </div>

        <div class="widget-content">


            @foreach ($top as $en)

            <div class="transactions-list t-info">
                <div class="t-item">
                    <div class="t-company-name">
                        <div class="t-icon">
                            <div class="avatar">
                                <span class="avatar-title">SP</span>
                            </div>
                        </div>
                        <div class="t-name">
                            <h4>{{ $en->casa01 }} & {{ $en->casa02 }}</h4>
                            <p class="meta-date">{{ $en->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                    <div class="t-rate rate-inc">
                        <p><span>+ {{$en->lucro}}%</span></p>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>

@endsection
