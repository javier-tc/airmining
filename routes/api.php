<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\Apis\Api1Controller;   //get_data_by_model
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#Api1Controller;   //get_data_by_model
#Api2Controller;   //get_data_receptor
#Api3Controller;   //list_data_variable
#Api4Controller;   //get_data_variables Mapa
Route::post('get_data_by_model', 'Apis\Api1Controller@get_data_by_model')->name('get_data_by_model');
Route::post('get_data_receptor', 'Apis\Api2Controller@get_data_receptor')->name('get_data_receptor');

#Route::post('get_data_by_model', [Apis\Api1Controller::class, 'get_data_by_model']);



#Route::post('get_data_receptor',[FuncionesController::class, 'get_data_receptor']);
#Route::post('get_data_variables',[FuncionesController::class, 'get_data_variables']);
#Route::post('list_data_variable/{id1}/{id2}/{id3}/{id4}',[Controller::class, 'list_data_variable']);
