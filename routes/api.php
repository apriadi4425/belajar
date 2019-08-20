<?php

use Illuminate\Http\Request;

Route::get('posts','PostController@index');
Route::get('posts/{post}','PostController@get_data_by_id');

Route::post('posts','PostController@insert');
