    <style>
        .row {
            padding: 0px !important;
            margin: 0px;
            position: relative;
        }
        .row.layout-top-spacing {
            justify-content: center;
            margin-top: 20px;
        }
        .row.header-video {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            flex-wrap: nowrap;
            margin-bottom: 1rem;
        }
        .row.header-video div {
            width: calc(33.6% - 10px);
            padding: 0px;
        }
        .row.header-video .gp-btns {
            display: flex;
            align-items: center;
            justify-content: end;
            gap: 10px;
        }
        a.link-allaulas {
            background: #673AB7 !important;
            color: #fff !important;
            display: flex;
            height: 45px;
            padding: 10px;
            align-items: center;
            justify-content: center;
            max-width: 200px;
            margin: 0 auto;
            margin-left: 0px;
            gap: 10px;
            border-radius: 5px;
            font-weight: 600;
            font-size: 16px;
        }
        body.dark a.link-backmod {
            color: #cdcdcd;
        }
        a.link-backmod {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 16px;
            font-weight: 600;
            height: 45px;
            max-width: 180px;
            color: #000;
        }
        body.dark button {
            color: #cdcdcd;
            border-color: #cdcdcd;
        }
        .gp-btns button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 0px;
            height: 45px;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background: transparent;
            color: #3b3f5c;
            border: 1px solid #3b3f5c;
            font-size: 16px;
            font-weight: 600;
            white-space: nowrap;
        }
        .row video {
            border-radius: 5px;
            width: 100%;
            margin-bottom: 1rem;
        }
        .row.main .col-12.area-center {
            padding: 0px;
            padding-right: 1rem;
        }
        .row.main .area-aulas {
            padding: 0px;
        }
        body.dark .row.main .area-aulas {
            background: #1a1c2d;
            border: none;
            box-shadow: none;
        }
        body .row.main .area-aulas {
            background: #fff;
            border: 1px solid #e0e6ed;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }
        .row.main .area-aulas {
            border-radius: 5px;
            padding: 1rem;
        }
        .area-titulo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0px 1rem 0px 5px;
            margin-bottom: 1rem;
        }
        .area-titulo h6 {
            margin-bottom: 0px;
            font-weight: 700;
        }
        body.dark .area-likes {
           background: #1a1c2d;
        }
        body .area-likes {
           background: #e8e8e8;
        }
        .area-likes {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            padding: 5px 10px;
            border-radius: 30px;
        }
        .area-likes button {
            background: transparent;
            color: #673AB7 !important;
            border: none;
        }
        body.dark .area-notes textarea {
           background: #060818;
        }
        body .area-notes textarea {
            background: #e8e8e8;
        }
        .area-notes textarea {
            width: 100%;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            border: none;
            margin-bottom: 10px;
            color: #888ea8;
        }
        .area-notes textarea::placeholder {
            color: #888ea8;
        }
        .controls-note {
            display: flex;
            align-items: center;
            justify-content: end;
            font-size: 16px;
            gap: 10px;
            margin-bottom: 1rem;
        }
        .controls-note p, .title-coments p {
            margin-bottom: 0px !important;
        }
        .title-coments {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
        .title-coments span {
            font-size: 15px;
            opacity: .8;
        }
        body.dark .footer-notecoment {
           background: #1a1c2d;
           border: none;
        }
        body .footer-notecoment {
            background: #fff;
            border: 1px solid #e0e6ed;
        }
        .footer-notecoment {
            padding: 1rem 1rem 2rem;
            border-radius: 5px;
        }
        .controls-note p {
            font-size: 14px;
            font-weight: 700;
        }
        .controls-note p span {
            font-weight: 400;
        }
        .controls-note button {
            padding: 3px 15px;
            border-radius: 5px;
        }
        body.dark .controls-note button.cancel {
            color: #fff;
        }
        .controls-note button.cancel {
            background: transparent;
            border: 1px solid #cdcdcd;
            color: #000;
        }
        .controls-note button.salvar {
            background: #673AB7 !important;
            border: 1px solid #673AB7 !important;
            color: #fff !important;
        }
        .area-img-coment {
            min-width: 50px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .head-coment {
            display: flex;
            gap: 15px;
            font-size: 16px;
            font-weight: 600;
        }
        .cont-coment span {
            font-size: 14px;
            font-weight: 500;
        }
        .actions-coment {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-left: 65px;
            margin-top: 10px;
            font-size: 14px;
            font-weight: 600;
        }
        body.dark .actions-coment button {
            color: #888ea8;
        }
        .actions-coment button {
            background: transparent;
            border: none;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #3b3f5c;
        }
        .box-coments {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        body.dark .notes-dow, body.dark .notes-dow button {
            color: #cdcdcd;
        }
        body .notes-dow, body .notes-dow button {
            color: #3b3f5c;
        }
        .notes-dow {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            font-weight: 600;
            padding-bottom: 1rem;
            border-bottom: 1px solid #888ea8;
            margin-bottom: 1rem;
        }
        .notes-dow button {
            width: 35px;
            height: 35px;
            font-size: 10px;
            border: 1px solid #888ea8 !important;
            background: transparent;
            border-radius: 5px;
        }
        .notes-dow button svg, .anexos-down button svg {
            fill: #888ea8;
            width: 15px;
        }
        .anexos-down {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        body.dark p.title-anexos {
            color: #cdcdcd;
        }
        p.title-anexos {
            font-weight: 600;
            margin-bottom: 0px !important;
        }
        body.dark .anexos-down button {
            background-color: rgba(0, 0, 0, 0.2);
            color: #cdcdcd;
        }
        body.dark .anexos-down button:hover {
            transition: .3s;
            background-color: rgba(255, 255, 255, 0.1);
        }
        body .anexos-down button:hover {
            transition: .3s;
            background-color: rgba(0, 0, 0, 0.15);
        }
        .anexos-down button {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 10px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
        }
        body.dark .area-listaulas {
           background: rgba(0, 0, 0, 0.2);
        }
        .area-listaulas {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
            background: #e8e8e8;
            border-radius: 5px;
        }
        body.dark a.item-aula {
            border-color: #888ea8;
        }
        a.item-aula {
            padding: 1rem;
            border-bottom: 1px solid #888ea8;
            border-radius: 5px;
        }
        body.dark a.item-aula:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        a.item-aula:hover {
            transition: .3s;
            background: rgba(0, 0, 0, 0.1);
        }
        .item-aula p.title-aulas {
            margin-bottom: 0px;
            font-size: 12px;
        }
        .item-aula p.head-aulas {
            font-size: 14px;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .area-listaulas .item-aula:last-child {
            border-bottom: 0px;
        }
        span.dur-aulas {
            padding: 2px 5px;
            background: #888ea8;
            color: #fff;
            border-radius: 5px;
            font-size: 12px;
        }
        .descricao-aula {
            margin-bottom: 1rem;
            padding-left: 5px;
        }
        .menu-off {
            transition: .5s;
            max-width: 100% !important;
            flex: 0 0 100% !important;
            padding-right: 0px !important;
        }
        .area-aulas {
            transition: .5s;
        }

        i.fa-solid.fa-xmark.fechar {
            font-size: 16px !important;
        }

        @media (max-width: 1200px) {
            .area-center {
                padding-right: 0px !important;
            }
            .area-aulas {
                position: absolute;
                top: 0px;
                right: 0px;
                z-index: 1;
                border: 1px solid #888ea8;
            }
        }

        @media (max-width: 800px) {
            .row.header-video {
                flex-wrap: wrap !important;
                gap: 1rem;
                justify-content: space-between;
            }
            .row.header-video .gp-btns {
                width: 100%;
            }
            .row.header-video .links-a {
                width: auto;
            }
            a.link-allaulas {
                margin-left: auto;
                margin-right: 0px;
            }
        }

        @media (max-width: 450px) {
            a.link-allaulas, .row.header-video .gp-btns button  {
                height: 38px;
                font-size: 12px;
            }
            a.link-backmod {
                font-size: 12px;
                max-width: 110px;
                gap: 1rem;
            }
            .area-titulo {
                padding-right: 5px;
                gap: 1rem;
            }
            .area-img-coment {
                min-width: 35px;
                width: 35px;
                height: 35px;
            }
            .actions-coment {
                padding-left: 45px;
                font-size: 12px;
            }
            .title-coments span ,.cont-coment span {
                font-size: 12px;
            }
        }

        @media (max-width: 380px) {
            .controls-note p {
                display: none;
            }
        }

        @media (max-width: 360px) {
            .actions-coment button span {
                display: none;
            }
        }

        @media (max-width: 330px) {
            a.link-allaulas {
                flex-direction: column;
                gap: 5px;
                height: 50px;
                font-size: 11px;
            }
        }
    </style>



    <div class="row header-video">
        <div class="links-a">
            <a href="{{ route('allcourses', ['curso' => $modulo->course_id, 'modulo' => $modulo->id]) }}" class="link-backmod">
                <i class="fa-solid fa-arrow-left"></i>
                Voltar aos módulos
            </a>
        </div>

        <div class="links-a">
            <a href="{{ route('viewClasses', ['id' => $aula->course_id]) }}" class="link-allaulas">
                Ver todas as aulas
                <i class="fa-solid fa-film"></i>
            </a>


        </div>

        <div class="gp-btns">

            <button id="menuAulas" type="button">
                <i class="fa-solid fa-list-ul abrir"></i>
                <i class="fa-solid fa-xmark fechar" style="display: none"></i>
            </button>

            <a href="{{ route('videoSave', ['id' => $aula->id]) }}">
                <button type="button" style="background-color: {{ $salva ? '#a7b300': 'null' }};">
                    <i class="fa-regular fa-bookmark"></i>
                </button>
            </a>

            <a href="{{ route('videoFinish', ['id' => $aula->id]) }}">
                <button type="button" style="background-color: {{ $concluida ? '#00ab55': 'null' }};">
                    Concluir aula
                    <i class="fa-regular fa-circle-check"></i>
                </button>
            </a>
        </div>
    </div>

    <div class="row main">
        <div class="col-12 col-xl-9 area-center">
            @if($aula->type_video == 1)
            <div class="right col-12 col-xl-7">

                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="{{ $aula->url_video }}?h=c63a185811&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Exerc&amp;iacute;cio"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>

            </div>
            @elseif($aula->type_video == 2)
            <div class="right col-12 col-xl-7">
                <iframe width="980" height="600" src="{{ $aula->url_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            @endif


            <div class="area-titulo">
                <h6>{{ $aula->name }}</h6>

                <div class="area-likes">
                    <button type="button">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </button>
                    |
                    <button type="button">
                        <i class="fa-regular fa-thumbs-down"></i>
                    </button>
                </div>
            </div>

            <div class="descricao-aula">
                <h6>Conteúdo da aula</h6>

                <p class="mb-0">
                    {{ $aula->description }}
                </p>

                <textarea class="form-control" id="exampleFormControlTextarea1" rows="12">
                    {{ $aula->content }}
                </textarea>
            </div>
            <!--
            <div class="footer-notecoment">
                <div class="area-notes">
                    <p>Nova anotação</p>

                    <textarea name="" id="" cols="10" rows="5" placeholder="Anotação"></textarea>

                    <div class="controls-note">
                        <p>Tempo de vídeo: <span>05:20</span></p>

                        <button class="cancel" type="button">Cancelar</button>
                        <button class="salvar" type="button">Salvar</button>
                    </div>
                </div>

                <div class="area-coments">
                    <div class="title-coments">
                        <p>Comentários</p>

                        <span>5 Comentários</span>
                    </div>

                    <div class="box-coments">
                        <div class="item-coment">
                            <div class="row-coment">
                                <div class="head-coment">
                                    <div class="area-img-coment" style="background-image: url( {{ asset('cork/src/assets/img/product-3.jpg') }} )"></div>

                                    <div class="cont-coment">
                                        <p class="mb-0 user-coment">Isadora Camargo</p>

                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit rem quasi quaerat esse delectus voluptatibus laboriosam. Autem veniam, sunt velit magnam necessitatibus possimus quis quidem obcaecati, vel provident iste. Ullam.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="actions-coment">
                                <button type="button">
                                    <i class="fa-regular fa-heart"></i>

                                    <span>5 curtidas</span>
                                </button>

                                <button type="button">
                                    <i class="fa-solid fa-reply"></i>
                                    <span>Responder</span>
                                </button>

                                <span>2 dias</span>
                            </div>
                        </div>

                        <div class="item-coment">
                            <div class="row-coment">
                                <div class="head-coment">
                                    <div class="area-img-coment" style="background-image: url( {{ asset('cork/src/assets/img/product-3.jpg') }} )"></div>

                                    <div class="cont-coment">
                                        <p class="mb-0 user-coment">Isadora Camargo</p>

                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit rem quasi quaerat esse delectus voluptatibus laboriosam. Autem veniam, sunt velit magnam necessitatibus possimus quis quidem obcaecati, vel provident iste. Ullam.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="actions-coment">
                                <button type="button">
                                    <i class="fa-regular fa-heart"></i>

                                    <span>5 curtidas</span>
                                </button>

                                <button type="button">
                                    <i class="fa-solid fa-reply"></i>
                                    <span>Responder</span>
                                </button>

                                <span>2 dias</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>

        <div class="col-9 col-xl-3 area-aulas">
            <div class="notes-dow">
                <span>Suas anotações</span>

                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                    </svg>
                </button>
            </div>

            <div class="area-listaulas">

                @foreach($modulo->aulas as $aula_atual)
                <a href="{{ route('viewCourse', ['id' => $aula_atual->id, 'modulo' => $modulo->id]) }}" class="item-aula">
                    <p class="head-aulas">
                        <span class="n-aulas">{{ $aula_atual->name }}</span>

                        <span class="dur-aulas">00:05:03</span>
                    </p>
                    <p class="title-aulas">
                        {{ $aula_atual->description }}
                    </p>
                </a>
                @endforeach

            </div>

            <div class="anexos-down">
                <p class="title-anexos">Anexos</p>

                <!--
                <button class="item-anexo" type="button">
                    Aula 03 - Slides

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                    </svg>
                </button>

                <button class="item-anexo" type="button">
                    Aula 03 - Links

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                    </svg>
                </button>
                -->

            </div>
        </div>
    </div>

    <script>
        const botaoMenu = document.getElementById("menuAulas");
        const divAreaCenter = document.querySelector(".area-center");
        const divAreaAulas = document.querySelector(".area-aulas");

        const iconeAbrir = document.querySelector(".abrir");
        const iconeFechar = document.querySelector(".fechar");

        function verificarTamanhoDaTela() {
            const larguraTela = window.innerWidth || document.documentElement.clientWidth;

            if (larguraTela < 1200) {
                divAreaAulas.style.display = "none";
                divAreaCenter.classList.add("menu-off");

                iconeAbrir.style.display = "block";
                iconeFechar.style.display = "none";
            } else {
                divAreaAulas.style.display = "block";
                divAreaCenter.classList.remove("menu-off");

                iconeAbrir.style.display = "none";
                iconeFechar.style.display = "block";
            }

            window.removeEventListener("resize", verificarTamanhoDaTela);
        }

        verificarTamanhoDaTela();

        botaoMenu.addEventListener("click", function() {

            const estaOculta = divAreaAulas.style.display === "none";

            if (estaOculta) {
                divAreaAulas.style.display = "block";
                divAreaCenter.classList.remove("menu-off");

                iconeAbrir.style.display = "none";
                iconeFechar.style.display = "block";
            } else {
                divAreaAulas.style.display = "none";
                divAreaCenter.classList.add("menu-off");

                iconeAbrir.style.display = "block";
                iconeFechar.style.display = "none";
            }
        });

    </script>
