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

Route::get('foo','EmployeeController@all');

Route::get('/employee/{family_name}/{given_name}/position', 'EmployeeController@nameGet');

Route::post('/employee/{family_name}/{given_name}/position', 'EmployeeController@update');

//Route::get('/employee/{family_name}/{given_name}/position', 'EmployeeController@allMember');
