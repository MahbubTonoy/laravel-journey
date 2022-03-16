<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class changePwd extends Controller
{
    public function changePwd() {
        return view("auth.passwords.change");
    }
    public function updatePwd(Request $request) {
        dd($request);
    }
}
