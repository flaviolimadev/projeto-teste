<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$file = file_get_contents(__DIR__ . '/../../config.json');
$options = json_decode($file, true);

//$usuario = $_GET["usuario"];

$valor = number_format($_GET["plano"], 2, '.', '');


$nome = $_GET["nome"];

$email = $_GET["email"];
$contato = $_GET["contato"];

$cpf = $_GET["cpf"];



$body = [
    "calendario" => [
        "expiracao" => 3600
    ],
    "devedor" => [
        "cpf" => $_GET["cpf"],
        "nome" => $_GET["nome"]
    ],
    "valor" => [
        "original" => $valor
    ],
    "chave" => "94098612-cac3-4cb2-bbd6-c2ff8d21cead", // Chave pix da conta Gerencianet do recebedor
    "solicitacaoPagador" => "Informe o número ou identificador do pedido.",
    "infoAdicionais" => [
        [
            "nome" => "Compra segura - ", // Nome do campo string (Nome) ≤ 50 characters
            "valor" => "CTRLPAY" // Dados do campo string (Valor) ≤ 200 characters
        ]
    ]
];

try {
    $api = Gerencianet::getInstance($options);
    $pix = $api->pixCreateImmediateCharge([], $body);
    
    
    #print_r($pix);

    if ($pix['txid']) {
        $params = [
            'id' => $pix['loc']['id']
        ];

        // Gera QRCode
        $qrcode = $api->pixGenerateQRCode($params);

        #echo 'Detalhes da cobrança:';
        #echo '<pre>' . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)["txid"] . '</pre>';

        #echo $pix["txid"];

        #echo 'QR Code:';
        #echo '<pre>' . json_encode($qrcode, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';

        #echo 'Imagem:<br />';
        #echo '<img src="' . $qrcode['imagemQrcode'] . '" />';
    } else {
        #echo '<pre>' . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
    }
} catch (GerencianetException $e) {
    #print_r($e->code);
    #print_r($e->error);
    #print_r($e->errorDescription);
} catch (Exception $e) {
    #print_r($e->getMessage());
}
?>




<?php



