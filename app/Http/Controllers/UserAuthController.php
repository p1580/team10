<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function signUpPage()
    {
        $name = 'sign_up';
        $binding = [
            'name' => $name,
        ];
        return view('user.sign-up', $binding);
    }

    //使用者登入畫面
    public function signInPage()
    {
        $name = 'sign_in';
        $binding = [
            'name' => $name,
        ];
        return view('user.sign-in', $binding);
    }

    //處理登入資料
    public function signInProcess()
    {
        //接收輸入資料
        $input = request()->all();

        //驗證規則
        $rules = [
            //帳號(E-mail)
            'account' => [
                'required',
                'max:50',
                'email',
            ],
            //密碼
            'password' => [
                'required',
                'min:5',
            ],
        ];

        //驗證資料
        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            //資料驗證錯誤
            return redirect('/user/auth/sign-up')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
