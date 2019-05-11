<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        // $todos = Todo::all();
        // return view('todos.index')->with('todos', $todos);
        // 上述可簡寫為如下
        return view('todos.index')->with('todos', Todo::all());
    }
    public function show($todoId)
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }
}
