<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index'])->name('todo.init');
Route::post('/add', [TodoController::class, 'add'])->name('todo.add');
Route::post('/check', [TodoController::class, 'check'])->name('todo.check');
Route::post('/delete', [TodoController::class, 'delete'])->name('todo.delete');
