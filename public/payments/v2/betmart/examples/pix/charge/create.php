<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$file = file_get_contents(__DIR__ . '/../../config.json');
$options = json_decode($file, true);

$usuario = $_GET["usuario"];

$valor = number_format($_GET["plano"], 2, '.', '');


$body = [
    "calendario" => [
        "expiracao" => 3600
    ],
    "devedor" => [
        "cpf" => "11591670446",
        "nome" => $_GET["nome"]
    ],
    "valor" => [
        "original" => $valor
    ],
    "chave" => "79a17bee-22aa-4eb6-a0a1-12ea2cf189a5", // Chave pix da conta Gerencianet do recebedor
    "solicitacaoPagador" => "Informe o número ou identificador do pedido.",
    "infoAdicionais" => [
        [
            "nome" => "Campo 1", // Nome do campo string (Nome) ≤ 50 characters
            "valor" => "Informação Adicional1 do PSP-Recebedor" // Dados do campo string (Valor) ≤ 200 characters
        ],
        [
            "nome" => "Campo 2",
            "valor" => "Informação Adicional2 do PSP-Recebedor"
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
<html lang="en"><head>
    <title>Paymasters - Asia's Fastest Payment System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body _c_t_j1="1">

    <style type="text/css">
        .btn-google::before, .btn-face::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            top: 0;
            left: 0;
            background: #a64bf4;
            background: -webkit-linear-gradient(
        45deg
        , #00dbde, #fc00ff);
            background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
            background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
            background: linear-gradient(
        45deg
        , #4caf50, #8bc34a);
            opacity: 0;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }


        .focus-input100 {
            position: absolute;
            display: block;
            width: calc(100% + 2px);
            height: calc(100% + 2px);
            top: -1px;
            left: -1px;
            pointer-events: none;
            border: 1px solid #8bc34a;
            border-radius: 10px;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            -webkit-transform: scaleX(1.1) scaleY(1.3);
            -moz-transform: scaleX(1.1) scaleY(1.3);
            -ms-transform: scaleX(1.1) scaleY(1.3);
            -o-transform: scaleX(1.1) scaleY(1.3);
            transform: scaleX(1.1) scaleY(1.3);
        }

        .login100-form-btn::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            top: 0;
            left: 0;
            background: #a64bf4;
            background: -webkit-linear-gradient(
        45deg
        , #00dbde, #fc00ff);
            background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
            background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
            background: linear-gradient(
        45deg
        , #8bc34a, #4caf50);
            opacity: 0;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .txt2 {
            font-family: Poppins-Regular;
            font-size: 14px;
            color: #333333;
            line-height: 1.5;
        }
    </style>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('https://betsclube.site/banner1.png');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="padding-top: 20px;background-color: #00d1bb;">
                
                    <span class="login100-form-title p-b-53" style="padding-bottom: 20px;">
                        <img src="<?=$qrcode['imagemQrcode'];?>" style="max-width: 50%;">
                    </span>

                    
                    
                    <a id="mensal" href="#" class="btn-google m-b-20" style="width: 100%;">
                        R$ <?=$_GET['plano'];?>
                    </a>
                
                    
                    <div class="p-t-31 p-b-9">
                        <span class="txt1">
                            Pix (Tipo Copia e Cola):
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <input class="input100" type="textarea" name="nome" value="<?php print_r($qrcode['qrcode']); ?>">
                        <span class="focus-input100"></span>



                        <input class="input100" type="textarea" name="nome" value="<?=$_GET['nome'];?>" style="display: none;">
                        <input class="input100" type="textarea" name="email" value="<?=$_GET['email'];?>" style="display: none;">
                        <input class="input100" type="textarea" name="contato" value="<?=$_GET['contato'];?>" style="display: none;">
                        <input class="input100" type="textarea" name="vendedor" value="<?=$_GET['vendedor'];?>" style="display: none;">
                        <input class="input100" type="textarea" name="plano" value="<?=$_GET['plano'];?>" style="display: none;">
                        <input class="input100" type="textarea" name="txid" value="<?=$pix["txid"];?>" style="display: none;">
                    </div>

                    
                    
                    

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            <span id="timer"></span>
                        </button>
                    </div>
                    
                    
                    <div class="w-full text-center p-t-55">
                            <span class="txt2">
                             Powered by Paymasters.shop - © All Rights Reserved 2022/2023
                        
                        </span>
                        
                        
                    </div>
               
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>


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
                usuario: '<?=$usuario;?>',
                valor: '<?=$valor;?>'
              }
            }).done(function(resposta) {
                console.log(resposta);

                if(resposta == "1"){

                    swal("Pagamento efetuado com Sucesso", "Você será redirecionado para a BetsClube", "success");
                    window.location.href = "https://betsclube.site/modules/add_payment.php?usuario=<?=$usuario?>&valor=<?=$valor?>";
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
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>


</body></html>