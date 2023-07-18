@extends('_layouts.basev2')

@section('titulo','Estrategias')
@section('diretorio', 'Estrategias')

@section('conteudo')

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="row widget-statistic">
        <form action="{{ route('newStrategia_post') }}" method="POST" enctype="multipart/form-data" id="inputFile" class="section general-info">
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
                <h6 class="">Nova estrategia</h6>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">

                            <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                <div class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Nome da Estrategia</label>
                                                <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Nome do produto" value="{{ $estrategia->name ?? '' }}">
                                            </div>
                                        </div>

                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Banca Inicial (R$)</label>
                                                <input type="number" class="form-control mb-4" name="balance" id="value" placeholder="Valor do produto" value="{{ isset($estrategia->balance) ? $estrategia->balance/100 : '' }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Status</label>
                                            <select class="form-control" name="status" id="category">
                                                <option value="1">Ativo</option>
                                                <option value="0">Desativado</option>

                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="aboutBio">Descreva um pouco sobre a estrategia</label>
                                            <textarea class="form-control" name="description" id="bio" placeholder="Tell something interesting about yourself" rows="10">{{ $estrategia->description ?? '' }}</textarea>
                                        </div>
                                    </div>

                                    @if(isset($estrategia->name))
                                    <input type="text" name="id" id="id" value="{{ $estrategia->id}}" style="display:none">
                                    @endif

                                    <div class="col-md-12">
                                        <button type="submit" class="mr-2 btn btn-primary  mixin" >Adicionar</button>
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







