<link href="{{ asset('cork/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />

<style>
    .table.table-bordered {
        border-radius: 10px;
    }
    .widget-header {
        border-radius: 8px 8px 0px 0px !important;
    }
    h6.mb-0 {
        font-size: 16px;
    }
    body .widget-header h4 {
        padding: 20px !important;
    }
    
    body.dark .widget-header h4 {
        padding: 20px 20px 0px 20px !important;
    }

    .breadcrumb-item+.breadcrumb-item::before {
    float: left;
    padding-right: var(--bs-breadcrumb-item-padding-x);
    color: var(--bs-breadcrumb-divider-color);
    content: var(--bs-breadcrumb-divider, "/");
}
</style>

<div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header" style="padding: 0px !important;width: 100% !important;">
            <div class="row" style="padding: 0px !important;margin: 0px !important;">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12" style="padding: 0px;">
                    <h4>Meus Produtos Cadastrados</h4>
                </div>
            </div>
        </div>
        
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Valor / Categoria</th>
                            <th class="text-center" scope="col">Status</th>
                            <th class="text-center" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)

                        <tr>
                            <td>
                                <div class="media">
                                    <div class="avatar me-2">
                                        <img alt="avatar" src="{{ asset('storage') }}/{{ $product->avatar }}"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6 class="mb-0">{{ $product->name }}</h6>
                                        <span>#{{ $product->id }}</span>
                                    </div>
                                </div>
                            </td>
                            
                            <td>
                                <p class="mb-0">BRL {{ number_format($product->value/100, 2, ',', ' '); }}</p>
                                <span class="text-success">{{ $categorias[$product->category - 1]->name }}</span>
                            </td>
                            
                            <td class="text-center">
                                <span class="badge {{ $product->status == 1 ? 'badge-light-success' : 'badge-light-danger' }}">
                                    {{ $product->status == 1 ? 'Disponível' : 'Indisponível' }}
                                </span>
                            </td>
                            
                            <td class="text-center">
                                <div class="action-btns">
                                    <!--
                                    <a href="javascript:void(0);" class="action-btn btn-view bs-tooltip me-2"
                                        data-toggle="tooltip" data-placement="top" title="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                    -->
                                    <a href="{{ route('editProduct', ['id' => $product->id]) }}" class="action-btn btn-edit bs-tooltip me-2"
                                        data-toggle="tooltip" data-placement="top" title="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-edit-2">
                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);" class="action-btn btn-delete bs-tooltip"
                                        data-toggle="tooltip" data-placement="top" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
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

<script src="{{ asset('cork/src/plugins/src/global/vendors.min.js') }}"></script>
<script src="{{ asset('cork/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('cork/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
<script src="{{ asset('cork/src/plugins/src/waves/waves.min.js') }}"></script>
<script src="{{ asset('cork/src/plugins/src/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset('cork/src/assets/js/custom.js') }}"></script>
<script src="{{ asset('cork/src/assets/js/scrollspyNav.js') }}"></script>
<script>
    checkall('checkbox_parent_all', 'checkbox_child');
    checkall('hover_parent_all', 'hover_child');
    checkall('striped_parent_all', 'striped_child');
    checkall('bordered_parent_all', 'bordered_child');
    checkall('mixed_parent_all', 'mixed_child');
    checkall('noSpacing_parent_all', 'noSpacing_child');
    checkall('custom_mixed_parent_all', 'custom_mixed_child');
</script>