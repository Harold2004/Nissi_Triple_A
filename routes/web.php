<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/Inventario', function () {
    return view('Modulo_inventario');
})->name('Inventario');
Route::get("/Modulo_inventario",[CrudController::class,"index"])->name("crud.index");
Route::post("/Registrar-producto",[CrudController::class,"create"])->name("crud.create");
Route::post("/Modificar-producto",[CrudController::class,"update"])->name("crud.update");
Route::get("/eliminar-producto-{ID}",[CrudController::class,"delete"])->name("crud.delete");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');