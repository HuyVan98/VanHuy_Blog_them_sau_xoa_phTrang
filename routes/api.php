<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vanhuyshop\LoginController;
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
Route::resource('users', '\App\Http\Controllers\UserController', ['only' => ['index', 'show','store','update','destroy']]);

Route::get('item', [ItemController::class,'index']);
Route::prefix('/item')->group(function () {
    Route::post('/store', [ItemController::class,'store']);
    Route::put('/{id}', [ItemController::class,'update']);
    Route::delete('/{id}', [ItemController::class,'destroy']);
});


// Demo vanhuyshop
Route::get('/login', [LoginController::class,'login']);
