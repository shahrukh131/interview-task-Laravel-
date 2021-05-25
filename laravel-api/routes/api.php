<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::Post('register',[UserController::class,'register'])->name('user-register');
Route::Post('login',[UserController::class,'login'])->name('user-login');
Route::Post('profile',[UserController::class,'getAuthenticatedUser'])->name('user-getAuthenticatedUser');
