<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('migrations')
            ->where('id', 16)
            ->get();
        dd($posts);
    }
}
