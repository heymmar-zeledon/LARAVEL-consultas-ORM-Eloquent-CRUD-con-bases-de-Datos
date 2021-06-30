<?php
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ClaseController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/maestros', [ProfesorController::class, 'mostrarlista']);

Route::post('/maestros/guardar', [ProfesorController::class, 'guardar']);

Route::get('/maestros/nuevo/', [ProfesorController::class, 'formulariomaestro']);

Route::get('/maestros/eliminar/{id}', [ProfesorController::class, 'eliminar']);

Route::get('/maestros/actualizar/{id}', [ProfesorController::class, 'mostrar']);

Route::post('/maestros/actualizar/{id}', [Profesorontroller::class, 'actualizar']);

//----------------------------------------------------------------------------------
Route::get('/aulas', [AulaController::class, 'mostrarlistaaulas']);

Route::post('/aulas/guardar', [AulaController::class, 'guardar']);

Route::get('/aulas/nueva', [AulaController::class, 'formularioaulas']);

Route::get('/aulas/eliminar/{id}',[ AulaController::class, 'eliminar']);

Route::get('/aulas/actualizar/{id}', [AulaController::class, 'mostrar']);

Route::post('/aulas/actualizar/{id}',[AulaController::class, 'actualizar']);

//----------------------------------------------------------------------------

Route::get('/clases', [ClaseController::class, 'mostrarlistaclases']);

Route::get('/clases/nueva', [ClaseController::class, 'formularioclases']);

Route::post('/clases/guardar', [ClaseController::class, 'guardar']);

Route::get('/clases/eliminar/{codclase}',[ ClaseController::class, 'eliminar']);

Route::get('/clases/actualizar/{codclase}',[ ClaseController::class, 'mostrar']);

Route::post('/clases/actualizar/{id}',[ClaseController::class, 'actualizar']);
