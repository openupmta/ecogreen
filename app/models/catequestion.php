<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class catequestion extends Model
{
    protected $table="catequestions";
    public function question()
    {
        return $this->hasMany('App\models\question', 'cate_id', 'id');
    }
}
