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


Route::get('/','TenantsController@index');

Route::get('simulateRent','SimulateControlller@SimulateRent');

Route::get('/houses','HousesController@index')->name('getHouses');
Route::post('/addHouse','HousesController@store')->name('addHouse');
Route::get('/getTenants','TenantsController@index')->name('getTenants');
Route::post('/addTenant','TenantsController@store')->name('addTenant');

Route::any('/mpesa/confirm','TransactionController@confirmTransaction');
Route::any('/mpesa/validate','TransactionController@validateTransaction');
