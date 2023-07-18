<?php

require __DIR__ . '/../../../vendor/autoload.php';

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



$valor = $_GET['valor'];
$cpf =  $_GET["cpf"];
$nome =  $_GET["nome"];
$email =  $_GET["email"];

$contato =  $_GET["contato"];


$file = file_get_contents(__DIR__ . '/../../config.json');
$options = json_decode($file, true);

$params = ['txid' => $_GET['txid']];

try {
    $api = Gerencianet::getInstance($options);
    $pix = $api->pixDetailCharge($params);

    #echo '<pre>' . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</pre>';
} catch (GerencianetException $e) {
    print_r($e->code);
    print_r($e->error);
    print_r($e->errorDescription);
} catch (Exception $e) {
    print_r($e->getMessage());
}


if ($pix["status"] == "CONCLUIDA") {

	echo 1;

    include("../../../../../dir-php/function.php");

    $query = "INSERT INTO `faturas` (`id`, `nome`, `email`, `celular`, `cpf`, `produto`, `checkout`, `data`, `status`, `pagamento`) VALUES (NULL, '{$nome}', '{$email}', '{$contato}', '{$cpf}', '999', '2', '{$data}', '1', '{$_GET['txid']}');";
    $result = mysqli_query($conn, $query);

	


}else{

	echo 0;
}


