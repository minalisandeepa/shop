<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\printController;
use App\Http\Controllers\itemController;
use App\Http\Controllers\gradeController;
use App\Http\Controllers\saleController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//item table button

Route::get('/items', [itemController::class, 'index']);
Route::get('/newItem', [itemController::class, 'newItem']);
Route::post('/newItem', [itemController::class, 'saveItem']);
Route::post('/editItem', [itemController::class, 'editItem']);
Route::post('/updateItem', [itemController::class, 'updateItem']);
Route::post('/deleteItem', [itemController::class, 'deleteItem']);
Route::post('/viewItem', [itemController::class, 'viewItem']);
Route::post('/search',[itemController::class,'search']);




// grades table button

Route::get('/grades', [gradeController::class, 'index']);
Route::get('/newGrade', [gradeController::class, 'newGrade']);
Route::post('/newGrade', [gradeController::class, 'saveGrade']);
Route::post('/editGrade', [gradeController::class, 'editGrade']);
Route::post('/updateGrade', [gradeController::class, 'updateGrade']);
Route::post('/deleteGrade', [gradeController::class, 'deleteGrade']);
Route::post('/viewGrade', [gradeController::class, 'viewGrade']);
Route::post('/search',[gradeController::class,'search']);





// sales table button

Route::get('/sales', [saleController::class, 'index']);
Route::get('/newSale', [saleController::class, 'newSale']);
Route::post('/newSale', [saleController::class, 'saveSale']);
Route::post('/editSale', [saleController::class, 'editSale']);
Route::post('/updateSale', [saleController::class, 'updateSale']);
Route::post('/deleteSale', [saleController::class, 'deleteSale']);
Route::post('/viewSale', [saleController::class, 'viewSale']);
Route::post('/search',[saleController::class,'search']);




 