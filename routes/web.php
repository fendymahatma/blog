<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/post/create', 'PostsController@create');
Route::get('/post/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/comments/{post}', 'CommentsController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');




Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
