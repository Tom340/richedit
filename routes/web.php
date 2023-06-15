<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
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


Route::get('/', [EditController::class, 'index'])->name('index');
Route::get('/create', [EditController::class, 'create'])->name('create');
Route::get('/create/{id}', [EditController::class, 'create'])->name('create');
Route::post('/store', [EditController::class, 'store'])->name('store');

