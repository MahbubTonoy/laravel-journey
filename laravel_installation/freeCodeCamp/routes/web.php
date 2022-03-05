<?php

use App\Http\Controllers\Handler;
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

Route::get('/', function () {
    return view('welcome');
})->name('a');


// Route::get("/tonoy", [
//     "uses"=> "App\Http\Controllers\Handler@Test",
//     "as"=> "test"
// ]);


Route::get('/tonoy',[Handler::class,'test'])->name('test');

Route::get("/directory", [Handler::class, 'dir']);

Route::get('/users/{userID}', [Handler::class, 'users'])->name("user");