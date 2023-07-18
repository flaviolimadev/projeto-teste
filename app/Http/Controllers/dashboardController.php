<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Address;
use App\Models\estrategia;
use App\Models\Faq;
use App\Models\Mysignal;
use App\Models\Sinais;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Whoops\Run;

class dashboardController extends Controller
{

    //editProfile
    public function profile(){

        $AuthUser = Auth::user();

        $addres = Address::where('user_id', $AuthUser->id)->get();

        if(sizeof($addres) == 0){

            $addres = "Definir";

        }else{

            $addres = $addres[0]['country'] . ", " . $addres[0]['city'];
        }


        return view('profile', [
            'AuthUser' =>  $AuthUser,
            'Address' => $addres
        ]);
    }



    public function financeData(){

        $AuthUser = Auth::user();
        $Carteiras = Account::where('user_id', $AuthUser->id)->get();


        return view('financedata', [
            'AuthUser' =>  $AuthUser,
            'wallets' => $Carteiras
        ]);
    }



    public function financeDataDel(Request $r){

        $AuthUser = Auth::user();
        $Carteiras = Account::find($r->id);
        $Carteiras->status = 3;
        $Carteiras->save();
        return 200;
    }



    public function financeDataSave(Request $r){

        $AuthUser = Auth::user();

        #Especificando os unicos dados que quero receber;
        $data = $r->only('type_key', 'key');

        #Validar os dados recebidos para serem salvos;
        $validator = $r->validate([
            'type_key' => 'required',
            'key' => 'required'

        ]);

        #Verificando se carteira ja existe no sistema;
        if(sizeof( Account::where('account', $r->key)->get() ) ){
            return 403;
        }

        #Adicionando uma nova carteira no sistema;
        $new_conta = new Account;
        $new_conta->user_id = $AuthUser->id;
        $new_conta->status = 0;
        $new_conta->type = $r->type_key;
        $new_conta->account = $r->key;
        $new_conta->save();

        return 200;
    }




    public function accountSecurity(){

        $AuthUser = Auth::user();


        return view('accountsecurity',[
            'AuthUser' => $AuthUser
        ]);
    }


    public function accountSecuritySave(Request $r){

        $nova_senha = Hash::make($r->new_password);

        #verificando se as senhas correspondem
        if(Hash::check($r->password, auth()->user()->password)){

            $user = User::find(auth()->user()->id);
            $user->password = $nova_senha;
            $user->save();

            return 200;

        }

        return 401;


    }




    public function accountQuality(){

        $AuthUser = Auth::user();

        return view('accountquality', [
            'AuthUser' => $AuthUser
        ]);
    }




    public function editProfile(){

        $AuthUser = Auth::user();
        $addres = Address::where('user_id', $AuthUser->id)->get();

        if(sizeof($addres) == 0){

            $addres = false;

        }else{

            $addres = $addres;
        }


        return view('editprofile', [
            'AuthUser' =>  $AuthUser,
            'Adress' => $addres
        ]);
    }





    public function editProfileSave(Request $r ){

        $AuthUser = Auth::user();



        #Especificando os unicos dados que quero receber;
        //$data = $r->only('avatar', 'profission', 'birth_date', 'biography', 'pais', 'city', 'adress', 'telephone', 'cep', 'likedin', 'twitter', 'facebook', 'github');



        $save = $r->file('avatar') == null ? $AuthUser->avatar : $r->file('avatar')->store('/', 'public');




        #Verificando se a data ja foi informada;
        if($AuthUser->birth_date == 0){

            $data = $r->birth_date;

        }else{

            $data = $AuthUser->birth_date;
        }



        #Atualizando dados do usuário;
        $usuario = User::find($AuthUser->id);
        $usuario->profession = $r->profission;
        $usuario->birth_date = $data;
        $usuario->avatar = $save;
        $usuario->biography = $r->biography;
        $usuario->telephone = $r->telephone;
        $usuario->status = 1;
        $usuario->save();

        #Atualizar endereço do usuario;
        $addres = Address::where('user_id', $AuthUser->id)->get();


        #Verificando se o ususario já possui endereço cadastrado no sistema;
        if(sizeof($addres) == 0){

            $new_addres = new Address;
            $new_addres->user_id = $AuthUser->id;
            $new_addres->country = $r->pais;
            $new_addres->zip_code = $r->cep;
            $new_addres->city = $r->city;
            $new_addres->addresses = $r->adress;
            $new_addres->save();

        }else{

            $addres = Address::find($addres[0]['id']);
            $addres->user_id = $AuthUser->id;
            $addres->country = $r->pais;
            $addres->zip_code = $r->cep;
            $addres->city = $r->city;
            $addres->addresses = $r->adress;
            $addres->save();


        }


        return 200;

    }

