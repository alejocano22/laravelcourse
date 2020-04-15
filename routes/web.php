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

Route::get('/info', 'HomeController@info')->name("home.info");
Route::get('/product/show/{id}', 'ProductController@show')->name("product.show")->middleware('auth');
Route::get('/product/create', 'ProductController@create')->name("product.create")->middleware('auth');
Route::post('/product/save', 'ProductController@save')->name("product.save")->middleware('auth');

Route::get('/product/successful', 'ProductController@successful')->name("product.successful")->middleware('auth');

Route::get('/image/index', 'ImageController@index')->name("image.index")->middleware('auth');
Route::post('/image/save', 'ImageController@save')->name("image.save")->middleware('auth');

Route::get('/image-not-di/index', 'ImageNotDIController@index')->name("imagenotdi.index")->middleware('auth');
Route::post('/image-not-di/save', 'ImageNotDIController@save')->name("imagenotdi.save")->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');
