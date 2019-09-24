<?php

namespace App\Http\Controllers\admins;
use App\models\expert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpertController extends Controller
{
   //danh sách
   public function List()
   {
       $data['expert']=expert::all();
       return view('admins.pages.expert.list',$data);
   }

 //thêm ảnh chuyên gia
   public function AddExpert()
   {
       return view('admins.pages.expert.add');
   }

   public function PostAddExpert(request $request)
   {

    $this->validate($request,
    [
        'image' => 'required',  
    ],
    [
        'image.required' => 'Ảnh là trường bắt buộc !',
    ]);

       $expert= new expert;
       if($request->hasFile('image'))
       {
          $file=$request->image;
          $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
          $file->move('images',$file_name);
          $expert->image=$file_name ;
       }
       $expert->save();

       return redirect('admin/expert')->with('thongbao','Thêm ảnh thành công thành !');
   }


   //Sửa ảnh chuyên gia
   public function EditExpert($id)
   {
       $data['expert']=expert::find($id);
       return view('admins.pages.expert.edit',$data);
   }

   public function PostEditExpert(request $request, $id)
   {
    $expert=expert::find($id);  
    if($request->hasFile('image'))
    {
       if(file_exists('images/'.$request->image)&&($request->image!=''))
       {
           unlink('images/'.$request->image);
       }
        $file=$request->image;
        $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
        $file->move('images',$file_name);
        $expert->image=$file_name ;
    }
    $expert->save();

    return redirect('admin/expert')->with('thongbao','Sửa ảnh thành công thành !');
   }

   public function DeleteExpert($id)
   {
       expert::destroy($id);
       return redirect('admin/expert')->with('thongbao','Xóa ảnh thành công thành !');
   }


}
