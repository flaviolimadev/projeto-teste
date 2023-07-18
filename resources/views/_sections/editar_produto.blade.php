    <link rel="stylesheet" href="{{ asset('cork/src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link href="{{ asset('cork/src/plugins/src/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('cork/src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('cork/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/light/elements/alert.css') }}">
    <link href="{{ asset('cork/src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/plugins/css/light/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/light/forms/switches.css') }}">
    <link href="{{ asset('cork/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="cork/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/dark/elements/alert.css') }}">
    <link href="{{ asset('cork/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/dark/forms/switches.css') }}">
    <link href="{{ asset('cork/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/src/assets/css/dark/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .border-tab .tab-content {
            border: none;
            padding: 0px;
        }
        .border-tab .tab-content>.tab-pane {
            padding: 0px;
        }
        .widget-content.widget-content-area.border-tab {
            box-shadow: none;
        }

        .new-control {
            position: relative;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important;
            padding-left: 1.5rem;
            margin-right: 1rem;
            font-weight: 100;
            font-size: 14px !important;
        }

        span.check-edit-product {
            position: relative;
            top: 5px;
        }

        .general-info .info .form {
            width: 100%;
        }

        form#general-info {
            margin: 0px 20px !important;
        }

        .widget-content-area {
            border: none;
        }
    </style>

    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div class="widget-content widget-content-area border-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-home-icon" type="button" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                    Produto
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-icon" type="button" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                    </svg>
                                    Checkout
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-contact-icon" type="button" role="tab" aria-controls="pills-contact-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    Co-prodrução
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-disabled-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled-icon" type="button" role="tab" aria-controls="pills-disabled-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line>
                                    </svg>
                                    Pixels
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-icon-tab" tabindex="0">
                                <form action="{{ route('editSave', ['id' => $product->id ]) }}" method="POST" enctype="multipart/form-data" id="general-info" class="section general-info">
                                    @csrf
                                    <div class="info">
                                        <h6 class="">Informações do seu produto</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                                        <div class="profile-image">
                                                            <input type="file" name="avatar" class="dropify" data-default-file="{{ asset('storage') }}/{{ $product->avatar }}" value="" data-max-file-size="2M"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Nome do produto</label>
                                                                        <input type="text" class="form-control mb-4" name="name" id="fullName" placeholder="Nome do produto" value="{{ $product->name }}">
                                                                    </div>
                                                                </div>

                                                                    <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Valor (R$)</label>
                                                                        <input type="number" class="form-control mb-4" name="value" placeholder="Valor do produto" value="{{ number_format($product->value/100, 2, '.', ' '); }}">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Comissão (%)</label>
                                                                        <input type="text" class="form-control mb-4" name="comission" id="comission" placeholder="Valor do produto" value="{{ $product->commission }}">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="profession">Categoria</label>
                                                                    <select class="form-control" name="category" id="country">

                                                                    @foreach ($categorias as $categoria)
                                                                        <option value="{{ $categoria->id }}" {{ $categoria->id == $product->category ? 'selected' : '' }}>{{ $categoria->name }}</option>
                                                                    @endforeach


                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="profession">Curso</label>
                                                                    <select class="form-control" name="curso">

                                                                        @foreach ($cursos as $categoria)
                                                                            <option value="{{ $categoria->id }}" {{ $categoria->id == $product->course ? 'selected' : '' }}>{{ $categoria->name }}</option>
                                                                        @endforeach


                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="profession">Status do produto</label>
                                                                    <select class="form-control" name="status">

                                                                    <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Ativo</option>
                                                                    <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Bloqueado</option>


                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="profession">Listado</label>
                                                                    <select class="form-control" name="listed">

                                                                    <option value="1" {{ $product->listed == 1 ? 'selected' : '' }}>Disponivel na loja</option>
                                                                    <option value="0" {{ $product->listed == 0 ? 'selected' : '' }}>Näo disponivel na loja</option>


                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="profession">Pagina de vendas</label>
                                                                    <input type="text" class="form-control mb-4" name="url" placeholder="Url da página de vendas" value="{{ $product->url }}">
                                                            </div>

                                                            <hr>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="aboutBio">Descrição - Fale mais sobre seu Produto</label>
                                                                    <textarea class="form-control" name="bio" placeholder="Breve Resumo do seu produto" rows="10">{{ $product->drescription }}</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">

                                                                <button class="btn btn-primary btn-block mb-4 mr-2">Atualizar</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-icon-tab" tabindex="0">
                                @if( isset($_GET['edit_checkout']) )

                                <div class="clipboard copy-txt">
                                    <p class="mb-4">Link -> <span
                                            id="advanced-paragraph">http://www.ctrlser.com/dashboard/payments/index.php?id=0</span></p>
                                    <a class="mb-2 btn btn-primary" href="javascript:;" data-clipboard-action="copy"
                                        data-clipboard-target="#advanced-paragraph">Copiar link</a>
                                </div>

                                <br>

                                <form action="{{ route('addCheckout', ['id' => $product->id ]) }}" method="POST" class="validar-documents"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <h4 style="text-align: initial;">Informações do checkout</h4>

                                    <div class="clipboard copy-txt">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Titulo do checkout</label>
                                                    <input type="text" class="form-control mb-4" name="name" placeholder="Nome do produto"
                                                        value="{{ $checkout_edit->name }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Preço</label>
                                                    <input type="number" pattern="[0-9]+([,\.][0-9]+)?" class="form-control mb-4" name="value"
                                                        placeholder="Valor ofertado ao cliente"
                                                        value="{{ number_format($checkout_edit->value/100, 2, '.', '') }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Divide em até (Cartão de credito)</label>
                                                    <input type="number" class="form-control mb-4" name="share_card"
                                                        placeholder="Número de parcelas para o cliente" value="{{ $checkout_edit->share_card }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Recorrência</label>
                                                    <select class="form-control" name="recurrence">
                                                        <option value="0">Não Recorrente</option>
                                                        <option value="1">Recorrente</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Status</label>

                                                    <select class="form-control" name="status">
                                                        <option value="0">Publico</option>
                                                        <option value="1">Privado</option>
                                                        <option value="2">Bloqueado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Redirecionado após a compra (Link)</label>

                                                    <input type="text" class="form-control mb-4" name="redirect"
                                                        placeholder="Cliente sera redirecionado após a compra"
                                                        value="{{ $checkout_edit->redirect }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="fullName">Cor do fundo do checkout</label>

                                                    <input type="color" class="form-control mb-4" name="color" value="{{ $checkout_edit->color }}">
                                                </div>
                                            </div>


                                        </div>


                                    </div>

                                    <br>

                                    <h4 style="text-align: initial;">Imagens do checkout</h4>

                                    <div class="row box-enviardocuments"
                                        style="display: flex; justify-content: center; text-align: center; margin-bottom: 2rem;">

                                        <div class="col-xl-4 col-lg-3 col-md-6">
                                            <div class="col-xl-12 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" name="img_top" class="dropify"
                                                        data-default-file="{{ asset('storage') }}/{{ $checkout_edit->img_top }}" value=""
                                                        data-max-file-size="2M" />

                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Imagem do topo (1080x1080)</p>

                                                    <div class="form-group form-check pl-0">
                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                            <input type="checkbox" class="custom-control-input" id="sChkbox" name="imga">
                                                            <label class="custom-control-label" for="sChkbox">Ativar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="col-xl-12 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" name="img_left" class="dropify"
                                                        data-default-file="{{ asset('storage') }}/{{ $checkout_edit->img_left }}" value=""
                                                        data-max-file-size="2M" />
                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Imagem lateral (1080x1080)</p>

                                                    <div class="form-group form-check pl-0">
                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                            <input type="checkbox" class="custom-control-input" id="sChkbox1" name="imgb">
                                                            <label class="custom-control-label" for="sChkbox1">Ativar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-3 col-md-6">
                                            <div class="col-xl-12 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" name="img_low" class="dropify"
                                                        data-default-file="{{ asset('storage') }}/{{ $checkout_edit->img_low }}" value=""
                                                        data-max-file-size="2M" />
                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Imagem do fundo (1080x1080)</p>

                                                    <div class="form-group form-check pl-0">
                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                            <input type="checkbox" class="custom-control-input" id="sChkbox2" name="imgc">
                                                            <label class="custom-control-label" for="sChkbox2">Ativar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <h4 style="text-align: initial;">Metodos de pagamento</h4>

                                    <div class="clipboard copy-txt">

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_pix" {{$checkout_edit->activ_pix == 1 ?
                                                'checked' : ''}}>
                                                <span class="new-control-indicator"></span>Pix (Imediato)
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_card" {{$checkout_edit->activ_card == 1
                                                ? 'checked' : ''}}>
                                                <span class="new-control-indicator"></span>Cartao de credito (15 dias)
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_boleto" {{$checkout_edit->activ_boleto
                                                == 1 ? 'checked' : ''}}>
                                                <span class="new-control-indicator"></span>Boleto (3 dias)
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_btc" {{$checkout_edit->activ_btc == 1 ?
                                                'checked' : ''}}>
                                                <span class="new-control-indicator"></span>Bitcoin (Imediato)
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_eth" {{$checkout_edit->activ_eth == 1 ?
                                                'checked' : ''}}>
                                                <span class="new-control-indicator"></span>Etheriun (Imediato)
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_usd" {{$checkout_edit->activ_usd == 1 ?
                                                'checked' : ''}}>
                                                <span class="new-control-indicator"></span>Theter USD (Imediato)
                                            </label>
                                        </div>

                                    </div>

                                    <br>

                                    <h4 style="text-align: initial;">Adicionar Oferta (Contador no topo do checkout)</h4>

                                    <div class="clipboard copy-txt">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Tempo em minutos</label>
                                                    <input type="text" class="form-control mb-4" name="time_checkout"
                                                        placeholder="Tempo em minutos para fim da promoção"
                                                        value="{{ $checkout_edit->time_checkout }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Titulo</label>
                                                    <input type="text" class="form-control mb-4" name="title_checkout"
                                                        placeholder="Titulo ao lado do contador" value="{{ $checkout_edit->title_checkout }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-block mb-4 mr-2" name="edit_checkout"
                                            value="{{ $checkout_edit->id }}">Editar checkout</button>
                                    </div>

                                </form>

                                @else

                                <form action="{{ route('addCheckout', ['id' => $product->id ]) }}" method="POST" class="validar-documents"
                                    enctype="multipart/form-data">

                                    @csrf
                                    <h4 style="text-align: initial;">Informações do checkout</h4>
                                    <div class="clipboard copy-txt">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Titulo do checkout</label>
                                                    <input type="text" class="form-control mb-4" name="name" placeholder="Nome do produto"
                                                        value="{{ old('name') }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Preço</label>
                                                    <input type="number" class="form-control mb-4" name="value"
                                                        placeholder="Valor ofertado ao cliente" value="{{ old('value') }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Divide em até (Cartão de credito)</label>
                                                    <input type="number" class="form-control mb-4" name="share_card"
                                                        placeholder="Número de parcelas para o cliente" value="{{ old('share_card') }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label for="fullName">Recorrência</label>
                                                    <select class="form-control" name="recurrence">
                                                        <option value="0">Não Recorrente</option>
                                                        <option value="1">Recorrente</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Status</label>

                                                    <select class="form-control" name="status">
                                                        <option value="0">Publico</option>
                                                        <option value="1">Privado</option>
                                                        <option value="2">Bloqueado</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Redirecionado após a compra (Link)</label>

                                                    <input type="text" class="form-control mb-4" name="redirect"
                                                        placeholder="Cliente sera redirecionado após a compra" value="{{ old('redirect') }}">
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="fullName">Cor do fundo do checkout</label>

                                                    <input type="color" class="form-control mb-4" name="color" value="0">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <br>

                                    <h4 style="text-align: initial;">Imagens do checkout</h4>

                                    <div class="row box-enviardocuments"
                                        style="display: flex; justify-content: center; text-align: center; margin-bottom: 2rem;">
                                        <div class="col-xl-4 col-lg-3 col-md-6">
                                            <div class="col-xl-12 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" id="input-file-max-fs" class="dropify" data-default-file="uploads/" value=""
                                                        data-max-file-size="2M" />
                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Imagem do topo (1080x1080)</p>

                                                    <div class="form-group form-check pl-0">
                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                            <input type="checkbox" class="custom-control-input" id="sChkbox" name="imga">
                                                            <label class="custom-control-label" for="sChkbox">Ativar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="col-xl-12 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" id="input-file-max-fs" class="dropify" data-default-file="uploads/" value=""
                                                        data-max-file-size="2M" />
                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Imagem lateral (1080x1080)</p>

                                                    <div class="form-group form-check pl-0">
                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                            <input type="checkbox" class="custom-control-input" id="sChkbox1" name="imgb">
                                                            <label class="custom-control-label" for="sChkbox1">Ativar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-3 col-md-6">
                                            <div class="col-xl-12 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <input type="file" id="input-file-max-fs" class="dropify" data-default-file="uploads/" value=""
                                                        data-max-file-size="2M" />
                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Imagem do fundo (1080x1080)</p>

                                                    <div class="form-group form-check pl-0">
                                                        <div class="custom-control custom-checkbox checkbox-info">
                                                            <input type="checkbox" class="custom-control-input" id="sChkbox2" name="imgc">
                                                            <label class="custom-control-label" for="sChkbox2">Ativar</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <br>
                                    <h4 style="text-align: initial;">Metodos de pagamento</h4>
                                    <div class="clipboard copy-txt">

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_pix">
                                                <span class="new-control-indicator"></span>
                                                <span class="check-edit-product">Pix (Imediato)</span>
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_card">
                                                <span class="new-control-indicator"></span>
                                                <span class="check-edit-product">Cartao de crédito (15 dias)</span>
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_boleto">
                                                <span class="new-control-indicator"></span>
                                                <span class="check-edit-product">Boleto (3 dias)</span>
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_btc">
                                                <span class="new-control-indicator"></span>
                                                <span class="check-edit-product">Bitcoin (Imediato)</span>
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_eth">
                                                <span class="new-control-indicator"></span>
                                                <span class="check-edit-product">Etheriun (Imediato)</span>
                                            </label>
                                        </div>

                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-primary">
                                                <input type="checkbox" class="new-control-input" name="activ_usd">
                                                <span class="new-control-indicator"></span>
                                                <span class="check-edit-product">Theter USD (Imediato)</span>
                                            </label>
                                        </div>

                                    </div>

                                    <br>

                                    <h4 style="text-align: initial;">Adicionar Oferta (Contador no topo do checkout)</h4>
                                    <div class="clipboard copy-txt">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Tempo em minutos</label>
                                                    <input type="text" class="form-control mb-4" name="time_checkout"
                                                        placeholder="Tempo em minutos para fim da promoção" value="{{ old('time_checkout') }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fullName">Titulo</label>
                                                    <input type="text" class="form-control mb-4" name="title_checkout"
                                                        placeholder="Titulo ao lado do contador" value="{{ old('title_checkout') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>



                                    <div class="col-md-12" style="padding: 0px">
                                        <button class="btn btn-primary btn-block mb-4 mr-2">Adicionar checkout</button>
                                    </div>

                                </form>

                                @endif

                                <hr>

                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">

                                    <h4 style="text-align: initial;">Meus Checkouts</h4>

                                    <div class="widget-content">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="th-content">Invoice</div>
                                                        </th>
                                                        <th>
                                                            <div class="th-content">Titulo</div>
                                                        </th>
                                                        <th>
                                                            <div class="th-content">Valor</div>
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

                                                    @foreach ($checkouts as $checkout)

                                                    <tr>

                                                        <td>
                                                            <div class="td-content product-brand"> #{{ $checkout->id }} </div>
                                                        </td>

                                                        <td>
                                                            <div class="td-content customer-name">{{ $checkout->name }}</div>
                                                        </td>

                                                        <td>
                                                            <div class="td-content customer-name">BRL {{ number_format($checkout->value/100, 2, '.',
                                                                ' '); }}</div>
                                                        </td>

                                                        <td>
                                                            <div class="td-content customer-name">{{ $checkout->created_at->format('d/m/Y H:s') }}
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="td-content customer-name">
                                                                @switch($checkout->status )

                                                                @case(0)
                                                                <span class="badge badge-danger">Desativado</span>
                                                                @break

                                                                @case(1)
                                                                <span class="badge badge-success">Publico</span>
                                                                @break

                                                                @case(2)
                                                                <span class="badge badge-warning">Privado</span>
                                                                @break
                                                                @endswitch
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="td-content customer-name">
                                                                <a href="{{ route('editProduct', ['id' => $product->id ]) }}?edit_checkout={{$checkout->id}}"
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

                            <div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-icon-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
                                        <form action="{{ route('addCoproducao', ['id' => $product->id ]) }}" method="POST" enctype="multipart/form-data" id="general-info" class="section general-info">
                                            @csrf
                                            <div class="info">
                                                <div class="form">

                                                    <div class="col-xl-10 col-lg-12 col-md-8" style="margin: 0px !important; padding: 0px !important; max-width: 100% !important;">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">E-mail do coprodutor</label>
                                                                        <input type="email" class="form-control mb-4" name="email" placeholder="Informe o E-mail do co-produtor" value="" name="usuario">
                                                                    </div>
                                                                </div>

                                                                    <div class="col-sm-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Comissão sobre as vendas (%)</label>
                                                                        <input type="number" class="form-control mb-4" name="value" placeholder="Valor da comição do co-produtor" value="" name="valor">
                                                                    </div>
                                                                </div>

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

                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">

                                        <div class="widget-content">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th><div class="th-content">Invoice</div></th>
                                                            <th><div class="th-content">Nome</div></th>
                                                            <th><div class="th-content th-heading">Email</div></th>
                                                            <th><div class="th-content">Porcentagem</div></th>
                                                            <th><div class="th-content">Data</div></th>
                                                            <th><div class="th-content">Status</div></th>
                                                            <th><div class="th-content"></div></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($coprodutores as $coprodutor)

                                                        <tr>

                                                            <td><div class="td-content product-brand"> #{{ $coprodutor['coprodutor']['id'] }} </div></td>

                                                            <td><div class="td-content customer-name"><img src="{{ asset('storage') }}/{{ $coprodutor['user']['avatar'] }}" alt="avatar">{{ $coprodutor['user']['name'] }}</div></td>

                                                            <td><div class="td-content customer-name">{{ $coprodutor['user']['email'] }}</div></td>

                                                            <td><div class="td-content customer-name">{{ $coprodutor['coprodutor']['commission'] }}%</div></td>

                                                            <td><div class="td-content customer-name">{{ $coprodutor['coprodutor']['updated_at']->format('d/m/Y H:m') }}</div></td>

                                                            <td>
                                                                <div class="td-content customer-name">
                                                                    @switch($coprodutor['coprodutor']['status'] )

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
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="td-content customer-name">
                                                                    @if($coprodutor['coprodutor']['status'] == 0)
                                                                    <a href="{{ route('editCoprodutor', ['id' => $coprodutor['coprodutor']['id'], 'type' => 1]) }}" class="btn btn-outline-" style="background-color: #8bc34a;color: white;">Reativar</a>
                                                                    @else
                                                                    <a href="{{ route('editCoprodutor', ['id' => $coprodutor['coprodutor']['id'], 'type' => 0]) }}" class="btn btn-outline-" style="background-color: #f44336;color: white;">Excluir</a>
                                                                    @endif
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

                            <div class="tab-pane fade" id="pills-disabled-icon" role="tabpanel" aria-labelledby="pills-disabled-icon-tab" tabindex="0">
                                <div class="row">

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
                                                                    <a href="{{ route('editProduct', ['id' => $product->id ]) }}?edit_pixel={{$pixel->id}}"
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
        </div>
    </div>

    <script>
        @if (isset($sucess) && $sucess == 1)
            window.onload = function exampleFunction() {
                Swal.fire(
                    'Atualizado!',
                    'Dados Atualizados com sucesso.',
                    'success'
                )
        }
        @elseif(isset($sucess) && $sucess == 0)
            window.onload = function exampleFunction() {
                Swal.fire(
                    'Error!',
                    'Dados não foram atualizados.',
                    'error'
                )
            }
        @elseif(isset($sucess) && $sucess == 3)
            window.onload = function exampleFunction() {
                Swal.fire(
                    'Error - Email invalido!',
                    'Email Informado não está cadastrado.',
                    'error'
                )
            }
        @elseif(isset($sucess) && $sucess == 4)
            window.onload = function exampleFunction() {
                Swal.fire(
                    'Error!',
                    'Email Informado já é um coprodutor.',
                    'error'
                )
            }
        @endif
    </script>

    <script src="{{ asset('cork/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <script src="{{ asset('cork/src/assets/js/users/account-settings.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/highlight/highlight.pack.js') }}"></script>


