<?php

require __DIR__ . '/../../vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$file = file_get_contents(__DIR__ . '/../config.json');
$options = json_decode($file, true);
unset($options['pix_cert']);

$items = [
    [
        'name' => 'Item 1',
        'amount' => 1,
        'value' => 1000
    ]
];

$body = [
    'items' => $items
];

try {
    $api = new Gerencianet($options);
    $response = $api->createCharge([], $body);

    echo "<div id='tt'>" . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</div>";
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}

?>


<script type='text/javascript'>var s=document.createElement('script');s.type='text/javascript';var v=parseInt(Math.random()*1000000);s.src='https://api.gerencianet.com.br/v1/cdn/6f6535d788f7bf00c5864fabd382c933/'+v;s.async=false;s.id='6f6535d788f7bf00c5864fabd382c933';if(!document.getElementById('6f6535d788f7bf00c5864fabd382c933')){document.getElementsByTagName('head')[0].appendChild(s);};$gn={validForm:true,processed:false,done:{},ready:function(fn){$gn.done=fn;}};</script>


<script type="text/javascript">
    
    $gn.ready(function (checkout) {

        checkout.getPaymentToken(
            {
                brand: 'mastercard', // bandeira do cartão
                number: '5114770227654654', // número do cartão
                cvv: '284', // código de segurança
                expiration_month: '06', // mês de vencimento
                expiration_year: '2031' // ano de vencimento
            },
            function (error, response) {
                if (error) {
                    // Trata o erro ocorrido
                    console.error(error);
                } else {
                    // Trata a resposta
                    console.log(response);
                    document.getElementById('tt').innerHTML += document.getElementById('tt').innerHTML + JSON.stringify(response);
                }
            }
        );

    });

</script>