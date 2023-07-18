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



$usuario = $_GET['usuario'];
$valor = $_GET['valor'];


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

	


}else{

	echo 0;
}


