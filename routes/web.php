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

// Route::get('/', function () {
//     return view('welcome');
// });

// Llamamos a la view llamada permiso.blade.php y le pasamos un parametro por la url
// Y llamamos al controlador index en PermisoController.php
//Route::get('permiso/{nombre}', 'PermisoController@index');

//Creamos un link directo a una url compleja
Route::get('permiso/', 'PermisoController@indexRedireccion');
Route::get('admin/sistema/permiso', 'PermisoController@indexRedireccion')->name('permiso');

//En esta ruta solo aceptara letras de la A a la Z si queremos que sea números habría que poner [0-9+]
Route::get('permisoDos/{nombre}', function ($nombre) {
    return $nombre;
})->where('nombre', '[A-Za-z]+')->name('permisoDos');

//En Inicio/Raíz llamamos al controlador InicioController y dentro de el a la función Index
Route::get('/', 'InicioController@index');