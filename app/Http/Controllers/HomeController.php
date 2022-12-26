<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ImgProduct;
use App\Models\ProductV;
use App\Helper\Cart;
class HomeController extends Controller
{
    public function index(){
        $product = Product::all();
        $cart = new Cart();
        return view('fe.pages.home',compact('product','cart'));
    }
    public function detail($slug){
        $pro = Product::where('slug',$slug)->first();
        $img_pro = ImgProduct::where('product_id',$pro->id)->get();
        // $max = ProductV::where('product_id',$pro->id)->min('price');
        // dd($max);
        return view('fe.pages.detail',compact('pro','img_pro'));
    }

    public function getSize(Request $req){

        $id = $req->idV;
       
        $attr = $req->idAttr;

        $proV = ProductV::whereRaw('JSON_CONTAINS(id_attr_values, \'["'.$attr.'"]\')')->where('product_id',$id)->get();
    
        $data = [];
        foreach($proV as $key=> $item){
            $data[$key] = $item->getAtt();
           
        }

        return response()->json($data , 200);
    }

    public function getPrice(Request $req){
        $id = $req->idV;
        $id_color = $req->id_color;
        $id_size = $req->id_size;
        $proV = ProductV::whereRaw('JSON_CONTAINS(id_attr_values, \'["'.$id_color.'","'.$id_size.'"]\')')->where('product_id',$id)->first();
        return response()->json($proV , 200);
    }
}
