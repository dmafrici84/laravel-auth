<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');}) -> name ('home');

Auth::routes();

// EMPLOYEES
Route::get('/employees', 'GuestController@index')->name('employees.index');
Route::get('/employee/show/{id}', 'GuestController@show')->name('employee.show');

Route::get('/employee/create', 'LoggedController@create')->name('employee.create');
Route::post('/employee/create', 'LoggedController@store')->name('employee.store');

Route::get('/employee/edit/{id}', 'LoggedController@edit')->name('employee.edit');
Route::post('/employee/edit/{id}', 'LoggedController@update')->name('employee.update');

Route::get('/employee/delete/{id}', 'LoggedController@destroy')->name('employee.delete');
