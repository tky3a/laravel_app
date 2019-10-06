<?php

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index')->middleware('hello');
Route::post('hello', 'HelloController@post');
