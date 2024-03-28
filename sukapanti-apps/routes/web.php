<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsulanbelanjamodalController;
use App\Http\Controllers\UsulanfisikController;
use App\Http\Controllers\UsulaninovasiController;
use App\Http\Controllers\TbdatamonitoringController;
use App\Http\Controllers\TbdataperencanaanController;
use App\Http\Controllers\TbmateriController;
use App\Http\Controllers\TbmodulController;
use App\Http\Controllers\LoginController;

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
    // return view('welcome');
// });

Route::get('/login',function (){
    return view('login');
});

Route::get('/', function () {
    return view('portal');
});

//Login Dan Register
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// login dan register end


// tabel perencanaan
Route::get('/tbdataperencanaan', [TbdataperencanaanController::class, 'tbdataperencanaan'])->name('tbdataperencanaan');
Route::get('/formtbdataperencanaan', [TbdataperencanaanController::class, 'formtbdataperencanaan'])->name('formtbdataperencanaan');
Route::post('/inserttbdataperencanaan', [TbdataperencanaanController::class, 'inserttbdataperencanaan'])->name('inserttbdataperencanaan');
// route firut download
Route::get('/downloaddoc/{file}', [TbdataperencanaanController::class, 'downloaddoc']); 
Route::get('/deletetbdataperencanaan/{id}', [TbdataperencanaanController::class, 'deletetbdataperencanaan'])->name('deletetbdataperencanaan');
// tabel perencanaan end


// tabel monitoring
Route::get('/tbdatamonitoring', [TbdatamonitoringController::class, 'tbdatamonitoring'])->name('tbdatamonitoring');
Route::get('/formtbdatamonitoring', [TbdatamonitoringController::class, 'formtbdatamonitoring'])->name('formtbdatamonitoring');
Route::post('/inserttbdatamonitoring', [TbdatamonitoringController::class, 'inserttbdatamonitoring'])->name('inserttbdatamonitoring');
// route firut download
Route::get('/downloaddoc1/{file}', [TbdatamonitoringController::class, 'downloaddoc1']); 
Route::get('/deletetbdatamonitoring/{id}', [TbdatamonitoringController::class, 'deletetbdatamonitoring'])->name('deletetbdatamonitoring');
// tabel monitoring end


// tabel modul
Route::get('/tbmodul', [TbmodulController::class, 'tbmodul'])->name('tbmodul');
Route::get('/formtbmodul', [TbmodulController::class, 'formtbmodul'])->name('formtbmodul');
Route::post('/inserttbmodul', [TbmodulController::class, 'inserttbmodul'])->name('inserttbmodul');
// route fitur download
Route::get('/downloaddoc2/{file}', [TbmodulController::class, 'downloaddoc2']); 
Route::get('/deletetbmodul/{id}', [TbmodulController::class, 'deletetbmodul'])->name('deletetbmodul');
// tabel modul end


// tabel materi
Route::get('/tbmateri', [TbmateriController::class, 'tbmateri'])->name('tbmateri');
Route::get('/formtbmateri', [TbmateriController::class, 'formtbmateri'])->name('formtbmateri');
Route::post('/inserttbmateri', [TbmateriController::class, 'inserttbmateri'])->name('inserttbmateri');
// route fitur download
Route::get('/downloaddoc3/{file}', [TbmateriController::class, 'downloaddoc3']); 
Route::get('/deletetbmateri/{id}', [TbmateriController::class, 'deletetbmateri'])->name('deletetbmateri');
// tabel materi end


Route::middleware('auth.once')->group(function () {
    // usulan belanja modal
    Route::get('/usulanbelanjamodal', [UsulanbelanjamodalController::class, 'usulanbelanjamodal'])->name('usulanbelanjamodal')->middleware('auth');
    Route::get('/formusulanbelanjamodal', [UsulanbelanjamodalController::class, 'formusulanbelanjamodal'])->name('formusulanbelanjamodal')->middleware('auth');
    Route::post('/insertdatabelanjamodal', [UsulanbelanjamodalController::class, 'insertdatabelanjamodal'])->name('insertdatabelanjamodal')->middleware('auth');
    Route::get('/deletedatabelanjamodal/{id}', [UsulanbelanjamodalController::class, 'deletedatabelanjamodal'])->name('deletedatabelanjamodal')->middleware('auth');
    Route::get('/cetakbelanjamodal', [UsulanbelanjamodalController::class, 'cetakbelanjamodal'])->name('cetakbelanjamodal')->middleware('auth');

    // usulan belanja modal end


    // usulan fisik
    Route::get('/usulanfisik', [UsulanfisikController::class, 'usulanfisik'])->name('usulanfisik')->middleware('auth');
    Route::get('/formusulanfisik', [UsulanfisikController::class, 'formusulanfisik'])->name('formusulanfisik')->middleware('auth');
    Route::post('/insertdatafisik', [UsulanfisikController::class, 'insertdatafisik'])->name('insertdatafisik')->middleware('auth');
    // route firut download
    Route::get('/download/{file}', [UsulanfisikController::class, 'download'])->middleware('auth');
    Route::get('/deletedatafisik/{id}', [UsulanfisikController::class, 'deletedatafisik'])->name('deletedatafisik')->middleware('auth');
    Route::get('/cetakrehabfisik', [UsulanfisikController::class, 'cetakrehabfisik'])->name('cetakrehabfisik')->middleware('auth');
    // usulan fisik end


    // usulan inovasi
    Route::get('/usulaninovasi', [UsulaninovasiController::class, 'usulaninovasi'])->name('usulaninovasi')->middleware('auth');
    Route::get('/formusulaninovasi', [UsulaninovasiController::class, 'formusulaninovasi'])->name('formusulaninovasi')->middleware('auth');
    Route::post('/insertdatainovasi', [UsulaninovasiController::class, 'insertdatainovasi'])->name('insertdatainovasi')->middleware('auth');
    Route::get('/tampilkandata2/{id}', [UsulaninovasiController::class, 'tampilkandata2'])->name('tampilkandata2')->middleware('auth');
    Route::get('/downloaddoc4/proposal/{proposal}', [UsulaninovasiController::class, 'downloaddoc4']);
    Route::get('/downloaddoc4/rab/{rab}', [UsulaninovasiController::class, 'downloaddoc4']);
    Route::get('/downloaddoc4/catatankeuangan/{catatankeuangan}', [UsulaninovasiController::class, 'downloaddoc4']);
    Route::post('/updatedatainovasi/{id}', [UsulaninovasiController::class, 'updatedatainovasi'])->name('updatedatainovasi')->middleware('auth');
    Route::get('/deletedatainovasi/{id}', [UsulaninovasiController::class, 'deletedatainovasi'])->name('deletedatainovasi')->middleware('auth');
    Route::get('/cetakinovasi', [UsulaninovasiController::class, 'cetakinovasi'])->name('cetakinovasi')->middleware('auth');
    // usulan inovasi end
});


