<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function Home($string) {
        return view("homepage", ['string'=>$string]);
    }
}
