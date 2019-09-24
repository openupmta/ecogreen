<?php

namespace App\Http\Controllers\admins;
use App\models\{advisory,answer};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    function List()
    {
        $data['advisory']=advisory::where('status',1)->orderby('id','DESC')->get();
        // dd($data);
        return view('admins.pages.advisory.list',$data);
    }

    function Delete($id)
    {
        advisory::destroy($id);
        return redirect('admin/question')->with('thongbao','Xóa thành công !');
    }



    function ListAnswer()
    {
        $data['advisory']=advisory::where('status',2)->orderby('updated_at','DESC')->get();
        return view('admins.pages.advisory.processed',$data);
    }

    function GetAnswer($id)
    {
        $data['advisory']=advisory::find($id);
        
        return view('admins.pages.advisory.answer',$data);
    }

    function PostAnswer(request $request ,$id)
    {
        // dd($request->all());
       $advisory=advisory::find($id);
       $answer=new answer;
       $answer->answer = $request->answer;
       $answer->advisory_id=$request->id;
       $advisory->status=2;
       $answer->save();
       $advisory->save();
       return redirect('admin/question/list')->with('thongbao','Trả lời thành công !');
    }

}
