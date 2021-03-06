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
Route::prefix('v1')->name('api.v1')->group(function (){
    Route::get('version',function (){
        return "This is version v1";
    })->name('version');

    // 用户注册
    Route::post('users', 'UsersController@store')
        ->name('users.store');

});

