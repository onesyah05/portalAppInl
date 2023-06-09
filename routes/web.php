<?php

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
    return view('pages.dashboard');
});

Route::get('/login', function () {
    if (session()->has('token')) {
        return redirect('/dashboard');
    } else {
        return view('login');
    }

});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});

Route::post('login', 'LoginController@loginWithApi');

Route::get('dashboard', 'DashboardController@index');
