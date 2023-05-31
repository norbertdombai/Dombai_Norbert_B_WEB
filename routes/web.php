<?php

use App\Http\Controllers\SzavakController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/export',[SzavakController::class, 'SzavakExportToJson']);

Route::get('/szavak', [SzavakController::class, 'index'])->name('szavak.index');

Route::post('/szavak/create', [SzavakController::class, 'create'])->name('szavak.create');

Route::delete('/delete/{id}', [SzavakController::class, 'deleteRow']);


