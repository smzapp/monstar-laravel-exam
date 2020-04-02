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

Route::group(['prefix' => 'employee', 'as' => 'employee.', 'middleware' => 'auth'] ,function() {
	Route::get('/', 'EmployeeController@index')->name('employee.list');
	Route::post('/', 'EmployeeController@store')->name('employee.store');
	Route::get('/create', 'EmployeeController@create')->name('employee.create');
	Route::get('/edit/{id}', 'EmployeeController@edit')->name('employee.edit');
});


Route::group(['prefix' => 'company', 'as' => 'company.', 'middleware' => 'auth'] ,function() {
	Route::get('/', 'CompanyController@index')->name('list');
	Route::post('/', 'CompanyController@store')->name('store');
	Route::get('/create', 'CompanyController@create')->name('create');
	Route::get('/edit/{id}', 'CompanyController@edit')->name('edit');
	Route::post('/edit/{id}', 'CompanyController@update')->name('update');
	Route::delete('/{id}', 'CompanyController@destroy')->name('destroy');
	Route::get('/detail/{id}', 'CompanyController@show')->name('show');
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
