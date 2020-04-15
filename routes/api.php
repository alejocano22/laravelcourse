<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'Api\ProductApi@index')->name("api.product.index");
Route::get('/products/{id}', 'Api\ProductApi@show')->name("api.product.show");

Route::get('/v2/products', 'Api\ProductApiV2@index')->name("api.v2.product.index");
Route::get('/v2/products/{id}', 'Api\ProductApiV2@show')->name("api.v2.product.show");

Route::get('/v3/products', 'Api\ProductApiV3@index')->name("api.v3.product.index");
Route::get('/v3/products/paginate', 'Api\ProductApiV3@paginate')->name("api.v3.product.paginate");

Route::get('/vpost/products', 'Api\ProductApiVpost@index')->name("api.vpost.product.index");
Route::post('/vpost/products/save', 'Api\ProductApiVpost@save')->name("api.vpost.product.save");
