<?php

namespace App\Http\Controllers\admins;
use App\models\promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{


    //danh sách
    public function List()
    {
        $data['promotion']=promotion::all();
        
        return view('admins.pages.promotion.list',$data);
    }



    //thêm khuyến mại
    public function AddPromotion()
    {
        return view('admins.pages.promotion.add');
    }

    public function PostAddPromotion(request $request)
    {
        $this->validate($request,
        [
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',
            'hotline' => 'required',
            
           
        ],
        [
            'image.required' => 'Ảnh là trường bắt buộc !',
            'title.required' => 'Tiêu đề là trường bắt buộc !',
            'link.required' => 'Link là trường bắt buộc !',
            
            'content.required' => 'Nội dung là trường bắt buộc !',
            'hotline.required' => 'Số điên thoại là trường bắt buộc !',
            

        ]);


        $promotion=new promotion;
        if($request->hasFile('image'))
         {
            $file=$request->image;
            $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $promotion->image=$file_name ;
         }
    
        $promotion->title = $request->title;
        $promotion->content = $request->content;
        $promotion->link = $request->link;
        $promotion->hotline = $request->hotline;
        $promotion->save();

        return redirect('admin/promotion')->with('thongbao','Thêm thành công thành công khuyến mại !');
    }


        //sửa khuyến mại
    public function EditPromotion($id)
    {
        $data['promotion']=promotion::find($id);
        return view('admins.pages.promotion.edit',$data);
    }

    public function PostEditPromotion(request $request ,$id)
    {
        $promotion=promotion::find($id);  
        if($request->hasFile('image'))
        {
           if(file_exists('images/'.$promotion->image)&&($promotion->image!=''))
           {
               unlink('images/'.$promotion->image);
           }
            $file=$request->image;
            $file_name=str_slug($request->image).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $promotion->image=$file_name ;
        }

        $promotion->title = $request->title;
        $promotion->content = $request->content;
        $promotion->link = $request->link;
        $promotion->hotline = $request->hotline;
        $promotion->save();
        return redirect('admin/promotion')->with('thongbao','Sửa thành công khuyến mại !');
    }

    public function DeletePromotion($id)
    {
        promotion::destroy($id);
        return redirect('admin/promotion')->with('thongbao','Xóa thành công khuyến mại !');
    }



}
