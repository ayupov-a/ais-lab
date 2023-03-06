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
Route::resource('/job', 'App\Http\Controllers\JobsController');
Route::resource('/member', 'App\Http\Controllers\MembersController');
Route::resource('/building', 'App\Http\Controllers\BuildingsController');

