<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\{catequestion,advisory};

class DetailQuestionFrequentController extends Controller
{
    public function GetDeteil($slug_question)
    {
        $data['advisory']=advisory::all();
        $data['detail']=catequestion::where('slug',$slug_question)->first();
        return view('pages.chitiet-cauhoi',$data);
    }

    public function GetDetailQuestion($slug_detail)
    {
        $data['detail']=advisory::where('slug',$slug_detail)->first();
    
        return view('pages.chitiet-cauhoi-2',$data);
    }

}
