<style>
    .widget-account-invoice-one .invoice-box .acc-amount, body.dark .widget-account-invoice-one .invoice-box .acc-amount { 
        
        text-align: center !important;
        font-size: 23px !important;
        font-weight: 700 !important;
        margin-bottom: 0px !important;
        color: #009688 !important;
        width: 100% !important;
    }
    
</style>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-card-one page-finance" style="margin-right: 1rem;">

        <div class="widget widget-account-invoice-one">

            <div class="widget-heading">
                <h5 class="" style="margin-left: 5%;">Informações da conta</h5>
            </div>

            <div class="widget-content">
                <div class="invoice-box">

                    <div class="acc-total-info">
                        <h5>Balanço</h5>
                        <p class="acc-amount">BRL {{ number_format($AuthUser->balance/100,2,',','.') }}</p>
                    </div>

                    <div class="acc-total-info">
                        <h5>Bônus</h5>
                        <p class="acc-amount">BRL {{ number_format($AuthUser->bonus/100,2,',','.') }}</p>
                    </div>

                    <div class="inv-detail">
                        <div class="info-detail-1">
                            <p>Comissão de indicação</p>
                            <p>BRL {{ number_format($indicacao_direta/100,2,',','.') }}</p>
                        </div>
                        <div class="info-detail-2">
                            <p>Comissão residual</p>
                            <p>BRL {{ number_format($indicacao_residual/100,2,',','.') }}</p>
                        </div>
                        <div class="info-detail-3 info-sub">
                            <div class="info-detail">
                                <p>Extras este mês</p>
                                <p>BRL 0,00</p>
                            </div>
                            <div class="info-detail-sub">
                                <p>Saques concluidos</p>
                                <p>BRL {{ number_format(App\Http\Controllers\financeController::saque_total( $AuthUser->id ) / 100,2,',','.') }}</p>
                            </div>
                            <div class="info-detail-sub">
                                <p>Outros</p>
                                <p>BRL 0,00</p>
                            </div>
                        </div>
                    </div>



                    <div class="widget-content widget-content-area border-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-transf-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-transf-icon" type="button" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-repeat">
                                        <polyline points="17 1 21 5 17 9"></polyline>
                                        <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                                        <polyline points="7 23 3 19 7 15"></polyline>
                                        <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                                    </svg>
                                    Transferencia
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-saque-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-saque-icon" type="button" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down">
                                        <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                        <polyline points="17 18 23 18 23 12"></polyline>
                                    </svg>
                                    Saque
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-transf-icon" role="tabpanel" aria-labelledby="pills-transf-icon-tab" tabindex="0">
                                <h4>Trânsferencia entre usuários</h4>

                                <p style="padding: 0px;margin-bottom: 1rem;width: 100% !important;"> Ao fazer a transferência entre usuários o saldo transferido não servirá mais para SACAR somente para ATIVAR PLANOS ou LICENÇAS. </p>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Email</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="email">
                                </div>



                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Descrição</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="descricao">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Valor</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="valor">
                                </div>

                                <a href="#" class="btn btn-outline" style="background-color: #689f38;color: white;" onclick="user_transfer()">Transferir</a>
                            </div>

                            <div class="tab-pane fade" id="pills-saque-icon" role="tabpanel" aria-labelledby="pills-saque-icon-tab" tabindex="0">
                                <h4>Saque</h4>

                                <p style="padding: 0px;margin-bottom: 1rem;width: 100% !important;">
                                    Saque todas as Segundas.<br>
                                    Mínimo para saque R$ 100<br>
                                    Taxa de saque: 5%<br>
                                    Prazo de pagamento: até 72 hs para pagar
                                </p>

                                <div class="form-group col-md-12" style="padding: 0px;">
                                    <select id="carteira" class="form-control">

                                        @foreach($accounts as $account)

                                        <option selected="" value="{{ $account->id }}">
                                            @switch($account->type)

                                            @case(0)
                                            Chave pix:
                                            @break

                                            @case(1)
                                            Carteria Btc:
                                            @break

                                            @case(2)
                                            Carteria Eth:
                                            @break

                                            @case(3)
                                            Carteria BRL:
                                            @break

                                            @endswitch

                                            {{ $account->account }}

                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <hr>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Valor</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" id="valor_saque">

                                </div>

                                <a href="#" class="btn btn-outline" style="background-color: #689f38;color: white;" onclick="saque()">Solicitar Saque</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


