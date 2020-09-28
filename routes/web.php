<?php

// Route::get('/', function () {

//      return view('welcome');
// });


Auth::routes(['verify'=>true]);
Route::get('/test', function () {
    return view('test');
});
Route::get('indexx','Front\UserController@getindex');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
