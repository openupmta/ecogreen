<?php

namespace App\Http\Controllers\admins;
use App\models\{advisory,question,catequestion};
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
    function Del($id)
    {
        advisory::destroy($id);
        return redirect('admin/question/list')->with('thongbao','Xóa thành công !');
    }



    function ListAnswer()
    {
        $data['advisory']=advisory::where('status',2)->orderby('updated_at','DESC')->get();
        return view('admins.pages.advisory.processed',$data);
    }

    function GetAnswer($id)
    {
        $data['catequestions']=catequestion::all();
        $data['advisory']=advisory::find($id);
        
        return view('admins.pages.advisory.answer',$data);
    }

    function PostAnswer(request $request ,$id)
    {
        $this->validate($request,
        [
            'image' => 'required|image',
            'title' => 'required',
            'answer' => 'required',       
           
        ],
        [
            'image.required' => 'Ảnh là trường bắt buộc !',
            'image.image' => 'Ảnh không đúng định dạng !',
            'title.required' => 'Bạn chưa nhập tiêu đề câu hỏi !',
            'answer.required' => 'Bạn chưa nhập câu hỏi !',            

        ]);
        //dd($request->all());
       $advisory=advisory::find($id);
    //    $answer=new answer;
   
       $advisory->title = $request->title;
       $advisory->slug = str_slug($request->title);

       if($request->hasFile('image'))
         {
            $file=$request->file('image')->getClientOriginalName();
            $file_name=time().'-'.$file;
            $request->file('image')->move('images',$file_name);
            $advisory->image=$file_name ;
            // echo $question->image;
         }

         if($request->parent==0){
            return redirect()->back()->with('thongbao1','Bạn chưa chọn chủ để câu hỏi !')->withInput();
        }
        else{
            $advisory->advisory_id = $request->parent;
        }
      
    //    $question->advisory_id = $request->id;
    //    $answer->answer = $request->answer;
    //    $answer->advisory_id=$request->id;
       $advisory->status=2;
       $advisory->answer=$request->answer;
    //    $answer->save();
       $advisory->save();
      
       return redirect('admin/question/list')->with('thongbao','Trả lời thành công !');
    }

    function GetEdit($id)
    {
        // $data['question']=question::all();
        $data['catequestions']=catequestion::all();
        $data['advisory']=advisory::find($id);
        return view('admins.pages.advisory.edit',$data);
    }


    function PostEdit(request $request ,$id)
    {
       // dd($request->all());
        $ans=advisory::find($id);
        $ans->answer = $request->name;
        $ans->title = $request->title;
        $ans->slug = str_slug($request->title);
        $ans->advisory_id = $request->parent;

        if($request->hasFile('image'))
        {
           if(file_exists('images/'.$ans->image)&&($ans->image!=''))
           {
               unlink('images/'.$ans->image);
           }
            $file=$request->image;
            $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $ans->image=$file_name ;
        }
        $ans->save();
        return redirect('admin/question/list')->with('thongbao','Sửa thành công !');
    }


}
