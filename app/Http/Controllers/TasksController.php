<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
      $tasks = Task::all();

      return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task)
    {
      // $task = Task::find($task);

      return view('tasks.task', compact('task'));
    }
}
