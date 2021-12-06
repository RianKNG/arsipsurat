<?php

use App\Models\SuratModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LayananController;


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


Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    Route::get('/grafik', function () {
        $total=SuratModel::count();
        $total1=SuratModel::where('label','ganti')->count();
        $total2=SuratModel::where('label','sambung')->count();
        $total3=SuratModel::where('label','tutup')->count();
        $total4=SuratModel::where('label','baru')->count();
        $total5=SuratModel::where('label','baru')->count();
        $total6=SuratModel::where('status_surat','masuk')->count();
        $total7=SuratModel::where('status_surat','keluar')->count();
    
        return view('grafik',compact('total','total1','total2','total3','total4','total5','total6','total7'));
        
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
    Route::get('/surat/cetak',[SuratController::class,'cetak']);
    Route::get('/surat/cetakpertanggal/{tglawal}/{tglakhir}',[SuratController::class,'cetakpertanggal'])->name('cetakpertanggal');
   
    
    });

    




