<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\PembayaranController;

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

Route::get('/burung', function () {
    return view('burung');
});
Route::get('/',[CabangController::class,'lier']);
Route::get('/bar1',[ChartController::class,'chart']);
Route::get('/bar',[CabangController::class,'bar']);
Route::get('/chart',[ChartController::class,'garis']);
Route::get('/cabang',[CabangController::class,'index']);
Route::get('/cabang1',[CabangController::class,'persilain']);
Route::get('/lier/json',[CabangController::class,'json']);
Route::get('/pem',[PembayaranController::class,'index']);
