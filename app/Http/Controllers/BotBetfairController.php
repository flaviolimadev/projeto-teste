<?php

namespace App\Http\Controllers;

use App\Models\ContaBetfair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BotBetfairController extends Controller
{
    //
    public function index(){

        $conta = ContaBetfair::where('user_id', Auth::user()->id)->first();
        $contas = ContaBetfair::where('user_id', Auth::user()->id)->get();

        return view('conect-conta-betfaor',[

            'AuthUser' => Auth::user(),
            'conta' => $conta,
            'contas' => $contas
        ]);

    }

    public function add_account(Request $r){

        $r->validate([
            'conta' => 'required',
            'acesso' => 'required',
        ]);


        $add_conta = new ContaBetfair;
        $add_conta->user_id = Auth::user()->id;
        $add_conta->conta = $r->conta;
        $add_conta->plataforma = $r->plataforma;
        $add_conta->acesso = $r->acesso;
        $add_conta->save();



        return redirect()->route('botBetfair');
    }

    public function add_config(Request $r){

        $r->validate([
            'stake' => 'required',
        ]);

        $add_conta = ContaBetfair::where('user_id', Auth::user()->id)->first();

        if(isset($add_conta->id)){
            $add_conta->stake = $r->stake;
            $add_conta->save();
        }

        return redirect()->route('botBetfair');
    }
}
