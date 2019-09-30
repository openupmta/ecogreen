<?php

namespace App\Http\Controllers\admins;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\{catehealth,health};

class HeadlthController extends Controller
{
    public function List()
    {
        $data['cate']=catehealth::all();
        return view('admins.pages.cateheadlth.list',$data);
    }


    public function GetAdd()
    {
        return view('admins.pages.cateheadlth.add');
    }
    public function PostAdd(request $request)
    {
      
        $this->validate($request,
        [
           'title' =>'required|min:3'
        ],
        [
           'title.required'=>'Bạn chưa nhập chủ đề sức khoẻ !',
           'title.min'=>'Chủ đề phải lớn hơn 3 kí tự !'
        ]);
        $cate=new catehealth;
        $cate->name=$request->title;
        $cate->slug=str_slug($request->title);
        $cate->save();
        return redirect('admin/headlth')->with('thongbao','Thêm thành công');
    }


    public function GetEdit($id)
    {
        $data['cate']=catehealth::find($id);
        return view('admins.pages.cateheadlth.edit',$data);
    }

    public function PostEdit(request $request ,$id)
    {
      
        $cate=catehealth::find($id);
        $cate->name=$request->title;
        $cate->slug=str_slug($request->title);
        $cate->save();
        return redirect('admin/headlth')->with('thongbao','Sửa thành công');
    }
    public function GetDelete($id)
    {
        catehealth::destroy($id);
        return redirect('admin/headlth')->with('thongbao','Xoá thành công');
    }

 
    






















    public function GetList()
    {
        $data['cate']=catehealth::all();
        $data['healths']=health::orderby('id','DESC')->get();
        return view('admins.pages.health.list',$data);
    }

    public function GetAddHealth()
    {
        $data['cate']=catehealth::all();
        return view('admins.pages.health.add',$data);
    }

    public function PostAddHealth(request $request)
    {
       // dd($request->all());
        $this->validate($request,
        [
            'image' => 'required|image',
            'title' => 'required',
            'summary' => 'required', 
            'names' => 'required',       
           
        ],
        [
            'image.required' => 'Ảnh là trường bắt buộc !',
            'image.image' => 'Ảnh không đúng định dạng !',
            'title.required' => 'Bạn chưa nhập tiêu đề câu hỏi !',
            'summary.required' => 'Bạn chưa nhập phần tóm tắt !',   
            'names.required' => 'Bạn chưa nhập phần nội dung !',            

        ]);
        $healths=new health;
        $healths->title=$request->title;
        $healths->slug=str_slug($request->title);
        $healths->summary=$request->summary;
        $healths->content=$request->names;
        if($request->parent==0){
            return redirect()->back()->with('thongbao1','Bạn chưa chọn chủ để !')->withInput();
        }
        else{
            $healths->cate_id = $request->parent;
        }
        if($request->hasFile('image'))
        {
           $file=$request->file('image')->getClientOriginalName();
           $file_name=time().'-'.$file;
           $request->file('image')->move('images',$file_name);
           $healths->image=$file_name ;
           // echo $question->image;
        }
        // $healths->status=1;
        $healths->save();
        return redirect('admin/headlths')->with('thongbao','Thêm thành công');
    }









    public function GetEditHealth($id)
    {
        $data['cate']=catehealth::all();
        $data['healths']=health::find($id);
        return view('admins.pages.health.edit',$data);
    }
    public function PostEditHealth(request $request,$id)
    {
        $this->validate($request,
        [
            'image' => 'image',
            'title' => 'required',
            'summary' => 'required', 
            'name' => 'required',       
           
        ],
        [
        
            'image.image' => 'Ảnh không đúng định dạng !',
            'title.required' => 'Bạn chưa nhập tiêu đề câu hỏi !',
            'summary.required' => 'Bạn chưa nhập phần tóm tắt !',   
            'name.required' => 'Bạn chưa nhập phần nội dung !',            

        ]);
        $healths=health::find($id);
        $healths->title=$request->title;
        $healths->summary=$request->summary;
        $healths->content=$request->name;
        $healths->cate_id=$request->parent;
        if($request->hasFile('image'))
        {
           if(file_exists('images/'.$healths->image)&&($healths->image!=''))
           {
               unlink('images/'.$healths->image);
           }
            $file=$request->image;
            $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $healths->image=$file_name ;
        }


        $healths->save();
        return redirect('admin/headlths')->with('thongbao','Sửa thành công');
    }
    public function Delete($id)
    {
        health::destroy($id);
        return redirect('admin/headlths')->with('thongbao','Xoá thành công');
    }









}

