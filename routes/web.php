<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CabangController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[ChartController::class,'chart']);
Route::get('/chart',[ChartController::class,'garis']);
Route::get('/cabang',[CabangController::class,'index']);
Route::get('/cabang1',[CabangController::class,'persilain']);
