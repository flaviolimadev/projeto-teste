<?php

namespace App\Http\Controllers;

require __DIR__ . '/../../../vendor/autoload.php';

use App\Models\BoletoId;
use App\Models\CardId;
use App\Models\Checkout;
use App\Models\Extract;
use App\Models\networkExtract;
use App\Models\Pixtxid;
use App\Models\UsdtId;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mockery\CountValidator\Exact;


class GerencianetController extends Controller
{

    private $json = '{
        "client_id": "Client_Id_6b3b93b8cd6ec451b39a4ebddb5ecb5b6cdb4139",
        "client_secret": "Client_Secret_8f29df8826f7ae68758a1aa671f606a3d1ab7c0f",
        "pix_cert": "producao-412071-CTRLSER PAY.pem",
        "sandbox": true,
        "debug": false,
        "timeout": 30
    }';


    private $json2 = '{
        "client_id": "Client_Id_9a0fa903c5be71437b9b8d015e50ba3ca03c8e5d",
        "client_secret": "Client_Secret_c99b51c2a3e1272e5262447f822f9920b41c635c",
        "pix_cert": "producao-412071-CTRLSER PAY.pem",
        "sandbox": false,
        "debug": false,
        "timeout": 30
    }';

    //
    public function index(Request $r){

        //Pegando os dados do produto;
        $checkout = Checkout::find($r->produto);
        $user = User::where('email', $r->email)->first();

        $options = json_decode($this->json2, true);
        $valor = number_format($checkout->value/100, 2, '.', '');

        $cpf = $r->cpf;

        $body = [
            "calendario" => [
                "expiracao" => 3600
            ],
            "devedor" => [
                "cpf" => $cpf ,
                "nome" => $r->nome
            ],
            "valor" => [
                "original" => $valor
            ],
            "chave" => "94098612-cac3-4cb2-bbd6-c2ff8d21cead", // Chave pix da conta Gerencianet do recebedor
            "solicitacaoPagador" => "Informe o número ou identificador do pedido.",
            "infoAdicionais" => [
                [
                    "nome" => "Comnpra via CtrlPay - ", // Nome do campo string (Nome) ≤ 50 characters
                    "valor" =>  $checkout->produto->name // Dados do campo string (Valor) ≤ 200 characters
                ]
            ]
        ];

        $api = Gerencianet::getInstance($options);
        $pix = $api->pixCreateImmediateCharge([], $body);

        if ($pix['txid']) {
            $params = [
                'id' => $pix['loc']['id']
            ];
            // Gera QRCode
            $qrcode = $api->pixGenerateQRCode($params);

        }


        $add = new Pixtxid;
        $add->user_id = $user->id ?? 1;
        $add->txid = $pix["txid"];
        $add->value = $checkout->value;
        $add->name = $r->name;
        $add->email = $r->email;
        $add->cpf = $r->cpf;
        $add->product_id = $checkout->product_id;
        $add->checkout_id = $checkout->id;
        $add->save();


        return [
            'qrcode' => $qrcode['imagemQrcode'],
            'chave' => $qrcode['qrcode'],
            'txid' => $pix["txid"]
        ];

    }

    public function check_pix(Request $r){

        $options = json_decode($this->json2, true);
        $params = ['txid' => $r->txid];

        try {

            $api = Gerencianet::getInstance($options);
            $pix = $api->pixDetailCharge($params);

        } catch (GerencianetException $e) {
            print_r($e->code);
            print_r($e->error);
            print_r($e->errorDescription);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }


        if ($pix["status"] == "CONCLUIDA") {

            //Atualizando o banco dos codigos Txid;
            $cod = Pixtxid::where('txid',$r->txid)->get();

            if($cod[0]['status'] == 0){


                $update = Pixtxid::find($cod[0]['id']);
                $update->status = 1;
                $update->save();


                //Atualizando Saldo do usuario;
                $user =  User::find($cod[0]['user_id']);
                $user->balance += $cod[0]['value'];
                $user->save();

            }

            return 1;

        }else{

            return 0;
        }

    }

    public function cripto(Request $r){

        $checkout = Checkout::find($r->produto);
        $user = User::where('email', $r->email)->first();


        $add = new UsdtId;
        $add->user_id = $user->id ?? 1;
        $add->value = $checkout->value;
        $add->name = $r->name;
        $add->email = $r->email;
        $add->cpf = $r->cpf;
        $add->product_id = $checkout->product_id;
        $add->checkout_id = $checkout->id;
        $add->save();


        return $add;

    }


    public function boleto(Request $r){

        $options = json_decode($this->json2, true);
        unset($options['pix_cert']);
        //unset($options['sandbox']);

        //Pegando os dados do produto;
        $checkout = Checkout::find($r->id);
        $user = User::where('email', $r->email)->first();

        $items = [
            [
                "name" => $checkout->produto->name,
                "amount" => 1,
                "value" => $checkout->value
            ]
        ];

        $metadata = [
            "custom_id" => "Order_00001",
            "notification_url" => "https://your-domain.com.br/notification/"
        ];

        $customer = [
            "name" => $r->name,
            "cpf" => $r->cpf,
        ];



        $configurations = [
            "fine" => 200,
            "interest" => 33
        ];

        $bankingBillet = [
            "expire_at" => "2024-12-10",
            "message" => "This is a space\n of up to 80 characters\n to tell\n your client something",
            "customer" => $customer,
        ];

        $payment = [
            "banking_billet" => $bankingBillet
        ];

        $body = [
            "items" => $items,
            "payment" => $payment
        ];

        try {
            $api = new Gerencianet($options);
            $response = $api->createOneStepCharge($params = [], $body);

            //Adicionando solicitação no banco de dados;
            $insert = new BoletoId;
            $insert->user_id = $user->id ?? 1;
            $insert->product_id = $checkout->produto->id;
            $insert->checkout_id = $checkout->id;
            $insert->barcode = $response["data"]["barcode"];
            $insert->pix = $response["data"]["pix"]["qrcode"];
            $insert->link = $response["data"]["link"];
            $insert->billet_link = $response["data"]["billet_link"];
            $insert->charge_id = $response["data"]["charge_id"];
            $insert->status = 0;
            $insert->valor = $response["data"]["total"];
            $insert->save();

            return  json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        } catch (GerencianetException $e) {

            return $e->code.$e->error.$e->errorDescription;

        } catch (Exception $e) {

            return $e->getMessage();
        }
    }

    public function CredentialCard(){

        return view('checkCard');

    }

    public function payment_card(Request $r){
        #return $r;

        //Pegando os dados do produto;
        $checkout = Checkout::find($r->id);

        $user = User::where('email', $r->email)->first();

        $options = json_decode($this->json, true);
        unset($options['pix_cert']);

        $paymentToken = $r->tokenn;

        $items = [
            [
                "name" => $checkout->produto->name,
                "amount" => 1,
                "value" => $checkout->value
            ],
        ];


        $metadata = [
            "notification_url" => "https://your-domain.com.br/notification/"
        ];

        $customer = [
            "name" => $r->name,
            "cpf" => $r->cpf,
            "phone_number" => $r->contato,
            "email" => $r->email,
            "birth" => "1990-01-15"
        ];

        $billingAddress = [
            "street" => "Av JK",
            "number" => 909,
            "neighborhood" => "Bauxita",
            "zipcode" => "35400000",
            "city" => "Ouro Preto",
            "state" => "RN"
        ];


        $configurations = [
            "fine" => 200,
            "interest" => 33
        ];

        $credit_card = [
            "customer" => $customer,
            "installments" => intval($r->parcelas),
            "billing_address" => $billingAddress,
            "payment_token" => $paymentToken,
            "message" => "Seu pagamento do produto {{$checkout->produto->name}} está em analise."
        ];

        $payment = [
            "credit_card" => $credit_card
        ];

        $body = [
            "items" => $items,
            "metadata" => $metadata,
            "payment" => $payment
        ];



        try {

            $api = new Gerencianet($options);
            $response = $api->createOneStepCharge($params = [], $body);

            $add = new CardId;
            $add->user_id = $user->id ?? 1;
            $add->product_id = $checkout->produto->id;
            $add->checkout_id = $checkout->id;
            $add->name = $r->name;
            $add->email = $r->email;
            $add->cpf = $r->cpf;
            $add->parcelas = intval($r->parcelas);
            $add->value_parcela = intval($response["data"]["installment_value"]);
            $add->charge_id = intval($response["data"]["charge_id"]);
            $add->value = intval($response["data"]["total"]);
            $add->save();


            //return $response;

            return route('checkout', ['id' => $r->id, 'sucess' =>  'Pagamento em Analise!, Verifique seu E-mail']);

        } catch (GerencianetException $e) {

            return route('checkout', ['id' => $r->id, 'error' =>  $e->code.$e->error.$e->errorDescription]);

        } catch (Exception $e) {

            return route('checkout', ['id' => $r->id, 'error' =>  $e->getMessage()]);
        }
    }

}
