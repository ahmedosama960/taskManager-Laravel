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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Task', function () {
//     return view('addTask');
// });

Route::get('/','TaskController@index');
Route::get('/Task','TaskController@create');
Route::post('/addTask','TaskController@store');
Route::get('/task/delete/{id}','TaskController@delete');
Route::get('/task/edit/{id}','TaskController@edit');
Route::post('/task/update/{id}','TaskController@update');
Route::get('/task/view/{id}','TaskController@view');
Route::get('/task/complete/{id}','TaskController@complete');
Route::get('task/search','TaskController@search');
