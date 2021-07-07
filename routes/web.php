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

// Route::get('/', function () {
//     $name = "Ichwan setyawan";    
//     return  view('welcome', [ 'name' => $name]);
// });

// pakai kaya gini juga bisa
Route::view('/', 'welcome');

// Route::get('/contact', function(){
//     return 'Contact';
// });

Route::view('contact', 'contact');

Route::view('about', 'about');

Route::view('pertandingan','pertandingan');

Route::view('galeri','galeri');