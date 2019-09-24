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
        $data=IntroduceModel::paginate(5);
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
        $listIn=new IntroduceModel();
        $listIn->content=$request->content;
        $listIn->status=$request->active;
        $listIn->save();
        return redirect()->route('introduce');
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
        $data=IntroduceModel::find($id);
        $data->content=$request->content;
        $data->status=$request->active;
        $data->save();
        return redirect()->route('introduce');
    }
    public function delete($id){
        IntroduceModel::find($id)->delete();
        return redirect()->back();

    }
    public function search(Request $request){
        $search=$request->search;
        $model=IntroduceModel::where('status','like','%'.$search.'%')->orderBy('id','desc')->limit(5)->get();
        return view('admin.pages.form.SearchIntroduce',['model'=>$model]);
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
