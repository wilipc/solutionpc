<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/




Auth::routes();

/***DATOS****/
Route::get('/','PageController@inicio')->name('inicio');//***Pag principal*****///
Route::get('/galeria','PageController@galeria')->name('galeria');//***Pag principal*****///
Route::get('/administrador', 'HomeController@index')->name('administrador');
Route::get('/registro','PageController@registro')->name('registro');//***Pag principal*****/// 

Route::post('/registro','PageController@createt')->name('registro.createt');//***Pag principal*****///

