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

Route::resource('contacts', 'ContactController');

//Route::get('contacts', 'ContactController@index');
//Route::get('contacts/{id}', 'ContactController@show');
//Route::delete('contacts/{id}', 'ContactController@destroy');
//Route::post('contacts', 'ContactController@store');
//Route::put('contacts/{id}', 'ContactController@update');