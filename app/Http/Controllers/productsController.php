<?php

namespace App\Http\Controllers;

use App\Models\BoletoId;
use App\Models\CardId;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\Coproduction;
use App\Models\Product;
use App\Models\User;
use App\Models\Course;
use App\Models\Pixel;
use App\Models\Pixtxid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productsController extends Controller
{
    //
    public function newProduct(){

        $AuthUser = Auth::user();
        $categorias = Category::all();

        return view('new-product', [
            'AuthUser' => $AuthUser,
            'categorias' => $categorias
        ]);
    }

    public function newProductSave(Request $r){

        $save = $r->file('avatar') == null ? auth()->user()->avatar : $r->file('avatar')->store('/', 'public');

        #Adcionando produto no sistema;
        $new_product = new Product;
        $new_product->user_id = auth()->user()->id;
        $new_product->name = $r->name;
        $new_product->avatar = $save;
        $new_product->value = ($r->value * 100);
        $new_product->commission = ($r->comission * 100);
        $new_product->category = $r->category;
        $new_product->drescription = $r->bio;
        $new_product->save();

        return 200;

    }

    public function myProducts(){

        $AuthUser = Auth::user();
        $products = Product::where('user_id', $AuthUser->id)->get();
        $categorias = Category::all();

        return view('my-products', [
            'AuthUser' => $AuthUser,
            'products' => $products,
            'categorias' => $categorias
        ]);
    }

    public function myCoproducoes(){

        $AuthUser = Auth::user();
        $array_coprodutores = [];
        $coprodutores = Coproduction::where('coprodutor_id', $AuthUser->id)->get();

        foreach($coprodutores as $cop){

            $coportudutor_atual = User::find($cop->user_id);
            $produto_atual = Product::find($cop->product_id);

            array_push($array_coprodutores, [
                'user' => $coportudutor_atual,
                'coprodutor' => $cop,
                'produto' => $produto_atual
            ]);

        }

        //return $array_coprodutores;

        return view('my-coproducoes', [
            'AuthUser' => $AuthUser,
            'coproducoes' => $array_coprodutores
        ]);
    }

    public function myCompras(){

        $AuthUser = Auth::user();

        $pendentes_pix = Pixtxid::where('status', 2)->where('user_id', $AuthUser->id)->get();
        $pendentes_cartao = CardId::where('status', 2)->where('user_id', $AuthUser->id)->get();
        $pendentes_boleto = BoletoId::where('status', 2)->where('user_id', $AuthUser->id)->get();
        $pendentes_cripto = CardId::where('status', 2)->where('user_id', $AuthUser->id)->get();
        $todos_pendentes = $pendentes_pix->concat($pendentes_cartao)->concat($pendentes_boleto)->concat($pendentes_cripto);



        return view('my-compras', [
            'AuthUser' => $AuthUser,
            'compras' => $todos_pendentes
        ]);
    }

    public function edit(Request $r, $id){

        if($r->edit_checkout > 1){

            $checkout_edit =  Checkout::find($r->edit_checkout);

        }else{
            $checkout_edit = [];
        }

        $AuthUser = Auth::user();
        $product = Product::find($id);
        $checkouts = Checkout::where('product_id', $id)->get();
        $categorias = Category::all();

        $coprodutores = Coproduction::where('product_id', $id)->get();

        $array_coprodutores = [];

        foreach($coprodutores as $cop){

            $coportudutor_atual = User::find($cop->coprodutor_id);

            array_push($array_coprodutores, [
                'user' => $coportudutor_atual,
                'coprodutor' => $cop
            ]);

        }

        if($product->user_id != $AuthUser->id){

            return redirect()->route('myCoproducoes');
        }

        //return $array_coprodutores;

        $edit_pixel = isset($r->edit_pixel) ? Pixel::find($r->edit_pixel) : Pixel::find(1);

        #return $edit_pixel;

        return view('edit-product', [
            'AuthUser' => $AuthUser,
            'product' => $product,
            'checkouts' => $checkouts,
            'coprodutores' => $array_coprodutores,
            'sucess' => isset($r->sucess) ? $r->sucess : 999,
            'checkout_edit' => $checkout_edit,
            'categorias' =>  $categorias,
            'edit_pixel' => $edit_pixel,
            'pixels' => Pixel::where('product_id', $product->id)->get(),
            'cursos' => Course::where('user_id', $AuthUser->id)->get()
        ]);
    }

    public function addCheckout(Request $r, $id){

        #return $r;

        $AuthUser = Auth::user();

        $r->validate([
            'name' => 'required',
            'value' => 'required',
            'share_card' => 'required',
            'recurrence' => 'required',
            'redirect' => 'required',
            'time_checkout' => 'required',
            'title_checkout' => 'required',
        ]);


        if($r->edit_checkout){


            $new_checkout = Checkout::find($r->edit_checkout);

            $r->img_top = $r->file('img_top') == null ? $new_checkout->img_top : $r->file('img_top')->store('/', 'public');
            $r->img_left = $r->file('img_left') == null ? $new_checkout->img_left : $r->file('img_left')->store('/', 'public');
            $r->img_low = $r->file('img_low') == null ? $new_checkout->img_low : $r->file('img_low')->store('/', 'public');

            $new_checkout->user_id = $AuthUser->id;
            $new_checkout->product_id = $id;
            $new_checkout->name = $r->name;
            $new_checkout->status = $r->status;
            $new_checkout->value = $r->value * 100;
            $new_checkout->share_card = $r->share_card;
            $new_checkout->recurrence = $r->recurrence;
            $new_checkout->img_top = $r->img_top;
            $new_checkout->img_left = $r->img_left;
            $new_checkout->img_low = $r->img_low;
            $new_checkout->redirect = $r->redirect;
            $new_checkout->color = $r->color;
            $new_checkout->activ_pix = isset($r->activ_pix) ? 1 : 0;
            $new_checkout->activ_card = isset($r->activ_card) ? 1 : 0;
            $new_checkout->activ_boleto = isset($r->activ_boleto) ? 1 : 0;
            $new_checkout->activ_btc = isset($r->activ_btc) ? 1 : 0;
            $new_checkout->activ_eth = isset($r->activ_eth) ? 1 : 0;
            $new_checkout->activ_usd = isset($r->activ_usd) ? 1 : 0;
            $new_checkout->time_checkout = $r->time_checkout;
            $new_checkout->title_checkout = $r->title_checkout;
            $new_checkout->save();

            $product = Product::find($id);
            $checkouts = Checkout::where('product_id', $id)->get();
            $coprodutores = Coproduction::where('product_id', $id)->get();

            if($r->edit_checkout > 1){

                $checkout_edit =  Checkout::find($r->edit_checkout);

            }else{
                $checkout_edit = [];
            }


            return view('edit-product', [
                'AuthUser' => $AuthUser,
                'product' => $product,
                'sucess' => 1,
                'checkouts' => $checkouts,
                'coprodutores' => $coprodutores,
                'checkout_edit' => $checkout_edit
            ]);


        }

        #Criando novo checkout;
        $new_checkout = new Checkout;

        $r->img_top = $r->file('img_top') == null ? '' : $r->file('img_top')->store('/', 'public');
        $r->img_left = $r->file('img_left') == null ? '' : $r->file('img_left')->store('/', 'public');
        $r->img_low = $r->file('img_low') == null ? '' : $r->file('img_low')->store('/', 'public');

        $new_checkout->user_id = $AuthUser->id;
        $new_checkout->product_id = $id;
        $new_checkout->name = $r->name;
        $new_checkout->status = $r->status;
        $new_checkout->value = $r->value * 100;
        $new_checkout->share_card = $r->share_card;
        $new_checkout->recurrence = $r->recurrence;
        $new_checkout->img_top = $r->img_top;
        $new_checkout->img_left = $r->img_left;
        $new_checkout->img_low = $r->img_low;
        $new_checkout->redirect = $r->redirect;
        $new_checkout->color = $r->color;
        $new_checkout->activ_pix = isset($r->activ_pix) ? 1 : 0;
        $new_checkout->activ_card = isset($r->activ_card) ? 1 : 0;
        $new_checkout->activ_boleto = isset($r->activ_boleto) ? 1 : 0;
        $new_checkout->activ_btc = isset($r->activ_btc) ? 1 : 0;
        $new_checkout->activ_eth = isset($r->activ_eth) ? 1 : 0;
        $new_checkout->activ_usd = isset($r->activ_usd) ? 1 : 0;
        $new_checkout->time_checkout = $r->time_checkout;
        $new_checkout->title_checkout = $r->title_checkout;
        $new_checkout->save();


        $product = Product::find($id);
        $checkouts = Checkout::where('product_id', $id)->get();
        $coprodutores = Coproduction::where('product_id', $id)->get();

        if($r->edit_checkout > 1){

            $checkout_edit =  Checkout::find($r->edit_checkout);

        }else{
            $checkout_edit = [];
        }


        return redirect()->route('editProduct', ['id' => $id]);




    }


    public function editSave(Request $r, $id){

        $AuthUser = Auth::user();

        #Validando os dados antes de seguir com o código;
        $validator = $r->validate([
            'name' => 'required|min:5',
            'value' => 'required',
            'status' => 'required',
            'listed' => 'required',
            'comission' => 'required',
            'category' => 'required',
            'bio' => 'required|min:5'

        ]);

        #Atualizando o produto;
        $update_product = Product::find($id);

        $save = $r->file('avatar') == null ? $update_product->avatar : $r->file('avatar')->store('/', 'public');

        $update_product->name = $r->name;
        $update_product->avatar = $save;
        $update_product->value = ($r->value * 100);
        $update_product->status = $r->status;
        $update_product->course = $r->curso;
        $update_product->category = $r->category;
        $update_product->listed = $r->listed;
        $update_product->commission = $r->comission;
        $update_product->drescription = $r->bio;
        $update_product->url = $r->url;
        $update_product->save();

        $product = Product::find($id);

        $checkouts = Checkout::where('product_id', $id)->get();
        $coprodutores = Coproduction::where('product_id', $id)->get();
        $categorias = Category::all();

        if($r->edit_checkout > 1){

            $checkout_edit =  Checkout::find($r->edit_checkout);

        }else{
            $checkout_edit = [];
        }

        return redirect()->route('editProduct', ['id' => $update_product->id]);
    }

    public function addCoproducao(Request $r, $id){

        $AuthUser = Auth::user();

        #Validando os dados recebidos;
        $validator = $r->validate([
            'email' => 'required|min:5',
            'value' => 'required',
        ]);


        #Verificando a existencia de um ususario com o email informado;
        $coprod_id = User::where('email', $r->email)->first();

        if($coprod_id){

            #Verificando se o coiprodutor ja foi adicionando a este produto;
            if(Coproduction::where('coprodutor_id', $coprod_id->id)->where('product_id', $id)->first() || $coprod_id->id == $AuthUser->id){

                return redirect()->route('editProduct', [
                    'id' => $id,
                    'sucess' => 4
                 ]);

            }

            #Adicioando um novo Coprodutor no banco de dados;
            $new_coprodutor = new Coproduction;
            $new_coprodutor->user_id = $AuthUser->id;
            $new_coprodutor->coprodutor_id = $coprod_id->id;
            $new_coprodutor->product_id = $id;
            $new_coprodutor->commission = $r->value;
            $new_coprodutor->save();


            return redirect()->route('editProduct', [
                'id' => $id,
                'sucess' => 1
             ]);

        }else{

            return redirect()->route('editProduct', [
                'id' => $id,
                'sucess' => 3
             ]);
        }
    }

    public function editCoprodutor($id, $type){

        $coproduction = Coproduction::find($id);

        #Verificando se o id existe no sistema;
        if($coproduction){
            switch ($type) {
                case 0:
                    # Deletar Coproduçao...
                    $coproduction->status = 0;
                    $coproduction->save();
                    break;

                case 1:
                    # Aceitar Coproduçao...
                    $coproduction->status = 2;
                    $coproduction->save();
                    break;

                case 3:
                    # Aceitar Coproduçao...
                    $coproduction->status = 1;
                    $coproduction->save();
                    break;
            }

            return redirect()->route('editProduct', [
                'id' => $coproduction->product_id,
                'sucess' => 1
             ]);
        }else{

            return redirect()->route('editProduct', [
                'id' => $coproduction->product_id,
                'sucess' => 0
             ]);
        }

    }

    public function addPixel(Request $r){

        $AuthUser = Auth::user();

        #Validando os dados recebidos;
        $validator = $r->validate([
            'provedor' => 'required',
            'checkout' => 'required',
            'status' => 'required',
            'code' => 'required',
        ]);

        $checkout = Checkout::find($r->checkout);

        $new_pixel = new Pixel;
        $new_pixel->product_id = $checkout->product_id;
        $new_pixel->checkout_id = $checkout->id;
        $new_pixel->provedor = $r->provedor;
        $new_pixel->status = $r->status;
        $new_pixel->code = $r->code;
        $new_pixel->save();

        return redirect()->route('editProduct', [
            'id' => $checkout->product_id,
            'sucess' => 1
         ]);

    }

}
