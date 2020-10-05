<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');}) -> name ('home');

Auth::routes();

// EMPLOYEES
Route::get('/employees', 'EmployeeGuestController@index')->name('employees.index');
Route::get('/employee/show/{id}', 'EmployeeGuestController@show')->name('employee.show');

Route::get('/employee/create', 'EmployeeLoggedController@create')->name('employee.create');
Route::post('/employee/create', 'EmployeeLoggedController@store')->name('employee.store');

Route::get('/employee/edit/{id}', 'EmployeeLoggedController@edit')->name('employee.edit');
Route::post('/employee/edit/{id}', 'EmployeeLoggedController@update')->name('employee.update');

Route::get('/employee/delete/{id}', 'EmployeeLoggedController@destroy')->name('employee.delete');

// LOCATIONS
Route::get('/locations', 'LocationGuestController@index')->name('locations.index');

// TASKS
Route::get('/tasks', 'TaskGuestController@index')->name('tasks.index');
