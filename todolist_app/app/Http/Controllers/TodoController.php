<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){

//        $aTodo = Todo::all();

        $mTodo = new Todo();
        $aTodos = $mTodo->getTodo();
//        var_dump($aTodos);exit;
        return view('todo/index')->with('todos',$aTodos);
    }

    function addTodo( Request $request )
    {
        $todo = new Todo();
        $todo->text = $request->text;
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
