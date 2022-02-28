<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", "App\Http\Controllers\SiteController@Home");
Route::get("/about", "App\Http\Controllers\SiteController@About");
Route::get("/contact", "App\Http\Controllers\SiteController@Contact");
