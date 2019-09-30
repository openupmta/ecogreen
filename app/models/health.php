<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class health extends Model
{
    protected $table="health";
    public function catehealths()
    {
        return $this->belongsTo('App\models\catehealth', 'cate_id', 'id');
    }
    
}
