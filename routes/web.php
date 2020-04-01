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

Route::prefix('employee')->group(function() {
	Route::get('/', 'EmployeeController@index')->name('employee.list');
	Route::post('/', 'EmployeeController@store')->name('employee.store');
	Route::get('/create', 'EmployeeController@create')->name('employee.create');
});


Route::prefix('company')->group(function() {
	Route::get('/', 'CompanyController@index')->name('company.list');
	Route::get('/create', 'CompanyController@create')->name('company.create');
	Route::post('/post', 'CompanyController@store')->name('company.store');
});

Route::get('/', function () {
    return view('welcome');
});

/*
* Delegate routes to vue router
*/
//Route::get('/{vue?}', function() {
//    return view('layouts.app');
//})->where('vue', '[\/\w\.-]*');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
