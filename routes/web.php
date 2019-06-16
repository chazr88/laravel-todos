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


//Here we create a route for the about page. We tell the route to look in the About Controller in the index method. 
//In that index method we are just returning the view for about.
Route::get('about', 'AboutController@index');

