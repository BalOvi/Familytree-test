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

Route::get('family/{id}', 'FamilyController@index');
Route::post('family_post', 'FamilyController@store');
Route::put('family_update', 'FamilyController@update');
Route::delete('family_delete', 'FamilyController@delete');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
