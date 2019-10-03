<?php

namespace App\Http\Controllers\client;
use App\models\{advisory,catequestion};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvisoryController extends Controller
{
    function GetAdvisory()
    {
        $data['advisory']=advisory::orderby('id','DESC')->paginate(10);
        // $data['answer']=answer::all();
        return view('pages.tuvan-suckhoe',$data);
    }

    function PostAdvisory(request $request)
    {
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required|email', 
            'question' => 'required',

        ],
        [
            'name.required' => 'Vui lòng nhập họ tên !',
            'email.required' => 'Vui lòng nhập email !',
            'email.email' => 'Email sai định dạng !',
            'question.required' => 'Vui lòng nhập câu hỏi !',
        ]);
        
        $advisory=new advisory;
        $advisory->name = $request->name;
        $advisory->email = $request->email;
        $advisory->question = $request->question;
        $advisory->answer ='Câu hỏi chưa được trả lời!';
        $advisory->save();
        return redirect()->back()->with('thongbao','Gửi câu hỏi thành công !')->withInput();

    }
    function GetQuestion()
    {
        $data['catequestion']=catequestion::all();
        return view('pages.cauhoi-thuonggap',$data);
    }



}
