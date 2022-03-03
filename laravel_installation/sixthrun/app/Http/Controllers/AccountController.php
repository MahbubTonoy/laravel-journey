<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function user() {
        return view("user");
    }
    function login() {
        return view("login");
    }
    function logout() {
        return view("logout");
    }
    function signup() {
        return view("signup");
    }
}
