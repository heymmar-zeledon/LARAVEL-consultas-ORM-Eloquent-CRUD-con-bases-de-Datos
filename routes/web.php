<?php
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ClaseController;
use Illuminate\Support\Facades\Auth;
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
})->middleware('auth');

Auth::routes();

Route::get('/maestros', [ProfesorController::class, 'mostrarlista']);

Route::post('/maestros/guardar/', [ProfesorController::class, 'guardar']);

Route::get('/maestros/NuevaRelacion/{id}', [ProfesorController::class, 'NuevaRelacion']);

Route::post('/maestros/añadirRelacion/{id}', [ProfesorController::class, 'añadirRelacion']);

Route::get('/maestros/eliminarRelacion/{idprofesor}/{idclase}/{idaula}/{id}', [ProfesorController::class, 'EliminarRelacion']);

Route::get('/maestros/nuevo/', [ProfesorController::class, 'formulariomaestro']);

Route::get('/maestros/eliminar/{id}', [ProfesorController::class, 'eliminar']);

Route::get('/maestros/editar/{id}', [ProfesorController::class, 'editar']);

Route::patch('/maestros/actualizar/{id}', [ProfesorController::class, 'actualizar']);

Route::get('/maestros/relaciones/', [ProfesorController::class, 'Mostrar_relaciones']);

//----------------------------------------------------------------------------------
Route::get('/aulas', [AulaController::class, 'mostrarlistaaulas']);

Route::post('/aulas/guardar', [AulaController::class, 'guardar']);

Route::get('/aulas/nueva', [AulaController::class, 'formularioaulas']);

Route::get('/aulas/eliminar/{id}',[ AulaController::class, 'eliminar']);

Route::get('/aulas/editar/{id}', [AulaController::class, 'editar']);

Route::post('/aulas/actualizar/{id}',[AulaController::class, 'actualizar']);

//----------------------------------------------------------------------------

Route::get('/clases', [ClaseController::class, 'mostrarlistaclases']);

Route::get('/clases/nueva', [ClaseController::class, 'formularioclases']);

Route::post('/clases/guardar', [ClaseController::class, 'guardar']);

Route::get('/clases/eliminar/{codclase}',[ ClaseController::class, 'eliminar']);

Route::get('/clases/editar/{codclase}',[ ClaseController::class, 'editar']);

Route::post('/clases/actualizar/{id}',[ClaseController::class, 'actualizar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
