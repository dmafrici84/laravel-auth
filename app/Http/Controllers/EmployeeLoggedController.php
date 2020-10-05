<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use App\Task;
use Illuminate\Http\Request;

class EmployeeLoggedController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  // EMPLOYEES
  public function create() {
    $locations = Location::all();
    return view('employee-create',compact('locations'));
  }

  public function store(Request $request) {
    $data = $request -> all();
    Employee::create($data);
    return redirect() -> route('employees.index');
  }

  public function edit($id) {
    $employee = Employee::FindOrFail($id);
    $locations = Location::all();
    return view('employee-edit', compact('employee', 'locations'));
  }

  public function update(Request $request, $id) {
    $data = $request -> all();
    $employee = Employee::FindOrFail($id);
    $employee -> update($data);
    return redirect() -> route('employees.index');
  }

  public function destroy($id) {
    $employee = Employee::FindOrFail($id);
    $employee -> delete();
    return redirect() -> route('employees.index');
  }
}
