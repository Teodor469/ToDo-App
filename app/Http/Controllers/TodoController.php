<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function store()
    {
        $todo = new Todo([
            'task' => 'test',
        ]);
        $todo->save();

        dump($todo);
        return view('home', [
            'tasks' => Todo::all()
        ]);
    }

    public function destroy(Todo $todo)
    {

    }

    public function show(Todo $todo)
    {

    }
}
