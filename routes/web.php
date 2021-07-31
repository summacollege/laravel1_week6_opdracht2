<?php

use App\Http\Controllers\HuurautosController;
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

Route::get('/huurautos', [HuurautosController::class, 'index']);
Route::get('/huurautos/create', [HuurautosController::class, 'create']);
Route::post('/huurautos', [HuurautosController::class, 'store'])->name('store');
Route::get('/huurautos/{id}/edit', [HuurautosController::class, 'edit'])->name('edit');
Route::put('/huurautos/{id}', [HuurautosController::class, 'update'])->name('update');
Route::delete('/huurautos', [HuurautosController::class, 'destroy'])->name('destroy');
