<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => '\App\Http\Controllers\Building'], function(){
    Route::get('/buildings', 'IndexController')->name('building.index');
    Route::get('/buildings/create', 'CreateController')->name('building.create');
    Route::get('/buildings/{building}/{id}', 'EditController');
    Route::get('/buildings/{id}', 'ShowController');

    Route::patch('/buildings/{building}', 'UpdateController')->name('building.update');
    Route::post('/buildings', 'StoreController')->name('building.store');
    Route::delete('/buildings/{id}', 'DestroyController')->name('building.delete');
    Route::patch('/buildings/city/{id}', 'TestController');

    //views

});

Route::group(['namespace' => '\App\Http\Controllers\Member'], function(){
    Route::get('/members', 'IndexController')->name('member.index');
    Route::get('/members/create', 'CreateController')->name('member.create');
    Route::get('/members/{id}', 'ShowController');
    Route::get('/members/{members}/{id}', 'EditController');

    Route::post('/members', 'StoreController')->name('member.store');
    Route::patch('/members/{member}', 'UpdateController')->name('member.update');
    Route::delete('/members/{id}', 'DestroyController')->name('member.delete');

    //views

});

Route::group(['namespace' => '\App\Http\Controllers\Job'], function(){
    Route::get('/jobs', 'IndexController')->name('job.index');
    Route::get('/jobs/create', 'CreateController')->name('job.create');
    Route::get('/jobs/{id}', 'ShowController');
    Route::get('/jobs/{jobs}/{id}', 'EditController');

    Route::post('/jobs', 'StoreController')->name('job.store');
    Route::patch('/jobs/{job}', 'UpdateController')->name('job.update');
    Route::delete('/jobs/{id}', 'DestroyController')->name('job.delete');


});




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
