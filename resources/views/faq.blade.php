@extends('_layouts.basev2')

@section('titulo','FAQ - Perguntas Frequentes')
@section('page', 'FAQ - Perguntas Frequentes')

@section('conteudo')

<style>
    .card-header .title-faq {
        cursor: pointer;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        gap: 10px !important;
    }
    
    body .card {
        color: #191e3a !important;
        background: #fff;
        border: 1px solid #e3e6ea;
    }
    
    body .card p {
        margin-bottom: 0px !important;
    }
</style>

<div class="faq">
    <div class="faq-layouting layout-spacing">

        <div class="fq-tab-section">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <h2>FAQ <span>Perguntas Frequentes</span></h2>
                    <br>
                    <div class="row">

                        <div class="col-lg-6">
                            @foreach ($faq as $fa)
                            <div class="accordion" id="simple_faq{{$fa->id}}">


                                <div class="card">
                                    <div class="card-header" id="fqheading{{$fa->id}}">
                                        <div class="mb-0 collapsed" data-bs-toggle="collapse" role="navigation" data-bs-target="#fqcollapse{{$fa->id}}" aria-expanded="false" aria-controls="fqcollapseOne">
                                            <div class="title-faq">
                                                <span class="faq-q-title">{{ $fa->title }}</span>
                                                <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="fqcollapse{{$fa->id}}" class="collapse" aria-labelledby="fqheading{{$fa->id}}" data-bs-parent="#simple_faq{{$fa->id}}" style="">
                                        <div class="card-body">
                                            <p>{{ $fa->content }}</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-6">
                            <a class="card style-7" href="https://wa.me/5584998443475" target="_blank">
                                <img src="{{ asset('assets/img/whatsapp.png') }}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <h5 class="card-title mb-0">Suporte Whatsapp.</h5>
                                    <p class="card-text">Atendente Pedro</p>
                                </div>
                            </a>

                            <a class="card style-7" href="https://t.me/+EeGurE4pLiNhNWU5" target="_blank">
                                <img src="{{ asset('assets/img/telegram.png') }}" class="card-img-top" alt="...">
                                <div class="card-footer">
                                    <h5 class="card-title mb-0">Canal do Telegram.</h5>
                                    <p class="card-text">Informações e notificações do sistema</p>
                                </div>
                            </a>

                            
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection
