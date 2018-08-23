<?php

namespace App\Http\Controllers;


class Logout extends Controller
{


    public function __invoke()
    {
        session()->forget('user');
        return view('manager.login-form',['message' => 'User logged out']);
    }

}
