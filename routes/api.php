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

Route::group(['middleware' => ['jwt.verify']], function() {
    
    Route::resource('/promotion', 'PromotionController')->only(['index','store', 'edit', 'update','destroy']);
    Route::resource('/student', 'StudentController')->only(['index','store', 'show','edit', 'update','destroy']);
    Route::resource('/modul', 'ModulController')->only(['index','store', 'show','edit', 'update','destroy']);
  
});




Route::post('login', 'UserController@authenticate');