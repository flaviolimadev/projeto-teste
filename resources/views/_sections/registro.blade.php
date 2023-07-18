    <style>
        .form-form, section.log-new {
            width: 100%;
        }
        .form-form .form-form-wrap {
            max-width: 100%;
        }
        section.log-new {
            min-height: 100vh;
            display: flex;
        }
        .log-left, .log-right {
            width: 50%;
        }
        .log-left {
            padding: 8rem 2rem 2rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .log-left a {
            max-width: 200px;
        }
        .log-right {
            padding: 8rem 5rem 5rem;
            background-color: #f7f9fa;
            box-shadow: 0 16px 40px -8px rgba(0,0,0,.12);
        }
        .input-box-log {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
            position: relative;
        }
        .input-box-log label {
            color: #353A40;
            font-size: 1rem;
            font-weight: 500;
        }
        .input-box-log input {
            padding: 12.39px;
            border: 1px solid #c9ced4;
            border-radius: 5px;
            color: #353A40;
            font-weight: 600;
        }
        .esq-senha {
            text-align: end;
        }
        .esq-senha a {
            color: #6c757d;
            font-weight: 500;
            font-size: .9rem;
        }
        .btn-log {
            display: flex;
            justify-content: center;
            margin: 1.5rem 0;
        }
        .btn-log button {
            border: none;
            border-radius: 5px;
            background-color: #009d43;
            color: #fff;
            font-weight: 600;
            height: 53px;
            width: 100%;
            font-size: 1rem;
        }
        .btn-log button:hover {
            transition: .3s;
            background-color: #006e2f;
        }
        .link p {
            text-align: center;
            color: #353A40;
            font-weight: 500;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .link p a {
            color: #355cc0;
            text-decoration: underline;
        }
        p.pref-log {
            text-align: center;
            color: #353A40;
            font-weight: 500;
            font-size: .8rem;
            margin-bottom: 1rem;
        }
        ul.links-log {
            padding: 0px;
            margin: 0px;
            margin-top: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        ul.links-log li {
            list-style: none;
        }
        ul.links-log li a {
            color: #6b7480;
            font-size: .75rem;
            font-weight: 500;
        }
        ul.links-log li a:hover {
            transition: .3s;
            text-decoration: underline;
        }
        .footer-log {
            display: flex;
            flex-direction: column;
        }
        button.btn-face-log {
            background: #fff;
            color: #355cc0;
            border: 1px solid #355cc0;
            padding: 10px;
            border-radius: 5px;
            max-width: 300px;
            margin: 0 auto;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        button.btn-face-log svg {
            width: 25px;
            height: 25px;
        }
        button.btn-face-log:hover {
            transition: .3s;
            border-color: #2d4373;
            color: #2d4373;
        }
        .alert-danger ul {
            margin: 0px;
        }
        .alert.alert-danger {
            margin-bottom: 0px !important;
            margin-top: 1rem;
        }
        button.btn-versenha-log {
            height: 53px;
            width: 40px;
            border: none;
            background: transparent;
            position: absolute;
            right: 0px;
            bottom: 0px;
            color: #848a91;
        }
        button.btn-versenha-log:hover {
            color: #355cc0;
        }
        button.btn-versenha-log svg {
            width: 23px;
            height: 23px;
        }
        .form-check-label {
            color: #353A40;
            font-weight: 600;
        }

        .form-check a {
            color: #355cc0;
        }
        .modal-content.conteudo-contrato {
            padding: 1rem;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-height: 500px;
            overflow-y: auto;
        }
        .modal-content.conteudo-contrato .title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
        }
        .modal-content.conteudo-contrato .title button {
            opacity: 1;
        }
        .modal-content.conteudo-contrato .title button:hover {
            opacity: .5;
            transition: .3s;
        }
        .modal-content.conteudo-contrato p {
            text-align: justify;
            font-size: 14px;
            color: #fff;
            font-weight: 500;
        }

        @media (max-width: 850px) {
            .log-left {
                display: none;
            }
            .log-right {
                width: 100%;
                padding: 5rem 2rem 2rem;
            }
        }

        @media (max-width: 410px) {
            .link p {
                display: flex;
                flex-direction: column;
            }
        }
    </style>

    <section class="log-new">
        <div class="log-left">
            <a href="#">
                <img src="{{ asset('assets/img/surebet-logo.png') }}" alt="Logo" width="200px">
            </a>

            <h3>Educação.</h3>

            <h5>Os melhores conteúdos sobre o mercado esportivo na palma da sua mão.</h5>
        </div>

        <div class="log-right">
            <div class="alert alert-primary mb-12" role="alert" id="error" style="display:none;">
                <strong>Erro!</strong>
                <span id="error_text">usuário ou senha invalidos.</span>
            </div>

            <form class="log-form" action="{{ route('register_required') }}" method="post">
                @csrf
                <div class="input-box-log">
                    <label for="name">Nome completo</label>
                    <input id="name" name="name" type="text" placeholder="Informe seu nome completo" value="{{ old('name') }}">
                </div>

                <input id="name" name="idds" type="text" placeholder="Informe seu nome completo" value="{{ old('idds') ?? $id }}" style="display:none">

                <div class="input-box-log">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" placeholder="Email" value="{{ old('email') }}">
                </div>

                <div class="input-box-log">
                    <label for="password">Senha</label>
                    <input id="password" name="password" type="password" placeholder="Escolha uma senha" value="{{ old('password') }}">

                    <button type="button" class="btn-versenha-log" onclick="mostrarSenha('password')">
                        <svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg>
                    </button>
                </div>

                <div class="input-box-log">
                    <label for="password_confirmation">Repetir senha</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repita sua senha" value="{{ old('password_confirmation') }}">

                    <button type="button" class="btn-versenha-log" onclick="mostrarSenha('password_confirmation')">
                        <svg class="svg-inline--fa fa-eye fa-w-18" aria-hidden="true" focusable="false" data-prefix="far" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"></path></svg>
                    </button>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="contrato">

                    <label class="form-check-label" for="contrato">
                        <span>Eu aceito os <a href="#modalContrato" data-bs-toggle="modal">termos e condições.</a></span>
                    </label>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="btn-log">
                    <button type="submit">Continuar</button>
                </div>
            </form>

            <div class="footer-log">
                <div class="link">
                    <p>
                        Já tem uma conta ? <a href="{{ route('login') }}">Acesse aqui</a>
                    </p>
                </div>

                <ul class="links-log">
                    <li>
                        <a href="#">Suporte</a>
                    </li>

                    —

                    <li>
                        <a href="#">Termos de Uso</a>
                    </li>

                    —

                    <li>
                        <a href="#">Política de Privacidade</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Modal Contrato -->
    <div class="modal fade" id="modalContrato" tabindex="-1" aria-labelledby="modalContrato" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content conteudo-contrato">
                <div class="title">
                    <span>Termos e Condições</span>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <p>
                    Este Acordo de Uso Exclusivo da Triunfo Zero Red tem como objetivo esclarecer as regras de uso do
                    serviço adquirido na Triunfo Zero Red e garantir o cumprimento das leis brasileiras, incluindo a Lei
                    Geral de Proteção de Dados (LGPD) e a legislação que regulamenta a proteção de direitos autorais e
                    de propriedade intelectual.
                </p>
                <p>
                    Ao se cadastrar e adquirir nosso serviço na Triunfo Zero Red, você concorda em respeitar os termos
                    deste Acordo de Uso Exclusivo.
                </p>
                <p>
                    O serviço adquirido é destinado exclusivamente para uso pessoal do comprador e não pode ser
                    revendido ou compartilhado com terceiros, a menos que haja autorização expressa por escrito da nossa
                    empresa.
                </p>
                <p>
                    Qualquer violação deste acordo resultará no bloqueio imediato da Licença Adquirida e do Login de
                    Usuário sem reembolso do valor do serviço e das Comissões provenientes dos ganhos de rede.
                </p>
                <p>
                    Além disso, nos reservamos o direito de tomar medidas legais cabíveis contra qualquer pessoa ou
                    empresa que viole os termos deste acordo, incluindo, mas não se limitando, a aplicação das sanções
                    previstas na Lei 9.610/98 que regulamenta a proteção dos direitos autorais e na Lei 12.965/2014, que
                    dispõe sobre a proteção de direitos de propriedade intelectual na Internet.
                </p>
                <p>
                    Todo conteúdo produzido ou disponibilizado no site da Triunfo Zero Red é de uso exclusivo da empresa
                    e não pode ser reproduzido, distribuído ou utilizado de qualquer forma sem autorização por escrito.
                </p>
                <p>
                    Em relação à proteção de dados pessoais, nos comprometemos a garantir o sigilo e a proteção dos
                    dados coletados dos nossos usuários, de acordo com as disposições da LGPD. As informações coletadas
                    serão utilizadas exclusivamente para a prestação do serviço e não serão compartilhadas com
                    terceiros, a menos que haja autorização expressa do usuário ou quando exigido por lei.
                </p>
                <p>
                    Este acordo também é válido e eficaz a partir do aceite digital prestado pelo usuário, em
                    conformidade com o disposto na Lei 13.709/2018, que regulamenta o uso de contratos eletrônicos no
                    Brasil. Ao clicar em “Concordo” durante o processo de cadastro, você confirma ter lido e aceito os
                    termos deste contrato.
                </p>
                <p>
                    Política de Cancelamento da Licença e Reembolso: De acordo com a o Artigo 49 do Código do
                    Consumidor, qualquer cliente tem até 7 dias úteis para solicitar o cancelamento da sua compra e
                    solicitar o reembolso. Mediante isso, e caso ocorra essa situação a TZR devolverá o valor da licença
                    ao cliente e posteriormente descontará todas as comissões pagas dos uplines acima, evitando assim,
                    prejuízo para o Cliente e evitando também prejuízo para a Empresa Triunfo Zero Red.
                </p>
            </div>
        </div>
    </div>

    <script>
        function mostrarSenha(idCampoSenha) {
            var campoSenha = document.getElementById(idCampoSenha);

            if (campoSenha.type === "password") {
                campoSenha.type = "text";
            } else {
                campoSenha.type = "password";
            }
        }

        const btnLog = document.querySelector('.btn-log button');
        const checkboxContrato = document.querySelector('#contrato');

        btnLog.addEventListener('click', function(event) {
            if (!checkboxContrato.checked) {
                event.preventDefault();
                alert('Por favor, aceite os termos e condições.');
            }
        });
    </script>
