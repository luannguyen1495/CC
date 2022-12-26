<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttr extends Model
{
    protected $fillable = ['attr_value_id','product_id'];
    use HasFactory;
}
