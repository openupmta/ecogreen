<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    // protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
