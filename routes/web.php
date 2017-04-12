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





Route::get('/','ProjectController@index');
Route::get('project/{project}','ProjectController@show');
Route::get('project/{project}/task/{task}','TaskController@show');


Route::post('/project','ProjectController@store');
Route::post('/project/{project}/task/','TaskController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');
