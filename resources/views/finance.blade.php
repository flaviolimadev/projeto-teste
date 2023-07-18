@extends('_layouts.basev2')

@section('titulo','Meu Financeiro')
@section('page', 'Meu Financeiro')

@section('conteudo')
    <style>
        body.dark .widget-card-one .widget-content p, body.dark .widget-account-invoice-one .invoice-box h5 {
            color: #bfc9d4 !important;
        }

        body .widget-card-one .widget-content p, body .widget-account-invoice-one .invoice-box h5 {
            color: #3b3f5c !important;
        }
    </style>

    <div class="row analytics">

        @include('_sections.info_conta')



        @include('_sections.extrato_financeiro')
    </div>
@endsection

