<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function home() {
        return view("pages.home");
    }
    function about() {
        return view("pages.about");
    }
    function contact() {
        return view("pages.contact");
    }
}