    public function calc(){

        $AuthUser = Auth::user();


        return view('calc', [
            'AuthUser' =>  $AuthUser,
        ]);

    }

    public function tips(){

        $AuthUser = Auth::user();

        $planos = inviteController::compras( $AuthUser->id );
        $tips = Sinais::where('status', 1)->orderByDesc('created_at')->get();

        #return $planos;

        if($planos['compras_pagas']){

            return view('tips', [
                'AuthUser' =>  $AuthUser,
                'tips' => $tips
            ]);

        }else{

            return redirect()->route('marketplace');

        }


    }

    public function faq(){

        $AuthUser = Auth::user();
        $faq = Faq::where('status', 1)->get();

        return view('faq',[
            'AuthUser' =>  $AuthUser,
            'faq' => $faq
        ]);

    }

    public function stats(){

        $AuthUser = Auth::user();

        $betano = Sinais::where('casa01', 'betano')->orWhere('casa02', 'betano')->get();
        $bet365 = Sinais::where('casa01', 'BET365')->orWhere('casa02', 'BET365')->get();
        $betfair = Sinais::where('casa01', 'betfair')->orWhere('casa02', 'betfair')->get();
        $parimatch = Sinais::where('casa01', 'parimatch')->orWhere('casa02', 'parimatch')->get();
        $pinup = Sinais::where('casa01', 'pinup')->orWhere('casa02', 'pinup')->get();
        $betsson = Sinais::where('casa01', 'betsson')->orWhere('casa02', 'betsson')->get();
        $a22bet = Sinais::where('casa01', '22bet')->orWhere('casa02', '22bet')->get();
        $a888sport = Sinais::where('casa01', '888sport')->orWhere('casa02', '888sport')->get();
        $betwarrior = Sinais::where('casa01', 'betwarrior')->orWhere('casa02', 'betwarrior')->get();
        $pockerstar = Sinais::where('casa01', 'pockerstar')->orWhere('casa02', 'pockerstar')->get();
        $betnacional  = Sinais::where('casa01', 'betnacional')->orWhere('casa02', 'betnacional ')->get();
        $leovegas = Sinais::where('casa01', 'leovegas')->orWhere('casa02', 'leovegas')->get();

        $operacoes = Sinais::all();

        $mesAtual = Carbon::now()->month;
        $operacoes_mes = Sinais::whereMonth('created_at', $mesAtual)->get();

        #return $betano;

        return view('stats',[
            'AuthUser' =>  $AuthUser,
            'betano' => $betano,
            'bet365' => $bet365,
            'betfair' => $betfair,
            'parimatch' => $parimatch,
            'pinup' => $pinup,
            'betsson' => $betsson,
            'a22bet' => $a22bet,
            'a888sport' => $a888sport,
            'betwarrior' => $betwarrior,
            'pockerstar' => $pockerstar,
            'betnacional' => $betnacional,
            'leovegas' => $leovegas,
            'operacoes' => $operacoes,
            'operacoes_mes' => $operacoes_mes,
        ]);
    }

    public function estrategias(){

        $AuthUser = Auth::user();
        $estragias = estrategia::where('user_id', $AuthUser->id)->where('status', 1)->get();
        $operacoes = Mysignal::where('user_id', $AuthUser->id)->where('status', 1)->get();

        $str_name = [];
        $str_balabnces = [];

        foreach($estragias as $tt){
            $str_name[] = strval($tt->name);
            $str_balabnces[] = $tt->balance/100;
        }

        return view('estrategias', [
            'AuthUser' =>  $AuthUser,
            'estragias' =>  $estragias,
            'str_name' => json_encode($str_name),
            'str_balabnces' => json_encode($str_balabnces),
            'operacoes' => $operacoes
        ]);

    }


