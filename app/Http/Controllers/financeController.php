<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Account;
use App\Models\Extracts;
use App\Models\User;
use App\Models\Pixtxid;
use App\Models\Saque;
use App\Models\Mensager;
use App\Models\Notification;
use Carbon\Carbon;

class financeController extends Controller
{
    //paymentsViewCripto
    public function index(Request $r){

        $AuthUser = Auth::user();
        $menssagers = Mensager::where('user_id', $AuthUser->id)->get();
        $notifications = Notification::where('user_id', $AuthUser->id)->get();

        $indicacao_direta = Extracts::where('user_id', $AuthUser->id)->where('type', 1)->where('status', 1)->get()->sum('value');
        $indicacao_residual = Extracts::where('user_id', $AuthUser->id)->where('type', 2)->where('status', 1)->get()->sum('value');

        $extratro = Extracts::where('user_id', $AuthUser->id)->get();

        if(isset($r->search)){

            $date1 = $r->data1 == null ? '2020-01-01 00:00:00' : date('Y-m-d H:i:s', strtotime($r->data1 . ' 00:00:00'));
            $date2 = $r->data2 == null ? Carbon::now()->toDateString(). ' 23:59:59' : date('Y-m-d H:i:s', strtotime($r->data2 . ' 23:59:59'));

            $extratro = Extracts::where(function($query) use ($AuthUser, $r) {
                $query->where('user_id', $AuthUser->id)
                ->where('desciption', 'LIKE', '%'.$r->search.'%');
            })->whereBetween('created_at', [$date1, $date2])->get();

        }else{
            $extratro = Extracts::where('user_id', $AuthUser->id)->get();
        }


        $accounts = Account::where('user_id', $AuthUser->id)->get();

        return view('finance', [
            'AuthUser' => $AuthUser,
            'menssagers'=> $menssagers,
            'notifications' => $notifications,
            'extratro' => $extratro,
            'indicacao_direta' => $indicacao_direta,
            'indicacao_residual' => $indicacao_residual,
            'accounts' => $accounts
        ]);

    }


    public function paymentsViewCripto(){

        $AuthUser = Auth::user();
        $menssagers = Mensager::where('user_id', $AuthUser->id)->get();
        $notifications = Notification::where('user_id', $AuthUser->id)->get();

        $indicacao_direta = Extracts::where('user_id', $AuthUser->id)->where('type', 1)->where('status', 1)->get()->sum('value');
        $indicacao_residual = Extracts::where('user_id', $AuthUser->id)->where('type', 2)->where('status', 1)->get()->sum('value');

        $extratro = Extracts::where('user_id', $AuthUser->id)->get();
        $accounts = Account::where('user_id', $AuthUser->id)->get();

        return view('finance', [
            'AuthUser' => $AuthUser,
            'menssagers'=> $menssagers,
            'notifications' => $notifications,
            'extratro' => $extratro,
            'indicacao_direta' => $indicacao_direta,
            'indicacao_residual' => $indicacao_residual,
            'accounts' => $accounts
        ]);

    }

    public function transfer(Request $r){

        $AuthUser = Auth::user();
        $user_sender = User::where('email', $r->email)->get()->first();
        $descricao = "Transferência de saldo. ".$r->descricao;

        if(!isset($r->descricao) || !isset($r->valor)){
            return "Error - Prencha todos os campos.";
        }

        if($AuthUser->status){

            if(isset($user_sender)){

                if($AuthUser->balance >= ($r->valor * 100)){

                    #Retirando o saldo do usuario;
                    $update_user = User::find($AuthUser->id);
                    $update_user->balance -= $r->valor * 100;
                    $update_user->save();

                    #Adicionando no Extrato;
                    $new_extract = new Extracts;
                    $new_extract->user_id = $AuthUser->id;
                    $new_extract->user_ref = $user_sender->id;
                    $new_extract->status = 1;
                    $new_extract->value = $r->valor * 100;
                    $new_extract->desciption = $descricao;
                    $new_extract->type = 3;
                    $new_extract->save();


                    #Retirando o saldo do usuario;
                    $update_user = User::find($user_sender->id);
                    $update_user->bonus += $r->valor * 100;
                    $update_user->save();

                    #Adicionando no Extrato;
                    $new_extract = new Extracts;
                    $new_extract->user_id = $user_sender->id;
                    $new_extract->user_ref = $AuthUser->id;
                    $new_extract->status = 1;
                    $new_extract->value = $r->valor * 100;
                    $new_extract->desciption = $descricao;
                    $new_extract->type = 4;
                    $new_extract->save();

                    return 200;


                }else{ return "Error - Saldo insuficiente!"; }


            }else{ return "Erro - usuário não existe!"; }

        }

        return "Error - Conta não verificada.";


    }

