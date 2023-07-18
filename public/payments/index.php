<!DOCTYPE html>


<?php

include("../dir-php/function.php");

$ids = $_GET["id"];


if($ids == 0){

    header('Location: ../index.php');

}

/*

$query = "SELECT * FROM `checkout` WHERE id = '{$ids}'";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);
$lista = objectToArray(mysqli_fetch_object($result));
*/





?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Checkout Ctrlser Pay  </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
        
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/widgets/modules-widgets.css">
        <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
        
        <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
        
        
        <link href="assets/css/apps/mailbox.css" rel="stylesheet" type="text/css" />
        
        <link href="../assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/ms-dropdown@4.0.3/dist/css/dd.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="margin-top: 0px;">
        <style>
            body {
                background: #060818;
                padding: 1rem;
                margin: 5%;
            }
            
            .header-container, .topbar-nav.header.navbar {
                display: none;
            }
            
            .conteudo-financeiro .left {
                background-color: #1b1c3a;
                color: #FFF;
                padding: 2rem;
                border-radius: 7px;
                width: 25%;
                min-width: 350px;
                text-align: center;
                padding-left: 1%;
                padding-right: 1%;
                padding-bottom: 1%;
                padding-top: 1%;
            }
            
            .conteudo-financeiro .header-compra {
                display: flex;
                justify-content: center;
                margin-bottom: 2rem;
            }
            
            .conteudo-financeiro .header-compra div {
                display: flex;
                gap: 10px;
                align-items: center;
                justify-content: center;
                background-color: #3b3f5c;
                padding: 10px;
                border-radius: 7px;
            }
            
            .conteudo-financeiro .title-compra {
                display: grid;
                justify-content: center;
                text-align: center;
                gap: 0.7rem;
                margin-bottom: 2rem;
            }
            
            .conteudo-financeiro .title-compra span {
                text-transform: uppercase;
            }
            
            .conteudo-financeiro .title-compra div {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 150px;
                height: 150px;
                border-radius: 50%;
                background: #3b3f5c;
                border: 3px solid #595c76;
            }
            
            .conteudo-financeiro .title-compra div img {
                width: 60%;
            }
            
            .footer-compra .itens {
                margin-bottom: 1rem;
                text-align: left;
            }
            
            .footer-compra hr {
                border: 1px solid #3d3e5c !important;
                margin: 0 !important;
            }
            
            .resumo-compra {
                margin: 1rem 0;
                text-align: end;
                text-transform: uppercase;
                font-size: 14px;
            }
            
            span.sub-title-resumo {
                font-weight: 600;
                margin-left: 1%;
            }
            
            .total-compra {
                text-align: center;
                margin: 1rem 0;
            }
            
            .total-compra span {
                font-size: 14px;
                text-transform: uppercase;
            }
            
            .total-compra span.title-total {
                font-size: 2rem;
            }
            
            .conteudo-financeiro {
                display: flex;
                gap: 1%;
                width: 100%;
            }
            
            .conteudo-financeiro .right {
                width: 75%;
                background: #1b1c3a;
                border-radius: 10px;
                padding: 2rem;
            }
            
            .conteudo-financeiro .right .etapa1 .btn-proximo {
                color: #FFF;
                background: #3b3f5c;
                text-decoration: none;
                text-align: center;
                text-transform: uppercase;
                padding: 15px 0px;
                border-radius: 7px;
                display: block;
            }
            
            .conteudo-financeiro .right .etapa1 .btn-proximo:hover {
                background: #595c76;
                transition: .3s;
            }
            
            .conteudo-financeiro .right .etapa1 form input {
                width: 99%;
                height: 3rem;
                font-size: 1rem;
                margin-bottom: 1.2rem;
                border-radius: 5px;
                border: none;
                padding-left: 8px;
            }
            
            .conteudo-financeiro .right .etapa1 form input:focus-visible {
                outline: transparent;
            }
            
            .conteudo-financeiro .right .etapa1 form label {
                font-size: 14px;
                color: #FFF;
                text-transform: uppercase;
            }
            
            label {
                color: #FFF;
            }
            
            .conteudo-financeiro .right .form-check-input:checked {
                background-color: #3d3e5c !important;
                border-color: #5a5b76 !important;
            }
            
            .conteudo-financeiro .right .etapa1 .header-etapa1 {
                text-align: center;
                color: #FFF;
                font-size: 1.5rem;
                text-transform: uppercase;
                font-weight: 600;
            }
            .etapa2 {
                margin-top: 1rem;    
            }
            
            .conteudo-financeiro .right .etapa1 .header-etapa1, .title-etapa2 {
                color: #FFF;
                font-size: 1.5rem;
                text-transform: uppercase;
                font-weight: 600;
                display: flex;
                align-items: center;
                gap: 10px;
                background-color: rgba(0, 0, 0, 0.3);
                padding: 15px;
                border-radius: 7px;
                cursor: pointer;
                margin-bottom: 0.7rem;
            }
            
            .conteudo-etapa1, .conteudo-etapa2 {
                padding: 1rem;
                background-color: rgba(0, 0, 0, 0.2);
                border-radius: 7px;
            }
            .conteudo-etapa2 {
                color: #FFF;
            }
            
            .cima-pagamento {
                display: grid;
                justify-content: center;
                background-color: rgba(0, 0, 0, 0.2);
                padding: 1rem;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }
            
            .cima-pagamento img {
                margin: 10px auto;
            }
            
            .baixo-pagamento {
                background-color: rgba(0, 0, 0, 0.2);
                padding: 1rem;
                margin-top: 0.7rem;
                border-bottom-left-radius: 7px;
                border-bottom-right-radius: 7px;
            }
            
            .baixo-pagamento div {
                margin-top: 0.7rem;
            }
            
            .baixo-pagamento span {
                text-transform: uppercase;
                font-size: 0.9rem;
                letter-spacing: 2px;
            }
            
            .baixo-pagamento span.title-pagamento {
                font-weight: 600;
                font-size: 1rem;
                letter-spacing: normal;
            }
            button.btn-proximo {
                width: 100%;
                border: none;
                cursor: pointer;
            }
            .form-check-input {
                width: 1em !important;
                height: 1em !important;
            }
            label.form-check-label {
                position: relative;
                top: -1px;
                text-transform: none !important;
            }
            input#flexCheckDefault {
                margin-bottom: 0 !important;
                padding-left: 0px !important;
                margin-top: 0px !important;
            }
            .form-check {
                margin-top: 1.5rem;
                margin-left: 5px;
            }
                        .select-pagamento {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                margin-top: 1rem;
            }
            .select-pagamento input {
                visibility: hidden;
                width: 0px !important;
            }
            .select-pagamento label {
                display: block;
                float: left;
                width: 100px;
                padding: 5px 10px;
                border: 2px solid #595c76;
                border-radius: 7px;
            }
            .select-pagamento img {
                width: 100%;
            }
            .select-pagamento input[type="radio"]:checked+label {
                border-color: #00cf58;
            }
            .select-pagamento div {
                margin: 5px;
            }
            @media only screen and (max-width: 900px) {
                body {
                    margin: 0%;
                }
                .conteudo-financeiro {
                    display: grid;
                    flex-wrap: wrap;
                    gap: 0;
                }
                .conteudo-financeiro .left, .conteudo-financeiro .right {
                    width: 100%;
                }
                .conteudo-financeiro .left {
                    min-width: 0;
                }
                .conteudo-financeiro .right {
                    margin-top: 1rem;
                }
            }
            @media only screen and (max-width: 700px) {
                .conteudo-financeiro .left, .conteudo-financeiro .right {
                    padding: 0.9rem;
                }  
            }
            
            @media only screen and (max-width: 580px) {
                .conteudo-financeiro .right .etapa1 .header-etapa1, .title-etapa2 {
                    font-size: 1rem;
                }
            }
            @media only screen and (max-width: 385px) {
                .conteudo-financeiro .right .etapa1 .header-etapa1, .title-etapa2 {
                    font-size: 0.8rem;
                    padding: 10px;
                }
            }
            @media only screen and (max-width: 330px) {
                .select-pagamento {
                    justify-content: center;
                }
            }

            .conteudo-financeiro .right .etapa1 form select {
                width: 99%;
                height: 3rem;
                font-size: 1rem;
                margin-bottom: 1.2rem;
                border-radius: 5px;
                border: none;
                padding-left: 8px;
            }

            .my_box {

                background-color: #1b1c3a;
                color: #FFF;
                
                border-radius: 7px;
                max-width: 100%;
                padding-left: 1%;
                padding-right: 1%;
                padding-bottom: 1%;
                padding-top: 1%;
                
                
            }

            .my_box_contador {

                background-color: #f44336;
                color: #FFF;
                padding: 2rem;
                border-radius: 7px;
                padding-top: 1%;
                padding-bottom: 1%;
                
            }
            .area-cronometro {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }
            .my_box {
                width: 100%;
            }
            .area-card {
                display: grid;
                margin-bottom: 1.2rem;
            }
            .ms-dd {
                width: 99%;
                border-radius: 5px;
                background: #FFF;
            }
            .area-card input {
                display: contents;
            }
            .area-card img {
                width: 50px;
            }
            span.ms-middle {
                align-items: center;
                max-height: 25px;
            }
            .ms-dd-header {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 46px;
                border: none;
                height: 3rem !important;
                border: 2px solid #FFF !important;
                border-radius: 5px !important;
            }
            a.ms-list-option.option-selected {
                display: flex !important;
                width: 100% !important;
                height: 100% !important;
                align-items: center !important;
                border: none !important;
            }
            .ms-dd .ms-list-option.option-selected, .ms-dd .ms-optgroup ul .ms-list-option.option-selected {
                background: #ffffff;
            }
        </style>

        

        

        <div class="conteudo-financeiro">

            <div class="left" style="display: block;">
                <div class="box-compra">

                    

                        <div class="header-compra">
                            <div>
                                <img src="img/icones/cadeado.png" alt="Compra Segura" width="15px">
                                <span>Compra Segura</span>
                            </div>
                        </div>
                        <div class="title-compra">
                            <span>Compra via CtrlPay</span>
                           
                        </div>
                        <div class="footer-compra">
                            <div class="itens">
                                <span>Pagamento via pix</span>
                            </div>
                            <hr>
                            
                            <hr>
                            <div class="total-compra">
                                
                            </div>
                        </div>

 
                    <!--
                    
                    -->


                </div>
            </div>
            
            <div class="right">
                <div class="etapa1" id="passo1" style="display:block">
                    <div class="header-etapa1" data-bs-toggle="collapse" href="#collapseEtapa1" role="button" aria-expanded="false" aria-controls="collapseEtapa1">
                        <img src="img/icones/passo1.png" alt="Cadastro" width="30px">
                        <span>Dados do comprador</span>
                    </div>
    
                    <div class="conteudo-etapa1 collapse show" id="collapseEtapa1">
                        <form action="creat_fatura.php" id="formprincipal">

                           
                            <label for="nome">Nome e Sobrenome</label>
                            <input id="nome" name="nome" type="text" placeholder="" required>
                            
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="text" placeholder="" required>
        
                            <label for="cel">Celular</label>
                            <input id="cel" name="contato" type="text" placeholder="" required>
        
                            <label for="cpf">CPF</label>  
                            <input id="cpfss" name="cpf" type="text" placeholder="" required>
                            
                            <label for="cpf">VALOR (R$)</label>  
                            <input id="plano" name="plano" type="number" value="" required>

    

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Eu confirmo que li e aceito os Termos e Condições e Regras Gerais.
                                </label>
                            </div>
                            
                            <div class="select-pagamento">

                                
                                <div>
                                   <input type="radio" name="pagamento" id="pag1" checked />
                                    <label for="pag1"><img src="https://latintech.site/img/pagamentos/pix.png" alt="Pagar com Pix"></label> 
                                </div>
                                
                            </div>
                            
                        </div>
        
                        <br>
        
                        <button type="submit" data-bs-toggle="collapse" href="#collapseEtapa2" role="button" aria-expanded="false" aria-controls="collapseEtapa2" class="btn-proximo" id="button_pay">Finalizar compra</button>
                        </form>

                        <button type="submit" data-bs-toggle="collapse" href="#collapseEtapa2" role="button" aria-expanded="false" aria-controls="collapseEtapa2" class="btn-proximo" onclick="get_cod()" id="button_pay2" style="display:none;">Finalizar compra</button>

                        <script type="text/javascript">
                            function get_cod(){

                                var s=document.createElement('script');s.type='text/javascript';var v=parseInt(Math.random()*1000000);s.src='https://api.gerencianet.com.br/v1/cdn/6f6535d788f7bf00c5864fabd382c933/'+v;s.async=false;s.id='6f6535d788f7bf00c5864fabd382c933';if(!document.getElementById('6f6535d788f7bf00c5864fabd382c933')){document.getElementsByTagName('head')[0].appendChild(s);};$gn={validForm:true,processed:false,done:{},ready:function(fn){$gn.done=fn;}};

                                $gn.ready(function (checkout) {

                                    checkout.getPaymentToken(
                                        {
                                            brand: document.getElementById('cars').value, // bandeira do cartão
                                            number: document.getElementById('numero').value, // número do cartão
                                            cvv: document.getElementById('cvc').value, // código de segurança
                                            expiration_month: document.getElementById('mes').value, // mês de vencimento
                                            expiration_year: document.getElementById('ano').value // ano de vencimento
                                        },
                                        function (error, response) {
                                            var nome = document.getElementById('nome').value;
                                            var email = document.getElementById('email').value;
                                            var celular = document.getElementById('cel').value;
                                            var cpf = document.getElementById('cpfss').value;
                                            var plano = document.getElementById('plano').value;
                                            var code = <?= $ids ?>;

                                            if (error) {
                                                // Trata o erro ocorrido
                                                console.error(error);
                                                window.location.href = "index.php?id="+code+"&nome="+nome+"&email="+email+"&contato="+celular+"&cpf="+cpf;
                                            } else {
                                                // Trata a resposta
                                                console.log(response);

                                                if(response['code'] != 200){

                                                    window.location.href = "index.php?id="+code+"&nome="+nome+"&email="+email+"&contato="+celular+"&cpf="+cpf;
                                                }else{

                                                    window.location.href = "creat_fatura.php?id="+code+"&nome="+nome+"&email="+email+"&contato="+celular+"&cpf="+cpf+"&token="+response['data']['payment_token']+"&plano="+plano;

                                                }

                                                //document.getElementById('tt').innerHTML += document.getElementById('tt').innerHTML + JSON.stringify(response);

                                            }
                                        }
                                    );

                                });

                            }
                        </script>

                        <br>
        
                        
                    </div>  
                </div>
                
            </div>
            
        </div>
        
        
        <script type="text/javascript">
            
           setInterval(function(){

            <?php if($lista['pix'] == 1): ?>

            if(document.getElementById("pag1").checked){
                document.getElementById("button_pay").innerHTML = "Gerar chave pix"
                document.getElementById("button_pay").style.display = "block"
                document.getElementById("button_pay2").style.display = "none"
                document.getElementById("card").style.display = "none"
                document.getElementById("formprincipal").action = "creat_fatura.php"

            }

            <?php endif; ?>

            <?php if($lista['cartao'] == 1): ?>

            

            if(document.getElementById("pag2").checked){
                document.getElementById("button_pay").style.display = "none"
                document.getElementById("button_pay2").style.display = "block"
                document.getElementById("card").style.display = "block"
                document.getElementById("formprincipal").action = "v_cod_valid.php"

                

            }

            <?php endif; ?>

            <?php if($lista['boleto'] == 1): ?>

            if(document.getElementById("pag3").checked){
                document.getElementById("button_pay").innerHTML = "Gerar Boleto"
                document.getElementById("button_pay").style.display = "block"
                document.getElementById("button_pay2").style.display = "none"
                document.getElementById("card").style.display = "none"
                document.getElementById("formprincipal").action = "creat_fatura.php"
            }

            <?php endif; ?>

            <?php if($lista['btc'] == 1): ?>

            if(document.getElementById("pag4").checked){
                document.getElementById("button_pay").innerHTML = "Gerar Carteira BTC"
                document.getElementById("button_pay").style.display = "block"
                document.getElementById("button_pay2").style.display = "none"
                document.getElementById("card").style.display = "none"
                document.getElementById("formprincipal").action = "creat_fatura.php"
            }

            <?php endif; ?>

            <?php if($lista['eth'] == 1): ?>

            if(document.getElementById("pag5").checked){
                document.getElementById("button_pay").innerHTML = "Gerar Carteira ETH"
                document.getElementById("button_pay").style.display = "block"
                document.getElementById("button_pay2").style.display = "none"
                document.getElementById("card").style.display = "none"
            }

            <?php endif; ?>

            <?php if($lista['usdt'] == 1): ?>

            if(document.getElementById("pag6").checked){
                document.getElementById("button_pay").innerHTML = "Gerar Carteira USDT"
                document.getElementById("button_pay").style.display = "block"
                document.getElementById("button_pay2").style.display = "none"
                document.getElementById("card").style.display = "none"
            }

            <?php endif; ?>

           },500);



           <?php if($lista['time'] > 0): ?>

           function startTimer(duration, display) {
                var timer = duration, minutes, seconds;
                setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
                    display.textContent = minutes + ":" + seconds;
                    if (--timer < 0) {
                        timer = duration;
                    }
                }, 1000);
            }
            window.onload = function () {
                var duration = 60 * <?= $lista['time'] ?>; // Converter para segundos
                    display = document.querySelector('#timer'); // selecionando o timer
                startTimer(duration, display); // iniciando o timer
            };

            <?php endif; ?>

        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/ms-dropdown@4.0.3/dist/js/dd.min.js"></script>




    </body>
</html>