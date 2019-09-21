<?php

namespace App\Http\Controllers\admins;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function GetLogin()
    {
        return view('auth.login');
    }

    public function PostLogin(LoginRequest $request)
    {  
        
        $email=$request->email;
        $password=$request->password;
        
        if( Auth::attempt(['email' => $email, 'password' => $password]))
                {
                    return redirect('admin');
                }
            else
                {
                    return  redirect()->back()->with("thongbao","Tài khoản hoặc mật khẩu không chính xác !")->withInput();
                }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect('login');
    }

}
