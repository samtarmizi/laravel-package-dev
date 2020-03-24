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

use Samtarmizi\Greeting\Greeting;

Route::get('/greet/{name}', function($sName) {
    $oGreetr = new Greeting();
    return $oGreetr->greet($sName);
});

Route::get('/', function () {
    return view('welcome');
});
