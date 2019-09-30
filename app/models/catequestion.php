<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class catequestion extends Model
{
    protected $table="catequestions";
    public function advisorys()
    {
        return $this->hasMany('App\models\advisory', 'advisory_id', 'id');
    }
}
