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

Route::get('/','IndexController@index')->name('home');
Route::get('category/{category}','IndexController@category')->name('category');
Route::get('all/{filter}','IndexController@filter')->name('filter');

Auth::routes();

Route::get('admin/upload','UploadController@create')->name('create.image');
Route::post('admin/upload','UploadController@store')->name('store.image');
Route::get('admin/all-materials','HomeController@index')->name('index.image');
Route::get('admin/categories','HomeController@category_index')->name('index.category');
Route::get('admin/categories/create','HomeController@category_create')->name('create.category');
Route::post('admin/categories/','HomeController@category_store')->name('store.category');
Route::get('admin/categories/{id}/destroy','HomeController@category_destroy')->name('destroy.category');