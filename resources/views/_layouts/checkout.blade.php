
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Checkout</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('ProjetoCheckout/css/style.css')}}">
</head>

<style>
    div#payment_pix {
        padding: 1rem;
        background: #292a2e;
        border-radius: 10px;
    }
    div#payment_pix .cima-pagamento {
        width: 100%;
    }
    div#payment_pix .cima-pagamento img {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }
    div#payment_pix .cima-pagamento img:nth-child(1) {
        margin-bottom: 1rem !important;
    }
    div#payment_pix .cima-pagamento img:nth-child(2) {
        border-radius: 10px;
    }
    textarea#exampleFormControlTextarea1 {
        background: #fff !important;
    }
    button.btn-copypix {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        background-color: #32bcad;
        color: #FFF;
        padding: 10px;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        flex-wrap: wrap;
    }
    button.btn-copypix svg {
        width: 20px;
        fill: #fff;
    }
    button.btn-copypix:hover {
        transition: .3s;
        background-color: #289f92;
    }








    div#payment_cripto {
        padding: 1rem;
        background: #292a2e;
        border-radius: 10px;
    }
    div#payment_cripto .cima-pagamento {
        width: 100%;
    }
    div#payment_cripto .cima-pagamento img {
        position: relative;
        left: 50%;
        transform: translateX(-50%);
    }
    div#payment_cripto .cima-pagamento img:nth-child(1) {
        margin-bottom: 1rem !important;
    }
    div#payment_cripto .cima-pagamento img:nth-child(2) {
        border-radius: 10px;
    }
    textarea#exampleFormControlTextarea1_cripto {
        background: #fff !important;
    }
    button.btn-copypix {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        background-color: #32bcad;
        color: #FFF;
        padding: 10px;
        border: none;
        border-radius: 10px;
        font-weight: 600;
        font-size: 1rem;
        flex-wrap: wrap;
    }
    button.btn-copypix svg {
        width: 20px;
        fill: #fff;
    }
    button.btn-copypix:hover {
        transition: .3s;
        background-color: #289f92;
    }

    main {
        background-color: {{ $id->color }};
        margin-top: 85px;
    }
