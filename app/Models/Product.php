<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','price','sale_price','description','image','category_id'];
    public function proV()
    {
        return $this->hasMany(ProductV::class, 'product_id');
    }
}
