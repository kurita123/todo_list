<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EditTodoController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/',function(){
//    return view('todolist');
//});

Route::get('/', [TodoController::class, 'index']);
Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'addTodo']);
Route::delete('/todos/{id}', [TodoController::class, 'deleteTodo']);

Route::get('/edit/todo/default', [EditTodoController::class, 'index']);
Route::post('/edit/todo/register', [EditTodoController::class, 'addTodo']);
