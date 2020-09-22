<?php

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
    return view('index-pages.index');
})->name('homepage');

Route::get('/depoimentos', function () {
    return view('depoimento');
})->name('view.depoimento');
Route::get('/doacoes', function() {
    return view('doacoes');
});
