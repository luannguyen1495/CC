<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attr extends Model
{
    protected $fillable = ['name','type'];
    use HasFactory;

    public function values()
    {
        return $this->hasMany(AttrValue::class, 'id_attr');
    }
}
