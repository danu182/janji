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
    // return view('login');
});

Route::get('/login', function () {
    // return view('welcome');
    return view('login');
})->name('login');

Route::get('/detailklinik', function () {
    // return view('welcome');
    return view('detail_klinik');
})->name('detailklinik');


Route::get('/perjanjian', function () {
    // return view('welcome');
    return view('perjanjian'); 
})->name('perjanjian');
