<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\FisioterapeutaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuscripcionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PreguntaController;

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

Route::get('/', [LoginController::class, 'index'])->name('raiz');
Route::get('/registro', [LoginController::class, 'registro'])->name('registro');
Route::post('registro', [LoginController::class, 'store'])->name('usuario.store');
Route::post('validar', [LoginController::class, 'validar'])->name('usuario.validar');

Route::get('Inicio', [InicioController::class, 'index'])->name('inicio.index');


Route::get("Ejercicios", [EjercicioController::class, 'index'])->name('ejercicio.index');
Route::get("Ejercicios/create", [EjercicioController::class, 'create'])->name('ejercicio.create');


Route::get("Ejercicios/coordinacion", [EjercicioController::class, 'coordinacion'])->name('ejercicio.coordinacion');
Route::get("Ejercicios/movilidad", [EjercicioController::class, 'movilidad'])->name('ejercicio.movilidad');
Route::get("Ejercicios/precision", [EjercicioController::class, 'precision'])->name('ejercicio.precision');
Route::post("Ejercicios", [EjercicioController::class, 'store'])->name('ejercicio.store');


Route::post("Ejercicios/{variable}", [EjercicioController::class, 'store2'])->name('ejercicio.store2');


Route::get("Ejercicios/{variable}", [EjercicioController::class, 'show'])->name('ejercicio.show');
Route::get("Ejercicios/{variable}/edit", [EjercicioController::class, 'edit'])->name('ejercicio.edit');
Route::put("Ejercicios/{variable}", [EjercicioController::class, 'update'])->name('ejercicio.update');
Route::delete("Ejercicios/{variable}", [EjercicioController::class, 'destroy'])->name('ejercicio.destroy');
Route::get("Ejercicios/{variable}/cargar", [EjercicioController::class, 'cargar'])->name('ejercicio.cargar');





Route::get("Fisioterapeutas", [FisioterapeutaController::class, 'index'])->name('fisioterapeuta.index');
Route::get("Fisioterapeutas/create", [FisioterapeutaController::class, 'create'])->name('fisioterapeuta.create');
Route::post("Fisioterapeutas", [FisioterapeutaController::class, 'store'])->name('fisioterapeuta.store');
Route::post("Fisioterapeutas/{variable}", [FisioterapeutaController::class, 'store2'])->name('fisioterapeuta.store2');
Route::get("Fisioterapeutas/{variable}", [FisioterapeutaController::class, 'show'])->name('fisioterapeuta.show');
Route::get("Fisioterapeutas/{variable}/edit", [FisioterapeutaController::class, 'edit'])->name('fisioterapeuta.edit');
Route::put("Fisioterapeutas/{variable}", [FisioterapeutaController::class, 'update'])->name('fisioterapeuta.update');
Route::delete("Fisioterapeutas/{variable}", [FisioterapeutaController::class, 'destroy'])->name('fisioterapeuta.destroy');

Route::get("Fisioterapeutas/{variable}/cargar", [FisioterapeutaController::class, 'cargar'])->name('fisioterapeuta.cargar');

Route::get("Categoria", [CategoriaController::class, 'index'])->name('categoria.index');
Route::get("Categoria/create", [CategoriaController::class, 'create'])->name('categoria.create');
Route::post("Categoria", [CategoriaController::class, 'store'])->name('categoria.store');
Route::get("Categoria/{variable}", [CategoriaController::class, 'show'])->name('categoria.show');
Route::get("Categoria/{variable}/edit", [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put("Categoria/{variable}", [CategoriaController::class, 'update'])->name('categoria.update');
Route::delete("Categoria/{variable}", [CategoriaController::class, 'destroy'])->name('categoria.destroy');

Route::get("Especialidad", [EspecialidadController::class, 'index'])->name('especialidad.index');
Route::get("Especialidad/create", [EspecialidadController::class, 'create'])->name('especialidad.create');
Route::post("Especialidad", [EspecialidadController::class, 'store'])->name('especialidad.store');
Route::get("Especialidad/{variable}", [EspecialidadController::class, 'show'])->name('especialidad.show');
Route::get("Especialidad/{variable}/edit", [EspecialidadController::class, 'edit'])->name('especialidad.edit');
Route::put("Especialidad/{variable}", [EspecialidadController::class, 'update'])->name('especialidad.update');
Route::delete("Especialidad/{variable}", [EspecialidadController::class, 'destroy'])->name('especialidad.destroy');



Route::get("Ingresos", [IngresoController::class, 'index']);

Route::get("TiposUsuario", [TipoUsuarioController::class, 'index'])->name('tipo.index');
Route::get("TiposUsuario/create", [TipoUsuarioController::class, 'create'])->name('tipo.create');
Route::post("TiposUsuario", [TipoUsuarioController::class, 'store'])->name('tipo.store');
Route::get("TiposUsuario/{variable}", [TipoUsuarioController::class, 'show'])->name('tipo.show');
Route::get("TiposUsuario/{variable}/edit", [TipoUsuarioController::class, 'edit'])->name('tipo.edit');
Route::put("TiposUsuario/{variable}", [TipoUsuarioController::class, 'update'])->name('tipo.update');
Route::delete("TiposUsuario/{variable}", [TipoUsuarioController::class, 'destroy'])->name('tipo.destroy');



Route::get("Suscripcion", [SuscripcionController::class, 'index'])->name('suscripcion.index');

Route::get("Preguntas", [PreguntaController::class, 'index'])->name('pregunta.index');


Route::get("Usuarios",[LoginController::class,'tabla'])->name('usuario.index');
Route::get("Usuarios/{variable}", [UsuarioController::class, 'show'])->name('usuario.show');
Route::get("Usuarios/{variable}/edit", [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put("Usuarios/{variable}", [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete("Usuarios/{variable}", [UsuarioController::class, 'destroy'])->name('usuario.destroy');