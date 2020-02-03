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

Route::get('/', 'HomeController@index');

Route::get('/empresa', function () {
    return view('empresa');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/areaatuacao', function () {
    return view('areaatuacao');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/contato', function () {
    return view('contato');
});
Auth::routes();

Route::get('/adm', 'NewController@index')->middleware('auth');

Route::resource('enviar', 'EnviarController');

Route::post('/enviar', 'EnviarController@store');

Route::resource('new', 'NewController');

Route::post('/news', 'NewController@store');
