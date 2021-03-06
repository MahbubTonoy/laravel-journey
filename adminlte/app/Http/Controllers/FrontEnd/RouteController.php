<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    function home() {
        return view("frontEnd.home");
    }
    function about() {
        return view("frontEnd.about");
    }
    function services() {
        return view("frontEnd.services");
    }
    function projects() {
        return view("frontEnd.projects");
    }
    function blog() {
        return view("frontEnd.blog");
    }
    function contact() {
        return view("frontEnd.contact");
    }
}
