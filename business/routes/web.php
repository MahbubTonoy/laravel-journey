<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\RouteController as frontRoute;

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

Route::get("/", [frontRoute::class, 'home']);
Route::get("/about", [frontRoute::class, 'about']);
Route::get("/services", [frontRoute::class, 'services']);
Route::get("/project", [frontRoute::class, 'project']);
Route::get("/blog", [frontRoute::class, 'blog']);
Route::get("/contact", [frontRoute::class, 'contact']);