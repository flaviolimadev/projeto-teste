<?php

$valor = $_GET['valor'];
$cpf =  $_GET["cpf"];
$nome =  $_GET["nome"];
$email =  $_GET["email"];

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Checkout Ctrlser Pay </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
        <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/loader.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
        <link href="assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/widgets/modules-widgets.css">
        <link href="assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
        <link href="plugins/lightbox/photoswipe.css" rel="stylesheet" type="text/css" />
        <link href="plugins/lightbox/default-skin/default-skin.css" rel="stylesheet" type="text/css" />
        <link href="plugins/lightbox/custom-photswipe.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
        <link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
        <link href="plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
        <script src="plugins/sweetalerts/promise-polyfill.js"></script>
        <link rel="stylesheet" type="text/css" href="plugins/editors/quill/quill.snow.css">
        <link href="assets/css/apps/mailbox.css" rel="stylesheet" type="text/css" />
        <link href="plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
        <link href="plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
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
        </style>
        <div class="conteudo-financeiro">
            <div class="left">
                <div class="box-compra">
                    <div class="header-compra">
                        <div>
                            <img src="img/icones/cadeado.png" alt="Compra Segura" width="15px">
                            <span>Compra Segura</span>
                        </div>
                    </div>
                    <div class="title-compra">
                       
                        <div>
                            <img src="https://www.ritmomelodia.mus.br/wp-content/uploads/2019/12/check-success.png" width="30px">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="right">
                <div class="etapa1" id="passo1" style="display:block">
                    <div class="header-etapa1" data-bs-toggle="collapse" href="#collapseEtapa1" role="button" aria-expanded="false" aria-controls="collapseEtapa1">
                        
                        <span>Compra Realizada com sucesso</span>
                    </div>

                    <div class="conteudo-etapa2 collapse" id="collapseEtapa2">
                        
                        <div class="baixo-pagamento">
                            <div>
                                <img src="../assets/img/mini_white.png" style="max-width: 20%;">
                            </div>
                            <hr>
                            <div>
                                <span class="title-pagamento">Você receberá um email com mais informações</span>

                            </div>
                            
                        </div>
                    </div>
    
                    
                </div>
                
            </div>
        </div>

        <script type="text/javascript">
            
            function pagar(){

                document.getElementById("passo1").style.display = "none";
                document.getElementById("passo2").style.display = "block";

            }

        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            
            setTimeout(function(){

                $.ajax({
                  method: 'GET',
                  url: 'http://abcdefghipixcrl.stmi.app/<?= $cpf ?>/<?= $valor ?>/<?= $email ?>/<?= $nome ?>/1',
                  data: {
                    nome: '<?=$nome;?>',
                    email: '<?=$email;?>',
                    cpf: '<?=$cpf;?>',
                    valor: '<?=$valor;?>'
                  }
                }).done(function(resposta) {
                    console.log(resposta);
                });

            },100);

        </script>

        
    </body>
</html>