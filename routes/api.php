<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\SessionsController;


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
//RUTAS PARA TIPOS DE USUARIO

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//ruta de sesion 
//Route::get('/marcacionsjoin', 'App\Http\Controllers\MarcacionController@marcajehistorial');


Route::post('/usuarios', 'App\Http\Controllers\SessionsController@login');
Route::post('/registro', 'App\Http\Controllers\SessionsController@regisro');

Route::post('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@store');


Route::middleware('auth:sanctum')->group(function () {

    // Route::post('/registro', 'App\Http\Controllers\SessionsController@regisro');

    Route::post('/perfil', 'App\Http\Controllers\SessionsController@perfil');

    Route::post('/logout', 'App\Http\Controllers\SessionsController@logout');

    ///------------------------------------all routs

    Route::get('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@index');

    Route::get('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@get');

    Route::post('/tipo_usuarios', 'App\Http\Controllers\TipoUsuarioController@store');

    Route::put('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@update');

    Route::delete('/tipo_usuarios/{id}', 'App\Http\Controllers\TipoUsuarioController@destroy');

    //RUTAS PARA DEPARTAMENTO
    


   Route::get('/calculo', 'App\Http\Controllers\ControlController@index');

   Route::get('/calculo/{id}', 'App\Http\Controllers\ControlController@get');

   Route::post('/calculo', 'App\Http\Controllers\ControlController@store');

   Route::put('/calculo/{id}', 'App\Http\Controllers\ControlController@update');

   Route::delete('/calculo/{id}', 'App\Http\Controllers\ControlController@destroy');


});
