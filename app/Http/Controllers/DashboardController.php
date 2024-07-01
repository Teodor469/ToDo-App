<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $todo = new Todo([
            'task' => 'yes',
        ]);
        $todo->save();

        return view('home', [
            'tasks' => Todo::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
