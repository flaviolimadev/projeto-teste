<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mensager;
use App\Models\User;
use App\Models\Extracts;
use App\Models\Pixtxid;
use App\Models\Network;
use App\Models\Affiliates;
use App\Models\BoletoId;
use App\Models\CardId;
use App\Models\networkConfig;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Saque;

class inviteController extends Controller
{
    //
    public function index(){

        $AuthUser = Auth::user();
        $menssagers = Mensager::where('user_id', $AuthUser->id)->get();
        $notifications = Notification::where('user_id', $AuthUser->id)->get();

        $affiliates_array = [];
        $vendas_array = [];

        $Affiliates = Network::where('user_id', $AuthUser->id)->get();

        foreach($Affiliates as $Affiliate){

            $affiliates_array[$Affiliate->id] = User::find($Affiliate->affiliate_id);

            foreach(Pixtxid::where('user_id', $Affiliate->id)->get() as $venda){
                $vendas_array[$venda->id] = [$venda, User::find($Affiliate->affiliate_id)];
            }

        }

       // return $vendas_array;

        return view('invite', [
            'AuthUser' => $AuthUser,
            'menssagers'=> $menssagers,
            'notifications' => $notifications,
            'affiliates_array' => $affiliates_array,
            'vendas_array' => $vendas_array
        ]);

    }

    public function inviteNetwork(){

        $AuthUser = Auth::user();
        $menssagers = Mensager::where('user_id', $AuthUser->id)->get();
        $notifications = Notification::where('user_id', $AuthUser->id)->get();
        $Affiliates = Network::where('user_id', $AuthUser->id)->get();
        $Affiliates_hoje = Network::where('user_id', $AuthUser->id)->get();
        $vez = $this->getDireto($AuthUser->id);
        $data_rede = $this->network();

        $indicacao_direta = Extracts::where('user_id', $AuthUser->id)->where('type', 1)->where('status', 1)->get()->sum('value');
        $indicacao_residual = Extracts::where('user_id', $AuthUser->id)->where('type', 2)->where('status', 1)->get()->sum('value');

        $foobar = new inviteController();  // correct

        return view('network', [
            'AuthUser' => $AuthUser,
            'menssagers'=> $menssagers,
            'notifications' => $notifications,
            'Affiliates' => $Affiliates,
            'Affiliates_hoje' => $Affiliates_hoje,
            'vez' => $vez,
            'data_rede' => $data_rede,
            'indicacao_direta' => $indicacao_direta,
            'indicacao_residual' => $indicacao_residual,
            'total_ativos' => inviteController::getAtivos($AuthUser->id),
            'graduacao' => $foobar->graduacao($AuthUser->id),
        ]);

    }

    public function inviteEvolution(){

        $AuthUser = Auth::user();
        $menssagers = Mensager::where('user_id', $AuthUser->id)->get();
        $notifications = Notification::where('user_id', $AuthUser->id)->get();

        return view('carreira', [
            'AuthUser' => $AuthUser,
            'menssagers'=> $menssagers,
            'notifications' => $notifications
        ]);

    }




    public static function getDireto($user){

        $array = [];

        $diretos = Network::where('user_id', $user)->get();

        foreach($diretos as $direto){

            $usuario = User::find($direto->affiliate_id);


            //return $usuario->user;
            array_push($array, [
                'id' => $usuario->id,
                'user' => $usuario->user,
                'email' => $usuario->email,
                'data' => $usuario->created_at,
                'avatar' => $usuario->avatar,
                'nome' => $usuario->name,
             ]);

        }

        return $array;

    }


    public static function getAtivos($user){

        $array = [];

        $diretos = Network::where('user_id', $user)->get();

        foreach($diretos as $direto){

            $usuario = User::find($direto->affiliate_id);
            $compras = Pixtxid::where('user_id', $usuario->id)->where('status', '>' , 1)->where('status', '<' , 3)->where('value', '>' , 2000)->where('value', '<=' , 10000)->first();

            if($compras){

                //return $usuario->user;
                array_push($array, [
                    'id' => $usuario->id,
                    'user' => $usuario->user,
                    'email' => $usuario->email,
                    'data' => $usuario->created_at,
                    'avatar' => $usuario->avatar,
                    'nome' => $usuario->name,
                ]);

            }

        }

        return $array;

    }


