<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Handler extends Controller
{
    function Test()
    {
        return view('test');
    }
    function dir()
    {
        return view('dir.index');
    }
    function users($userID)
    {
        return view('users', compact("userID"));
    }
}