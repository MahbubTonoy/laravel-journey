<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get("/", [SiteController::class, 'Home'])->name('home');
Route::get("/about", [SiteController::class, 'About'])->name('about');
Route::get("/contact", [SiteController::class, 'Contact'])->name('contact');

Route::get('/name/{myName}', [SiteController::class, 'Name']);
Route::get("/fullName/{firstName}/{middleName}/{lastName}", [SiteController::class, 'fullName']);