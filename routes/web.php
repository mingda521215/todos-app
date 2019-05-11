<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('todos', 'TodosController@index');
Route::get('todos/{todo}', 'TodosController@show');
