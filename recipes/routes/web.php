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
Route::get('/', 'HomeController@index');
Route::get('/recipes', 'RecipeController@index');
Route::post('/recipes', 'RecipeController@store');
Route::get('/recipes/create', 'RecipeController@create');
Route::get('/recipes/{recipe}', 'RecipeController@show');
Route::patch('/recipes', 'RecipeController@store');
Route::get('/recipes/{recipe}/edit', 'RecipeController@edit');
Route::delete('/recipes/delete/{recipe}', 'RecipeController@delete');


