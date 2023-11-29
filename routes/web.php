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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','index');
Route::get('/home', function () {
    return view('home');
Route::view('/association/index','association.index');
})->middleware('auth')->name('home');

// Route::get('/index', function () {
//     return view('index');
    
// })->middleware('auth')->name('index');