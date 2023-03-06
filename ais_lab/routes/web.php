<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', '\App\Http\Controllers\ClientsController@index');
Route::get('/clients/read', '\App\Http\Controllers\ClientsController@read');
Route::get('/clients/store', '\App\Http\Controllers\ClientsController@store');
Route::get('/clients/update', '\App\Http\Controllers\ClientsController@update');
Route::get('/clients/delete', '\App\Http\Controllers\ClientsController@destroy');
