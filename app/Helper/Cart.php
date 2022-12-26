<?php
namespace App\Helper;
use Session;
class Cart{
    public $items = [];
    public $total_quantity = 0;
    public $total_price =  0;

    public function __construct(){
      
        $this->items = session('cart') ? session('cart') : [];
    }

    public function add($product,$color,$size,$price,$quantity){
        
        $item = [
            'product_id'=>$product->id,
            'product_name'=>$product->name,
            'image'=>$product->image,
            'price'=>$price,
            'color'=>$color,
            'size'=>$size,
            'quantity'=>$quantity
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] +=$quantity;
        } else{
            $this->items[$product->id] = $item;
        }
       
        session(['cart'=>$this->items]);
    }
    public function update($product_id,$quantity){
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] =$quantity;
        }
        session(['cart'=>$this->items]);
    }

    public function remove($id){
        if(isset($this->items[$id])){
           unset($this->items[$id]);
        }
    }
}