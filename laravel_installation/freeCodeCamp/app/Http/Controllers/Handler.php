<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Handler extends Controller
{
    function Test() {
        return view('test');
    }
}
