@extends('_layouts.basev2')

@section('titulo','Solicitaçôes enviadas')
@section('page', 'Affiliados / Solicitaçôes Enviadas')

@section('conteudo')
<div class="row">
    <div class="col-md-12 col-sm-12 col-12">
        <div class="vertical-pill">

            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Produto</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Checkouts</button>
                    <button class="nav-link" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" type="button" role="tab" aria-controls="v-pills-contact" aria-selected="false">Pixels</button>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="widget widget-card-one">
                            <div class="widget-content">

                                <div class="media">
                                    <div class="w-img">
                                        <img src="{{ asset('storage') }}/{{ $product->avatar }}" alt="avatar">
                                    </div>
                                    <div class="media-body">
                                        <h6>{{ $product->name }}</h6>
                                        <p class="meta-date-time">Comissao: {{ $product->commission }}%</p>
                                    </div>
                                </div>

                                <p>{{ $product->drescription }}</p>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">

                                        <ul class="nav nav-pills inv-list-container d-block ps" id="pills-tab" role="tablist">
                                            <div id="iconsAccordion" class="accordion-icons">

                                                @foreach ($modules as $module)
                                                <div class="card">
                                                    <div class="card-header" id="...">
                                                        <section class="mb-0 mt-0">
                                                            <div role="menu" class="show" data-toggle="collapse" data-target="#iconAccordion{{ $module->id }}" aria-expanded="true" aria-controls="iconAccordionOne" style="color:#e0e6ed;">

                                                            {{ $module->name }}

                                                            <p style="color:#888ea8;margin-bottom: 0px;"><strong> {{ $module->description }} </strong></p>
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
                                                <br>
                                                @endforeach
                                            </div>


                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 729px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 354px;"></div></div><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Data</th>
                                                <th class="text-center" scope="col">Valor</th>
                                                <th class="text-center" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($checkouts as $checkout)

                                            <tr>
                                                <td>{{ $checkout->name }}</td>
                                                <td>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    <span class="table-inner-text">{{ $checkout->created_at->format('d/m/Y') }}</span>
                                                </td>
                                                <td class="text-center">R$ {{ number_format($checkout->value/100,2,'.',',') }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('checkout', ['id' => $checkout->id]) }}"><button class="btn btn-success mb-2 me-4">Acessar</button></a>
                                                </td>
                                            </tr>

                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab" tabindex="0">
                        @if( isset($_GET['edit_pixel']) )

                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
                                                <form action="{{ route('addPixel') }}" method="POST" enctype="multipart/form-data" id="general-info" class="section general-info">
                                                    @csrf
                                                    <div class="info">
                                                        <div class="form">

                                                            <div class="col-xl-10 col-lg-12 col-md-8" style="margin: 0px !important; padding: 0px !important; max-width: 100% !important;">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="profession">Provedor Ads</label>
                                                                                    <select class="form-control" name="provedor">

                                                                                        <option value="0" >Facebook Ads</option>
                                                                                        <option value="1" >Googoe Ads</option>

                                                                                    </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Checkout a ser inserido</label>
                                                                                <select class="form-control" name="checkout">
                                                                                    @foreach ($checkouts as $checkout)
                                                                                    <option value="{{ $checkout->id }}" >{{ $checkout->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Status do Evento</label>
                                                                                <select class="form-control" name="status">
                                                                                    <option value="1" >Ativo</option>
                                                                                    <option value="0" >Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="aboutBio">Cole aqui o <u>Code</u> do Evento</label>
                                                                        <textarea class="form-control" name="code" placeholder="Breve Resumo do seu produto" rows="5" value="{{ $edit_pixel->code }}">{{ $edit_pixel->code }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-12">

                                                                <button type="" class="mr-2 btn btn-primary  mixin" >Adicionar</button>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>

                                            @else

                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
                                                <form action="{{ route('addPixel') }}" method="POST" enctype="multipart/form-data" id="general-info" class="section general-info">
                                                    @csrf
                                                    <div class="info">
                                                        <div class="form">

                                                            <div class="col-xl-10 col-lg-12 col-md-8" style="margin: 0px !important; padding: 0px !important; max-width: 100% !important;">
                                                                <div class="form">
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="profession">Provedor Ads</label>
                                                                                    <select class="form-control" name="provedor">

                                                                                        <option value="0" >Facebook Ads</option>
                                                                                        <option value="1" >Googoe Ads</option>

                                                                                    </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Checkout a ser inserido</label>
                                                                                <select class="form-control" name="checkout">
                                                                                    @foreach ($checkouts as $checkout)
                                                                                    <option value="{{ $checkout->id }}" >{{ $checkout->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-sm-12 col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fullName">Status do Evento</label>
                                                                                <select class="form-control" name="status">
                                                                                    <option value="1" >Ativo</option>
                                                                                    <option value="0" >Inativo</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="aboutBio">Cole aqui o <u>Code</u> do Evento</label>
                                                                        <textarea class="form-control" name="code" placeholder="Breve Resumo do seu produto" rows="5"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-md-12">

                                                                <button type="" class="mr-2 btn btn-primary  mixin" >Adicionar</button>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>

                                            @endif
                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">

                                                <h4 style="text-align: initial;">Meus Eventos Cadastrados</h4>

                                                <div class="widget-content">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <div class="th-content">Invoice</div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="th-content">Provedor</div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="th-content">Checkout</div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="th-content">Data</div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="th-content">Status</div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="th-content"></div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach ($pixels as $pixel)

                                                                <tr>

                                                                    <td>
                                                                        <div class="td-content product-brand"> #{{ $pixel->id }} </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="td-content customer-name">{{ $pixel->provedor }}</div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="td-content customer-name">{{ $pixel->checkout_id }}</div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="td-content customer-name">{{ $pixel->created_at->format('d/m/Y H:s') }}
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="td-content customer-name">
                                                                            @switch($pixel->status )

                                                                            @case(0)
                                                                            <span class="badge badge-danger">Inativo</span>
                                                                            @break

                                                                            @case(1)
                                                                            <span class="badge badge-success">Ativo</span>
                                                                            @break


                                                                            @endswitch
                                                                        </div>
                                                                    </td>

                                                                    <td>
                                                                        <div class="td-content customer-name">
                                                                            <a href="{{ route('send', ['id' => $product->id ]) }}?edit_pixel={{$pixel->id}}"
                                                                                class="btn btn-outline"
                                                                                style="background-color: #689f38;color: white;">Editar</a>
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

        </div>
    </div>
</div>

@endsection