    public static function getTop10($user){

        $array = [];

        $diretos = Network::where('user_id', $user)->get();

        foreach($diretos as $direto){

            $usuario = User::find($direto->affiliate_id);

            $compras = Pixtxid::where('user_id', $usuario->id)->where('status', '>' , 1)->where('status', '<' , 3)->first();

            if($compras){

                //return $usuario->user;
                array_push($array, [
                    'id' => $usuario->id,
                    'user' => $usuario->user,
                    'email' => $usuario->email,
                    'data' => $usuario->created_at,
                    'avatar' => $usuario->avatar,
                    'nome' => $usuario->name,
                ]);

            }

        }

        return $array;

    }


    public function network(){

        $array = [

            'nv1' => [],
            'nv2' => [],
            'nv3' => [],
            'nv4' => [],
            'nv5' => [],
            'nv6' => [],
            'nv7' => [],
            'nv8' => [],
            'nv9' => [],
            'nv10' => [],
            'nv11' => [],
            'nv12' => [],
        ];

        $AuthUser = Auth::User();

       foreach($this->getDireto($AuthUser->id) as $vez){


            array_push($array['nv1'], [
                $vez
             ]);

            foreach($this->getDireto($vez['id']) as $vez2){

                array_push($array['nv2'], [
                    $vez2
                 ]);

                 foreach($this->getDireto($vez2['id']) as $vez3){

                    array_push($array['nv3'], [
                        $vez3
                     ]);

                     foreach($this->getDireto($vez3['id']) as $vez4){

                        array_push($array['nv4'], [
                            $vez4
                         ]);

                         foreach($this->getDireto($vez4['id']) as $vez5){

                            array_push($array['nv5'], [
                                $vez5
                             ]);

                             foreach($this->getDireto($vez5['id']) as $vez6){

                                array_push($array['nv6'], [
                                    $vez6
                                 ]);

                                 foreach($this->getDireto($vez6['id']) as $vez7){

                                    array_push($array['nv7'], [
                                        $vez7
                                     ]);

                                     foreach($this->getDireto($vez7['id']) as $vez8){

                                        array_push($array['nv8'], [
                                            $vez8
                                         ]);

                                         foreach($this->getDireto($vez8['id']) as $vez9){

                                            array_push($array['nv9'], [
                                                $vez9
                                             ]);

                                             foreach($this->getDireto($vez9['id']) as $vez10){

                                                array_push($array['nv10'], [
                                                    $vez10
                                                 ]);

                                                 foreach($this->getDireto($vez10['id']) as $vez11){

                                                    array_push($array['nv11'], [
                                                        $vez11
                                                     ]);

                                                     foreach($this->getDireto($vez11['id']) as $vez12){

                                                        array_push($array['nv12'], [
                                                            $vez12
                                                         ]);

                                                   }

                                               }

                                           }

                                       }

                                   }

                               }

                           }

                       }

                   }

               }

           }

       }



       $array_rede = [

        'nv1' => [0,0,0],
        'nv2' => [0,0,0],
        'nv3' => [0,0,0],
        'nv4' => [0,0,0],
        'nv5' => [0,0,0],
        'nv6' => [0,0,0],
        'nv7' => [0,0,0],
        'nv8' => [0,0,0],
        'nv9' => [0,0,0],
        'nv10' => [0,0,0],
        'nv11' => [0,0,0],
        'nv12' => [0,0,0],
        'total' => 0
      ];



       foreach ($array as $key => $nivel) {
            # code...
            foreach ($nivel as $key2 => $user) {

                //return $user;
                # code...
                $array_rede[$key][0] += 0;
                $array_rede[$key][1] += count(Pixtxid::where('user_id', $user[0]['id'])->where('status', '=' , 2)->get());
                $array_rede[$key][2] += 1;

                $array_rede['total']++;

            }

       }

       //return $array_rede;

       return $array_rede;

    }

