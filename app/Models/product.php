<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function productDetail()
    {
        return $this->hasMany('App\Models\productDetail','product_id','id');
    }
}
