<?php

namespace App\Http\Controllers;

use App\Mail\VeriffyEmailMail;
use App\Models\User;
use App\Models\Veriff;
use App\Models\Network;
use App\Models\Pixtxid;
use App\Models\salesPerfectapy;
use Carbon\Carbon;
use Comtele\Services\TextMessageService;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class authController extends Controller
{
    public function register(){
        return view('register', ['id' => 1]);
    }

    public function registerAffiliate($id){
        return view('register', ['id' => $id]);
    }

    public function recover(){
        return view('recover');
    }

    public function register_required(Request $r){
        #Validando os dados antes de ir para o banco de dados;
        $r->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        #Especificando os unicos dados que quero receber;
        $data = $r->only('name', 'email', 'password', 'idds');

        #Criando uma Hash para a senha do usuário;
        $data['password'] = Hash::make($data['password']);

        #Criando o usuario com os dados recebidos em $data;
        $userCreat = User::create($data);

        $new_affiliate = new Network;
        $new_affiliate->user_id = $r->idds;
        $new_affiliate->affiliate_id = $userCreat->id;
        $new_affiliate->save();

        $perfectpay = salesPerfectapy::where('email', $r->email)->first();

        if($perfectpay){

            $new_compra = new Pixtxid;
            $new_compra->user_id = $userCreat->id;
            $new_compra->txid = 123;
            $new_compra->status = 2;
            $new_compra->avatar = 2;
            $new_compra->value = 100;
            $new_compra->product_id = 7;
            $new_compra->save();

        }

        $validator = $r->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        #Verificando se os dados de acesso correspondem;
        if( Auth::attempt($validator) ){

            return redirect()->route('home');

        }else{ return redirect()->route('login', ['error' => true])->withInput();  }


    }

    public function login(Request $r){

        #Verifica se o usuario já esta logado no sistema;
        if(Auth::check()){ return redirect()->route('home'); }

        return view('login');

    }

    public function login_required(Request $r){

        #Validando os dados antes de seguir com o código;
        $validator = $r->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        #Especificando os unicos dados que quero receber;
        $data = $r->only('email', 'password');

        #Verificando se os dados de acesso correspondem;
        if( Auth::attempt($validator) ){

            return redirect()->route('home');

        }else{ return redirect()->route('login', ['error' => true])->withInput();  }


    }

    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }


    public function veriff(Request $r){

        #Verificando qual o tipo de verificação esta sendo solicitada;
        if($r->type == 1){

            #Verificando se o usuario ainda não teve seus dados verificados;
            if(auth()->user()->email_verified_at == null){

                $new_veriff = new Veriff;
                $new_veriff->user_id = auth()->user()->id;
                $new_veriff->code = Carbon::now()->timestamp;
                $new_veriff->type = 1;
                $new_veriff->save();

                $update_user = User::find(auth()->user()->id);
                $update_user->email_verified_at = '1970-01-01 00:00:01';
                $update_user->save();

                //Enviando Email para o usuário;
                $mailData = [
                    "nome" => auth()->user()->name,
                    "user" => auth()->user()->user,
                    "code_very" => $new_veriff->code
                ];

                Mail::to(auth()->user()->email)->send(new VeriffyEmailMail($mailData));

                return 201;

            #Caso já tenha verificado retorna um erro;
            }else{ return 400; }
        }


        #Verificando qual o tipo de verificação esta sendo solicitada;
        if($r->type == 2){

            #Verificando se o usuario ainda não teve seus dados verificados;
            if(auth()->user()->telephone_verified_at == null){

                $new_veriff = new Veriff;
                $new_veriff->user_id = auth()->user()->id;
                $new_veriff->code = Carbon::now()->timestamp;
                $new_veriff->type = 2;
                $new_veriff->save();

                $update_user = User::find(auth()->user()->id);
                $update_user->telephone_verified_at = '1970-01-01 00:00:01';
                $update_user->save();

                //Enviando SMS para o usuário;
                $API_KEY = "b71f3225-f2e9-4af7-80cd-5fd36e0b4462";

                $link = route('veriffCode', ['code' => $new_veriff->code]);

                $textMessageServices = new TextMessageService($API_KEY);
                $result = $textMessageServices->send("CtrlSer - Pay", "Seu link de verificação: {$link}", [auth()->user()->telephone]);

                return 202;

            #Caso já tenha verificado retorna um erro;
            }else{ return 400; }
        }


    }

    public function veriffCode($code){

        $cods = Veriff::where('code', $code)->first();

        #Verificando se código existe no sistema;
        if( !isset($cods) ){ return 400; }

        #Verificando se codigo já foi utilizado;
        if($cods['status'] == 1){ return 400; }

        #tualizando o status do código;
        $cods = Veriff::find($cods['id']);
        $cods->status = 1;
        $cods->save();

        #Atualizando status email do usuario
        $update_user = User::find($cods->user_id);
        $cods->type == 1 ? $update_user->email_verified_at = $cods->updated_at : $update_user->telephone_verified_at = $cods->updated_at;
        $update_user->save();

        return redirect()->route('home');

    }

    public function teste(){

        $usuarios = User::all();
        return view('site');

    }
}
