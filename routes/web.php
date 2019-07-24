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
    return view('dash');
})->middleware('auth'); 

Route::get('/enq', 'enqController@index')->name('enq_index');
Route::get('/enq/create', 'enqController@create')->name('enq_create'); 
Route::post('/enq/create', 'enqController@store');
Route::get('/enq/{enq}', 'enqController@show')->name('enq_show');

Route::get('/enq-imp', 'enqController@import')->name('enq_imp')->middleware('role'); 
Route::post('/enq-imp', 'enqController@impost') ; 
Route::post('/enq-imp/show', 'enqController@impshow')->name('enq_ishow'); 

Route::get('/vis', 'visitController@index')->name('vis_index');
Route::get('/vis/create', 'visitController@create')->name('vis_create');
Route::get('/vis/create/{enq}', 'visitController@create1')->name('vis_create1') ;
Route::post('/vis/create', 'visitController@store');
Route::get('/vis/{vis}', 'visitController@show')->name('vis_show');

Route::get('/user', 'userController@index')->name('user_index')->middleware('role');
Route::get('/user/create', 'userController@create')->name('user_create')->middleware('role'); 
Route::post('/user/create', 'userController@store')->middleware('role'); 
Route::post('/user/delete/{uid}', 'userController@delete')->name('user_delete')->middleware('role'); 
Route::get('/user/edit/{uid}', 'userController@edit')->name('user_edit')->middleware('role'); 
Route::post('/user/edit/{uid}', 'userController@update')->middleware('role'); 
 
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
