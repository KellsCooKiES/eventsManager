<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/user/edit/{id}','HomeController@edit');
Route::put('/user/update/{id}','HomeController@update');
Route::delete('/user/{id}','HomeController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/companies','CompanyController@index');
Route::get('/companies/create','CompanyController@create');
Route::post('/companies/store','CompanyController@store');
Route::get('/companies/edit/{id}','CompanyController@edit');
Route::put('/companies{id}','CompanyController@update');
Route::delete('/companies{id}','CompanyController@destroy');

Route::get('/shifts','ShiftController@index');
Route::get('/shifts/create','ShiftController@create');
Route::post('/shifts/store','ShiftController@store');
Route::get('/shifts/edit/{id}','ShiftController@edit');
Route::put('/shifts/{id}','ShiftController@update');
Route::delete('/shifts/{id}','ShiftController@destroy');

Route::get('/events','ProjectEventController@index');
Route::get('/events/create/{company_id}','ProjectEventController@create');
Route::post('/events/store','ProjectEventController@store');
Route::get('/events/edit/{id}','ProjectEventController@edit');
Route::put('/events/{id}','ProjectEventController@update');
Route::delete('/events/{id}','ProjectEventController@destroy');


Route::get('/calendar/{company_id}','CalendarController@index');



Route::get('/home', 'HomeController@index')->name('home');