</style>
<body>
    <header>
        <span class="temp">{{ $id->time_checkout }}</span>
        <script>
            function startTimer(duration, display) {
                var timer = duration, hours, minutes, seconds;
                setInterval(function () {
                    hours = parseInt(timer / 3600, 10)
                    minutes = parseInt((timer % 3600) / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    hours = hours < 10 ? "0" + hours : hours;
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = hours + ":" + minutes + ":" + seconds;

                    if (--timer < 0) {
                        timer = duration;
                    }
                }, 1000);
            }
        </script>

        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="2rem" width="2rem" xmlns="http://www.w3.org/2000/svg"><path d="M15 1H9v2h6V1zm-4 13h2V8h-2v6zm8.03-6.61l1.42-1.42c-.43-.51-.9-.99-1.41-1.41l-1.42 1.42C16.07 4.74 14.12 4 12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9 9-4.03 9-9c0-2.12-.74-4.07-1.97-5.61zM12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"></path></svg>

        <span class="chamada">{{ $id->title_checkout }}</span>
    </header>
    <main>
        <section class="corpo-checkout">
            <div class="imagem-topo">
                @if($id->img_top)
                <img src="{{ asset('storage') }}/{{ $id->img_top }}" width="100%">
                @endif
            </div>

            <div class="conteudo-principal">
                <div class="infos">
                    <div class="select-idioma">
                        <select class="form-select" aria-label="Idioma">
                            <option value="1" selected >Brasil</option>
                            <option value="2">Internacional</option>
                        </select>
                    </div>

                    <div class="inputs-dados">
                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">
                                <img src="{{asset('ProjetoCheckout/img/user.png') }}" width="25px">
                            </span>

                            <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" aria-label="Nome completo" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">
                                <img src="{{asset('ProjetoCheckout/img/email-input.png') }}" width="25px">
                            </span>

                            <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" aria-label="E-mail" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-group input-group-sm flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">
                                <img src="{{asset('ProjetoCheckout/img/cadeado-input.png') }}" width="25px">
                            </span>

                            <input type="text" class="form-control" id="cpf" placeholder="CPF / CNPJ" aria-label="CPF/CNPJ" aria-describedby="addon-wrapping">
                        </div>

                        <div class="input-tel">
                            <div class="input-group input-group-sm flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">
                                    <img src="{{asset('ProjetoCheckout/img/ddd.png') }}" width="25px">
                                </span>

                                <input type="text" class="form-control" id="ddd" placeholder="DDD" aria-label="DDD" aria-describedby="addon-wrapping">
                            </div>

                            <div class="input-group input-group-sm flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping">
                                    <img src="{{asset('ProjetoCheckout/img/telefone.png') }}" width="25px">
                                </span>

                                <input type="text" class="form-control" id="celular" placeholder="Celular" aria-label="Celular" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </div>

                    <div class="menu-pagamentos">

                        <div class="form-check" style="display:{{ $id->activ_card ? 'flex' : 'none' }};">
                            <input class="form-check-input" type="radio" name="formaDePagamento" value="cartao" id="cartaoDeCredito">

                            <label class="form-check-label" for="cartaoDeCredito" id="labelCartao">
                                <img src="{{asset('ProjetoCheckout/img/cartao.png') }}" alt="Cartão de Crédito" width="30px">
                                <span>Cartão de Crédito</span>
                            </label>
                        </div>

                        <div class="form-check" style="display:{{ $id->activ_boleto ? 'flex' : 'none' }};">
                            <input class="form-check-input" type="radio" name="formaDePagamento" value="boleto" id="boleto">

                            <label class="form-check-label" for="boleto" id="labelBoleto">
                                <img src="{{asset('ProjetoCheckout/img/boleto.png') }}" alt="Boleto" width="30px">
                                <span>Boleto</span>
                            </label>
                        </div>

                        <div class="form-check" style="display:{{ $id->activ_pix ? 'flex' : 'none' }};">
                            <input class="form-check-input" type="radio" name="formaDePagamento" value="pix" id="pix">

                            <label class="form-check-label" for="pix" id="labelPix">
                                <img src="{{asset('ProjetoCheckout/img/pix.png') }}" alt="Pix" width="35px">
                                <span>PIX</span>
                            </label>
                        </div>

                        <div class="form-check" style="display:{{ $id->activ_usd ? 'flex' : 'none' }};">
                            <input class="form-check-input" type="radio" name="formaDePagamento" value="cripto" id="cripto">

                            <label class="form-check-label" for="cripto" id="labelCripto">
                                <img src="{{asset('ProjetoCheckout/img/criptomoedas.png') }}" alt="Pix" width="35px">
                                <span>Criptomoedas</span>
                            </label>
                        </div>
                    </div>

                    <div class="collapses-pagamentos">
                        <div class="collapse" id="collapseCartao">
                            <div class="menu-cartoes">
                                <button id="optOnecard" class="ativado">
                                    <img src="{{asset('ProjetoCheckout/img/cartao.png') }}" alt="Comprar com 1 cartão de crédito" width="25px">
                                    <span>Cartão de crédito</span>
                                </button>

                                <button id="optTwocard" class="" style="display:none">
                                    <img src="{{asset('ProjetoCheckout/img/2-cartoes.png') }}" alt="Comprar com 2 cartões de crédito" width="25px">
                                    <span>Dois Cartões</span>
                                </button>
                            </div>

                            <div class="collapse show opt-umcartao" id="collapseOneCard">
                                <div class="container">
                                    <div class="card-container">
                                        <div class="front">
                                            <div class="image">
                                                <img src="{{asset('ProjetoCheckout/img/chip.png') }}" alt="">
                                                <img src="{{asset('ProjetoCheckout/img/bandeiras.png') }}" alt="">
                                            </div>
                                            <div class="card-number-box">0000 0000 0000 0000</div>
                                            <div class="flexbox">
                                                <div class="box">
                                                    <span>Nome do titular</span>
                                                    <div class="card-holder-name">ex: João da Silva</div>
                                                </div>
                                                <div class="box">
                                                    <span>Válido até</span>
                                                    <div class="expiration">
                                                        <span class="exp-month">mês</span>
                                                        <span class="exp-month">/</span>
                                                        <span class="exp-year">ano</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="back">
                                            <div class="stripe"></div>
                                            <div class="box">
                                                <span>CVC / CVV</span>
                                                <div class="cvv-box"></div>
                                                <img src="{{asset('ProjetoCheckout/img/bandeiras.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <form action="">
                                        <div class="inputBox">
                                            <span>Bandeira do Cartão</span>
                                            <select name="" id="brand">
                                                <option value="mastercard">Mastercard</option>
                                                <option value="visa">Visa</option>
                                                <option value="elo">Elo</option>
                                                <option value="amex">AmericanExpress</option>
                                                <option value="hipercard">Hipercard</option>
                                            </select>
                                        </div>

                                        <div class="inputBox">
                                            <span>Número do cartão</span>

                                            <div class="input-group input-group-sm flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">
                                                    <img src="{{asset('ProjetoCheckout/img/cartao.png') }}" width="25px">
                                                </span>

                                                <input type="text" maxlength="16" class="card-number-input" id="numCard">
                                            </div>
                                        </div>

                                        <div class="inputBox">
                                            <span>Nome do titular</span>

                                            <div class="input-group input-group-sm flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">
                                                    <img src="{{asset('ProjetoCheckout/img/user.png') }}" width="25px">
                                                </span>

                                                <input type="text" class="card-holder-input" id="">
                                            </div>
                                        </div>

                                        <div class="flexbox">
                                            <div class="inputBox">
                                                <span>Válido até</span>
                                                <select name="" id="expiration_month" class="month-input">
                                                    <option value="month" selected disabled>mês</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>

                                            <div class="inputBox">
                                                <span style="visibility: hidden;">ano</span>
                                                <select name="" id="expiration_year" class="year-input">
                                                    <option value="year" selected disabled>ano</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                            </div>

                                            <div class="inputBox">
                                                <span>CVC / CVV</span>
                                                <input type="text" maxlength="4" class="cvv-input" id="cvv">
                                            </div>
                                        </div>

                                        <div class="inputBox">
                                            <span>Escolha uma Opções de Parcelamento</span>
                                            <select name="" id="total_parcelas">

                                            </select>
                                        </div>
                                        <hr>
                                        <div class="btn-comprar">
                                            <a href="#" id="ver_parcelas" style="background: #0d6efd;border: 1px solid #0d6efd;">Ver Parcelas</a>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="collapse opt-doiscartoes" id="collapseTwoCard">
                                <div class="area-cartoesduplos">
                                    <div class="form-card1">
                                        <p>Cartão 1</p>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/dinheiro.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Valor no cartão 1" aria-label="Valor no cartão 1" aria-describedby="Valor no cartão 1">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/cartao.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Número do cartão" aria-label="Número do cartão" aria-describedby="Número do cartão">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/user.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Nome do titular" aria-label="Nome do titular" aria-describedby="Nome do titular">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/calendario.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Mês de validade (MM)" aria-label="Mês de validade" aria-describedby="Mês de validade">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/calendario.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Ano de validade (AAAA)" aria-label="Ano de validade" aria-describedby="Ano de validade">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/cadeado-input.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="CVC / CVV" aria-label="CVC / CVV" aria-describedby="CVC / CVV">
                                        </div>

                                        <div class="inputBox">
                                            <span>Opções de Parcelamento</span>
                                            <select name="" id="">
                                                <option value="" selected>1x de R$ 366,60</option>
                                                <option value="">2x de R$ 366,60</option>
                                                <option value="">3x de R$ 366,60</option>
                                                <option value="">4x de R$ 366,60</option>
                                                <option value="">5x de R$ 366,60</option>
                                                <option value="">6x de R$ 366,60</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="divisoria-cards"></div>

                                    <div class="form-card2">
                                        <p>Cartão 2</p>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/dinheiro.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Valor no cartão 2" aria-label="Valor no cartão 2" aria-describedby="Valor no cartão 2">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/cartao.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Número do cartão" aria-label="Número do cartão" aria-describedby="Número do cartão">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/user.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Nome do titular" aria-label="Nome do titular" aria-describedby="Nome do titular">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/calendario.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Mês de validade (MM)" aria-label="Mês de validade" aria-describedby="Mês de validade">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/calendario.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="Ano de validade (AAAA)" aria-label="Ano de validade" aria-describedby="Ano de validade">
                                        </div>

                                        <div class="input-group input-group-sm flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <img src="{{asset('ProjetoCheckout/img/cadeado-input.png') }}" width="25px">
                                            </span>

                                            <input type="text" class="form-control" placeholder="CVC / CVV" aria-label="CVC / CVV" aria-describedby="CVC / CVV">
                                        </div>

                                        <div class="inputBox">
                                            <span>Opções de Parcelamento</span>
                                            <select name="" id="">
                                                <option value="" selected>1x de R$ 366,60</option>
                                                <option value="">2x de R$ 366,60</option>
                                                <option value="">3x de R$ 366,60</option>
                                                <option value="">4x de R$ 366,60</option>
                                                <option value="">5x de R$ 366,60</option>
                                                <option value="">6x de R$ 366,60</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="collapse" id="collapseBoleto">
                            <p class="title-bol-pix">Atente-se aos detalhes:</p>

                            <ul>
                                <li>Boleto (somente à vista).</li>

                                <li>Pagamentos com Boleto Bancário levam <strong>até 3 dias úteis</strong> para serem compensados e então terem os produtos liberados.</li>

                                <li>Atente-se ao vencimento do boleto. Você pode pagar o boleto em qualquer banco ou casa lotérica até o dia do vencimento.</li>

                                <li>Depois do pagamento, verifique seu e-mail para receber os dados de acesso ao produto (verifique também a caixa de SPAM).</li>
                            </ul>

                            <div class="btn-comprar">
                                <a href="#" id="btn_boleto" style="background: #0d6efd; border: 1px solid #2778c4; display:none;">Baixar Boleto</a>
                            </div>


                        </div>

                        <div class="collapse" id="collapsePix">
                            <p class="title-bol-pix">Pague com o Pix, qualquer dia, a qualquer hora:
                            </p>

                            <ul>
                                <li>Valor à vista: <strong>R$ {{ number_format($id->value/100,2,'.',',') }}.</strong></li>

                                <li>Liberação imediata!</li>

                                <li>É simples, só clicar no botão <strong>"Comprar Agora"</strong> abaixo;</li>

                                <li>E usar o aplicativo do seu banco selecionando a opção PIX;</li>

                                <li>Super seguro. O pagamento PIX foi desenvolvido pelo Banco Central do Brasil.</li>
                            </ul>


                        </div>

                        <div class="collapse" id="collapseCripto">
                            <p class="title-bol-pix">Pague com Criptomoedas, qualquer dia, a qualquer hora:
                            </p>

                            <ul>
                                <li>Valor à vista: <strong>R$ {{ number_format($id->value/100,2,'.',',') }}.</strong></li>

                                <li>Liberação imediata!</li>

                                <li>É simples, só clicar no botão <strong>"Comprar Agora"</strong> abaixo;</li>

                                <li>E usar a sua carteira de criptomoedas para realizar a transferência.</li>

                                <li>Para Transferência use a rede <strong>TRC20</strong>.</li>
                            </ul>

                            <div class="inputBox">
                                <span>
                                    Selecione a Criptomoeda:
                                    <i class="fa-brands fa-bitcoin"></i>
                                    <i class="fa-brands fa-ethereum"></i>
                                    <i class="fa-solid fa-t"></i>
                                </span>
                                <select name="" id="">
                                    <option value="usdt">USDT</i></option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="footer-checkout">
                        <div class="title-produto">
                            <p>{{ $id->produto->name }}</p>
                            <span class="preco-prod">1x de R$ {{ number_format($id->value/100,2,'.',',') }}</span>
                        </div>
                        <!--
                        <div class="produtos-adicionais">
                            <div class="card-prod-adicional">
                                <div class="title">
                                    <span>Dê adeus ao amadorismo</span>
                                </div>

                                <div class="area-produto">
                                    <div class="area-seta">
                                        <img src="{{asset('ProjetoCheckout/img/seta.png') }}" width="45px">
                                    </div>
                                    <div class="input-produto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="produto1">

                                            <label class="form-check-label" for="produto1">
                                                <img src="{{asset('ProjetoCheckout/img/produto.png') }}" width="60px">
                                                <span>Sim, desejo adicionar <strong>SISTEMA DE GERENCIAMENTO INTELIGENTE</strong> por + <span class="preco-prod">R$ 49,90</span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <p>Profissionalize-se</p>
                            </div>

                            <div class="card-prod-adicional">
                                <div class="title">
                                    <span>Você sempre um passo a frente</span>
                                </div>

                                <div class="area-produto">
                                    <div class="area-seta">
                                        <img src="{{asset('ProjetoCheckout/img/seta.png') }}" width="45px">
                                    </div>
                                    <div class="input-produto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="produto2">

                                            <label class="form-check-label" for="produto2">
                                                <img src="https://incoddepay.s3.amazonaws.com/images/84938475-4e54-4307-94b7-8e06e458591c" width="60px">
                                                <span>Sim, desejo adicionar <strong>ACESSO A TODAS AS ATUALIZAÇÕES FUTURAS</strong> por + <span class="preco-prod">R$ 19,70</span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <p>Tenha acesso premium a todas as atualizações e novidades adicionais</p>
                            </div>

                        </div>
                        -->

                        <div style="display: none;" id="payment_pix">
                            <div class="cima-pagamento">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/de/Logo_-_pix_powered_by_Banco_Central_%28Brazil%2C_2020%29.png" alt="Pague com Pix" width="150px" style="margin-bottom: 15%;">
                                <br>

                                <img id="img_qrcode" src="data:image/png;base64,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" alt="Qr Code" width="170px">
                                <hr>

                                <div>
                                    <span class="title-pagamento">Chave Pix:</span>

                                    <br>

                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled=""></textarea>
                                    </div>

                                    <button type="button" class="btn-copypix" onclick="copiarPix()">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M272 0H396.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H272c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128H192v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z"></path>
                                        </svg>

                                        Copiar código PIX
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div style="display: none;" id="payment_cripto">
                            <div class="cima-pagamento">
                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/825.png" alt="Pague com Pix" width="100px" style="margin-bottom: 15%;">
                                <br>

                                <img id="img_qrcode_cripto" src="data:image/png;base64,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" alt="Qr Code" width="170px">
                                <hr>

                                <div>
                                    <span class="title-pagamento">Chave USDT:</span>

                                    <br>

                                    <div class="mb-3">
                                        <textarea class="form-control" id="exampleFormControlTextarea1_cripto" rows="3" disabled=""></textarea>
                                    </div>

                                    <button type="button" class="btn-copypix" onclick="copiarPix()">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M272 0H396.1c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9V336c0 26.5-21.5 48-48 48H272c-26.5 0-48-21.5-48-48V48c0-26.5 21.5-48 48-48zM48 128H192v64H64V448H256V416h64v48c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48z"></path>
                                        </svg>

                                        Copiar código USDT
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="btn-comprar">
                            <a href="#" onclick="comprar()" id="fazer_compra">Comprar Agora</a>
                        </div>

                        <div class="pequenas-info-footer">
                            <p>
                                <span>Precisa de ajuda?</span>
                                <a href="#">
                                    Contato do(a) vendedor(a) - {{ $id->user->email }}
                                </a>
                            </p>
                            <p>
                                *O valor parcelado possui acréscimo.
                            </p>
                            <p>
                                CtrlPay está processando este pedido a serviço de {{ $id->user->name }}, ao continuar, você concorda com os
                                <a href="#">Termos de Compra</a>
                            </p>
                            <p>
                                <span>CtrlPay © 2022 - Todos os direitos reservados</span>
                                <p>REF.: 6334bc91a3554811397ceeb0</p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="cards-info">

                    <!--
                    <div class="item">
                        <div class="">
                            <img src="{{ asset('storage') }}/{{ $id->img_left }}" >
                        </div>
                    </div>
                    -->

                    <div class="item-card">
                        <div class="title-card">
                            <img src="{{asset('ProjetoCheckout/img/privacidade.png') }}" alt="Privacidade" width="35px">
                            <span>Privacidade</span>
                        </div>
                        <div class="sub-card">
                            <span>Sua informação 100% segura</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <div class="title-card">
                            <img src="{{asset('ProjetoCheckout/img/seguro.png') }}" alt="Compra Segura" width="35px">
                            <span>Compra segura</span>
                        </div>
                        <div class="sub-card">
                            <span>Ambiente seguro e autenticado</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <div class="title-card">
                            <img src="{{asset('ProjetoCheckout/img/email.png') }}" alt="Entregue via E-mail" width="35px">
                            <span>Entregue via E-mail</span>
                        </div>
                        <div class="sub-card">
                            <span>Acesso ao produto entregue por e-mail</span>
                        </div>
                    </div>

                    <div class="item-card">
                        <div class="title-card">
                            <img src="{{asset('ProjetoCheckout/img/aprovado.png') }}" alt="Conteúdo aprovado" width="35px">
                            <span>Conteúdo aprovado</span>
                        </div>
                        <div class="sub-card">
                            <span>100% revisado e aprovado</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imagem-baixo">
                @if($id->img_low)
                <img src="{{ asset('storage') }}/{{ $id->img_low }}" width="100%">
                @endif
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script src="{{asset('ProjetoCheckout/js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type='text/javascript'>
        var s = document.createElement('script');
        s.type = 'text/javascript';
        var v = parseInt(Math.random() * 1000000);
        s.src = 'https://sandbox.gerencianet.com.br/v1/cdn/6f6535d788f7bf00c5864fabd382c933/' + v;
        s.async = false;
        s.id = '6f6535d788f7bf00c5864fabd382c933';
        if (!document.getElementById('6f6535d788f7bf00c5864fabd382c933')) {
            document.getElementsByTagName('head')[0].appendChild(s);
        };
        $gn = { validForm: true, processed: false, done: {}, ready: function (fn) { $gn.done = fn; } };
    </script>

    <script type="text/javascript">
        $("#numCard").mask("0000 0000 0000 0000");
        $("#cpf").mask("000.000.000-00");
        $("#ddd").mask("+55 (00)");
        $("#celular").mask("0 0000-0000");


        function cripto(){

            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var cpf = document.getElementById("cpf").value.replace(/\D/g, '');
            var contato = (document.getElementById("ddd").value + document.getElementById("celular").value).replace(/\D/g, '').substring(2);

            $.ajax({
                url: "{{ route('cripto') }}",
                type: "get",
                data: "_token={{ csrf_token() }}&nome=" + nome +
                "&email=" + email +
                "&cpf=" + cpf +
                "&contato=" + contato +
                "&produto=" + {{ $id->id }},
                dataType: "html"

            }).done(function(resposta) {

                console.log(JSON.parse(resposta));

                //document.getElementById("pix_metodo").style.display = "none";
                document.getElementById("payment_cripto").style.display = "flex";
                document.getElementById("img_qrcode_cripto").src = "{{ asset('img/download.png') }}";
                document.getElementById("exampleFormControlTextarea1_cripto").value = "TSSTKSeTrqyrDuo59qMpLXaPZhB3Zq8825";

                console.log(JSON.parse(resposta)["txid"])

            });


        }

        function comprar(){

            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var cpf = document.getElementById("cpf").value.replace(/\D/g, '');
            var contato = (document.getElementById("ddd").value + document.getElementById("celular").value).replace(/\D/g, '').substring(2);

            $.ajax({
                url: "{{ route('pix') }}",
                type: "get",
                data: "_token={{ csrf_token() }}&nome=" + nome +
                "&email=" + email +
                "&cpf=" + cpf +
                "&contato=" + contato +
                "&produto=" + {{ $id->id }},
                dataType: "html"

            }).done(function(resposta) {
                console.log(JSON.parse(resposta));

                //document.getElementById("pix_metodo").style.display = "none";
                document.getElementById("payment_pix").style.display = "flex";
                document.getElementById("img_qrcode").src = JSON.parse(resposta)["qrcode"];
                document.getElementById("exampleFormControlTextarea1").value = JSON.parse(resposta)["chave"];


                console.log(JSON.parse(resposta)["txid"])

                var m_time = setInterval(function(){
                    $.ajax({
                        url: "{{ route('checkPix') }}",
                        type: "get",
                        data: "_token={{ csrf_token() }}&txid="+JSON.parse(resposta)["txid"],
                        dataType: "html"

                    }).done(function(resposta) {
                        console.log(resposta);

                        if(resposta == "1"){
                            Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Pagamento Concluido',
                            showConfirmButton: false,
                            timer: 1500
                            })
                            window.location.href = "{{ route('home') }}";
                        }
                    });
                },4000);
            });
        }

        function copiarPix() {
            var texto = document.getElementById("exampleFormControlTextarea1").value;

            navigator.clipboard.writeText(texto);

            alert("Código pix copiado!");
        }

        function card(){

            var brand = document.getElementById("brand").value;
            var number = document.getElementById("numCard").value.replace(/\s/g, '');
            var cvv = document.getElementById("cvv").value;
            var expiration_month = document.getElementById("expiration_month").value;
            var expiration_year = document.getElementById("expiration_year").value;
            var selectElement = document.getElementById('total_parcelas').value;

            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var cpf = document.getElementById("cpf").value.replace(/\D/g, '');
            var contato = (document.getElementById("ddd").value + document.getElementById("celular").value).replace(/\D/g, '').substring(2);

            window.location.href = "http://127.0.0.1:8000/gerencianet/credencial-card?_token={{ csrf_token() }}&brand="+brand+"&number="+number+"&cvv="+cvv+"&expiration_month="+expiration_month+"&expiration_year="+expiration_year+"&nome="+nome+"&email="+email+"&cpf="+cpf+"&contato="+contato+"&parcelas="+selectElement+"&id={{$id->id}}";

        }


        function boleto(){

            var nome = document.getElementById("nome").value;
            var email = document.getElementById("email").value;
            var cpf = document.getElementById("cpf").value.replace(/\D/g, '');
            var contato = (document.getElementById("ddd").value + document.getElementById("celular").value).replace(/\D/g, '').substring(2);

            $.ajax({
                url: "{{ route('boleto') }}",
                type: "get",
                data: "_token={{ csrf_token() }}&name="+nome+"&cpf="+cpf+"&id={{ $id->id }}&email="+email,
                dataType: "html"

            }).done(function(resposta) {
                console.log(resposta);


                try {

                    document.getElementById("btn_boleto").style.display = "flex";
                    document.getElementById("btn_boleto").href = JSON.parse(resposta)["data"]["billet_link"];

                    Swal.fire({
                        icon: 'success',
                        title: 'Concluido...',
                        text: "Baixe o boleto no botao azul."
                    })

                } catch (error) {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: resposta
                    });
                }





            });

        }


        $gn.ready(function (checkout) {

           $("#ver_parcelas").click(function() {
                console.log(1)
                checkout.getInstallments(
                    {{$id->value}},
                    document.getElementById("brand").value,
                    function (error, response) {
                        if (error) {
                            console.error(error);
                        } else {
                            console.log(response.data.installments);

                            var data = response.data.installments;

                            var selectElement = document.getElementById('total_parcelas');

                            for (var i = 0; i < data.length; i++) {

                                console.log((i+1)+ "X de " +data[i].currency)
                                var optionElement = document.createElement('option');

                                optionElement.value = i+1;
                                optionElement.text = (i+1)+ "X de R$ " +data[i].currency;

                                selectElement.appendChild(optionElement);
                            }
                        }
                    }
                );
           });
        });


        window.onload = function() {

            window.onload = function () {
                var temp = document.querySelector('.temp').textContent;
                var timeParts = temp.split(":");
                var seconds = (+timeParts[0]) * 60 * 60 + (+timeParts[1]) * 60 + (+timeParts[2]);

                display = document.querySelector('.temp');
                startTimer(seconds, display);
            };


            var radios = document.querySelectorAll('input[type=radio][name="formaDePagamento"]');

            radios.forEach((radio) => {
                radio.addEventListener('change', function() {
                    if (this.checked) {

                        console.log('O método de pagamento selecionado é: ' + this.value);

                        if( this.value == "pix"){
                            var element = document.getElementById('fazer_compra');
                            element.setAttribute('onclick', 'comprar()');
                        }

                        if( this.value == "cartao"){
                            var element = document.getElementById('fazer_compra');
                            element.setAttribute('onclick', 'card()');
                        }

                        if( this.value == "boleto"){
                            var element = document.getElementById('fazer_compra');
                            element.setAttribute('onclick', 'boleto()');
                        }

                        if( this.value == "cripto"){
                            var element = document.getElementById('fazer_compra');
                            element.setAttribute('onclick', 'cripto()');
                        }
                    }
                });
            });
        }



        @if(isset($_GET['error']))

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{$_GET['error']}}"
            })

        @endif


        @if(isset($_GET['sucess']))

            Swal.fire({
                icon: 'success',
                title: 'Concluido...',
                text: "{{$_GET['sucess']}}"
            })

        @endif


    </script>
</body>
</html>
