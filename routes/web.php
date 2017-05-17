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

// Project Controller
Route::get('/','ProjectController@index');
Route::get('project/{project}','ProjectController@show')->name('project_show');
Route::post('/project','ProjectController@store')->name('project_save');
Route::delete('project/{id}', 'ProjectsController@destroy')->name('project_delete');



// Task Controller
Route::get('task/{task}','TaskController@show')->name('task_show');
Route::post('/project/{project}/task/','TaskController@store')->name('task_save');
Route::put('task/{task}', 'TaskController@incrementStage');
Route::delete('task/{task}', 'TaskController@destroy')->name('task_delete');

// Comment Controller
Route::post('/task/{task}/comment','CommentsController@store')->name('comment_save');
Route::delete('comment/{comment}', 'CommentController@destroy')->name('comment_delete');

Auth::routes();

Route::get('/home', 'HomeController@index');
