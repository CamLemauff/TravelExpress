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

Route::post('client', 'ClientController@store');
Route::get('client', 'ClientController@show');
Route::get('client/{id}', 'ClientController@getClientId');
Route::post('login', 'ClientController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
  Route::get('user', 'ClientController@user');
});
Route::group(['middleware' => 'jwt.refresh'], function(){
  Route::get('refresh', 'ClientController@refresh');
});
// Route::post('login', 'ClientController@login');
// Route::middleware('jwt.auth')->get('users', function(Request $request) {
//     return auth()->user();
// });
// Route::post('login', 'ClientController@login');
// Route::get('user', 'ClientController@user');
// Route::post('login', 'ClientController@login');
// Route::group(['middleware' => 'jwt.auth'], function()
// {
//     Route::get('auth/user', 'ClientController@user');
// });

// Route::group(['middleware' => 'jwt.refresh'], function() {
//     Route::get('auth/refresh', 'ClientController@refresh');
// });

Route::post('travel', 'TravelController@store');
Route::get('travel', 'TravelController@show');
