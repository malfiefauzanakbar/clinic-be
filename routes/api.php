<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/register', array('middleware' => 'cors', 'uses' => 'AuthController@register'));
Route::post('/login', array('middleware' => 'cors', 'uses' => 'AuthController@login'));
Route::post('/logout', array('middleware' => 'cors', 'uses' => 'AuthController@logout'));

Route::get('/blog', array('middleware' => 'cors', 'uses' => 'BlogController@index'));
Route::post('/blog', array('middleware' => 'cors', 'uses' => 'BlogController@store'));
Route::get('/blog/{id?}', array('middleware' => 'cors', 'uses' => 'BlogController@show'));
Route::post('/blog/update/{id?}', array('middleware' => 'cors', 'uses' => 'BlogController@update'));
Route::delete('/blog/{id?}', array('middleware' => 'cors', 'uses' => 'BlogController@destroy'));
