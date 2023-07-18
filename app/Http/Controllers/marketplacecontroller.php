<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Checkout;
use App\Models\Classe;
use App\Models\Module;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class marketplacecontroller extends Controller
{
    //
    public function index(){

        $AuthUser = Auth::user();
        $categorias = Category::all();
        $products = Product::where('listed', 1)->where('status', 1)->get();

        return view('marketplace', [
            'AuthUser' => $AuthUser,
            'products' => $products,
            'categorias' => $categorias
        ]);
    }

    public function product($id){

        $AuthUser = Auth::user();

        $product = Product::find($id);
        $produtor = User::find($product->user_id);

        $modules = Module::where('course_id', $product->course)->get();
        $classes = Classe::where('course_id', $product->course)->get();

        return view('product', [
            'AuthUser' => $AuthUser,
            'product' => $product,
            'produtor' => $produtor,
            'modules' => $modules,
            'classes' => $classes,
            'id_checkout' => Checkout::where('product_id', $id)->first()->id
        ]);
    }
}
