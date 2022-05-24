<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
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

Route::get('register',[DataController::class,'register']);
Route::get('users',[DataController::class,'users']);
Route::get('user/{id}',[DataController::class,'user']);

Route::get('gift',[DataController::class,'gift']);

Route::get('grades',[DataController::class,'grades']);

Route::get('getGrades',[DataController::class,'getGrades']);

Route::get('get',[DataController::class,'index']);

Route::get('sales',[DataController::class,'sales']);

Route::get('getSales',[DataController::class,'getSales']);