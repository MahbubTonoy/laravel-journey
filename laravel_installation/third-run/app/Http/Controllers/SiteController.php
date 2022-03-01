<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home() {
        return view("Home");
    }
     
    function About() {
        return view("About");
    }

    function Contact() {
        return view("Contact");
    }
}