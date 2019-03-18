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
    return view('inicio');

});


Route::get('/miprueba', ['as'=>'test', function () {
    return "Hola desde test";
}]);


Route::get('/saludo/{nombre?}', ['as'=>'saludo',  function ($nombre='anonimo'){
    $consolas = ['laptop','Xbox','PSP'];
    return view('saludo', compact('nombre', 'consolas'));
}])->where('nombre', "[A-Za-z]+");

