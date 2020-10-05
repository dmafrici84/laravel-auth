<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskGuestController extends Controller
{
  public function index() {
    $tasks = Task::all();
    return view('tasks', compact('tasks'));
  }
}
