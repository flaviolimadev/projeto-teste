@extends('_layouts.basev2')

@section('titulo','Cursos')
@section('page', 'Área do Aluno / Curso ')

@section('conteudo')

    <style>
        .video-curso.row iframe {
            min-height: 400px;
            height: 100%;
            width: 100%;
            border-radius: 10px;
        }
        .row-curso {
            position: relative;
            padding: 0px;
            background: #000;
            border-radius: 5px;
            padding-bottom: 2rem;
        }
        .bg-videocurso {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset("storage") }}/{{ $modules->avatar }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center 0px;
            filter: blur(7px) opacity(0.4);
        }
        .video-curso.row .left {
            padding: 5rem 1.5rem 4rem 3rem;
        }
        .video-curso.row .right {
            padding: 5rem 3rem 4rem 1.5rem;
        }
        div#splide01 {
            padding: 0 2.5rem 2rem 2.5rem;
        }
        .video-curso.row .right video {
            border-radius: 5px;
            width: 100%;
        }
        .video-curso.row .left {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        .produtor-curso {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            color: #fff;
        }
        .avatar-produtor {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        body.dark p.descricao-curso {
            color: #fff;
            margin-bottom: 0px;
        }
        p.descricao-curso {
            margin-bottom: 0px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
        }
        a.btn-playcurso {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 1rem;
            font-weight: 600;
            color: #fff !important;
            background-color: #673AB7 !important;
            padding: 10px;
            border-radius: 5px;
            max-width: 220px;
        }
        a.btn-playcurso:hover {
            transition: .3s;
            color: #cdcdcd !important;
            background-color: #4f2d8d !important;
        }
        .splide__arrows.splide__arrows--ltr {
            position: absolute;
            width: 100px;
            top: 15px;
            right: 35px;
            font-size: 14px;
            z-index: 2;
        }
        .splide h5 {
            margin-bottom: 1rem;
            color: #e0e6ed !important;
        }
        .splide__slide img {
            border-radius: 10px;
        }
        .splide__slide a {
            display: block;
        }
        @media (max-width: 1200px) {
            .video-curso.row .left {
                padding: 2rem 3rem 1rem 3rem;
            }
            .video-curso.row .right {
                padding: 1rem 3rem 2rem 3rem;
            }
        }
        @media (max-width: 600px) {
            .video-curso.row .left {
                padding: 2rem 2.5rem 1rem 2.5rem;
            }
            .video-curso.row .right {
                padding: 1rem 2.5rem 2rem 2.5rem;
            }
            div#splide01 {
                padding: 0 2rem 2rem 2rem;
            }
            .img-videocurso {
                width: 200px;
            }
        }
        @media (max-width: 450px) {
            .splide h5 {
                padding-right: 70px;
                font-size: 20px;
                font-weight: 600;
            }
            .splide__arrows.splide__arrows--ltr {
                font-size: 11px;
                width: 75px;
            }
        }
        @media (max-width: 356px) {
            .splide__arrows.splide__arrows--ltr {
                top: 25px;
            }
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <div class="row-curso">
        <div class="bg-videocurso"></div>

        <div class="video-curso row">
            <div class="left col-12 col-xl-4">
                <img src="{{ asset('storage') }}/{{ $courses->avatar }}" class="img-videocurso" alt="logo curso" width="250px">

                <p class="descricao-curso">
                    {{ $modules->name }}<br>
                    {{ $modules->description }}
                </p>

                <div class="produtor-curso">
                    <div class="avatar-produtor" style="background-image: url( {{ asset('storage') }}/{{ $courses->user->avatar }} )"></div>
                    <span>{{ $courses->user->name }}</span>
                </div>

                <a href="{{ route('viewCourse', ['id' => 1, 'modulo' => $modules->id]) }}" class="btn-playcurso">
                    <i class="fa-sharp fa-regular fa-circle-play"></i>

                    Começar agora
                </a>
            </div>
            
            @if($modules->type_video == 1)
            <div class="right col-12 col-xl-8">

                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="{{ $modules->url_video }}?h=c63a185811&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Exerc&amp;iacute;cio"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

            </div>
            @else
            <div class="right col-12 col-xl-8">
                <iframe width="560" height="315" src="{{ $modules->url_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endif
        </div>

        <div class="splide" aria-label="Splide">
            <h5>Trilha de métodos</h5>
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach( $courses->modulos as $modulo_atual )
                    <li class="splide__slide">
                        <a href="{{ route('allcourses', ['curso' => $courses->id, 'modulo' => $modulo_atual->id]) }}">
                            <img src="{{ asset('storage') }}/{{ $modulo_atual->avatar }}">
                        </a>
                    </li>
                    @endforeach

                </ul>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <script>
        var splide = new Splide( '.splide', {
            type   : 'loop',
            perPage: 4,
            gap    : 15,
            perMove: 1,

            breakpoints: {
                1400: {
                    perPage: 2,
                    gap: 10,
                },
                450: {
                    perPage: 1,
                    gap: 0,
                }
            }
        } );

        splide.mount();
    </script>
@endsection
