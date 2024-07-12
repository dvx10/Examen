<?php

use Illuminate\Support\Facades\Route;

// $servicios=[
//     ['titulo'=>'Servicio 1'],
//     ['titulo'=>'Servicio 2'],
//     ['titulo'=>'Servicio 3'],
//     ['titulo'=>'Servicio 4'],
//     ['titulo'=>'Servicio 5'],
// ];


Route::view('/','home')->name('home');
// Route::view('nosotros','App\Http\Controllers\ServiciosController@create')->name('servicios.create');

// controlador 1
Route::get('alumnos','App\Http\Controllers\ServiciosController@servicios' )->name('servicios');
// Route::get('servicios/crear','App\Http\Controllers\ServiciosController@create')->name('servicios.create');
Route::get('ingresar','App\Http\Controllers\ServiciosController@create')->name('servicios.create');

Route::get('alumnos/{id}/editar','App\Http\Controllers\ServiciosController@edit')->name('servicios.edit');
Route::put('alumnos/{id}','App\Http\Controllers\ServiciosController@update')->name('servicios.update');
Route::post('alumnos','App\Http\Controllers\ServiciosController@store')->name('servicios.store');
Route::get('alumnos/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');







// controlador 2
// Route::get('servicios','App\Http\Controllers\Servicios2Controller@index' )->name('servicios');


Route::view('contacto','contacto')->name('contacto');


// route::resource('servicios','App\Http\Controllers\Servicios2Controller')->only('index','show');




//el q use
// Route::view('servicios','servicios', compact('servicios'))->name('servicios');
