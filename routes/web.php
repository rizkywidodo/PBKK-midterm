<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('home', [
        "title" => "Home"
    ]);
    });

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
    });

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
    });


Route::get('/menu', function () {
    return view('menu', [
        "title" => "Menu"
    ]);
    });


Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact"
    ]);
    });

Route::get('/login', [UserController::class, 'index']);


 Route::get('/register', [UserController::class, 'index2']);

 //Route::get('/register', [UserController::class, 'register']);

Route::post("/login",[UserController::class, 'login']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect ('login');
    });