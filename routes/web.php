<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('todos', 'TodosController@index');
Route::get('todos/{todo}', 'TodosController@show');
Route::get('new-todos', 'TodosController@create');
Route::post('store-todos', 'TodosController@store');