    public static function compras($id){

        return [
            'compras_pagas' => Pixtxid::where('user_id', $id)->where('status', '>' , 0)->where('status', '<' , 3)->first(),
            'compras_comissionadas' => Pixtxid::where('user_id', $id)->where('status', 2)->get(),
            'compras_vencidas' => Pixtxid::where('user_id', $id)->where('status', 3)->get()
        ];

    }


    public function bonificacoes(){

        $pendentes_pix = Pixtxid::where('status', 1)->get();
        $pendentes_cartao = CardId::where('status', 1)->get();
        $pendentes_boleto = BoletoId::where('status', 1)->get();

        $todos_pendentes = $pendentes_pix->concat($pendentes_cartao)->concat($pendentes_boleto);
        $vez = 0;

        foreach($todos_pendentes as $item){

            if($item->user_id > 1){

                #*******************************************************************************************************

                #Pegando o link no qual ele foi cadastrado;
                $vez = Network::where('affiliate_id', $item->user_id)->first();
                #Pegando informacoes do prodsuto comprado;

                #Pagar Indicação direta;
                $link_afiliado = User::find( $vez->user_id );
                $link_afiliado->balance += ($item->value * networkConfig::find(1)->value)/100;
                $link_afiliado->save();

                #Extrato de indicação direta;
                $extrato_indicacao = new Extracts;
                $extrato_indicacao->user_id = $link_afiliado->id;
                $extrato_indicacao->user_ref = $item->user_id;
                $extrato_indicacao->status = 1;
                $extrato_indicacao->value = ($item->value * networkConfig::find(1)->value)/100;
                $extrato_indicacao->desciption = 'Bônus de indicação direta';
                $extrato_indicacao->type = 1;
                $extrato_indicacao->save();

                #Adicionando bônus de residual;
                for ($i=0; $i < 11; $i++) {

                    $rede = false;
                    $vez = Network::where('affiliate_id', $vez->user_id)->first();

                    if($vez->user_id == 1){break;}

                    if($vez->user_id != $link_afiliado->id){

                        $total_diretos = $this->graduacao($vez->user_id);
                        $total_ativos = $this->getAtivos($vez->user_id);

                        if($this->getAtivoStart($vez->user_id)){
                            $rede = true;
                        }

                        $comissao = ($item->value * networkConfig::find($i + 2)->value)/100;

                        echo $this->getAtivoStart($vez->user_id)."id: {$i}, usuario: {$vez->user_id} , Comissão: {$comissao} <hr>";

                        $comissao = ($item->value * networkConfig::find($i + 2)->value)/100;

                        if($rede){

                            $link_afiliado = User::find( $vez->user_id );
                            $link_afiliado->balance += $comissao;
                            $link_afiliado->save();

                            #Extrato de indicação residual;
                            $extrato_indicacao = new Extracts;
                            $extrato_indicacao->user_id = $link_afiliado->id;
                            $extrato_indicacao->user_ref = $item->user_id;
                            $extrato_indicacao->status = 1;
                            $extrato_indicacao->value = $comissao;
                            $extrato_indicacao->desciption = 'Bônus de residual nível: '.($i+2);
                            $extrato_indicacao->type = 2;
                            $extrato_indicacao->save();

                        }else{

                            $link_afiliado = User::find( $vez->user_id );

                            #Extrato de indicação residual;
                            $extrato_indicacao = new Extracts;
                            $extrato_indicacao->user_id = $link_afiliado->id;
                            $extrato_indicacao->user_ref = $item->user_id;
                            $extrato_indicacao->status = 2;
                            $extrato_indicacao->value = $comissao;
                            $extrato_indicacao->desciption = 'Bônus de residual - Qualificação necessária! nível: '.($i+2);
                            $extrato_indicacao->type = 2;
                            $extrato_indicacao->save();

                        }
                    }

                }

                    #*******************************************************************************************************





            }

            echo "******************************************************** <hr>";

            $extrato_atual = Pixtxid::find($item->id);
            $extrato_atual->status = 2;
            $extrato_atual->save();
        }

    }

