<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EditTodo;

class EditTodoController extends Controller
{
    public function index(){
        return view('edit/todo/index');
    }
}
