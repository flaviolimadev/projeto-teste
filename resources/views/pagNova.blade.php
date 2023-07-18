@extends('_layouts.basev2')

@section('titulo','Home')
@section('page', 'Ínicio')

@section('conteudo')
    <link href="{{ asset('cork/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/src/assets/css/dark/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

    <style>
        i.fa-solid.fa-check, i.fa-solid.fa-file {
            font-size: 18px;
            position: relative;
            top: -2px;
            left: 5px;
        }
        
        body .widget h5 {
            letter-spacing: 0px;
            font-size: 19px;
            display: block;
            color: #3b3f5c;
            font-weight: 600;
            margin-bottom: 0;
        }
        
        body.dark .widget h5 {
            letter-spacing: 0px;
            font-size: 19px;
            display: block;
            color: #e0e6ed;
            font-weight: 600;
            margin-bottom: 0;
        }
        
        body .card .card-title, body h5.card-title, .reload-contrato {
            color: #3b3f5c !important;
        }
        
        body.dark .card .card-title, body.dark h5.card-title, body.dark .reload-contrato {
            color: #e0e6ed !important;
        }
        
        .progress.box-dados {
            margin-bottom: 7px;
            border-radius: 16px !important;
            height: 20px !important;
        }
        
        .progress-bar.mb-0 {
            font-size: 14px !important;
            font-weight: 700 !important;
        }
        
        body.dark .progress.box-dados {
            background-color: #fff !important;
        }
        
        body #content {
            margin-top: 100px !important;    
        }
        
        body.dark .widget {
            position: relative;
            padding: 20px;
            border-radius: 6px;
            border: none;
            background: #0e1726;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: none;
            box-shadow: 0 0.1px 0px rgba(0, 0, 0, 0.002), 0 0.2px 0px rgba(0, 0, 0, 0.003), 0 0.4px 0px rgba(0, 0, 0, 0.004), 0 0.6px 0px rgba(0, 0, 0, 0.004), 0 0.9px 0px rgba(0, 0, 0, 0.005), 0 1.2px 0px rgba(0, 0, 0, 0.006), 0 1.8px 0px rgba(0, 0, 0, 0.006), 0 2.6px 0px rgba(0, 0, 0, 0.007), 0 3.9px 0px rgba(0, 0, 0, 0.008), 0 7px 0px rgba(0, 0, 0, 0.01);
        }

        body.dark .widget-chart-one .apexcharts-yaxis-title, body.dark .widget-chart-one .apexcharts-xaxis-title {
            font-weight: 600;
            fill: #bfc9d4;
        }

        body .widget-chart-one .apexcharts-yaxis-title, body .widget-chart-one .apexcharts-xaxis-title {
            font-weight: 600;
            fill: #888e88;
        }

        body.dark .widget {
            position: relative;
            padding: 20px;
            border-radius: 6px;
            border: none;
            background: #0e1726;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border: none;
            box-shadow: 0 0.1px 0px rgba(0, 0, 0, 0.002), 0 0.2px 0px rgba(0, 0, 0, 0.003), 0 0.4px 0px rgba(0, 0, 0, 0.004), 0 0.6px 0px rgba(0, 0, 0, 0.004), 0 0.9px 0px rgba(0, 0, 0, 0.005), 0 1.2px 0px rgba(0, 0, 0, 0.006), 0 1.8px 0px rgba(0, 0, 0, 0.006), 0 2.6px 0px rgba(0, 0, 0, 0.007), 0 3.9px 0px rgba(0, 0, 0, 0.008), 0 7px 0px rgba(0, 0, 0, 0.01);
        }

        body .widget {
            position: relative;
            padding: 20px;
            border-radius: 6px;
            border: none;
            background: #fff;
            border: 1px solid #e0e6ed;
            box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06);
        }

        body .widget-chart-one .widget-heading .task-action svg {
            color: #888ea8;
            width: 19px;
            height: 19px;
        }

        .row.dashnew {
            padding: 0px;
        }

        .row.layout-top-spacing {
            justify-content: center;
        }

        text#SvgjsText1009 {
            fill: #3b3f5c !important;
        }

        body.dark text#SvgjsText1009 {
            fill: #bfc9d4 !important;
        }

        h5.title-chart {
            padding-right: 1rem;
        }

        .title-chart span {
            font-size: 16px;
        }

        .card-footer.px-4.pt-0.border-0, .card-body.pt-3 {
            padding: 12px 20px !important;
        }

        /*
        body.dark .card-body.pt-3 {
            border-color: #0e1726;
        }

        body .card-body.pt-3 {
            border-bottom: 1px solid #e0e6ed;
        }
        */

        body.dark .card.bg-primary {
            background-color: #191e3a !important;
            border-color: #191e3a;
        }

        body .card.bg-primary {
            background-color: #fff !important;
            border-color: #e0e6ed;
        }

        body .card.bg-primary .card-title, body .card.bg-primary .card-text {
            color: #3b3f5c;
            font-weight: 600;
        }

        .card-body.pt-3 p.card-text {
            font-size: 1.25rem;
            font-weight: 700;
        }

        p.card-text.total {
            font-size: 1rem;
        }

        .btn-saque a {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            background: #58f073 !important;
            color: #fff !important;
            padding: 10px !important;
            width: 170px !important;
            border-radius: 5px !important;
            font-weight: 700 !important;
            text-shadow: 1px 1px rgba(0, 0, 0, 0.5) !important;
        }

        .area-btn-dados button {
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 0px 10px;
            font-weight: 600;
            border: none;
            font-size: 16px;
            background: transparent;
        }

        body.dark .area-btn-dados button {
            color: #e0e6ed;
        }

        body .area-btn-dados button {
            color: #3b3f5c;
        }

        .box-dados {
            transition: filter 0.5s;
        }

        .ocultar {
            display: flex;
        }

        .exibir {
            display: none;
        }
        
        .tags-wall h5.card-title {
            margin: 0px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .tags-wall .card-body {
            padding: 0px !important;
        }
        
        .tags-wall a {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px 10px;
        }
        
        .contracts {
            padding-left: 0px !important;    
        }
        
        @media (max-width: 990px) {
            .area-progress {
                padding: 15px !important;
            }
            .area-down {
                padding: 0px !important;
            }
        }
        
        @media (max-width: 770px) {
            .contracts {
                padding-left: 15px !important;
            }
        }
        
        @media (max-width: 600px) {
            

            .apexcharts-legend.right.position-top {
                top: 40px !important;
            }

            .apexcharts-legend-series {
                margin: 10px !important;
            }
        }

        @media (max-width: 450px) {
            .area-btn-dados.mb-2 h5 {
                font-size: 1rem;
            }

            .area-btn-dados button {
                padding: 0px 20px;
                font-size: 12px;
                white-space: nowrap;
            }
        }
    </style>

    <div class="row dashnew">
        <div class="col-lg-6" style="padding: 0px !important;">
            
            <div class="col-xl-12 col-lg-12 col-md-12  mb-3" style="padding: 0px !important;">
                <div class="card bg-primary">
                    <div class="area-btn-dados" style="margin: 12px 0px 0; padding: 0px; display: flex; align-items: center; justify-content: space-between;">
                        <h5 class="card-title" style="padding-left: 20px;margin-bottom: 0px;">Sua Carteira</h5>
                        
                        <button id="ocultarDados" onclick="ocultarDados()" class="ocultar" type="button">
                            Ocultar dados
            
                            <i class="fa-sharp fa-solid fa-eye-slash ocultar"></i>
                        </button>
            
                        <button id="exibirDados" onclick="exibirDados()" class="exibir" type="button">
                            Exibir dados
            
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                
                    <div class="card-body pt-3">
                        <h5 class="card-title mb-1 box-dados">R$ 14.070,00</h5>
                        
                        <a href="#" class="card-text box-dados">
                            Ver extrato
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 mb-3 tags-wall" style="padding: 0px !important;">
                <div class="card bg-primary">
                    <div class="card-body pt-3">
                        <a href="#">
                            <h5 class="card-title mb-1">
                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                Transferir
                            </h5>    
                        </a>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 mb-3 tags-wall" style="padding: 0px !important;">
                <div class="card bg-primary">
                    <div class="card-body pt-3">
                        <a href="#">
                            <h5 class="card-title mb-1">
                                <i class="fa-sharp fa-solid fa-plus"></i>
                                Novo contrato
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-12 col-lg-12 col-md-12 mb-3 tags-wall" style="padding: 0px !important;">
                <div class="card bg-primary">
                    <div class="card-body pt-3">
                        <a href="#">
                            <h5 class="card-title mb-1">
                                <i class="fa-sharp fa-solid fa-wallet"></i>
                                Financeiro
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 area-down">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6  mb-3">
                    <div class="card bg-primary">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-1">
                                Suas cotas
                                <i class="fa-solid fa-check"></i>
                            </h5>
        
                            <p class="card-text box-dados">
                                200
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6 col-lg-6 col-md-6  mb-3 contracts">
                    <div class="card bg-primary">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-1" style="display: flex;align-items: center;gap: 5px;margin-top: 0px;margin-bottom: 6px !important;">
                                Contratos
                                
                                <button type="button" class="reload-contrato" style="display: flex; align-items: center; justify-content: center; font-size: 20px; background: transparent; border: none; padding: 5px;">
                                    <i class="fa-sharp fa-solid fa-rotate-right"></i>
                                </button>
                            </h5>
                            
                            <div style="display: flex; align-items: center; justify-content: center; gap: 5px;">
                                <select class="form-select form-select-sm box-dados" style="font-size: 12px; font-weight: 700; min-width: 190px;">
                                    <option selected>Selecione o contrato</option>
                                    <option value="1">Contrato #777</option>
                                    <option value="2">Contrato #777</option>
                                    <option value="3">Contrato #777</option>
                                </select>
                                
                                <h5 class="card-title mb-1" style="display: flex; align-items: center; justify-content: center; margin: 0px !important;">
                                    <i class="fa-solid fa-file"></i>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-12 col-lg-12 col-md-12  mb-3 area-progress">
                    <div class="card bg-primary">
                        <div class="card-body pt-3">
                            <h5 class="card-title mb-1">Progresso do contrato</h5>
                            
                            <div class="progress box-dados">
                                <div class="progress-bar mb-0" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="padding: 0px !important;">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="title-chart box-dados">
                            Rentabilidades
                        </h5>
    
                        <div class="task-action">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="renvenue" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
    
                                <div class="dropdown-menu left" aria-labelledby="renvenue" style="will-change: transform;">
                                    <a class="dropdown-item" href="javascript:void(0);">Por dia</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Por mês</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Por ano</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="widget-content box-dados">
                        <div id="revenueMonthly"></div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    

    <script src="{{ asset('cork/src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('cork/src/assets/js/dashboard/dash_2.js') }}"></script>

    <script>
        function ocultarDados() {
            var divsDados = document.getElementsByClassName('box-dados');
            var ocultarButton = document.getElementById('ocultarDados');
            var exibirButton = document.getElementById('exibirDados');

            for (var i = 0; i < divsDados.length; i++) {
                divsDados[i].style.filter = 'blur(4px) brightness(3)';
            }

            ocultarButton.style.display = 'none';
            exibirButton.style.display = 'flex';
        }

        function exibirDados() {
            var divsDados = document.getElementsByClassName('box-dados');
            var ocultarButton = document.getElementById('ocultarDados');
            var exibirButton = document.getElementById('exibirDados');

            for (var i = 0; i < divsDados.length; i++) {
                divsDados[i].style.filter = 'none';
            }

            ocultarButton.style.display = 'flex';
            exibirButton.style.display = 'none';
        }
    </script>
@endsection