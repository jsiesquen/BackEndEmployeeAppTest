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

Route::get('/', 'HomeController@index');
Route::get('/employees', 'EmployeesController@index');
Route::post('/employees', 'QueryController@search');
Route::get('/webservice', 'HomeController@webservice');
Route::get('/employee/{tokenId?}', 'EmployeesController@show');
Route::resource('queries', 'QueryController');