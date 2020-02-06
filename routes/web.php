<?php

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Home2Controller@index')->name('home2');
Route::post('/dashboard/export_report', 'Home2Controller@export_report');
// Expense
Route::get('/dashboard/expense/list', 'ExpenseController@list');
Route::get('/dashboard/expense/add', 'ExpenseController@add');
Route::post('/dashboard/add/expense', 'ExpenseController@post_add');
// Salary
Route::get('/dashboard/salary/list', 'SalaryController@list');
Route::get('/dashboard/salary/add', 'SalaryController@add');
Route::post('/dashboard/add/salary', 'SalaryController@post_add');
