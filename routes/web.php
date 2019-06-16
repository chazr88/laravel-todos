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

//Here we create a route for the totos index page. We tell the route to look in the TodosController in the index method. 
//In that index method we are just returning the view for index.blade.php.
Route::get('todos', 'TodosController@index');


