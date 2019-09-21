<?php

namespace App\Http\Controllers\client;
use App\models\{promotion};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class PromotionController extends Controller
{
    function GetPromotion()
    {
        $data['promotion']=promotion::all();
        return view('pages.khuyen-mai',$data);
    }
    
    function PostPromotion(request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
        ],[
            'email.required' => 'Email là trường bắt buộc !',
            'email.email' => 'Email không đúng định dạng !',
        ]);
        $email=new catepromotion;
        $email->email=$request->email;
        $request->status=1;
        $email->save();
        return redirect('khuyen-mai.html')->with('thongbao','Đăng kí thành công !');
    }
    
}
