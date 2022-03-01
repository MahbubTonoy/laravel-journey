<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function Home() {
        return view("home");
    }
    function About() {
        return view("about");
    }
}
