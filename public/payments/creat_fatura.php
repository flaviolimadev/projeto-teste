<?php
include("../dir-php/function.php");

require __DIR__ . '/v2/vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$file = file_get_contents(__DIR__ . '/v2/examples/config.json');
$options = json_decode($file, true);
unset($options['pix_cert']);

$nome = $_GET['nome'];
$email = $_GET['email'];
$contato = $_GET['contato'];
$cpf = $_GET['cpf'];
$valor = $_GET['plano'];
$affiliado = isset($_GET['affiliado']) ? $_GET['affiliado'] : 0;

$produto = $_GET['id'];

$data = time();

$cobranca = floatval($valor) * 100;

if(!isset($_GET['token'])){

	echo "<pre>";
	var_dump($_GET);

	

	$newURL = "v2/examples/pix/charge/create.php?nome={$nome}&email={$email}&contato={$contato}&cpf={$cpf}&plano={$valor}";



	header('Location: '.$newURL); 



}elseif(isset($_GET['token']) != ""){

	$items = [
    [
        'name' => 'CTRLPAY - PAYMENTS',
        'amount' => 1,
        'value' => $cobranca
    ]
	];

	$body = [
	    'items' => $items
	];

	try {
	    $api = new Gerencianet($options);
	    $response = $api->createCharge([], $body);

	    $data_card = json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	} catch (GerencianetException $e) {
	    print_r($e->code);
	    print_r($e->error);
	    print_r($e->errorDescription);
	} catch (Exception $e) {
	    print_r($e->getMessage());
	}

	$charge_id = objectToArray(json_decode($data_card))["data"]["charge_id"];

	$newURL = "v2/examples/charge/card.php?code=".$charge_id."&token=".$_GET['token']."&email=".$email."&nome=".$nome."&cpf=".$cpf."&contato=".$contato."&id=".$produto."&affiliado=".$affiliado;

	header('Location: '.$newURL); 

	echo $cobranca;



}


#echo news('http://localhost/ctrlser/payments/v2/examples/charge/create.php');
#header('Location: '.$newURL); 




?>


