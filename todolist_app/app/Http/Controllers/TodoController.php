<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::orderBy('created_at', 'desc')->get();

        return view('todolist', ['todos' => $todos]);
    }

    public function add(Request $request) {
        Todo::create([
            'content' => $request->content
        ]);

        return redirect()->route('todo.init');
    }

    public function check(Request $request) {
    }

    public function delete(Request $request) {
    }
}