    public function estrategia($id){

        $AuthUser = Auth::user();
        $data_grafico = [];
        $data_value = [];
        $sinais = Mysignal::where('estrategia_id', $id)->get();

        foreach($sinais as $sinal){
            $data_grafico[] = strval($sinal->created_at->format('d/m/Y H:i'));
            $data_value[] = ((($sinal->balance/100) * floatval(str_replace(",", ".", $sinal->lucro))) / 100);
        }

        return view('estrategia', [
            'AuthUser' =>  $AuthUser,
            'tips' => $sinais,
            'estrategia' => estrategia::find($id),
            'data_value' => json_encode($data_value),
            'data_grafico' => json_encode($data_grafico),
        ]);

    }

    public function newStrategia(){
        $AuthUser = Auth::user();

        return view('newestrategia', [
            'AuthUser' =>  $AuthUser,
            'tips' => Sinais::all()
        ]);
    }


    public function newStrategiaEdit($id){
        $AuthUser = Auth::user();

        $estrategia = estrategia::find($id);

        return view('newestrategia', [
            'AuthUser' =>  $AuthUser,
            'tips' => Sinais::all(),
            'estrategia' => $estrategia
        ]);
    }

    public function newStrategia_post(Request $r){

        #return $r;
        $AuthUser = Auth::user();

        #Validar os dados recebidos para serem salvos;
        $validator = $r->validate([
            'status' => 'required',
            'name' => 'required',
            'balance' => 'required',
            'description' => 'required',

        ]);

        if(isset($r->id)){

            $new_estrategia = estrategia::find($r->id);
            $new_estrategia->status = intval($r->status);
            $new_estrategia->name = $r->name;
            $new_estrategia->balance = $r->balance*100;
            $new_estrategia->description = $r->description;
            $new_estrategia->save();

            return redirect()->route('estrategias', ['sucess' => 'Estrategia Atualizada']);

        }

        $new_estrategia = new estrategia;
        $new_estrategia->user_id = $AuthUser->id;
        $new_estrategia->status = intval($r->status);
        $new_estrategia->name = $r->name;
        $new_estrategia->balance = $r->balance*100;
        $new_estrategia->description = $r->description;
        $new_estrategia->save();

        return redirect()->route('estrategias', ['sucess' => 'Nova estrategia adicionada']);

    }

    public function newSinal(){
        $AuthUser = Auth::user();

        return view('newsinal', [
            'AuthUser' =>  $AuthUser,
            'estrategia' => estrategia::where('user_id', $AuthUser->id)->get(),
        ]);
    }

    public function newSinal_post(Request $r){
        $AuthUser = Auth::user();

        #Validar os dados recebidos para serem salvos;
        $validator = $r->validate([
            'casa_01' => 'required',
            'casa_02' => 'required',
            'odd_01' => 'required',
            'odd_02' => 'required',
            'evento' => 'required',
            'mercado_01' => 'required',
            'mercado_02' => 'required',
            'data_evento' => 'required',
            'investimento' => 'required',
            'estrategia' => 'required',
            'lucro' => 'required',

        ]);

        $new_sinal = new Mysignal;
        $new_sinal->user_id = $AuthUser->id;
        $new_sinal->estrategia_id = $r->estrategia;
        $new_sinal->casa_01 = $r->casa_01;
        $new_sinal->casa_02 = $r->casa_02;
        $new_sinal->odd_01 = $r->odd_01;
        $new_sinal->odd_02 = $r->odd_02;
        $new_sinal->evento = $r->evento;
        $new_sinal->mercado_01 = $r->mercado_01;
        $new_sinal->mercado_02 = $r->mercado_02;
        $new_sinal->quando = Carbon::parse($r->data_evento);
        $new_sinal->balance = $r->investimento*100;
        $new_sinal->lucro = $r->lucro;
        $new_sinal->save();

        return redirect()->route('estrategia', ['id' => $r->estrategia]);
    }
}
