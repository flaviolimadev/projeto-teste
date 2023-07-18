<?php

require __DIR__ . '/../../vendor/autoload.php';

include("../../../../dir-php/function.php");

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$file = file_get_contents(__DIR__ . '/../config.json');
$options = json_decode($file, true);
unset($options['pix_cert']);

$params = ['id' => $_GET['code']];

$paymentToken = "{$_GET['token']}";

$customer = [
    'name' => "{$_GET['nome']}",
    'cpf' => "{$_GET['cpf']}",
    'phone_number' => "{$_GET['contato']}",
    'email' => "{$_GET['email']}",
    'birth' => '1990-01-15'
];

$billingAddress = [
    'street' => 'Av JK',
    'number' => 909,
    'neighborhood' => 'Bauxita',
    'zipcode' => '35400000',
    'city' => 'Ouro Preto',
    'state' => 'MG',
];

$body = [
    'payment' => [
        'credit_card' => [
            'installments' => 1,
            'billing_address' => $billingAddress,
            'payment_token' => $paymentToken,
            'customer' => $customer
        ]
    ]
];

try {
    $api = new Gerencianet($options);
    $response = $api->payCharge($params, $body);

    echo '<pre>' . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}


$nome = $_GET['nome'];
$email = $_GET['email'];
$contato = $_GET['contato'];
$cpf = $_GET['cpf'];
$id = $_GET['id'];


$query = "INSERT INTO `faturas` (`id`, `nome`, `email`, `celular`, `cpf`, `produto`, `checkout`, `data`, `status`, `pagamento`) VALUES (NULL, '{$nome}', '{$email}', '{$contato}', '{$cpf}', '{$id}', '2', '{$data}', '0', '{$_GET['code']}');";

$result = mysqli_query($conn, $query);


$newURL = '../../../../payments/sucess.php';
header('Location: '.$newURL); 


?>

