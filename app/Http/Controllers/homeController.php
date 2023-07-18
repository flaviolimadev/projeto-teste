<?php

namespace App\Http\Controllers;

use App\Models\Extracts;
use App\Models\Sinais;
use App\Models\TipsTurbo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{   
    public function pagNova (){
        $AuthUser = Auth::user();
        $vendas_hoje = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereDate('created_at', Carbon::today())->sum('value');
        $vendas_ontem = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereDate('created_at', Carbon::yesterday())->sum('value');
        $vendas_mes = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereMonth('created_at', Carbon::now()->month)->sum('value');
        $vendas_mes_anterior = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('value');

        return view('pagNova',[
            
            'AuthUser' => $AuthUser,
            'hoje' => $vendas_hoje,
            'ontem' => $vendas_ontem,
            'mes' => $vendas_mes,
            'passado' => $vendas_mes_anterior,
            
        ]);
    }
    
    //
    public function index(){


        $AuthUser = Auth::user();
        $vendas_hoje = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereDate('created_at', Carbon::today())->sum('value');
        $vendas_ontem = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereDate('created_at', Carbon::yesterday())->sum('value');
        $vendas_mes = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereMonth('created_at', Carbon::now()->month)->sum('value');
        $vendas_mes_anterior = Extracts::where('status', 1)->where('user_id', $AuthUser->id)->whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('value');

        return view('home',[

            'AuthUser' => $AuthUser,
            'hoje' => $vendas_hoje,
            'ontem' => $vendas_ontem,
            'mes' => $vendas_mes,
            'passado' => $vendas_mes_anterior,

        ]);
    }

    public function index_antired(){

        $AuthUser = Auth::user();

        $tips = TipsTurbo::all()->first();
        $tips = json_decode($tips->data);

        #return $tips;

        $ultimo = 0;
        $tips_array = [];

        foreach($tips as $key=>$data){

            if($key >= $ultimo && $key != $ultimo &&isset($tips[$key+1]) && isset($tips[$key+2])){

                $tips_array[] = [$tips[$key], $tips[$key+1]];

                if (strpos($tips[$key+2][0], 'este evento') !== false) {
                    $ultimo = $key+2;
                } else {
                    $ultimo = $key+1;
                }

            }

        }

        $ultimas_10_lucrativas = Sinais::where('status', 0)
        ->orderByRaw("CAST(REPLACE(lucro, ',', '.') AS DECIMAL(10,2)) DESC")
        ->take(6)
        ->get();

        return view('homeAntired',[
            'AuthUser' => $AuthUser,
            'tips_array' => $tips_array,
            'top' => $ultimas_10_lucrativas
        ]);
    }
}
