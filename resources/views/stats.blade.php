@extends('_layouts.basev2')

@section('titulo','Statisticas')
@section('page', 'Statisticas')

@section('conteudo')

<style>
.itens-historico {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.title-historico {
    background: #cdcdcd;
    font-weight: 700;
    text-transform: uppercase;
    padding: 1rem;
    font-size: 1rem;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    gap: 1rem;
}

.title-historico p, body.dark .title-historico p {
    margin-bottom: 0px;
}

body.dark .title-historico, body.dark .footer-historico {
    background: #242535;
}

body.dark .title-historico p {
    color: #fff;
}

body.dark .conteudo-historico {
    background: #171721;
}

body.dark .conteudo-historico {
    top: 0px;
    border-radius: 10px;
}

.title-historico:hover {
    transition: .5s;
    background-color: rgba(0, 0, 0, 0.25);
}

.title-historico p:nth-child(2) {
    width: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    background: #00c275;
    border: 1px solid #008b54;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    text-shadow: 0px 1px 3px #000;
    box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
}

.title-historico p:nth-child(2):hover {
    transition: .3s;
    background: #008b54;
}

.conteudo-historico {
    background: #c0c0c0;
    position: relative;
    top: -8px;
    border-radius: 0px 0px 10px 10px;
}

.casas-historico {
    padding: 1rem 1rem 0;
}

.conteudo-historico li {
    display: flex;
    flex-direction: column;
    list-style: none;
    margin-bottom: 1rem;
}

.conteudo-historico li p {
    margin-bottom: 0px;
    font-weight: 600;
}

.conteudo-historico li p:nth-child(1) {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 700;
    text-transform: uppercase;
}

.conteudo-historico li p:nth-child(1) span:nth-child(1)::before {
    content: 'â€¢';
    position: relative;
    margin-right: 3px;
    top: -1px;
    font-weight: 600;
}

.footer-historico {
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    background: #cdcdcd;
    border-radius: 0px 0px 10px 10px;
}

.footer-historico li {
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0px;
}

.footer-historico li:nth-child(1) {
    border-right: 1px solid #a9a9a9;
}
</style>
<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-card-five">
        <div class="widget-content">
            <div class="account-box">

                <div class="info-box">
                    <div class="icon">
                        <span>
                            <img src="https://cdn-icons-png.flaticon.com/512/1170/1170609.png" alt="money-bag">
                        </span>
                    </div>

                    <div class="balance-info">
                        <h6>Total de Operações</h6>
                        <p>{{ count($operacoes) }}</p>
                    </div>
                </div>

                <div class="card-bottom-section">
                    <div><span class="badge badge-light-success">+ {{ count($operacoes_mes) }} Este mês <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg></span></div>
                    <a href="javascript:void(0);" class="">Ver operações</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-card-one">
        <div class="widget-content">


            <p style="margin-top: 5%;margin-bottom: 3%;">É importante lembrar que as estatísticas não levam em consideração as analises do modo turbo, somente as Tips Premium devido a alta volatilidade, tendo em vista que o modo turbo tem uma media de 5 tips a cada 10 minutos.</p>

            <div class="w-action">
                <div class="read-more">
                    <a href="{{ route('faq') }}">Consultar Faq <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-right"><polyline points="13 17 18 12 13 7"></polyline><polyline points="6 17 11 12 6 7"></polyline></svg></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="s-col"></div>
<hr>
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
    <select id="select-beast" placeholder="Select a person..." autocomplete="off" tabindex="-1" class="tomselected ts-hidden-accessible">
        <option value="">Select a person...</option>
        <option value="3">Nikola Tesla</option>
        <option value="4">Thomas Edison</option>
        <option value="1">Nikola</option>
        <option value="5">Arnold Schwarzenegger</option>
    </select>
</div>
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
    <div class="simple-pill">

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">BETANO</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">BET365</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">BETFAIR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-PARIMATCH-tab" data-bs-toggle="pill" data-bs-target="#pills-PARIMATCH" type="button" role="tab" aria-controls="pills-PARIMATCH" aria-selected="false">PARIMATCH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-PINUP-tab" data-bs-toggle="pill" data-bs-target="#pills-PINUP" type="button" role="tab" aria-controls="pills-PINUP" aria-selected="false">PINUP</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-22BET-tab" data-bs-toggle="pill" data-bs-target="#pills-22BET" type="button" role="tab" aria-controls="pills-22BET" aria-selected="false">22BET</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-888SPORT-tab" data-bs-toggle="pill" data-bs-target="#pills-888SPORT" type="button" role="tab" aria-controls="pills-888SPORT" aria-selected="false">888SPORT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-BETWARRIOR" data-bs-toggle="pill" data-bs-target="#pills-BETWARRIOR" type="button" role="tab" aria-controls="pills-BETWARRIOR" aria-selected="false">BETWARRIOR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-POCKERSTAR-tab" data-bs-toggle="pill" data-bs-target="#pills-POCKERSTAR" type="button" role="tab" aria-controls="pills-POCKERSTAR" aria-selected="false">POCKERSTAR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-BETSSON-tab" data-bs-toggle="pill" data-bs-target="#pills-BETSSON" type="button" role="tab" aria-controls="pills-BETSSON" aria-selected="false">BETSSON</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-BETNACIONAL-tab" data-bs-toggle="pill" data-bs-target="#pills-BETNACIONAL" type="button" role="tab" aria-controls="pills-BETNACIONAL" aria-selected="false">BETNACIONAL</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-LEOVEGAS-tab" data-bs-toggle="pill" data-bs-target="#pills-LEOVEGAS" type="button" role="tab" aria-controls="pills-LEOVEGAS" aria-selected="false">LEOVEGAS</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($betano as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>
                            
                            
                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                                
                            <a href="#" class="action-btn btn-edit bs-tooltip me-2 tag-edit" data-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Editar Curso">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($bet365 as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($betfair as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-PARIMATCH" role="tabpanel" aria-labelledby="pills-PARIMATCH-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($parimatch as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-PINUP" role="tabpanel" aria-labelledby="pills-PINUP-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($pinup as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-22BET" role="tabpanel" aria-labelledby="pills-22BET-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($a22bet as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-888SPORT" role="tabpanel" aria-labelledby="pills-888SPORT-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($a888sport as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-BETWARRIOR" role="tabpanel" aria-labelledby="pills-BETWARRIOR-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($betwarrior as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-POCKERSTAR" role="tabpanel" aria-labelledby="pills-POCKERSTAR-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($pockerstar as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-BETSSON" role="tabpanel" aria-labelledby="pills-BETSSON-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($betsson as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-BETNACIONAL" role="tabpanel" aria-labelledby="pills-BETNACIONAL-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($betnacional as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="pills-LEOVEGAS" role="tabpanel" aria-labelledby="pills-LEOVEGAS-tab" tabindex="0">
                <div class="itens-historico">

                    @foreach ($leovegas as $tip )
                    <div class="item-historico">

                        <div class="title-historico" data-bs-toggle="collapse" data-bs-target="#collapseHistorico1{{ $tip->id }}" aria-expanded="false" aria-controls="#collapseHistorico1{{ $tip->id }}">
                            <p>
                                <span>{{ $tip->quando }}</span>
                            </p>

                            <p>
                                Lucro:
                                <span>+{{ $tip->lucro }}%</span>
                            </p>
                        </div>

                        <div class="collapse conteudo-historico" id="collapseHistorico1{{ $tip->id }}">
                            <div class="casas-historico">
                                <li>
                                    <p>
                                        <span>{{ $tip->casa01 }}</span>
                                        <span>{{ $tip->odds01 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao01 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <span>{{ $tip->casa02 }}</span>
                                        <span>{{ $tip->odds02 }}</span>
                                    </p>
                                    <p>{{ $tip->descricao02 }}</p>
                                    <p>
                                        <span>{{ $tip->confronto }}</span>
                                    </p>

                                </li>

                            </div>

                            <div class="footer-historico">
                                <li>
                                    <p>Investido</p>
                                    <p>R$ 100</p>
                                </li>
                                <li>
                                    <p>Retornos</p>
                                    <p>R$ {{ number_format(((100 * floatval(str_replace(",", ".", $tip->lucro))) / 100) + 100, 2, ",", "."); }}</p>
                                </li>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('cork/src/plugins/src/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('cork/src/assets/js/dashboard/dash_2.js') }}"></script>
<script src="{{ asset('cork/src/plugins/src/tomSelect/tom-select.base.js') }}"></script>
<script src="{{ asset('cork/src/plugins/src/tomSelect/custom-tom-select.js') }}"></script>
<script>
    var sCol = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar: {
          show: false,
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Apostas Ganhas',
        data: [{{ count($betano->where('result','==', 'betano') ) }}, {{ count($bet365->where('result','==', 'bet365')) }}, {{ count($betfair->where('result','==', 'betfair')) }}, {{ count($parimatch->where('result','==', 'parimatch')) }}, {{ count($pinup->where('result','==', 'pinup')) }}, {{ count($a22bet->where('result','==', '22bet')) }}, {{ count($a888sport->where('result','==', '888sport')) }}, {{ count($betwarrior->where('result','==', 'betwarrior')) }}, {{ count($pockerstar->where('result','==', 'pockerstar')) }}, {{ count($betsson->where('result','==', 'betsson')) }}, {{ count($betnacional->where('result','==', 'betnacional')) }}, {{ count($leovegas->where('result','==', 'leovegas')) }}]
    }, {
        name: 'Apostas Perdidas',
        data: [{{ count($betano->where('result','!=', 'betano') ) }}, {{ count($bet365->where('result','!=', 'bet365')) }}, {{ count($betfair->where('result','!=', 'betfair')) }}, {{ count($parimatch->where('result','!=', 'parimatch')) }}, {{ count($pinup->where('result','!=', 'pinup')) }}, {{ count($a22bet->where('result','!=', '22bet')) }}, {{ count($a888sport->where('result','!=', '888sport')) }}, {{ count($betwarrior->where('result','!=', 'betwarrior')) }}, {{ count($pockerstar->where('result','!=', 'pockerstar')) }}, {{ count($betsson->where('result','!=', 'betsson')) }}, {{ count($betnacional->where('result','!=', 'betnacional')) }}, {{ count($leovegas->where('result','!=', 'leovegas')) }}]
    },{
        name: 'Apostas Totais',
        data: [{{ count($betano) }}, {{ count($bet365) }}, {{ count($betfair) }}, {{ count($parimatch) }}, {{ count($pinup) }}, {{ count($a22bet) }}, {{ count($a888sport) }}, {{ count($betwarrior) }}, {{ count($pockerstar) }}, {{ count($betsson) }}, {{ count($betnacional) }}, {{ count($leovegas) }}]
    }],
    xaxis: {
        categories: ['BETANO', 'BET365', 'BETFAIR', 'PARIMATCH ', 'PINUP', '22bet', '888SPORT', 'BETWARRIOR ', 'POCKERSTAR', 'BETSSON ', 'BETNACIONAL ', 'LEOVEGAS'],
    },
    yaxis: {
        title: {
            text: 'Número de Operações'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return "" + val + " Enviadas"
            }
        }
    }
}

var chart = new ApexCharts(
    document.querySelector("#s-col"),
    sCol
);

chart.render();



new TomSelect("#select-beast",{
    create: true,
    sortField: {
        field: "text",
        direction: "asc"
    }
});
</script>
@endsection
