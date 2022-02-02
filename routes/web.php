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
    return view('welcome');
});
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    //レシピ関連
Route::get('recipe/create','Admin\RecipeController@add');
Route::post('recipe/create','Admin\RecipeController@create');
Route::get('recipe/edit','Admin\RecipeController@edit');
Route::post('recipe/edit','Admin\RecipeController@update');
Route::get('recipe/delete','Admin\RecipeController@delete');
Route::get('recipe','Admin\RecipeController@index');
    //記事関連
Route::get('blog/create','Admin\BlogController@add');
Route::post('blog/create','Admin\BlogController@create');
Route::get('blog/edit','Admin\BlogController@edit');
Route::post('blog/edit','Admin\BlogController@update');
Route::get('blog/delete','Admin\BlogController@delete');
Route::get('blog','Admin\BlogController@index');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
