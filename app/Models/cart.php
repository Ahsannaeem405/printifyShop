<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\product');
    }

    public function productDetail()
    {
        return $this->hasMany('App\Models\productDetail','product_id','id');
    }
     public function productDetail2()
    {
        return $this->hasMany('App\Models\productDetail','product_id','product_id');
    }
}
