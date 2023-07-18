<style>
    .widget-table-two .table > tbody > tr > td:first-child {
        padding: 10px 21px 10px 21px;
    }
    
    hr {
        width: calc(100% - 32px) !important;
    }
</style>

<div class="widget widget-table-two">
    <div class="widget-content widget-content-area border-tab">
        <div class="simple-pill">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-usercad-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-usercad-icon" type="button" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-repeat"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                        </svg>
                        Cadastrados
                    </button>
                </li>
        
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-venda-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-venda-icon" type="button" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline>
                        </svg> 
                        Vendas diretas
                    </button>
                </li>
            </ul>
            
            <div class="tab-content" id="pills-tabContent" style="padding: 1rem 1rem;">
                <div class="tab-pane fade show active" id="pills-usercad-icon" role="tabpanel" aria-labelledby="pills-usercad-icon-tab" tabindex="0" style="padding: 0px;">
                    <div class="widget-heading">
                        <h6 style="margin-bottom: 1rem;">Usuários cadastrados através do seu link</h6>
                    </div>
                    
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th class="text-center" scope="col">Data</th>
                                        <th class="text-center" scope="col">Contato</th>
                                        <th class="text-center" scope="col">Email</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($affiliates_array as $item)
                                    
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="avatar me-2">
                                                    <img alt="avatar" src="{{ asset('storage') }}/{{ $item->avatar }}" class="rounded-circle"/>
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">{{ $item->name }}</h6>
                                                    <span>ID #{{ $item->id }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td class="text-center">
                                            <span class="badge">{{ $item->created_at->format('d/m/Y') }}</span>
                                        </td>
                                        
                                        <td class="text-center">
                                            <span class="badge">
                                                {{ $item->telephone != '' ? $item->telephone : 'Não informado'  }}
                                            </span>
                                        </td>
                                        
                                        <td class="text-center">
                                            <span class="badge"> {{ $item->email  }} </span>
                                        </td>
                                    </tr>
                            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        
                <div class="tab-pane fade" id="pills-venda-icon" role="tabpanel" aria-labelledby="pills-venda-icon-tab" tabindex="0" style="padding: 0px;">
                    <h6>Saque</h6>
        
                    <hr>
        
                    <div class="widget-heading">
                        <h6 style="margin-bottom: 1rem;">Usuários cadastrados através do seu link</h6>
                    </div>
        
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th class="text-center" scope="col">Usuário</th>
                                        <th class="text-center" scope="col">Plano</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <th class="text-center" scope="col">Data de compra</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($vendas_array as $item)
                            
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="avatar me-2">
                                                    <img alt="avatar" src="{{ asset('storage') }}/{{ $item[1]->avatar }}" class="rounded-circle"/>
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <h6 class="mb-0">{{ $item[1]->name }}</h6>
                                                    <span>ID #{{ $item[0]->id }}</span>
                                                </div>
                                            </div>
                                        </td>
                            
                                        <td class="text-center">
                                            <span class="badge">
                                                @ {{ $item[1]->user }}
                                            </span>
                                        </td>
                            
                                        <td class="text-center">
                                            <span class="badge">
                                                @switch( $item[0]->value )
                            
                                                @case(10000)
                                                Plano Gold
                                                @break
                            
                                                @case(6000)
                                                Plano Prata
                                                @break
                            
                                                @case(2000)
                                                Plano Start
                                                @break
                                                @endswitch
                                            </span>
                                        </td>
                            
                                        <td class="text-center">
                                            @switch($item[0]->status )
                            
                                                @case(0)
                                                <span class="badge badge-warning">Pendente</span>
                                                @break
                            
                                                @case(1)
                                                <span class="badge badge-success">Confirmado</span>
                                                @break
                            
                                                @case(2)
                                                <span class="badge badge-success">Confirmado</span>
                                                @break
                            
                                                @case(3)
                                                <span class="badge badge-danger">Cancelado</span>
                            
                                                @break
                                            @endswitch
                                        </td>
                            
                                        <td class="text-center">
                                            <span class="badge">
                                                {{ $item[1]->updated_at->format('d/m/Y') }}
                                            </span>
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
