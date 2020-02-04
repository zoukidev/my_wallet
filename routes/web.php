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
Route::get('/tp', 'Home2Controller@index')->name('home2');
Route::get('/tp/expense/list', 'ExpenseController@list');
Route::get('/tp/expense/add', 'ExpenseController@add');
Route::post('/tp/add/expense', 'ExpenseController@post_add')->name('expense_add');
