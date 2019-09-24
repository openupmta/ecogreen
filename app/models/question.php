<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $table="questions";
    public function question()
    {
        return $this->belongsTo('App\models\catequestion', 'cate_id', 'id');
    }
}
