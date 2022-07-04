<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

//        $aTodo = Todo::all();

        $oTodo = new Todo();
        $aTodos = $oTodo->getTodo();

        return view('todo/index')->with('todos',$aTodos);
    }

    function addTodo( Request $request )
    {
        $todo = new Todo();
        $todo->title = $request->todo_title;
        $todo->save();
        return redirect('/todos');
    }

    function deleteTodo( $id )
    {
        $todo = Todo::find( $id );
        $todo->delete();
        return redirect('/todos');
    }

}
