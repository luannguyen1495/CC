<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttrValue extends Model
{
    protected $fillable =['id_attr','value'];
    use HasFactory;
    public function attr()
    {
        return $this->belongsTo(Attr::class, 'id_attr');
    }
}
