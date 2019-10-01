<?php

namespace App\Http\Controllers;

use App\IntroduceModel;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=IntroduceModel::get();
        return view('admins.pages.form.IntroduceView',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.pages.form.AddIntroduceView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=IntroduceModel::get();

        $this->validate($request,[
         'content'=>'required',
        ],[
          'content.required'=>'content là một trường bắt buộc',
        ]
    );
        $listIn=new IntroduceModel();
        $listIn->content=$request->content;
        foreach ($data as $row) {
            if($row->content==$listIn->content){
                return redirect('admin/introduce/add')->with('thongbao','khong duoc trung content');
            }
        }
    
        $listIn->status=$request->active;
        $listIn->save();
        return redirect('admin/introduce')->with('thongbao','thêm thành công !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\IntroduceModel  $introduceModel
     * @return \Illuminate\Http\Response
     */
    public function show(IntroduceModel $introduceModel)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IntroduceModel  $introduceModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data=IntroduceModel::find($id);
       return view("admins.pages.form.EditIntroduceView",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IntroduceModel  $introduceModel
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
         $this->validate($request,[
         'content'=>'required',
        ],[
          'content.required'=>'content là một trường bắt buộc',
        ]
    );
         $data=IntroduceModel::find($id);
          $model=IntroduceModel::get();
         $data->content=$request->content;
         foreach ($model as $row) {
            if($row->content==$data->content){
                return redirect()->back()->with('thongbao','khong duoc trung content');
            }
        }
        $data->status=$request->active;
        $data->save();
        return redirect('admin/introduce')->with('thongbao','sửa thành công giới thiệu!');;
    }
    public function anhien($id){
         $data=IntroduceModel::find($id);
         if($data->status==0){
            $data->status = 1;
         }else{
            $data->status = 0;
         }
         $data->save();
         return redirect('admin/introduce')->with('thongbao','an hien thanh cong');
    }
    public function delete($id){
        IntroduceModel::find($id)->delete();
        return redirect()->back()->with('thongbao','xóa thành công giới thiệu!');

    }
    
    public function ShowIntro(){
        $data=IntroduceModel::get();
        return view('pages.gioithieu',['data'=>$data]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IntroduceModel  $introduceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(IntroduceModel $introduceModel)
    {
        //
    }
}
