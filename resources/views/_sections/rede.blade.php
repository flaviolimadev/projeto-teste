<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .area-title-rede {
        padding: 0px;
    }
    span.area-ativo-rede, .widget-content.widget-content-area {
        border-radius: 10px;
    }
    span.area-ativo-rede {
        margin-bottom: 5px;
    }
    hr {
        width: calc(100% - 32px) !important;
    }
    @media (max-width: 1060px) {
        .tag-rede {
            margin: 15 0px 10px;
            gap: 10px;
        }
        .item-rede {
            margin: 0px !important;
        }
        span.area-ativo-rede {
            margin-bottom: 0px;
        }
    }
</style>

<div class="area-title-rede" style="display: block;">
    <span class="title-rede">Todas as suas compras feitas na plataforma</span>

    <div class="tag-rede">
        <div class="item-rede">
            <span class="quantidade">{{ sprintf("%02s",$data_rede['total']) }} </span>
            <span>Total de usuários na rede.</span>
        </div>

        <div class="item-rede">
            <span class="quantidade">{{ sprintf("%02s",count($Affiliates_hoje)) }}</span>
            <span>Diretos cadastrados.</span>
        </div>

        <div class="item-rede">
            <span class="quantidade">$ {{ number_format($indicacao_direta/100,2,',','.') }}</span>
            <span>Ganhos indicação direta.</span>
        </div>

        <div class="item-rede">
            <span class="quantidade">${{ number_format($indicacao_residual/100,2,',','.') }}</span>
            <span>Ganhos de residual.</span>
        </div>
    </div>

    @for($i = 0; $i < $graduacao; $i++)

        @endfor

        <span class="area-ativo-rede"> <!-- Parabéns você está ativo <i class="fa-sharp fa-solid fa-square-check"></i> --> Seu nível de qualificação é {{ $i }} estrela.
            @for($i = 0; $i < $graduacao; $i++)
                <i class="fa-solid fa-star"></i>
            @endfor
        </span>
</div>

<div class="widget-content widget-content-area">
    <h6>Indique seus amigos</h6>
    <div class="clipboard copy-txt">
        <p class="mb-4"><span id="advanced-paragraph">{{ route('registerAffiliate', ['id' => $AuthUser->id]) }}</span></p>
        <a class="mb-2 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#advanced-paragraph">Copiar link</a>
        <a class="mb-2 btn btn-warning" href="javascript:;" data-clipboard-action="copy" data-clipboard-text="ctrlser">Copiar codigo</a>
    </div>

    <div class="bio-skill-box">
        <div class="row">

        </div>
    </div>
</div>


