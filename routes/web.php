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
Route::post('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout');
Route::get('/traffic', 'HomeController@traffic');
Route::get('/health', 'HomeController@health');
Route::get('/settings', 'HomeController@settings');
// Route::get('/logout', 'HomeController@logout')->middleware('auth');