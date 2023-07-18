<?php

namespace App\Http\Controllers;

use App\Models\Mensager;
use App\Models\Notification;
use App\Models\Sinais;
use App\Models\TipsTurbo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class turboController extends Controller
{
    //
    public function getSinais(){

        $AuthUser = Auth::user();

        $menssagers = Mensager::where('user_id', $AuthUser->id)->get();
        $notifications = Notification::where('user_id', $AuthUser->id)->get();

        $planos = inviteController::compras( $AuthUser->id );

        $tips2 = TipsTurbo::orderBy('id', 'desc')->first();
        $tips = json_decode($tips2->data, true); // Certifique-se de que $tips seja uma string contendo JSON válido
        
        #$tips = json_decode($tips);
        #return json_decode($tips)[0];

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


        #return $tips_array;

        if($planos['compras_pagas']){

            return view('turbo', [
                'AuthUser' =>  $AuthUser,
                'menssagers'=> $menssagers,
                'notifications' => $notifications,
                'tips_array' => $tips_array
            ]);

        }else{

            return redirect()->route('marketplace');

        }


    }


    public function setSinais(Request $r){

        $new_data = new TipsTurbo;
        $new_data->data = $r->data;
        $new_data->save();
    }
}
