<?php
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\EquipoController;
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
 * LOCALODADES
 */
Route::get('Inicio',[MenuController::class,'index'])->name('menu.index');
Route::get('Inicio/localidades',[LocalidadController::class,'index'])->name('localida.index');
Route::get('Inicio/localidades/create',[LocalidadController::class,'create'])->name('localida.create');
Route::post('Inicio/localidades',[LocalidadController::class,'store'])->name('localida.store');
Route::get('Inicio/localidades/{id}',[LocalidadController::class,'show'])->name('localida.show');
Route::delete('Inicio/localidades/{id}',[LocalidadController::class,'destroy'])->name('localida.destroy');
Route::get('Inicio/localidades/edit/{id}',[LocalidadController::class,'edit'])->name('localida.edit');
Route::put('Inicio/localidades/{id}',[LocalidadController::class,'update'])->name('localida.update');
/*
 * JUGADORES
 */
Route::get('Inicio/jugadores',[JugadorController::class,'index'])->name('jugador.index');
Route::get('Inicio/jugadores/create',[JugadorController::class,'create'])->name('jugador.create');
Route::post('Inicio/jugadores',[JugadorController::class,'store'])->name('jugador.store');
Route::get('Inicio/jugadores/{id}',[JugadorController::class,'show'])->name('jugador.show');
Route::delete('Inicio/jugadores/{id}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::get('Inicio/jugadores/edit/{id}',[JugadorController::class,'edit'])->name('jugador.edit');
Route::put('Inicio/jugadores/{id}',[JugadorController::class,'update'])->name('jugador.update');
/*
 * EQUIPOS
 */
Route::get('Inicio/equipos',[EquipoController::class,'index'])->name('equipo.index');
Route::get('Inicio/equipos/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('Inicio/equipos',[EquipoController::class,'store'])->name('equipo.store');
Route::get('Inicio/equipos/{id}',[EquipoController::class,'show'])->name('equipo.show');
Route::delete('Inicio/equipos/{id}',[EquipoController::class,'destroy'])->name('equipo.destroy');
Route::get('Inicio/equipos/edit/{id}',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('Inicio/equipos/{id}',[EquipoController::class,'update'])->name('equipo.update');
