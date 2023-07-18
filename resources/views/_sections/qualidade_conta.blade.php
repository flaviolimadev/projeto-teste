    <link href="{{ asset('cork/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/light/components/accordions.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/dark/components/accordions.css') }}" rel="stylesheet" type="text/css" />
    
    <style>
        body.dark .widget-heading h5 {
            color: #bfc9d4 !important;
        }
        
        body .widget-heading h5 {
            color: #3b3f5c !important;
        }
    </style>
    
    <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-content widget-content-area">
                <div id="iconsAccordion" class="accordion-icons accordion">
                    <div class="widget-heading">
                        <h5 class="" style="color: #ffffff;">Verificar informações da conta</h5>
                    </div>
                
                    <div class="card">
                        <div class="card-header" id="headingOne3">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionOne"
                                    aria-expanded="false" aria-controls="iconAccordionOne">
                                    <div class="accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shield-off"
                                            style="color: #{{ $AuthUser->status >= 2 ? '51e778' : 'e7515a'}};">
                                            <path d="M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18"></path>
                                            <path d="M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38"></path>
                                            <line x1="1" y1="1" x2="23" y2="23"></line>
                                        </svg>
                                    </div>
                                    VERIFICAÇÃO DE IDENTIDADE
                                    <div class="icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </section>
                        </div>
                
                        <div id="iconAccordionOne" class="collapse" aria-labelledby="headingOne3" data-bs-parent="#iconsAccordion">
                            <div class="card-body">
                                <script src='https://cdn.veriff.me/sdk/js/1.1/veriff.min.js'></script>
                                <script src='https://cdn.veriff.me/incontext/js/v1/veriff.js'></script>
                
                                <div class="col-lg-12 col-12">
                                    <div class="widget-heading">
                                        <h5 class="" style="color: #ffffff;">Após a verificação aguarde o periodo <br>de até 24 horas.
                                        </h5>
                                    </div>
                
                                    <div id='veriff-root'></div>
                                </div>
                
                                <script>
                                    const veriff = Veriff({
                                        host: 'https://stationapi.veriff.com',
                                        apiKey: 'd7f01b52-7722-402d-a9e9-f6a0a661de77',
                                        parentId: 'veriff-root',
                                        onSession: function (err, response) {
                                            window.veriffSDK.createVeriffFrame({ url: response.verification.url });
                                        }
                                    });
                                    veriff.setParams({
                                        person: {
                                            givenName: ' ',
                                            lastName: ' '
                                        }
                                    });
                                    veriff.mount({
                                        formLabel: {
                                            vendorData: 'Informe seu Email'
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header" id="headingTwo3">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionTwo"
                                    aria-expanded="false" aria-controls="iconAccordionTwo">
                                    <div class="accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shield-off"
                                            style="color: #{{ $AuthUser->email_verified_at != null && $AuthUser->email_verified_at->format('Y') != '1970' ? '51e778' : 'e7515a'}};">
                                            <path d="M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18"></path>
                                            <path d="M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38"></path>
                                            <line x1="1" y1="1" x2="23" y2="23"></line>
                                        </svg>
                                    </div>
                                    VERIFICAÇÃO DE EMAIL
                                    <div class="icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </section>
                        </div>
                
                        <div id="iconAccordionTwo" class="collapse" aria-labelledby="headingTwo3" data-bs-parent="#iconsAccordion">
                            <div class="card-body">
                                <form class="form-vertical" action="#"
                                    style="margin-top: 2%;margin-bottom: 2%;margin-left: 2%;margin-right: 2%;">
                
                                    <div class="form-group mb-4">
                                        <label class="control-label">Email de Acesso:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg></div>
                                            </div>
                                            <input type="text" value="{{ $AuthUser->email }}" class="form-control" disabled="">
                                        </div>
                                    </div>
                
                
                
                                    @if($AuthUser->email_verified_at != null && $AuthUser->email_verified_at->format('Y') != '1970')
                
                                    <label class="control-label"><strong><u>Contato verificado.</u></strong></label>
                
                                    @elseif($AuthUser->email_verified_at != null && $AuthUser->email_verified_at->format('Y') == '1970'
                                    )
                
                                    <label class="control-label"><strong><u>Clique no Link enviado ao seu contato.</u></strong></label>
                
                                    @else
                
                                    <button type="reset" class="btn btn-primary" value="" id="btn_a" style="display: block;"
                                        onclick="teste(1)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-send">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
                                        Enviar Link de verificação
                                    </button>
                
                                    @endif
                
                                    <button type="reset" class="btn btn-primary btn-lg mr-3" id="btn_b" style="display: none;">
                                        <div class="spinner-border text-success align-self-center"></div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header" id="headingThree8">
                            <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-bs-toggle="collapse" data-bs-target="#iconAccordionThree" aria-expanded="false" aria-controls="iconAccordionThree">
                                    <div class="accordion-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield-off" style="color: #e7515a;">
                                            <path d="M19.69 14a6.9 6.9 0 0 0 .31-2V5l-8-3-3.16 1.18"></path>
                                            <path d="M4.73 4.73L4 5v7c0 6 8 10 8 10a20.29 20.29 0 0 0 5.62-4.38"></path>
                                            <line x1="1" y1="1" x2="23" y2="23"></line>
                                        </svg>
                                    </div>
                                    VERIFICAÇÃO DE SMS
                                    <div class="icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </section>
                        </div>
                
                        <div id="iconAccordionThree" class="collapse" aria-labelledby="headingThree8"
                            data-bs-parent="#iconsAccordion">
                            <div class="card-body">
                                <form class="form-vertical" action="#"
                                    style="margin-top: 2%;margin-bottom: 2%;margin-left: 2%;margin-right: 2%;">
                
                                    <div class="form-group mb-4">
                                        <label class="control-label">Numero de contato:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-phone">
                                                        <path
                                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                            <input type="text" value="{{ $AuthUser->telephone }}" class="form-control" disabled="">
                                        </div>
                                    </div>
                
                                    @if($AuthUser->telephone_verified_at != null &&
                                    Carbon\Carbon::parse($AuthUser->telephone_verified_at)->format('Y') != '1970')
                
                                    <label class="control-label"><strong><u>Contato verificado.</u></strong></label>
                
                                    @elseif($AuthUser->telephone_verified_at != null &&
                                    Carbon\Carbon::parse($AuthUser->telephone_verified_at)->format('Y') == '1970' )
                
                                    <label class="control-label"><strong><u>Clique no Link enviado ao seu contato.</u></strong></label>
                
                                    @else
                
                                    <button type="reset" class="btn btn-primary" value="" id="btn_b" style="display: block;"
                                        onclick="teste(2)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-send">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
                                        Enviar Link de verificação
                                    </button>
                
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function teste(tipo){
            $.ajax({
        
            url: "{{ route('veriff') }}",
            type: "post",
            data: {
                _token: '{{ csrf_token() }}',
                type: tipo,
                },
        
            dataType: "html"
        
            }).done(function(resposta) {
        
                console.log(resposta);
                if(resposta == 201){
        
                    Swal.fire(
                        'Solicitação Enviada!',
                        'Clique no link enviado ao seu Email',
                        'success'
                    )
        
        
                }else if(resposta == 202){
                    
                    Swal.fire(
                         'Solicitação Enviada!',
                        'Clique no link enviado ao seu Telefone',
                        'success'
                    )
                
                
                }else{
                    
                    Swal.fire(
                        'Error!',
                        'Solicitação no pode ser concluida.',
                        'error'
                    )
                }
            });
        }
    </script>

    <script src="{{ asset('cork/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('cork/src/assets/js/scrollspyNav.js') }}"></script>