<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use App\Task;
use Illuminate\Http\Request;

class EmployeeGuestController extends Controller
{
  // EMPLOYEES
  public function index() {
    $employees = Employee::all();
    return view('employees', compact('employees'));
  }

  public function show($id) {
    $employee = Employee::FindOrFail($id);
    return view('employee', compact('employee'));
  }
}
