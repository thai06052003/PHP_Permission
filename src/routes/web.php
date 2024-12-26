<?php

use App\Controllers\HomeController;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/add', 'UserController@add')->name('users.add');
    Route::post('/add', 'UserController@handleAdd');
    Route::get('/edit/{id}', 'UserController@update')->name('users.edit');
    Route::post('/edit/{id}', 'UserController@handleUpdate');
    Route::post('/delete/{id}', 'UserController@delete')->name('users.delete');
});
Route::group(['prefix' => 'products'], function () {
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::get('/add', 'ProductController@add')->name('products.add');
    Route::post('/add', 'ProductController@handleAdd');
    Route::get('/edit/{id}', 'ProductController@update')->name('products.edit');
    Route::post('/edit/{id}', 'ProductController@handleUpdate');
    Route::post('/delete/{id}', 'ProductController@delete')->name('products.delete');
});
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('/add', 'PostController@add')->name('posts.add');
    Route::post('/add', 'PostController@handleAdd');
    Route::get('/edit/{id}', 'PostController@update')->name('posts.edit');
    Route::post('/edit/{id}', 'PostController@handleUpdate');
    Route::post('/delete/{id}', 'PostController@delete')->name('posts.delete');
});