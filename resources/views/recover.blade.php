@extends('_layouts.auth')

@section('conteudo')
    
    <style>
        .link-back {
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #c9ced4;
        }
        .link-back a {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #6b7480;
            font-size: 1rem;
            font-weight: 500;
        }
        .link-back a:hover {
            transition: .3s;
            color: #353A40;
        }
        .title-sen, .subtitle-sen {
            color: #353A40;
            font-size: 1rem;
            font-weight: 500;
        }
        p.title-sen {
            margin-bottom: 1rem;
            font-weight: 600;
        }
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
            padding: 9rem 2rem 2rem 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .log-left a {
            max-width: 200px;
        }
        .log-right {
            padding: 9rem 5rem 5rem;
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <section class="log-new">
        <div class="log-left">
            <a href="#">
                <img src="{{ asset('logobetsoccer.png') }}" alt="Logo" width="200px">
            </a>
    
            <h3>Nunca foi tão fácil transformar o que você sabe em um negócio digital.</h3>
    
            <h5>Vamos te ajudar desde os primeiros passos.</h5>
        </div>
        
        <div class="log-right">
            <div class="link-back">
                <a href="{{ route('login') }}">
                    <i class="fa-sharp fa-solid fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
            
            <p class="title-sen">Esqueceu sua senha?</p>
            
            <p class="subtitle-sen">Preencha abaixo seu endereço de email para receber as instruções necessárias e criar uma nova senha na Surebet.</p>
            
            <form class="log-form" action="" method="">
                @csrf
                
                <div class="input-box-log">
                    <input type="email" name="email" id="email" placeholder="Seu email" value="{{ old('email') }}">
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
    
                @if (isset($_GET['error']))
                    <div class="alert alert-danger">
                        <ul>
                            <li>Email ou Senha não correspondem!</li>
                        </ul>
                    </div>
                @endif
    
                <div class="btn-log">
                    <button type="submit">Recuperar</button>
                </div>
            </form>
            
            <div class="footer-log">
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
    
@endsection
