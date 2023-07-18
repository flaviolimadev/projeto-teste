@extends('_layouts.basev2')

@section('titulo','Estrategias')
@section('diretorio', 'Estrategias')

@section('conteudo')
<style>
    .itens-historico {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .title-historico {
        background: #cdcdcd;
        font-weight: 700;
        text-transform: uppercase;
        padding: 1rem;
        font-size: 1rem;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        gap: 1rem;
    }

    .title-historico p, body.dark .title-historico p {
        margin-bottom: 0px;
    }

    body.dark .title-historico, body.dark .footer-historico {
        background: #242535;
    }

    body.dark .title-historico p {
        color: #fff;
    }

    body.dark .conteudo-historico {
        background: #171721;
    }

    body.dark .conteudo-historico {
        top: 0px;
        border-radius: 10px;
    }

    .title-historico:hover {
        transition: .5s;
        background-color: rgba(0, 0, 0, 0.25);
    }

    .title-historico p:nth-child(2) {
        width: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        background: #00c275;
        border: 1px solid #008b54;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        text-shadow: 0px 1px 3px #000;
        box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
    }

    .title-historico p:nth-child(2):hover {
        transition: .3s;
        background: #008b54;
    }

    .conteudo-historico {
        background: #c0c0c0;
        position: relative;
        top: -8px;
        border-radius: 0px 0px 10px 10px;
    }

    .casas-historico {
        padding: 1rem 1rem 0;
    }

    .conteudo-historico li {
        display: flex;
        flex-direction: column;
        list-style: none;
        margin-bottom: 1rem;
    }

    .conteudo-historico li p {
        margin-bottom: 0px;
        font-weight: 600;
    }

    .conteudo-historico li p:nth-child(1) {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-weight: 700;
        text-transform: uppercase;
    }

    .conteudo-historico li p:nth-child(1) span:nth-child(1)::before {
        content: 'â€¢';
        position: relative;
        margin-right: 3px;
        top: -1px;
        font-weight: 600;
    }

    .footer-historico {
        display: flex;
        justify-content: space-between;
        padding: 1rem;
        background: #cdcdcd;
        border-radius: 0px 0px 10px 10px;
    }

    .footer-historico li {
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0px;
    }

    .footer-historico li:nth-child(1) {
        border-right: 1px solid #a9a9a9;
    }
    </style>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row widget-statistic">
        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <div class="">
                            <p class="w-value">R$ {{ $estrategia->balance/100 }} + R$ {{ array_sum(json_decode($data_value)) }}</p>
                            <h5 class="">Banca</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <div class="">
                            <p class="w-value">{{ $tips->sum('lucro') }}%</p>
                            <h5 class="">Lucro</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                        </div>
                        <div class="">
                            <p class="w-value">{{ sprintf("%02d", count($tips)) }}</p>
                            <h5 class="">Operaçoes</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div id="s-line-area"></div>
        </div>
        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($tips as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa_01 }}</span>
                                        <span>{{ $tip->odd_01 }}</span>
                                    </p>
                                    <p>{{ $tip->mercado_01 }}</p>
                                    <p>
                                        <span>{{ $tip->evento }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa_02 }}</span>
                                        <span>{{ $tip->odd_02 }}</span>
                                    </p>
                                    <p>{{ $tip->mercado_02 }}</p>
                                    <p>
                                        <span>{{ $tip->evento }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ {{ number_format($tip->balance/100,2,',','.') }}</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((($tip->balance/100) * floatval(str_replace(",", ".", $tip->lucro))) / 100) + ($tip->balance/100), 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('cork/src/plugins/src/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('cork/src/assets/js/dashboard/dash_2.js') }}"></script>
<script>

var sLineArea = {
    chart: {
        height: 350,
        type: 'area',
        toolbar: {
          show: false,
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth'
    },
    series: [{
        name: 'Lucro',
        data: JSON.parse('{!! $data_value !!}')
    }],

    xaxis: {
        type: 'string',
        categories: JSON.parse('{!! $data_grafico !!}'),
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-line-area"),
    sLineArea
);

chart.render();

</script>
@endsection







