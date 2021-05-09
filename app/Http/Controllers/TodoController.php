<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
//use Symfony\Component\HttpFoundation\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        //  return $todos;
        return view('todos.index', compact('todos'));
    }
    public function create()
    {
        return view('todos.create');
    }
    public function store(TodoCreateRequest $req)
    {
        Todo::create($req->all());
        return redirect()->back()->with('message', 'Todo create successfully');
    }
    public function edit(Todo $todo)
    {

        return view('todos.edit', compact('todo'));
    }
    public function update(Request $req, Todo $todo)
    {
        $todo->update(['title' => $req->title]);
        return redirect(route('todo.index'))->with('message', "updated!!");
        // return view('todos.edit', compact('todo'));
    }
}
