<?php

namespace App\Http\Controllers\client;
use App\models\catehealth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function GetIndex()
    {
        $data['catehealth']=catehealth::all();
       
        return view('pages.index',$data);
    }
}
