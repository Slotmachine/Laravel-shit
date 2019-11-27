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
    return view('user.index');
});

// Route::resource('user', 'UsersController');
route::post('/store-user','UsersController@store')->name('store-user');
route::get('user',function(){
    return view('user.index');
})->name('user.index');
route::get('user-create',function(){
    return view('user.create');
})->name('user.create');