/*

include_once("../../../../../dir-php/function.php");



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
        <title>Checkout Ctrlser Pay</title>
        
        <link rel="icon" type="image/x-icon" href="../../../../../assets/img/favicon.ico"/>
        
        <link href="../../../../../assets/css/loader.css" rel="stylesheet" type="text/css" />
        
        <script src="../../../../../assets/js/loader.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <link href="../../../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../assets/css/plugins.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
        
        <link href="../../../../../assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="../../../../../assets/css/widgets/modules-widgets.css">
        
        <link href="../../../../../assets/css/elements/miscellaneous.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="../../../../../assets/css/forms/theme-checkbox-radio.css">
        
        <link href="../../../../../plugins/lightbox/photoswipe.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/lightbox/default-skin/default-skin.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/lightbox/custom-photswipe.css" rel="stylesheet" type="text/css" />
        
        
        <link href="../../../../../assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../assets/css/users/user-profile.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="../../../../../plugins/dropify/dropify.min.css">
        
        <link href="../../../../../assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
        
        
        <link href="../../../../../plugins/file-upload/file-upload-with-preview.min.css" rel="stylesheet" type="text/css" />
        
        <script src="../../../../../plugins/sweetalerts/promise-polyfill.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../../../../../plugins/editors/quill/quill.snow.css">
        
        <link href="../../../../../assets/css/apps/mailbox.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/notification/snackbar/snackbar.min.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        
        <link href="../../../../../assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
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
            textarea#exampleFormControlTextarea1 {
                text-align: left;
                color: #FFF;
                background: #1d1a3a;
            }
            .area-infoqr {
                display: flex;
                align-items: center;
                gap: 1%;
            }
            .area-infoqr button {
                width: 50%;
                border: none;
                padding: 10px;
                border-radius: 7px;
                background: #3b3f5c;
                font-weight: 600;
                color: #FFF;
            }
            button.copiar-qr:hover {
                background: #595c76;
                transition: .3s;  
            }
            button.tempo-qr {
                cursor: default;
            }
            .area-infoqr span {
                font-size: 12px;
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
                    margin: 1rem 0;
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
            @media only screen and (max-width: 450px) {
                .area-infoqr {
                    display: grid;
                    gap: 10%;
                }
                .area-infoqr button {
                    width: 100%;
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
                            <img src="../../../../img/icones/cadeado.png" alt="Compra Segura" width="15px">
                            <span>Compra Segura</span>
                        </div>
                    </div>
                    <div class="title-compra">
                        <span>Resumo da Compra</span>
                        
                    </div>
                    <div class="footer-compra">
                        <div class="itens">
                            <span>Pagamento via pix </span>
                        </div>
                        <hr>
                        <div class="resumo-compra">
                            <span><span class="sub-title-resumo"><?= $nome; ?></span></span>
                            <br>
                            <span><span class="sub-title-resumo"><?= $cpf ?></span></span>
                            <br>
                            <span> <span class="sub-title-resumo"><?= $contato ?></span></span>
                        </div>
                        <hr>
                        <div class="total-compra">
                            <span>Total</span>
                            <br>
                            <span class="title-total">
                                BRL <?= $valor; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                
                <div class="etapa2" id="passo2">
                    <div class="title-etapa2" data-bs-toggle="collapse" href="#collapseEtapa2" role="button" aria-expanded="false" aria-controls="collapseEtapa2">
                        <img src="../../../../img/icones/passo2.png" alt="Etapa 2" width="30px">
                        <span>Pagamento</span>
                    </div>
                    <div class="conteudo-etapa2 collapse show" id="collapseEtapa2">
                        <div class="cima-pagamento">
                            <img src="https://latintech.site/dashboard/img/pagamento/pix.png" alt="Pague com Pix" width="150px">
                            <img src="<?=$qrcode['imagemQrcode'];?>" alt="Qr Code" width="170px">
                        </div>
                        <div class="baixo-pagamento">
                            
                            <div>
                                <span class="title-pagamento">Chave Pix:</span>
                                <br>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php print_r($qrcode['qrcode']); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="area-infoqr">
                                <button class="copiar-qr">
                                    <span>Copiar Código</span>
                                </button>
                                <button class="tempo-qr">
                                    <span id="timer"></span>
                                </button>
                            </div>
                            <!-- 
                            <div class="container-login100-form-btn m-t-17">
                                <button class="login100-form-btn">
                                    
                                </button>
                            </div>
                            -->

                            <input class="input100" type="textarea" name="nome" value="<?=$_GET['nome'];?>" style="display: none;">
                            <input class="input100" type="textarea" name="email" value="<?=$_GET['email'];?>" style="display: none;">
                            <input class="input100" type="textarea" name="contato" value="<?=$_GET['contato'];?>" style="display: none;">
                            
                            <input class="input100" type="textarea" name="plano" value="<?=$_GET['plano'];?>" style="display: none;">
                            <input class="input100" type="textarea" name="txid" value="<?=$pix["txid"];?>" style="display: none;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script type="text/javascript">
        function mensal(){
            document.getElementById("mensal").style.display = "";
            document.getElementById("anual").style.display = "none";
        }

        function anual(){
            document.getElementById("mensal").style.display = "none";
            document.getElementById("anual").style.display = "";
        }


        var m_time = setInterval(function(){


            $.ajax({
              method: 'GET',
              url: 'fim.php',
              data: {
                txid: '<?=$pix["txid"];?>',
                nome: '<?=$nome;?>',
                email: '<?=$email;?>',
                cpf: '<?=$cpf;?>',
                contato: '<?=$contato;?>',
                valor: '<?=$valor;?>'
              }
            }).done(function(resposta) {
                console.log(resposta);

                if(resposta == "1"){

                    swal("Pagamento efetuado com Sucesso", "Você será redirecionado para a ctrlser", "success");
                    window.location.href = "../../../../../modules/add_payment.php?nome=<?=$nome?>&email=<?=$email?>&contato=<?=$contato?>&valor=<?=$valor?>&cpf=<?= $cpf ?>";
                    clearInterval(m_time);

  
                }

            });



        },4000);


        


        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
                display.textContent = "Expira em:  " + minutes + ":" + seconds;
                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }
        window.onload = function () {
            var duration = 60 * 5; // Converter para segundos
                display = document.querySelector('#timer'); // selecionando o timer
            startTimer(duration, display); // iniciando o timer
        };


    </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        
    </body>
</html>