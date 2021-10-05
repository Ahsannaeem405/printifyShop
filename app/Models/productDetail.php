<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productDetail extends Model
{
    use HasFactory;


    public function productDetail()
    {
        return $this->hasMany('App\Models\productDetail','product_id','id');
    }


    public function design()
    {
        return $this->belongsTo('App\Models\designs','design_id','id');
    }

}
