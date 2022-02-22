<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home() {
        return "I'm from siteController Home Method";
    }
     
    function About() {
        return "I'm from siteController About Method";
    }

    function Contact() {
        return "I'm from siteController Contact Method";
    }
}
