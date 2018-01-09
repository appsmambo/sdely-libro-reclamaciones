<?php

Route::get('/', 'HomeController@getHome')->name('home');

Route::post('/registro-reclamo', 'HomeController@postRegistroReclamo')->name('registro_reclamo');

Route::get('/ver-reclamos', 'HomeController@getVerReclamos')->name('ver_reclamos');
Route::get('/ver-reclamo/{id}', 'HomeController@getVerReclamo')->name('ver_reclamo');
Route::post('/actualizar-reclamo', 'HomeController@postActualizarReclamo')->name('actualizar_reclamo');
Route::get('/consulta-reclamo/{id}', 'HomeController@getConsultaReclamo')->name('consulta_reclamo');
