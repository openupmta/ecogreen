<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'image';
    public function product(){
        return $this->belongsTo('App\models\products','product_id','id');
    }
}
