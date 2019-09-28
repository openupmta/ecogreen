<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
   
    
    public function cate_products(){
        return $this->belongsTo('App\models\cate_products','cate_products_id','id');
    }
}
