<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoModel;

class TodoController extends Controller
{
    function index(){
        $todos = TodoModel::all();
        return view('index', ['todos' => $todos]);
    }

    function addTodo( Request $request )
    {
        $todo = new TodoModel();
        $todo->text = $request->text;
        $todo->save();
        return redirect('/todos');
    }

    function deleteTodo( $id )
    {
        $todo = TodoModel::find( $id );
        $todo->delete();
        return redirect('/todos');
    }

}
