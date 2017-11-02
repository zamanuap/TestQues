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

Route::get('/',['as'=>'Add','uses'=>'InfoController@index']);

Route::post('/',['as'=>'Add','uses'=>'InfoController@store']);

Route::get('list',['as'=>'List','uses'=>'InfoController@show']);

Route::get('update/{id}',['as'=>'Update','uses'=>'InfoController@edit']);

Route::post('update/{id}',['as'=>'Update','uses'=>'InfoController@update']);

Route::get('delete/{id}/{page}',['as'=>'Delete','uses'=>'InfoController@destroy']);