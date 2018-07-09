<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks/index', compact('tasks'));
    }

    public function show(Task $task)
    {
        //$task = Task::find($id);  -> Zamiast tego, mozna uzyc przekazanie obiektu Task w argumencie
        return view('/tasks/show', compact('task'));
    }

    public function showTasks()
    {
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }
}
