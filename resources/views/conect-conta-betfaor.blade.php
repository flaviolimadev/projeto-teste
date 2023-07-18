@extends('_layouts.basev2')

@section('titulo','Área de indicações')
@section('page', 'Bot Betfait / Config Account')

@section('conteudo')

<div class="row">

    <div id="form_grid_layouts" class="col-lg-12">
        <div class="seperator-header">
            <h4 class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                Use os mesmos dados que você usa para logar na sua conta.
            </h4>
        </div>
    </div>

    <div class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="simple-pill">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-home-icon" type="button" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            Conectar Conta
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-icon" type="button" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            Gerenciamento
                        </button>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-icon-tab" tabindex="0">

                        <div class="widget-content widget-content-area">

                             <form action="{{ route('addAcount') }}" method="post">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="fullName">Acesso</label>
                                        <input type="text" class="form-control" name="conta" placeholder="E-mail/nome de usuário">
                                    </div>
                                    <div class="col">
                                        <label for="fullName">Senha</label>
                                        <input type="password" class="form-control" name="acesso" placeholder="Senha">
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <label for="fullName">Plataforma</label>
                                            <select class="form-control" name="plataforma">
                                                <option value="Betano" >Betano</option>
                                                <option value="Bet365" >Bet365</option>
                                                <option value="Betfair" >Betfair</option>
                                                <option value="Parimatch" >Parimatch</option>
                                                <option value="Pin-Up" >Pin-Up</option>
                                                <option value="22Bet" >22Bet</option>
                                                <option value="22Bet" >PokerStars</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="time" class="btn btn-primary" value="Conectar conta">
                            </form>


                         </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-icon-tab" tabindex="0">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Informe o valor que deseja investir em cada operação (Valor em % sobre a banca).</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="alert alert-light-primary alert-dismissible fade show border-0 mb-4" role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-bs-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Observação!</strong> Para desabilitar o robô, basta deixar como zero. </div>
                            <form action="{{ route('addConfig') }}" method="post">
                                @csrf
                                 <div class="row mb-4">
                                     <div class="col">
                                         <input type="number" class="form-control" name="stake" placeholder="Quantos % por entrada" value="{{ $conta->stake ?? 0 }}">
                                     </div>
                                 </div>
                                 <input type="submit" name="time" class="btn btn-primary" value="Salvar">
                             </form>

                         </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
        <div class="widget widget-one_hybrid widget-followers">
            <div class="widget-heading">
                <div class="w-title">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg>
                    </div>
                    <div class="">
                        <p class="w-value">Banca Inicial</p>
                        @if(isset($conta->balance))
                        <h5 class="">R$ {{ number_format( $conta->balance_start/100 ?? 0, 2, ',', '.') }}</h5>
                        @else
                        <h5 class="">R$ 0,00</h5>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
        <div class="widget widget-one_hybrid widget-followers">
            <div class="widget-heading">
                <div class="w-title">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <div class="">
                        <p class="w-value">Banca Atual</p>
                        @if(isset($conta->balance))
                        <h5 class="">R$ {{ number_format( $conta->balance/100 ?? 0, 2, ',', '.') }}</h5>
                        @else
                        <h5 class="">R$ 0,00</h5>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
        <div class="widget widget-one_hybrid widget-followers">
            <div class="widget-heading">
                <div class="w-title">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="">
                        <p class="w-value">Lucro</p>
                        @if(isset($conta->balance) && $conta->balance != 0)
                        <h5 class="">R$ {{ number_format( ($conta->balance - $conta->balance_start)/100 ?? 0, 2, ',', '.') }} ({{ (($conta->balance - $conta->balance_start) * 100 )/$conta->balance_start }}%)</h5>
                        @else
                        <h5 class="">R$ 0,00 (0%)</h5>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Suas Contas.</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#ID</th>
                                <th scope="col">Acesso</th>
                                <th class="text-center" scope="col">Conta</th>
                                <th class="text-center" scope="col">data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $contas as $cc )
                            <tr>

                                <td>{{ $cc->id }}</td>

                                <td class="text-center">{{ $cc->conta }}</td>
                                <td class="text-center">{{ $cc->plataforma }}</td>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <span class="table-inner-text">{{ $cc->created_at->format('d/m/Y H:i') }}</span>
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

@endsection
