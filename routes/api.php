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

Route::post('/admin/reference-products/store',  'ProductController@store');
Route::post('/admin/reference-products/update/{id}' , 'ProductController@update');
Route::get('/admin/reference-products/destroy/{id}',[
	'uses' =>'ProductController@destroy',
	'as'   =>'product.destroy'
	]);

Route::post('/v1/contact/form', 'ContactController@store');
