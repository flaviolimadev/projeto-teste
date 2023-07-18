<!DOCTYPE html>
<html lang="pt-br">

<!-- Mirrored from designreset.com/cork/ltr/demo14/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 18:11:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> CTRLSER - @yield('titulo') </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/js/loader.js') }}"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widgets/modules-widgets.css') }}">
    <link href="{{ asset('assets/css/elements/miscellaneous.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/elements/breadcrumb.css ') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('plugins/lightbox/photoswipe.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/lightbox/default-skin/default-skin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/lightbox/custom-photswipe.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('plugins/sweetalerts/promise-polyfill.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/editors/quill/quill.snow.css') }}">
    <link href="{{ asset('assets/css/apps/mailbox.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('../assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/custom-clipboard.css') }}">
    <link href="{{ asset('assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/pricing-table/css/component.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/elements/alert.css') }}">

    <link href="{{ asset('assets/css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('plugins/editors/markdown/simplemde.min.css') }}">


    <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/apps/invoice.css') }}" rel="stylesheet" type="text/css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link href="{{ asset('assets/css/components/tabs-accordian/custom-accordions.css') }}" rel="stylesheet" type="text/css" />


    <!--  BEGIN CUSTOM STYLE FILE  -->


    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-step/jquery.steps.css') }}">
    <style>
        *::-webkit-scrollbar {
            width: 12px;
        }

        *::-webkit-scrollbar-track {
            background: #060818;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #191e3a;
            border-radius: 20px;
            border: 3px solid #060818;
        }

        .widget.widget-five span#advanced-paragraph {
            word-wrap: break-word;
        }

        .vp-center {
            background-color: #000 !important;
        }

        #formValidate .wizard > .content {min-height: 25em;}
        #example-vertical.wizard > .content {min-height: 24.5em;}

        #topbar .theme-brand li.theme-logo img {
            width: 100%;
            /* height: 159px; */
            max-width: 93%;
        }

        .navbar .nav-logo a.navbar-brand img {
            width: 100%;
            /* height: 40px; */
            max-width: 200px;
        }

        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: #191e3a00;
            border-radius: 0.25rem;
        }

        .breadcrumb-item.active {
            color: #b7b7b7;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #f5f5f5;
        }

        .member-details {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 5px;
        }

        .member-details h3 {
            margin-bottom: 0px !important;
        }

        img.tag-nacionalidade {
            width: 25px !important;
        }

        .member-image {
            margin: 0 auto;
        }

        button.btn-iframe {
            border: none;
            background: #1b55e2;
            color: #fff;
            width: 35px;
            height: 35px;
            border-radius: 5px;
            position: absolute;
            top: 0px;
            right: 0px;
            z-index: 1;
        }

        .modalIframe-title {
            background: #060818;
            display: flex;
            align-items: center;
            justify-content: end;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            padding: 10px 10px 5px;
            height: 30px;
        }

        .modalIframe-title .btn-close {
            opacity: 1;
            font-size: 14px;
        }

        .modalIframe-conteudo {
            background: #060818;
            width: 100%;
            height: 100%;
            padding: 5px 10px 10px;
        }

        .modalIframe-conteudo iframe {
            width: 100%;
            height: 100%;
        }

        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        p.tag-marcadagua-modal {
            margin: 0px;
            font-size: 12px;
            font-weight: 600;
            position: absolute;
            bottom: 0px;
            right: 0px;
            padding-right: 15px;
            width: 100%;
            text-align: end;
            opacity: .7;
        }

        .topo-aposta li:nth-child(1) div.title-casa, .topo-aposta li:nth-child(2) div.title-casa, .topo-aposta li:nth-child(3) div.title-casa {
            width: 80px;
        }

        .area-title-rede .card.component-card_9 {
            max-height: 680px !important;
        }

        img.tag-marcadaguaimg-modal {
            max-height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: .1;
        }

        .area-input-filter {
            display: flex;
            align-items: center;
            justify-content: end;
            gap: 10px;
            margin: 10px 0px;
        }

        .area-input-filter .input-search {
            position: relative;
            width: 100%;
        }

        .area-input-filter .input-search input {
            width: 100%;
            height: 44px;
            background: #191e3a;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            font-size: 14px;
            font-weight: 700;
            border: none;
            outline: none;
        }

        .area-input-filter .input-search input::placeholder {
            color: #fff;
        }

        .area-input-filter .input-search button {
            position: absolute;
            background: #1b2e4b;
            color: #fff;
            font-size: 16px;
            top: 0px;
            right: 0px;
            border: none;
            height: 44px;
            width: 35px;
            border-radius: 5px;
        }

        input[type="date"] {
            background-color: #191e3a;
            padding: 10px;
            color: #ffffff;
            font-size: 14px;
            border: none;
            outline: none;
            border-radius: 5px;
            font-weight: 700;
            text-align: center;
        }
        ::-webkit-calendar-picker-indicator{
            background-color: #ffffff;
            padding: 5px;
            cursor: pointer;
            border-radius: 3px;
        }

        span.date-input-tag {
            font-size: 14px;
            color: #fff;
            font-weight: 600;
        }

        .clipboard.copy-txt span {
            word-wrap: break-word;
        }

        @media (max-width: 575px) {
            .col-xl-12.col-lg-12.col-md-12.col-sm-12.col-12.layout-spacing {
                margin-top: 7.5rem;
            }
        }

        @media (max-width: 550px) {
            .area-input-filter {
                flex-direction: column;
            }
            .area-input-filter .data1, .area-input-filter .data2, .area-input-filter .data1 input, .area-input-filter .data2 input {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 380px) {
            .topo-aposta .odd-casa {
                text-align: center;
            }
            .topo-aposta .operar-casa {
                text-align: end;
                width: 75px;
            }
            .area-title-rede .card.component-card_9 {
                max-height: 680px !important;
            }
        }

        .bg-white {
            background-color: #060817!important;
        }

        .w-5 {

            display: none!important;
        }

        .hidden {

            margin-top: 2%;

        }


        .navbar .nav-logo a.navbar-brand img {
            width: 180px;
            height: 33px;
            /* max-width: 179px; */
        }
    </style>


    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.php"><img alt="logo" src="{{ asset('assets/img/mini_white.png') }}"></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Pesquizar...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/img/ca.png') }}" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="de" data-value="de" href="javascript:void(0);"><img src="{{ asset('assets/img/de.png') }}" class="flag-width" alt="flag"> German</a>
                            <a class="dropdown-item" data-img-value="jp" data-value="jp" href="javascript:void(0);"><img src="{{ asset('assets/img/jp.png') }}" class="flag-width" alt="flag"> Japanese</a>
                            <a class="dropdown-item" data-img-value="fr" data-value="fr" href="javascript:void(0);"><img src="{{ asset('assets/img/fr.png') }}" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="en" href="javascript:void(0);"><img src="{{ asset('assets/img/ca.png') }}" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute animated fadeInUp" aria-labelledby="messageDropdown">
                        <div class="">

                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">


                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="{{ asset('storage') }}/{{ $AuthUser->avatar }}" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6><span>Olá,</span> {{ explode(" ",$AuthUser->name)[0] }}</h6>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Meu perfil</a>
                            </div>

                            <div class="dropdown-item">
                                <a class="" href="{{ route('finance') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg> Extrato financeiros</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="{{ route('financeData') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> Dados financeiros</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="{{ route('accountSecurity') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Dados de acesso</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="{{ route('accountQuality') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg> Qualidade da conta</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="{{ route('logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sair</a>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="index.php">
                            <img src="{{ asset('assets/img/mini_white.png') }}" class="navbar-logo" alt="logo">
                        </a>
                    </li>

                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu ">
                        <a href="{{ route('home') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Ínicio</span>
                            </div>

                        </a>
                    </li>

                    <li class="menu single-menu ">
                        <a href="{{ route('marketplace') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                <span>Mercado</span>
                            </div>

                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="#affiliados" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Affiliados</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="affiliados" data-parent="#topAccordion">
                            <li>
                                <a href="{{ route('myAffiliates') }}"> Meus Afiliados </a>
                            </li>

                            <li>
                                <a href="{{ route('received') }}"> Solicitações recebidas </a>
                            </li>
                            <li>
                                <a href="{{ route('sends') }}"> Solicitações enviadas </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#produto" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Affiliados</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="produto" data-parent="#topAccordion">
                            <li>
                                <a href="{{ route('myAffiliates') }}"> Meus Afiliados </a>
                            </li>

                            <li>
                                <a href="{{ route('received') }}"> Solicitações recebidas </a>
                            </li>
                            <li>
                                <a href="{{ route('sends') }}"> Solicitações enviadas </a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu single-menu">
                        <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                                <span>Produtos</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>
                                <a href="{{ route('newProduct') }}"> Cadastrar produto </a>
                            </li>

                            <li>
                                <a href="{{ route('myProducts') }}"> Meus produtos </a>
                            </li>

                            <li>
                                <a href="{{ route('myCoproducoes') }}"> Co-Produções </a>
                            </li>

                            <li>
                                <a href="{{ route('myCompras') }}"> Minhas compras </a>
                            </li>


                        </ul>
                    </li>


                    <li class="menu single-menu ">
                        <a href="{{ route('finance') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                <span>Financeiro</span>
                            </div>

                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Indique</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>
                                <a href="{{ route('invite') }}"> Link de afiliado </a>
                            </li>

                            <li>
                                <a href="{{ route('inviteNetwork') }}"> Rede de afiliados </a>
                            </li>
                            <li>
                                <a href="{{ route('inviteEvolution') }}"> Plano de carreira </a>
                            </li>
                        </ul>
                    </li>



                    <li class="menu single-menu ">
                        <a href="#components">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-wifi"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                                <span>EAD</span>
                            </div>

                        </a>

                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                            <li>
                                <a href="{{ route('newCourse') }}"> Cadastrar curso </a>
                            </li>

                            <li>
                                <a href="{{ route('myCourse') }}"> Meus cursos </a>
                            </li>




                        </ul>
                    </li>





                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->
    </div>
    <!-- END MAIN CONTAINER -->

    <div id="content" class="main-content">
        <div class="layout-px-spacing" >

            <br>
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);"> APP </a></li>
                    <li class="breadcrumb-item active" aria-current="page">@yield('diretorio')</li>
                </ol>
            </nav>

            <div class="page-header">
                <div class="page-title">
                    <h3></h3>
                </div>
            </div>

            @if($AuthUser->status == 0)
                <div class="alert alert-warning mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                    <strong>Atenção!</strong> Algumas informações da sua conta precisam ser concluidas. <a href="#">Atualizar</a>
                </div>
            @endif

            @if($AuthUser->status < 2)
                <div class="alert alert-danger mb-4" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                    <strong>Cuidado!</strong> Sua conta ainda não foi verificada. <a href="#">Verificar</a>
                </div>
            @endif

             @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('conteudo')

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2022 <a target="_blank" href="https://designreset.com/">CTRLSER LTDA</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Feito com muito <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
    </div>



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_2.js') }}"></script>
    <script src="{{ asset('plugins/lightbox/photoswipe.min.js') }}"></script>
    <script src="{{ asset('plugins/lightbox/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('plugins/lightbox/custom-photswipe.js') }}"></script>
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('plugins/tagInput/tags-input.js') }}"></script>
    <script src="{{ asset('assets/js/users/account-settings.js') }}"></script>
    <script src="{{ asset('plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script src="{{ asset('assets/js/ie11fix/fn.fix-padStart.js') }}"></script>
    <script src="{{ asset('plugins/editors/quill/quill.js') }}"></script>
    <script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/apps/custom-mailbox.js') }}"></script>

    <script src="{{ asset('plugins/sweetalerts/custom-sweetalert.js') }}"></script>

    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('assets/js/forms/custom-clipboard.js') }}"></script>

    <script src="{{ asset('plugins/editors/markdown/simplemde.min.js') }}"></script>
    <script src="{{ asset('plugins/editors/markdown/custom-markdown.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/apps/invoice.js') }}"></script>


    <script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>





</body>

<!-- Mirrored from designreset.com/cork/ltr/demo14/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 18:12:22 GMT -->
</html>
