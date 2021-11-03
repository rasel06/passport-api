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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route Group For Authenticated User
// =======================================================================

// Route::prefix('v1')->middleware(['auth:api'])->group(function () {
//     Route::get('users', 'App\Http\Controllers\Api\V1\UserController@users');

// });



Route::prefix('v1')->middleware(['api'])->group(function () {
    Route::get('users', 'App\Http\Controllers\Api\V1\UserController@users');

});


