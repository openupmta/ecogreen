<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\products;
use App\models\images;
class ImagesProductController extends Controller
{
    public function Addimageproducts(){
        $products = products::all();
        return view('admins.pages.products.addImage_Poduct',['products'=>$products]);
    }
    public function Postimageproducts(Request $request){
        $this->validate(
            $request,
            [
                'image'=>'required'
            ],
            [
                'image.required'=>'Chưa nhập ảnh'
            ]
        );
        
        $images = new image();
        $images->product_id=$request->cate_blogs;
        $images->status = $request->active;
       if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            $avatar = time() . "_banner_" . $name;
            while (file_exists('image/banner/' . $avatar)) {
                $avatar = time() . "_banner_" . $name;
            }
            $file->move('image/banner/', $avatar);
            $image = $avatar;
        }
        else{
            $image= 'no-img.jpg';
        }
        $images->image= $image;
        $images->save();
       return redirect()->route('thembanner')->with('thongbao','Thêm thành công');
    }
    
}
