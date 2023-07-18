@extends('_layouts.basev2')

@section('titulo','Estrategias')
@section('diretorio', 'Estrategias')

@section('conteudo')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row widget-statistic">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-followers">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                        </div>
                        <div class="">
                            <p class="w-value">{{ sprintf("%02d", count($estragias)) }}</p>
                            <h5 class="">Estrategias</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-referral">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <div class="">
                            <p class="w-value">BRL {{ number_format($estragias->sum('balance')/100,2,',','.') }}</p>
                            <h5 class="">Banca</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div class="widget widget-one_hybrid widget-engagement">
                <div class="widget-heading">
                    <div class="w-title">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </div>
                        <div class="">
                            <p class="w-value">{{ sprintf("%02d", count($operacoes)) }}</p>
                            <h5 class="">Operações</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
            <div id="s-bar"></div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-table-two">

                <form action="#" method="get">
                    <div class="area-input-filter">

                        <div class="input-search">
                            <input type="text" name="search" placeholder="Pesquisar . . .">
                            <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div class="data1">
                            <input type="date" name="data1">
                        </div>

                        <span class="date-input-tag">até</span>

                        <div class="data2">
                            <input type="date" name="data2">
                        </div>

                    </div>
                </form>

                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th><div class="th-content">#ID</div></th>
                                    <th><div class="th-content">Estrategia</div></th>
                                    <th><div class="th-content">Banca</div></th>
                                    <th><div class="th-content">Data</div></th>
                                    <th><div class="th-content">Status</div></th>
                                    <th><div class="th-content"></div></th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($estragias as $estragia)

                                <tr>
                                    <td><div class="td-content">#{{ $estragia->id }}</div></td>
                                    <td><div class="td-content"></div>{{ $estragia->name }}</td>
                                    <td><div class="td-content"></div>BRL {{ number_format($estragia->balance/100,2,'.',',') }}</td>
                                    <td><div class="td-content"></div>{{ $estragia->created_at->format('d/m/Y H:i') }}</td>
                                    <td>
                                        @switch($estragia->status )

                                            @case(0)
                                                <span class="badge badge-danger">Cancelado</span>
                                                @break

                                            @case(1)
                                                <span class="badge badge-success">Ativo</span>
                                                @break

                                            @case(2)
                                                <span class="badge badge-warning">Pendente</span>
                                                @break
                                        @endswitch
                                    </td>
                                    <td>
                                        <div class="td-content">
                                            <a href="{{ route('estrategia', ['id' => $estragia->id] ) }}"><button class="btn btn-primary mb-2 me-4">Ver</button></a>
                                            <a href="{{ route('newStrategiaEdit', ['id' => $estragia->id] ) }}"><button class="btn btn-success mb-2 me-4">Editar</button></a>

                                        </div>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('cork/src/plugins/src/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('cork/src/assets/js/dashboard/dash_2.js') }}"></script>
<script>

var sBar = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
          show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    series: [{
        data: JSON.parse('{!! $str_balabnces !!}'),
    }],
    xaxis: {
        categories: JSON.parse('{!! $str_name !!}'),
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-bar"),
    sBar
);

chart.render();


window.onload = function() {
    const urlParams = new URLSearchParams(window.location.search);
    const sucess = urlParams.get('sucess');

    if (sucess) {
        Swal.fire(
            'Atualizado!',
            sucess,
            'success'
        );
    }
};


</script>
@endsection







