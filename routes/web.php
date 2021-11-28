<?php

use App\Models\SuratModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\DashboardController;

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
Route::get('/dash', function () {
    $total=SuratModel::where('pengirim','T')->count();
    return view('welcome',compact('total'));
});

Route::get('/surat',[SuratController::class,'index']);
Route::post('/surat/tambahsurat',[SuratController::class,'create']);
Route::get('/surat/{id}/editsurat',[SuratController::class,'edit']);
Route::post('/surat/{id}/updatesurat',[SuratController::class,'update']);
Route::get('/surat/{id}/hapussurat',[SuratController::class,'delete']);
Route::get('/surat/{id}/profile',[SuratController::class,'profile']);
Route::get('/exportpdf',[SuratController::class,'exportpdf']);
Route::get('/ba',[BaController::class,'index']);
Route::get('/ba/{id}/hapusba',[BaController::class,'delete']);
Route::post('/surat',[SuratController::class,'searchBydate']);
Route::get('/layanan',[LayananController::class,'index']);
Route::post('/Layanan',[SuratController::class,'searchBydate']);
Route::post('/ba/tambahba',[BaController::class,'create']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


