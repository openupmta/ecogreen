<?php

namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\products;
use App\models\cate_products;
class ProductsController extends Controller
{
    public function Addproducts(){
        $cate_products = cate_products::all();
        return view('admins.pages.products.addProduct'
        ,['cate_products'=>$cate_products]);
    }
    public function Postproducts(Request $request){
        $this->validate( $request,
        [
            'content' => 'required',
            
        ],
        [
            'content.required' => 'Bạn chưa nhập tên đăng nhập',
           

        ]);
        $products = new products();
        $products->cate_product_id=$request->cate_blogs;
        $products->title = $request->title;
        $products->slug = $request->slug;
        $products->content = $request->content;
        $products->detail = $request->detail;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->favorite = $request->favorite;
        $products->status =  $request->active;

        $products->save();
        return redirect()->route('danhsachproducts')->with('thongbao','Thêm thành công');
    }
    public function Editproducts($id){
        $products = products::find($id);
        $cate_products = cate_products::all();
        return view('admins.pages.products.editProducts',['products'=>$products,'cate_products'=>$cate_products]);
    }
    public function PostEditproducts(Request $request,$id){
        $products = products::find($id);
        $this->validate( $request,
        [
            'content' => 'required',
            
        ],
        [
            'content.required' => 'Bạn chưa nhập tên đăng nhập',
           

        ]);
        $products->cate_product_id=$request->cate_blogs;
        $products->title = $request->title;
        $products->slug = $request->slug;
        $products->content = $request->content;
        $products->detail = $request->detail;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->favorite = $request->favorite;
        $products->status =  $request->active;

        $products->save();
        return redirect()->route('danhsachproducts')->with('thongbao','Thêm thành công');
    }
    public function Deleteproducts($id){
        products::find($id)->delete();
        return redirect()->back();
        
    }
    public function List(){
        $products = products::all();
        $cate_products = cate_products::all();
        return view('admins.pages.products.listProducts',['products'=>$products,'cate_products'=>$cate_products]);
    }
}