<div class="body genealogy-body genealogy-scroll">
    <div class="genealogy-tree">
        <ul>
            <li>


                <a href="javascript:void(0);">
                    <div class="member-view-box {{ sizeof($vez) > 0 ? 'setinha' : '' }}">
                        <div class="member-image">
                            <img src="{{ asset('storage') }}/{{ $AuthUser->avatar }}" alt="Member">
                        </div>
                        <div class="member-details">
                            <h3>Você ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $AuthUser->id )) }})</h3>
                            <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                        </div>
                    </div>
                </a>
                <ul class="">

                    @foreach (App\Http\Controllers\inviteController::getDireto( $AuthUser->id ) as $data)
                    <li>
                        <a href="javascript:void(0);">
                            <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data['id'] )) > 0 ? 'setinha' : '' }} }}">
                                <div class="member-image">
                                    <img src="{{ asset('storage') }}/{{ ($data['avatar'] )}}" alt="Member">
                                </div>
                                <div class="member-details">
                                    {{ App\Http\Controllers\inviteController::getAtivo( $data['id'] ) >= 1 ? '✅' : '' }}
                                    <h3>{{ explode(' ', $data['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data['id'] )) }})</h3>
                                    <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                </div>
                            </div>
                        </a>
                        <ul>
                            @foreach (App\Http\Controllers\inviteController::getDireto( $data['id'] ) as $data2)
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data2['id'] )) > 0 ? 'setinha' : '' }} }}">
                                        <div class="member-image">
                                            <img src="{{ asset('storage') }}/{{ ($data2['avatar'] )}}" alt="Member">
                                        </div>
                                        <div class="member-details">
                                            {{ App\Http\Controllers\inviteController::getAtivo( $data2['id'] ) >= 1 ? '✅' : '' }}
                                            <h3>{{ explode(' ', $data2['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data2['id'] )) }})</h3>
                                            <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                        </div>
                                    </div>
                                </a>
                                <ul>
                                    @foreach (App\Http\Controllers\inviteController::getDireto( $data2['id'] ) as $data3)
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data3['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                <div class="member-image">
                                                    <img src="{{ asset('storage') }}/{{ ($data['avatar'] )}}" alt="Member">
                                                </div>
                                                <div class="member-details">
                                                    {{ App\Http\Controllers\inviteController::getAtivo( $data3['id'] ) >= 1 ? '✅' : '' }}
                                                    <h3>{{ explode(' ', $data3['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data3['id'] )) }})</h3>
                                                    <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                </div>
                                            </div>
                                        </a>
                                        <ul>
                                            @foreach (App\Http\Controllers\inviteController::getDireto( $data3['id'] ) as $data4)
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data4['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                        <div class="member-image">
                                                            <img src="{{ asset('storage') }}/{{ ($data4['avatar'] )}}" alt="Member">
                                                        </div>
                                                        <div class="member-details">
                                                            {{ App\Http\Controllers\inviteController::getAtivo( $data4['id'] ) >= 1 ? '✅' : '' }}
                                                            <h3>{{ explode(' ', $data4['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data4['id'] )) }})</h3>
                                                            <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                        </div>
                                                    </div>
                                                </a>
                                                <ul>
                                                    @foreach (App\Http\Controllers\inviteController::getDireto( $data4['id'] ) as $data5)
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data5['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                                <div class="member-image">
                                                                    <img src="{{ asset('storage') }}/{{ ($data5['avatar'] )}}" alt="Member">
                                                                </div>
                                                                <div class="member-details">
                                                                    {{ App\Http\Controllers\inviteController::getAtivo( $data5['id'] ) >= 1 ? '✅' : '' }}
                                                                    <h3>{{ explode(' ', $data5['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data5['id'] )) }})</h3>
                                                                    <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <ul>
                                                            @foreach (App\Http\Controllers\inviteController::getDireto( $data5['id'] ) as $data6)
                                                            <li>
                                                                <a href="javascript:void(0);">
                                                                    <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data6['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                                        <div class="member-image">
                                                                            <img src="{{ asset('storage') }}/{{ ($data6['avatar'] )}}" alt="Member">
                                                                        </div>
                                                                        <div class="member-details">
                                                                            {{ App\Http\Controllers\inviteController::getAtivo( $data6['id'] ) >= 1 ? '✅' : '' }}
                                                                            <h3>{{ explode(' ', $data6['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data6['id'] )) }})</h3>
                                                                            <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <ul>
                                                                    @foreach (App\Http\Controllers\inviteController::getDireto( $data6['id'] ) as $data7)
                                                                    <li>
                                                                        <a href="javascript:void(0);">
                                                                            <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data7['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                                                <div class="member-image">
                                                                                    <img src="{{ asset('storage') }}/{{ ($data7['avatar'] )}}" alt="Member">
                                                                                </div>
                                                                                <div class="member-details">
                                                                                    {{ App\Http\Controllers\inviteController::getAtivo( $data7['id'] ) >= 1 ? '✅' : '' }}
                                                                                    <h3>{{ explode(' ', $data7['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data7['id'] )) }})</h3>
                                                                                    <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                        <ul>
                                                                            @foreach (App\Http\Controllers\inviteController::getDireto( $data7['id'] ) as $data8)
                                                                            <li>
                                                                                <a href="javascript:void(0);">
                                                                                    <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data8['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                                                        <div class="member-image">
                                                                                            <img src="{{ asset('storage') }}/{{ ($data8['avatar'] )}}" alt="Member">
                                                                                        </div>
                                                                                        <div class="member-details">
                                                                                            {{ App\Http\Controllers\inviteController::getAtivo( $data8['id'] ) >= 1 ? '✅' : '' }}
                                                                                            <h3>{{ explode(' ', $data8['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data8['id'] )) }})</h3>
                                                                                            <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                                <ul>
                                                                                    @foreach (App\Http\Controllers\inviteController::getDireto( $data8['id'] ) as $data9)
                                                                                    <li>
                                                                                        <a href="javascript:void(0);">
                                                                                            <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data9['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                                                                <div class="member-image">
                                                                                                    <img src="{{ asset('storage') }}/{{ ($data9['avatar'] )}}" alt="Member">
                                                                                                </div>
                                                                                                <div class="member-details">
                                                                                                    {{ App\Http\Controllers\inviteController::getAtivo( $data9['id'] ) >= 1 ? '✅' : '' }}
                                                                                                    <h3>{{ explode(' ', $data9['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data9['id'] )) }})</h3>
                                                                                                    <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                        <ul>
                                                                                            @foreach (App\Http\Controllers\inviteController::getDireto( $data9['id'] ) as $data10)
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <div class="member-view-box {{ sizeof(App\Http\Controllers\inviteController::getDireto( $data10['id'] )) > 0 ? 'setinha' : '' }} }}">
                                                                                                        <div class="member-image">
                                                                                                            <img src="{{ asset('storage') }}/{{ ($data10['avatar'] )}}" alt="Member">
                                                                                                        </div>
                                                                                                        <div class="member-details">
                                                                                                            {{ App\Http\Controllers\inviteController::getAtivo( $data10['id'] ) >= 1 ? '✅' : '' }}
                                                                                                            <h3>{{ explode(' ', $data10['nome'])[0] }} ({{ sizeof(App\Http\Controllers\inviteController::getDireto( $data10['id'] )) }})</h3>
                                                                                                            <img class="tag-nacionalidade" src="https://www.gov.br/planalto/pt-br/conheca-a-presidencia/acervo/simbolos-nacionais/bandeira/bandeiragrande.jpg" alt="Nacionalidade">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>

                                                                                            </li>
                                                                                            @endforeach
                                                                                        </ul>

                                                                                    </li>
                                                                                    @endforeach
                                                                                </ul>

                                                                            </li>
                                                                            @endforeach
                                                                        </ul>

                                                                    </li>
                                                                    @endforeach
                                                                </ul>

                                                            </li>
                                                            @endforeach
                                                        </ul>

                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</div>
<hr>
<div class="row analytics" style="padding: 0px;margin: 0px !important;">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="padding: 0px; margin: 0px !important;">
        <div class="widget">
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Nível #</th>
                                <th>Total de usuários</th>
                                <th>Usuários ativos</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">Nível #1</td>
                                <td><p class="text-success">{{ $data_rede['nv1'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv1'][1] }}</p></td>
                                <td><p class="text-success">✔️</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #2</td>
                                <td><p class="text-success">{{ $data_rede['nv2'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv2'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 2 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #3</td>
                                <td><p class="text-success">{{ $data_rede['nv3'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv3'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 3 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #4</td>
                                <td><p class="text-success">{{ $data_rede['nv4'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv4'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 4 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #5</td>
                                <td><p class="text-success">{{ $data_rede['nv5'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv5'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 5 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #6</td>
                                <td><p class="text-success">{{ $data_rede['nv6'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv6'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #7</td>
                                <td><p class="text-success">{{ $data_rede['nv7'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv7'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #8</td>
                                <td><p class="text-success">{{ $data_rede['nv8'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv8'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #9</td>
                                <td><p class="text-success">{{ $data_rede['nv9'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv9'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #10</td>
                                <td><p class="text-success">{{ $data_rede['nv10'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv10'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #11</td>
                                <td><p class="text-success">{{ $data_rede['nv11'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv11'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>

                            <tr>
                                <td class="text-center">Nível #12</td>
                                <td><p class="text-success">{{ $data_rede['nv12'][2] }}</p></td>
                                <td><p class="text-success">{{ $data_rede['nv12'][1] }}</p></td>
                                <td><p class="text-success">{{ $graduacao >= 6 ? "✔️" : "🔒"}}</p></td>

                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
