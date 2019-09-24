<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class advisory extends Model
{
    protected $table="advisory";
    public function cateanswers()
    {
        return $this->hasOne('App\models\answer', 'advisory_id', 'id');
    }
}
