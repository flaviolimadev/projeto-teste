<?php

require __DIR__.'/../../vendor/autoload.php'; //Caminho da SDK

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$clientId = 'Client_Id_9a0fa903c5be71437b9b8d015e50ba3ca03c8e5d'; // insira seu Client_Id, conforme o ambiente (Des ou Prod)
$clientSecret = 'Client_Secret_c99b51c2a3e1272e5262447f822f9920b41c635c'; // insira seu Client_Secret, conforme o ambiente (Des ou Prod)
 
$options = [
  'client_id' => $clientId,
  'client_secret' => $clientSecret,
  'sandbox' => false // altere conforme o ambiente (true = Homologação e false = producao)
];

$paymentToken = '56244e1c734e507b8fee23290ccefd0231395bf4'; // payment_token obtido no procedimento através do Javascript único por conta Gerencianet

$item_1 = [
   'name' => 'Item 1', // nome do item, produto ou serviço
   'amount' => 1, // quantidade
   'value' => 3000 // valor (1000 = R$ 10,00) (Obs: É possível a criação de itens com valores negativos. Porém, o valor total da fatura deve ser superior ao valor mínimo para geração de transações.)
];
$items = [
   $item_1
];

//$metadata = array('notification_url'=>'http://localhost/ctrlser/payments/v2/examples/charge/card2.php');

$customer = [
   'name' => 'Gorbadoc Oldbuck', // nome do cliente
   'cpf' => '04267484171', // cpf do cliente
   'phone_number' => '5144916523', // telefone do cliente
   'email' => 'oldbuck@gerencianet.com.br', // endereço de email do cliente
   'birth' => '1977-01-15' // data de nascimento do cliente
];
$billingAddress = [
  'street' => 'Av JK',
  'number' => 909,
  'neighborhood' => 'Bauxita',
  'zipcode' => '35400000',
  'city' => 'Ouro Preto',
  'state' => 'MG'
];
$discount = [
   'type' => 'currency',
   'value' => 599
];

$credit_card = [
  'customer' => $customer,
  'installments' => 1, // número de parcelas em que o pagamento deve ser dividido
  'discount' =>$discount,
  'billing_address' => $billingAddress,
  'payment_token' => $paymentToken,
  'message' => 'teste\nteste\nteste\nteste'
];
$payment = [
   'credit_card' => $credit_card // forma de pagamento (credit_card = cartão)
];
$body = [
   'items' => $items,
   'metadata' =>$metadata,
   'payment' => $payment
];
try {
       $api = new Gerencianet($options);
       $pay_charge = $api->oneStep([],$body);
       echo '<pre>';
       print_r($pay_charge);
       echo '<pre>';
} catch (GerencianetException $e) {
   print_r($e->code);
     print_r($e->error);
     print_r($e->errorDescription);
 } catch (Exception $e) {
     print_r($e->getMessage());
 }