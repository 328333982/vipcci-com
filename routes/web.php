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

Route::get('admin', 'AdminController@admin')->name('admin');
Route::get('/', 'IndexController@index')->name('index');
Route::get('/topic/{topic}', 'IndexController@topic')->name('topic');
Route::get('/category/{category}', 'IndexController@category')->name('category');
