<?php
namespace App\Http\Controllers\admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\commitment;
class CommitmentController extends Controller
{
    public function List(){
        $commitment = commitment::all();
        return view('admins.pages.commitment.danhsach',['commitment'=>$commitment]);
    }
    public function AddCommitment(){
        return view('admins.pages.commitment.them');
    }
    public function PostCommitment(Request $request){
        $this->validate( $request,
        [
            'contentt' => 'required',
            
        ],
        [
            'content.required' => 'Bạn chưa nhập tên đăng nhập',
           

        ]);
        $commitment = new commitment();
        $commitment->content = $request->contentt;
        $commitment->status =  $request->active;
        $commitment->save();
        return redirect()->route('danhsachcommitment')->with('thongbao','Thêm thành công');

    }
    public function EditCommitment($id)
    {
        $commitment = commitment::find($id);
        return view('admins.pages.commitment.sua',['commitment'=>$commitment]);
    }
    public function PostEditCommitment(Request $request,$id){
        $commitment = commitment::find($id);
        $this->validate(
            $request,
            [
                'contentt'=>'required'
            ],
            [
                'contentt.required'=>'Ban chua nhap noi dung'
            ]
        );
        $commitment->content = $request->contentt;
        $commitment->status = $request->active;
       
        $commitment->save();
        return redirect()->route('danhsachcommitment')->with('thongbao','Sửa thành công');
    }
    public function DeleteCommitment($id){
        commitment::find($id)->delete();
        return redirect()->back();
    }
}
