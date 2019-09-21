<?php

namespace App\Http\Controllers\admins;
use App\models\catepromotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatepromotionController extends Controller
{
    //danh sách đăng kí
    public function List()
    {
        $data['catepromotion']=catepromotion::where('status',1)->orderby('id','DESC')->get();
     
        return view('admins.pages.catepromotion.list',$data);
    }

    public function ListProcessed()
    {
        $data['catepromotion']=catepromotion::where('status',2)->orderby('updated_at','DESC')->get();
        return view('admins.pages.catepromotion.processed',$data);
    }



}
