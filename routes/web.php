<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});*/



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    // return view('public.index');
    return redirect()->intended('/login');
});


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('proyectos', ProyectosController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('dashboardc', DashboardcController::class);
Route::resource('infoproyecto', InfoProyectoController::class);


Route::resource('mproyectos', MProyectosController::class);
Route::resource('mestaciones', MEstacionesController::class);
Route::resource('musuarios', MUsuariosController::class);
Route::resource('mroles', MRolesController::class);



#Pronosticos
Route::resource('pronosticos', PronosticosController::class);
Route::get('pronosticos2', 'PronosticosController@index2')->name('pronosticos2.index');
Route::resource('resumenpro', ResumenPronosticosController::class);

#archivos
Route::resource('cmasiva', Archivos\CmasivaController::class);
Route::resource('csinopticos', Archivos\CsinopticosController::class);

#select
Route::post('/rtrn_estaciones','FuncionesController@rtrn_estaciones');


Route::resource('neuronales', ProneuronalesController::class);
Route::resource('estadisticos', ProestadisticosController::class);
Route::resource('numericos', PronumericosController::class);