<?php

namespace App\Http\Controllers\client;
use App\models\{catehealth,health};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    function GetHealth()
    {
        $data['catehealth']=catehealth::all();
        return view('pages.chude-suckhoe',$data);
    }
    function GetTheme($slug)
    {
        $data['detail']=catehealth::where('slug',$slug)->first();
       
        return view('pages.chitiet-chude',$data);
    }

    function GetDetailTheme($slug_detail)
    {
        $data['detail']=health::where('slug',$slug_detail)->first();
       
        return view('pages.chitiet-chude-1',$data);
    }
   
   
}
