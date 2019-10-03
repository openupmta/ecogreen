<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class advisory extends Model
{
    protected $table="advisory";
   public function cate()
   {
       return $this->belongsTo('App\models\catequestion', 'advisory_id', 'id');
   }
    
}
