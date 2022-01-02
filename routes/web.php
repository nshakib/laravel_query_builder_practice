<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2022-01-01 02:42:05
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2022-01-01 18:36:24
 */

use App\Http\Controllers\joinController;
use App\Http\Controllers\mergeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\selectController;
use App\Http\Controllers\RetriveController;
use App\Http\Controllers\agregateController;

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

// Route::get('/',[RetriveController::class,'selectAllRows']);
// Route::get('/',[RetriveController::class,'oneRow']);
// Route::get('/',[RetriveController::class,'findRows']);
// Route::get('/',[RetriveController::class,'selectOneColumn']);
// Route::get('/',[RetriveController::class,'selectMultipleColumn']);
// Route::get('/',[RetriveController::class,'specificData']);


//agreegate
//Route::get('/',[agregateController::class, 'countRow']);
// Route::get('/',[agregateController::class, 'maxRow']);
// Route::get('/',[agregateController::class, 'minRow']);
// Route::get('/',[agregateController::class, 'avgRow']);


//select

// Route::get('/',[selectController::class,'uniqueSelect']);
// Route::get('/',[selectController::class,'singleColumnSelect']);
//Route::get('/',[selectController::class,'multiColumnSelect']);

//merge
//Route::get('/',[mergeController::class,'mergeData']);

//join
Route::get('/',[joinController::class,'leftJoinData']);
