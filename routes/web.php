<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('show', 'EmployeesController@show');
Route::get('delete/{id}', 'EmployeesController@destroy');
Route::get('create', 'EmployeesController@create');
Route::post('submit', 'EmployeesController@store');
Route::get('edit/{id}', 'EmployeesController@edit');
Route::post('update/{id}', 'EmployeesController@update');
