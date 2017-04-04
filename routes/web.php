<?php

Route::get('/', 'PostsController@index');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
