<div class="produto-details">
    <div class="box-produto">
        <div class="left principal">
            <div class="bg-produto">
                <img src="{{ asset('storage') }}/{{ $product->avatar }}" class="card-img-top" style="width: 240px;height: 165px;">
            </div>
            <div class="img-produto">
                <img src="{{ asset('storage') }}/{{ $product->avatar }}" class="card-img-top" style="width: 240px;height: 165px;">
            </div>
        </div>
        <div class="right principal">
            <div class="header-produto">
                <h3 style="font-size: 25px;">{{ $product->name }}</h3>

            </div>

            <div class="area-avaliacao">
                <div class="avaliacao-card">
                    <span class="nt-avaliacao">5.0</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" class="svg-inline--fa fa-star fa-w-18 _text-yellow _text-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 12px; height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9
                    171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5
                    8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                    <span class="qt-avaliacao">(2)</span>
                </div>
                <div class="temperatura-card">
                    <span>17°</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="fire" class="svg-inline--fa fa-fire fa-w-12 _text-red _text-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="width: 12px; height: 12px;"><path fill="currentColor" d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85
                    63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z"></path></svg>
                </div>
                <div class="id-produto">
                    <span>ID #{{ $product->id }}</span>
                </div>
            </div>

            <div class="info-preco">
                <div class="left">
                    <p class="card-text">Preço Máximo:</p>
                    <h5>R$ {{ $product->value/100 == 0 ? 'FREE' : number_format($product->value/100,2,",",".") }}</h5>
                </div>
                <div class="right">
                    <h5>Comissão de até:</h5>
                    <h5 class="_text-green">R$ {{ $product->value/100 == 0 ? 'FREE' : number_format(((($product->value/100) * $product->commission))/100,2,",",".") }} ({{$product->commission }})%</h5>
                </div>
            </div>

            <div class="footer-produto">
                <h6 class="_text-green">Afilie-se agora !</h6>
                <a href="#" class="slc-afiliacao mr-2 btn btn-primary  mixin" onclick="afiliado()">Solicitar afiliação</a>
            </div>
        </div>
    </div>

    <div class="tipo-produto">
        <span class="tag-produto">Comissão por último clique</span>
        <span class="tag-produto">Materiais de Divulgação</span>
        <span class="tag-produto">Afiliação com 1 clique</span>
        <span class="tag-produto">Página alternativa</span>
        <span class="tag-produto">Afiliação global ativa</span>
        <span class="tag-produto">Cookie Eterno</span>
    </div>




    <div class="comprar-produto">
        <h6>Você também pode comprar este produto!</h6>
        <a href="{{ $product->url }}" target="_blank" class="slc-afiliacao mr-2 btn btn-primary  mixin">Comprar agora</a>
    </div>

    <div class="descricao-produto ">

        <div class="simple-tab left" style="margin-left: 3%;">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab-icon" data-bs-toggle="tab" data-bs-target="#home-tab-icon-pane" type="button" role="tab" aria-controls="home-tab-icon-pane" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                        Sobre o produto
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab-icon" data-bs-toggle="tab" data-bs-target="#profile-tab-icon-pane" type="button" role="tab" aria-controls="profile-tab-icon-pane" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                        Conteudo do produto
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab-icon" data-bs-toggle="tab" data-bs-target="#contact-tab-icon-pane" type="button" role="tab" aria-controls="contact-tab-icon-pane" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        Site
                    </button>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-icon-pane" role="tabpanel" aria-labelledby="home-tab-icon" tabindex="0">
                    <p class="mt-3">{{ $product->drescription }}</p>
                </div>
                <div class="tab-pane fade" id="profile-tab-icon-pane" role="tabpanel" aria-labelledby="profile-tab-icon" tabindex="0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">

                            <ul class="nav nav-pills inv-list-container d-block ps" id="pills-tab" role="tablist">
                                <div id="iconsAccordion" class="accordion-icons">

                                    @foreach ($modules as $module)
                                    <div class="card">
                                        <div class="card-header" id="...">
                                            <section class="mb-0 mt-0">
                                                <div role="menu" class="show" data-toggle="collapse" data-target="#iconAccordion{{ $module->id }}" aria-expanded="true" aria-controls="iconAccordionOne" style="color:#e0e6ed;">

                                                #{{ $module->name }}

                                                <p style="color:#888ea8;">{{ $module->description }} </p>
                                                </div>
                                            </section>
                                        </div>
                                        <div id="iconAccordion{{ $module->id }}" class="show" aria-labelledby="..." data-parent="#iconsAccordion">
                                            <div class="card-body">

                                                @foreach ($classes as $classe)

                                                @if($classe->module_id == $module->id)

                                                <li class="nav-item" style="">
                                                    <div class="nav-link list-actions" id="invoice-0000{{ $classe->id }}" data-invoice-id="0000{{ $classe->id }}">
                                                        <div class="f-m-body">
                                                            <div class="f-body">
                                                                <p class="invoice-number">{{ $classe->name }}</p>
                                                                <p class="invoice-customer-name">{{ $classe->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endif

                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 729px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 354px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact-tab-icon-pane" role="tabpanel" aria-labelledby="contact-tab-icon" tabindex="0">
                   <p class="mt-3"> Pagina de vendas: {{ $product->url }} </p>
                </div>

            </div>

        </div>


        <div class="right">

            <h4>Sobre o Produtor</h4>
            <div class="img-produtor">
                <img src="{{ asset('storage') }}/{{ $produtor->avatar }}" class="img-fluid" alt="Imagem do Produtor">
            </div>
            <h5>{{$produtor->name}}</h5>
            <p class="card-text"><strong>Desde:</strong> {{$produtor->created_at->format('d/m/Y')}} <br> <strong>Email:</strong> {{$produtor->email }} <br><br> <strong>Sobre:</strong> {{$produtor->biography }}</p>

            <div class="conquistas">
                <h4>Conquistas</h4>
                <div class="area-conquistas">
                    <!--
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    <div class="item-conquista">
                        <img src="https://vulcano.hotmart.com/app-market/c735b7f6056fcf8a3a73.svg">
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
    function afiliado () {
        swal({
            title: 'Deseja revender esté produto?',
            text: "Seu pedido sera analisado pelo produtor!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Solicitar',
            padding: '2em'
        }).then(function(result) {
            if (result.value) {

                window.location.href = "{{ route('create', ['id' => $product->id]) }}";


            }
        })
    }
</script>
