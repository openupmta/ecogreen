<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\cate_products;
class CateproductsController extends Controller
{
    public function List(){
        $cate_products = cate_products::all();
        return view('admins.pages.products.listCate_Product',['cate_products'=>$cate_products]);
    }
    public function AddCateproducts(){
        return view('admins.pages.products.addCate_Product');
    }
    public function PostCateproducts(Request $request){
        $this->validate( $request,
        [
            'name' => 'required',
            'slug'=>'required'
        ],
        [
            'name.required' => 'Bạn chưa nhập thể loại',
           'slug.required'=> 'Bạn chưa nhập slug'

        ]);
        $cate_products = new cate_products();
        $cate_products->name = $request->name;
        $cate_products->slug = $request->slug;
        $cate_products->status = $request->active;
        $cate_products->save();
        return redirect()->route('danhsachcateproducts')->with('thongbao','Thêm thành công');

    }
    public function EditCateproducts($id){
        $cate_products = cate_products::find($id);
        return view('admins.pages.products.editCate_Product',['cate_products'=>$cate_products]);
    }
    public function PostEditCateproducts(Request $request,$id){
        $cate_products = cate_products::find($id);
        $this->validate( $request,
        [
            'name' => 'required',
            'slug'=>'required'
        ],
        [
            'name.required' => 'Bạn chưa nhập thể loại',
           'slug.required'=> 'Bạn chưa nhập slug'

        ]);
       
        $cate_products->name = $request->name;
        $cate_products->slug = $request->slug;
        $cate_products->status = $request->active;

        $cate_products->save();
        return redirect()->route('danhsachcateproducts')->with('thongbao','Thêm thành công');
    }
    public function DeleteCateproducts($id){
        cate_products::find($id)->delete();
        return redirect()->back();
    }
}
