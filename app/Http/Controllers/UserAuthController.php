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
}
