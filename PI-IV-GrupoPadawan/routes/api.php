<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('login', 'LoginsController');

Route::group(['namespace' => 'Api'], function(){

    Route::get('usuarios', 'UsuariosController@index');
    Route::post('usuarios', 'UsuariosController@store');
    Route::get('usuarios/{usuario}', 'UsuariosController@show');
    Route::get('usuarios/{usuario}', 'UsuariosController@showLiderFugaResponsavel');
    Route::put('usuarios/{usuario}', 'UsuariosController@update');
    Route::delete('usuarios/{usuario}', 'UsuariosController@destroy');

    Route::get('cargos', 'CargosController@index');
    Route::post('cargos', 'CargosController@store');
    Route::get('cargos/{cargo}', 'CargosController@show');
    Route::put('cargos/{cargo}', 'CargosController@update');
    Route::delete('cargos/{cargo}', 'CargosController@destroy');

    Route::get('localizacoes', 'LocalizacoesController@index');
    Route::post('localizacoes', 'LocalizacoesController@store');
    Route::get('localizacoes/{localizacao}', 'LocalizacoesController@show');
    Route::put('localizacoes/{localizacao}', 'LocalizacoesController@update');
    Route::delete('localizacoes/{localizacao}', 'LocalizacoesController@destroy');

    Route::get('andares', 'AndaresController@index');
    Route::post('andares', 'AndaresController@store');
    Route::get('andares/{andar}', 'AndaresController@show');
    Route::put('andares/{andar}', 'AndaresController@update');
    Route::delete('andares/{andar}', 'AndaresController@destroy');

    Route::get('salas', 'SalasController@index');
    Route::post('salas', 'SalasController@store');
    Route::get('salas/{sala}', 'SalasController@show');
    Route::put('salas/{sala}', 'SalasController@update');
    Route::delete('salas/{sala}', 'SalasController@destroy');

    Route::get('soap', 'SoapController@show');

    Route::get('rotafugas', 'RotaFugasController@index');
    Route::post('rotafugas', 'RotaFugasController@store');
    Route::get('rotafugas/{rotafuga}', 'RotaFugasController@show');
    Route::put('rotafugas/{rotafuga}', 'RotaFugasController@update');
    Route::delete('rotafugas/{rotafuga}', 'RotaFugasController@destroy');
});
