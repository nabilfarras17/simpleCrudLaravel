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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('userReview', 'UserReviewController@index');
Route::get('userReview/{userReview}', 'UserReviewController@show');
Route::post('userReview', 'UserReviewController@store');
Route::put('userReview/{userReview}','UserReviewController@update');
Route::delete('userReview/{userReview}', 'UserReviewController@delete');
