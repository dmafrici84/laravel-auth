<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class GuestController extends Controller
{
  public function index() {
    $employees = Employee::all();
    return view('employees', compact('employees'));
  }

  public function show($id) {
    $employee = Employee::FindOrFail($id);
    return view('employee', compact('employee'));
  }
}
