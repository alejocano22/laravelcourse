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

Route::get('/index', 'HomeController@index')->name("home.index");
Route::get('/info', 'HomeController@info')->name("home.info");
Route::get('/product/show/{id}', 'ProductController@show')->name("product.show");
Route::get('/product/create', 'ProductController@create')->name("product.create");
Route::post('/product/save', 'ProductController@save')->name("product.save");

Route::get('/product/successful', 'ProductController@successful')->name("product.successful");

Route::get('/image/index', 'ImageController@index')->name("image.index");
Route::post('/image/save', 'ImageController@save')->name("image.save");

Route::get('/image-not-di/index', 'ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'ImageNotDIController@save')->name("imagenotdi.save");
