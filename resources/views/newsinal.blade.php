@extends('_layouts.basev2')

@section('titulo','Estrategias')
@section('diretorio', 'Estrategias')

@section('conteudo')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row widget-statistic">
        <form action="{{ route('newSinal_post') }}" method="POST" enctype="multipart/form-data" id="inputFile" class="section general-info">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="info">
                <h6 class="">Adicionar sinal</h6>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                <div class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Casa 01</label>
                                                <input type="text" class="form-control mb-4" name="casa_01" id="name" placeholder="Nome do produto" value="{{ $_GET['casa_01'] ?? '' }}">
                                            </div>
                                        </div>

                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Casa 02</label>
                                                <input type="text" class="form-control mb-4" name="casa_02" id="value" placeholder="Valor do produto" value="{{ $_GET['casa_02'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Odd 01</label>
                                                <input type="text" class="form-control mb-4" name="odd_01" id="name" placeholder="Nome do produto" value="{{ $_GET['odd_01'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Odd 02</label>
                                                <input type="text" class="form-control mb-4" name="odd_02" id="value" placeholder="Valor do produto" value="{{ $_GET['odd_01'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullName">Evento</label>
                                                <input type="text" class="form-control mb-4" name="evento" id="value" placeholder="Valor do produto" value="{{ $_GET['evento'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Mercado 01</label>
                                                <input type="text" class="form-control mb-4" name="mercado_01" id="name" placeholder="Nome do produto" value="{{ $_GET['mercado_01'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Mercado 02</label>
                                                <input type="text" class="form-control mb-4" name="mercado_02" id="value" placeholder="Valor do produto" value="{{ $_GET['mercado_02'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullName">Data Evento</label>
                                                <input type="datetime-local" class="form-control mb-4" name="data_evento" id="value" placeholder="Valor do produto" value="{{ $_GET['data'] ?? '' }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullName">Investimento</label>
                                                <input type="number" class="form-control mb-4" name="investimento" id="value" placeholder="Valor do produto" value="">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullName">Lucro</label>
                                                <input type="text" class="form-control mb-4" name="lucro" id="Lucro" placeholder="Valor do produto" value="{{ $_GET['lucro'] ?? '' }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Estrategia</label>
                                            <select class="form-control" name="estrategia" id="category">
                                                @foreach ($estrategia as $estt)
                                                <option value="{{ $estt->id }}">{{ $estt->name }}</option>
                                                @endforeach

                                        </select>
                                    </div>



                                    <div class="col-md-12">
                                        <button type="submit" class="mr-2 btn btn-primary  mixin" onclick="teste()">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


@endsection