    public function carteira(Request $r){

        #return "Saques são permitidos somente nas segundas feiras das 8 as 18h";

        $AuthUser = Auth::user();
        $descricao = "Solicitação de saque";

        if($AuthUser->balance >= ($r->valor * 100)){

            $valor = $r->valor * 100;
            $taxa = (($valor * 2) / 100);

            if($r->valor < 30){ return "Saque mínimo é de USD 30,00)"; }

            if($AuthUser->status){

                #Retirando o saldo do usuario;
                $update_user = User::find($AuthUser->id);
                $update_user->balance -= $r->valor * 100;
                $update_user->save();

                #Adicionando no Extrato;
                $new_extract = new Extracts;
                $new_extract->user_id = $AuthUser->id;
                $new_extract->user_ref = $AuthUser->id;
                $new_extract->status = 0;
                $new_extract->value = $valor - $taxa;
                $new_extract->desciption = $descricao;
                $new_extract->type = 5;
                $new_extract->save();

                 #Adicionando no Extrato;
                 $new_extract = new Extracts;
                 $new_extract->user_id = $AuthUser->id;
                 $new_extract->user_ref = $AuthUser->id;
                 $new_extract->status = 0;
                 $new_extract->value = $taxa;
                 $new_extract->desciption = "Taxa de Saque";
                 $new_extract->type = 5;
                 $new_extract->save();

                #Criando o extrato de saque;
                $new_saque = new Saque;
                $new_saque->user_id = $AuthUser->id;
                $new_saque->extract_id = $new_extract->id;
                $new_saque->value = $valor - $taxa;
                $new_saque->descricao = "Solicitação de saque.";
                $new_saque->carteira_type = $r->carteira;
                $new_saque->carteira = $r->carteira;
                $new_saque->save();

                return 200;


            }else{ return "Error - Conta não verificada."; }


        }else{ return "Error - Saldo insuficiente."; }

        return "Error - Consulte o suporte.";

    }

    public static function saque_total($id){

        $saques = Saque::where('user_id', $id)->where('status', 1)->sum('value');
        return $saques;
    }

    public function atvBonus(Request $r){

        $AuthUser = Auth::user();
        $descricao = "Ativação de produto com bônus";

        if($AuthUser->bonus >= ($r->valor * 100)){

            #Retirando o saldo do usuario;
            $update_user = User::find($AuthUser->id);
            $update_user->bonus -= $r->valor * 100;
            $update_user->save();

            #Adicionando no Extrato;
            $new_extract = new Extracts;
            $new_extract->user_id = $AuthUser->id;
            $new_extract->user_ref = $AuthUser->id;
            $new_extract->status = 1;
            $new_extract->value = $r->valor * 100;
            $new_extract->desciption = $descricao;
            $new_extract->type = 6;
            $new_extract->save();

            #Adicionando usuario ao plano
            $add = new Pixtxid;
            $add->user_id = $AuthUser->id;
            $add->txid = "Pagamento via bonus";
            $add->value = ($r->valor * 100);
            $add->status = 1;
            $add->save();

            return 200;


        }else{ return "Error - Saldo de bônus insuficiente."; }

        return "Error - Consulte o suporte.";

    }
}
