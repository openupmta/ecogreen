<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\shipping;
class ShipppingController extends Controller
{
    public function AddShipping(){
        return view('admins.pages.shipping.them');
    }
    public function PostShipping(Request $request){
        $this->validate( $request,
        [
            'contentt' => 'required',
            
        ],
        [
            'content.required' => 'Bạn chưa nhập tên đăng nhập',
           

        ]);
        $shipping = new shipping();
        $shipping->content = $request->contentt;
        $shipping->status =  $request->active;
        $shipping->save();
        return redirect()->route('danhsachshipping')->with('thongbao','Thêm thành công');

    }
    public function EditShipping($id)
    {
        $shipping = shipping::find($id);
        return view('admins.pages.shipping.sua',['shipping'=>$shipping]);
    }
    public function PostEditShipping(Request $request,$id){
        $shipping = shipping::find($id);
        $this->validate(
            $request,
            [
                'contentt'=>'required'
            ],
            [
                'contentt.required'=>'Ban chua nhap noi dung'
            ]
        );
        $shipping->content = $request->contentt;
        $shipping->status = $request->active;
       
        $shipping->save();
        return redirect()->route('danhsachshipping')->with('thongbao','Sửa thành công');
    }
    public function DeleteShipping($id){
        shipping::find($id)->delete();
        return redirect()->back();
    }
    public function List(){
        $shipping=shipping::all();
        return view('admins.pages.shipping.danhsach',['shipping'=>$shipping]);
    }
}
