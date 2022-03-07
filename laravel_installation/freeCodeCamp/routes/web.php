<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use Symfony\Component\Routing\RouteCompiler;

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

Route::get("/", [RouteController::class, "home"])->name("homePage");
Route::get("/about", [RouteController::class, "about"])->name("aboutPage");
Route::get("/contact", [RouteController::class, "contact"])->name("contactPage");