<?php

namespace App\Http\Controllers\admins;
use App\models\{catequestion,question};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrequentController extends Controller
{
    function GetList()
    {
        $data['cate']=catequestion::orderby('id','DESC')->get();
        return view('admins.pages.questions.list',$data);
    }

    function Delete($id)
    {
        catequestion::destroy($id);
        return redirect('admin/question/frequent')->with('thongbao','Xoá thành công');
    }


    function GetAdd()
    {
        
        return view('admins.pages.questions.add');
    }

    function PostAdd(request $request)
    {
        $this->validate($request,
        [
            'image' => 'required|image',
            'title' => 'required',  
        ],
        [
            'image.required' => 'Ảnh không được để trống !',
            'image.image' => 'Ảnh sai định dạng !',
            'title.required' => 'Chủ đề câu hỏi không được để trống !',
           
        ]);
        
        
            $cate=new catequestion;
            $cate->title = $request->title;
            $cate->slug = str_slug($request->title);
            if($request->hasFile('image'))
            {
               $file=$request->image;
               $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
               $file->move('images',$file_name);
               $cate->image=$file_name ;
            }           
            $cate->save();
            return redirect('admin/question/frequent')->with('thongbao','Thêm chủ đề thành công');





    }






    function GetEdit($id)
    {
        $data['cate']=catequestion::find($id);
        return view('admins.pages.questions.edit',$data);
    }
    function PostEdit(request $request, $id)
    {
     
        $this->validate($request,
        [
            'image' => 'image',
            'title' => 'required',  
        ],
        [
           
            'image.image' => 'Ảnh sai định dạng !',
            'title.required' => 'Chủ đề câu hỏi không được để trống !',
           
        ]);

        $cate=catequestion::find($id);
        $cate->title = $request->title;

        if($request->hasFile('image'))
        {
                if(file_exists('images/'.$cate->image))
                {
                    unlink('images/'.$cate->image);
                }
                 $file=$request->image;
                 $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
                 $file->move('images',$file_name);
                 $cate->image=$file_name ;   
        }
        $cate->save();
        return redirect('admin/question/frequent')->with('thongbao','Sửa thành công !');

    }







//danh sách câu hỏi thường gặp
    function GetListFrequent()
    {
        $data['questions']=question::orderby('id','DESC')->get();
        return view('admins.pages.frequent.list',$data);
    }
    function DeleteFrequent($id)
    {
        question::destroy($id);
        return redirect('admin/question/frequents')->with('thongbao','Xoá thành công !');

    }


//thêm câu hỏi
        function GetAddFrequent()
        {
            $data['catequestions']=catequestion::all();
            return view('admins.pages.frequent.add',$data);   
        }


        function PostAddFrequent(request $request)
        {
            
            $this->validate($request,
            [
                'parent'=>'required',
                'title' => 'required',  
            ],
            [  
                'parent.required' => 'Bạn chưa chọn chủ đề câu hỏi !',
                'title.required' => 'Câu hỏi không được để trống !',
            ]); 
            
            $questions=new question;
            $questions->title = $request->title;
            $questions->slug = str_slug($questions->title);
                if($request->parent==0){
                    return redirect()->back()->with('thongbao1','Bạn chưa chọn chủ để câu hỏi !')->withInput();
                }
                else{
                    $questions->cate_id = $request->parent;
                }
            

            $questions->save();
            return redirect('admin/question/frequents')->with('thongbao','Thêm câu hỏi thành công !');



        }






    function GetEditFrequent($id)
    {
        $data['catequestions']=catequestion::all();
            $data['question']=question::find($id);
            return view('admins.pages.frequent.edit',$data);
    }

    function PostEditFrequent(request $request ,$id)
    {
        $this->validate($request,
        [
            'title' => 'required',  
        ],
        [  
            'title.required' => 'Chủ đề câu hỏi không được để trống !',
        ]);




            $questions=question::find($id);
            $questions->title = $request->title;
            $questions->slug = str_slug($request->title);
            if($request->parent==0){
                return redirect()->back()->with('thongbao1','Bạn chưa chọn chủ để câu hỏi !')->withInput();
            }
            else{
                $questions->cate_id = $request->parent;
            }
            $questions->save();
            return redirect('admin/question/frequents')->with('thongbao','Sửa thành công !');
    }


}