    public function graduacao($id){

        $total_diretos = $this->getDireto($id);
        $total_ativos = $this->getAtivos($id);
        $total_top10 = $this->getTop10($id);

        $graduacao = 1;

        if(count($total_diretos ) >= 2 && count($total_ativos ) >= 2 ){ $graduacao = 2; }
        if(count($total_diretos ) >= 4 && count($total_ativos ) >= 3 ){ $graduacao = 3; }
        if(count($total_diretos ) >= 6 && count($total_ativos ) >= 4 ){ $graduacao = 4; }
        if(count($total_diretos ) >= 8 && count($total_ativos ) >= 5 ){ $graduacao = 5; }
        if(count($total_diretos ) >= 10 && count($total_ativos ) >= 6 ){ $graduacao = 6; }

        return $graduacao;

    }


    public static function getUser($id){

        return User::find($id);

    }

    public static function getCarteira($id){

        return Account::find($id);

    }


    public static function getAtivo($id){

        $compra = Pixtxid::where('user_id', $id)->where('status', '>' , 1)->where('status', '<' , 3)->get();
        return count($compra);

    }

    public static function getAtivoStart($id){

        $compra = Pixtxid::where('user_id', $id)->where('status', '>' , 1)->where('status', '<' , 3)->get();
        return count($compra);

    }


    public static function getAffiliate($id){

        #Pegando o link no qual ele foi cadastrado;
        $vez = Network::where('affiliate_id', $id)->first();

        #if(!isset($vez->user_id)){ return $id; }

        #Pagar Indicação direta;
        $link_afiliado = User::find( $vez->user_id );

        return $link_afiliado;

    }


    public function indique3(){

        $usuarios = User::all();

        foreach ($usuarios as $item) {
            # code...
            if($item->id != 1){
                $total_ativos = $this->getAtivos($item->id);
                if(count($total_ativos) >= 3){

                    $plano = Pixtxid::where('user_id', $item->id)->where('status', '>' , 1)->where('status', '<' , 3)->where('value', '>=' , 6000)->where('value', '<=' , 10000)->first();
                    if(!$plano){

                        $new_Pixtxid = new Pixtxid;
                        $new_Pixtxid->user_id = $item->id;
                        $new_Pixtxid->status = 1;
                        $new_Pixtxid->txid = 0;
                        $new_Pixtxid->avatar = "indq3";
                        $new_Pixtxid->value = 10000;
                        $new_Pixtxid->save();

                        #Extrato de indicação residual;
                        $extrato_indicacao = new Extracts;
                        $extrato_indicacao->user_id = $item->id;
                        $extrato_indicacao->user_ref = $item->id;
                        $extrato_indicacao->status = 1;
                        $extrato_indicacao->value = 10000;
                        $extrato_indicacao->desciption = 'Parabens Promoção indique 3 ganhe o Gold';
                        $extrato_indicacao->type = 2;
                        $extrato_indicacao->save();

                    }elseif($plano->value < 10000){

                        $plano_atual = Pixtxid::find($plano->id);
                        $plano_atual->value = 10000;
                        $plano_atual->save();

                        #Extrato de indicação residual;
                        $extrato_indicacao = new Extracts;
                        $extrato_indicacao->user_id = $item->id;
                        $extrato_indicacao->user_ref = $item->id;
                        $extrato_indicacao->status = 1;
                        $extrato_indicacao->value = 10000;
                        $extrato_indicacao->desciption = 'Parabens Promoção indique 3 ganhe o Gold';
                        $extrato_indicacao->type = 2;
                        $extrato_indicacao->save();

                    }
                }
            }
        }
    }




}
