<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class EditTodoController extends Controller
{
    public function index(){
        return view('edit/todo/index');
    }

    public function addTodo(Request $request){

        $hParameter = $request->all();

        $mEditTodo = new Todo();
        $aResult = $mEditTodo->registerTodo( $hParameter );

        return view('edit/todo/index');
    }
}
