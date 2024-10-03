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
    return view('index');

});

Route::get('/index', function () {
    return view('index');

});
Route::get('/about', function () {
    return view('about');

});

Route::get('/service', function () {
    return view('service');

});


Route::get('/404', function () {
    return view('404');

});

Route::get('/contact', function () {
    return view('contact');

});


Route::get('/PROJEKTA1', function () {
    return view('PROJEKTA1');

});




Route::get('/PROJEKTA02', function () {
    return view('PROJEKTA02');

});

Route::get('/PROJEKTA3', function () {
    return view('PROJEKTA3');

});

Route::get('/PROJEKTA4', function () {
    return view('PROJEKTA4');

});

