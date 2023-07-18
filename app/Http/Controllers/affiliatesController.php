<?php

namespace App\Http\Controllers;

use App\Models\Affiliates;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class affiliatesController extends Controller
{
    //
    public function myAffiliates(Request $r){

        $AuthUser = Auth::user();
        $sends = Affiliates::where('user_id', $AuthUser->id)->where('status', 1)->get();
        $array_sends = [];
        
        foreach($sends as $send){
            
            $produto_atual = Product::find($send->product_id);
            $user_id = User::find($send->affiliate_id);

            array_push($array_sends, [

                'produto' => $produto_atual,
                'user' => $user_id,
                'affiliate' => $send

            ]);

        }

        return view('my-affiliates', [
            'AuthUser' =>  $AuthUser,
            'sucess' => $r->sucess,
            'affiliacoes' => $array_sends
        ]);

        
    }

    public function received(Request $r){

        $AuthUser = Auth::user();
        $sends = Affiliates::where('user_id', $AuthUser->id)->get();
        $array_sends = [];
        
        foreach($sends as $send){
            
            $produto_atual = Product::find($send->product_id);
            $user_id = User::find($send->affiliate_id);

            array_push($array_sends, [

                'produto' => $produto_atual,
                'user' => $user_id,
                'affiliate' => $send

            ]);

        }

        return view('received', [
            'AuthUser' =>  $AuthUser,
            'sucess' => $r->sucess,
            'affiliacoes' => $array_sends
        ]);

    }

    public function sends(Request $r){

        $AuthUser = Auth::user();
        $sends = Affiliates::where('affiliate_id', $AuthUser->id)->get();
        $array_sends = [];
        
        foreach($sends as $send){
            
            $produto_atual = Product::find($send->product_id);
            $user_id = User::find($send->user_id);

            array_push($array_sends, [

                'produto' => $produto_atual,
                'user' => $user_id,
                'affiliate' => $send

            ]);

        }


        return view('sends', [
            'AuthUser' =>  $AuthUser,
            'sucess' => $r->sucess,
            'affiliacoes' => $array_sends
        ]);
    }

    public function create($id){

        $AuthUser = Auth::user();
        $product = Product::find($id);
        
        #Verificando se o usuario ja é affiliado ao produto;
        if(!Affiliates::where('affiliate_id', $AuthUser->id)->where('product_id', $id)->first()){
            
            #Criando um novo affiliado para o produto;
            $new_affiliate = new Affiliates;
            $new_affiliate->user_id = $product->user_id;
            $new_affiliate->affiliate_id = $AuthUser->id;
            $new_affiliate->product_id = $id;
            $new_affiliate->save();

            return redirect()->route('sends', ['sucess' => 1]);

        }else{

            return redirect()->route('sends', ['sucess' => 0]);
        }

    }

    public function updateAffiliate($id, $type){

        $solicitacao = Affiliates::find($id);

        #Verificando o tipo de solicitacao;
        switch ($type) {
            case 0:
                # code...
                $solicitacao->status = 0;
                $solicitacao->save();
                break;

            case 1:
                # code...
                $solicitacao->status = 1;
                $solicitacao->save();
                break;

            case 2:
                # code...
                $solicitacao->status = 2;
                $solicitacao->save();
                break;
        }

        return redirect()->route('received', ['sucess' => 1]);

    }
}
