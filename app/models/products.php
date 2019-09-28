<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
   
    public function image(){
        return $this->hasMany('App\models\images','product_id','id');
    }
    public function cate_products(){
        return $this->belongsTo('App\models\cate_products','cate_products_id','id');
    }
}
