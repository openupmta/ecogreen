<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class cate_products extends Model
{
    protected $table='cate_products';
    public function products(){
        return $this->hasMany('App\models\products','cate_products_id','id');
    }
}
