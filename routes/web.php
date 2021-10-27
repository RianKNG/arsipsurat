<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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
    return view('home');
});

Route::get('/surat',[SuratController::class,'index']);
Route::post('/surat/tambahsurat',[SuratController::class,'create']);
Route::get('/surat/{id}/editsurat',[SuratController::class,'edit']);
Route::post('/surat/{id}/updatesurat',[SuratController::class,'update']);
Route::get('/surat/{id}/hapussurat',[SuratController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


