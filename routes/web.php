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

Route::get('/', "Controller\ProjetoC@homepage")->name('homepage');

Route::prefix("/projeto")->group(function(){
    //pagina inicial do barra app
    Route::get('/', function () {
        return 'Inicio app';
    });
    Route::prefix("/saiba-mais")->group(function(){
        Route::get('/{id}', 'Controller\ProjetoC@viewInfomações')->name('projeto.view.informacoes');
        //pagina inicial do barra app
        Route::get('/galeria/{id}', 'Controller\ProjetoC@viewGaleria')->name('projeto.viewGaleria');
    });
});

Route::get('/depoimentos', function () {
    return view('depoimento');
})->name('view.depoimento');

Route::get('/doacoes', function () {
    return view('doacoes');
});
Route::get('/novo_depoimento',function(){
    return view('novo_depoimento');
});
Route::get('/criar_campanhas', function () {
    return view('criar_campanha');
})->name('view.criar_campanha');
