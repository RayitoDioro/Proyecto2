<?php

use App\Http\Controllers\TareaController;
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

Route::get('/formularios', function () {
    return view('formularios');
});

Route::get('tarea/registrar', [TareaController::class, 'create'])->name('tarea.create');
Route::post('tarea/guardar', [TareaController::class, 'store'])->name('tarea.store');
Route::get('tarea/listar', [TareaController::class, 'index'])->name('tarea.index');