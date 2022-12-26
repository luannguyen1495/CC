<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductV extends Model
{
    use HasFactory;

    public function getAtt(){
       
        // $this->id_attr_values;
        $id_attr = [];
        foreach(json_decode($this->id_attr_values) as $key => $value){
            $id_attr[$key] = $value;
        }
        
       return AttrValue::whereIn('id',$id_attr)->get();
    }
    public function img()
    {
        return $this->belongsTo(ImgProduct::class, 'id_img_product');
    }
    
}
