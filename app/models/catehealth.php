<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class catehealth extends Model
{
    protected $table="cate_health";
    public function healths()
    {
        return $this->hasMany('App\models\health', 'cate_id', 'id');
    }
}
