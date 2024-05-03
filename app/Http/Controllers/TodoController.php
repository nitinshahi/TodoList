<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::all();
        return view('index', ['user' => auth()->user(), 'todos' => $todo]);
    }

    public function alltask()
    {
        $todo = Todo::all();
        return view('list_task', ['user' => auth()->user(), 'todos' => $todo]);
    }

    public function create()
    {
        return view('add_task', ['user' => auth()->user()]);
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        // dd($user);
        validator($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'decimal:0,2'],
            'target_date' => ['required', 'date'],
            'status' => ['boolean'],
        ])->validate();

        Todo::create($request->all() + ['user_id' => $user->id]);
        return redirect('/list-task ');
    }

    public function edit(Todo $todo)
    {
        // return $todo;
        return view('edit', compact('todo'));
    }
    public function update(Todo $todo, Request $request)
    {
        $data = $request->validate([
            'title' => 'required | string | max:255',
            'price' => 'required | decimal:0,2',
            'target_date' => 'required | date',
            'status' => 'boolean',
        ]);
        $todo->update($data);

        return redirect(route('list-task'))->with('sucess', 'list updated sucessfully!!');
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect(route('list-task'))->with('sucess', 'list deleted sucessfully!!');
    }
}
