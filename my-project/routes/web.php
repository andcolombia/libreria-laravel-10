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
    return view('welcome');
});
Route::get('login.php', function () {
    return view('login');
});
Route::get('logout.php', function () {
    return view('logout');
});
Route::get('personalizar.php', function () {
    return view('personalizar');
});
Route::get('FrontChannelLogout.php', function () {
    return view('FrontChannelLogout');
});

