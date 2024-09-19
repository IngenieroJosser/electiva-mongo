<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site/index');
});

Route::get('/reservas', function () {
    return view('site/reservas');
});

Route::get('/experiencias', function () {
    return view('site/experiencias');
});

Route::get('/register', function () {
    return view('site/register');
});

Route::get('/login', function () {
    return view('site/login');
});