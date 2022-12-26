<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Product;
use App\Models\ProductV;
use Session;
class CartController extends Controller
{
    public function index(Cart $cart){
        $cart = new Cart();
        return view('fe.pages.cart',compact('cart'));
    }
    public function add(Request $req, Cart $cart){
        
        $product = Product::find($req->id_product);
        $proV = ProductV::whereRaw('JSON_CONTAINS(id_attr_values, \'["'.$req->cl.'","'.$req->size.'"]\')')->where('product_id',$req->id_product)->first();
       
        $cart->add($product,$req->color_value,$req->size_value,$proV->price,$req->quantity);
     
        return redirect()->route('cart.index');
    }

    public function update(){
        
    }
}
