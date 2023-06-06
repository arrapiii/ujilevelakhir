<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WalasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'CekLevel:Admin']], function (){
    // Route::get('/', function () {
    //     return view('dashboard.');
    // })->name('dashboard');
    Route::get('/satu', [DashboardController::class, 'satu'])->name('satu');

    // guru

    Route::get('/formguru', [GuruController::class, 'formguru'])->name('formguru');
    Route::post('/insertguru', [GuruController::class, 'insertguru'])->name('insertguru');
    Route::get('/tampilkanguru/{id}', [GuruController::class, 'tampilkanguru'])->name('tampilkanguru');
    Route::post('/updateguru/{id}', [GuruController::class, 'updateguru'])->name('updateguru');
    Route::get('/deleteguru/{id}', [GuruController::class, 'deleteguru'])->name('deleteguru');

    // Kelas
    Route::get('/kelas', [KelasController::class, 'kelas'])->name('kelas');
    Route::post('/insertkelas', [KelasController::class, 'insertkelas'])->name('insertkelas');
    Route::get('/inputkelas', [KelasController::class, 'inputkelas'])->name('inputkelas');
    Route::get('/tampilkankelas/{id}', [KelasController::class, 'tampilkankelas'])->name('tampilkankelas');
    Route::post('/updatekelas/{id}', [KelasController::class, 'updatekelas'])->name('updatekelas');
    Route::get('/deletekelas/{id}', [KelasController::class, 'deletekelas'])->name('deletekelas');

    // Walas
    Route::get('/walas', [WalasController::class, 'walas'])->name('walas');
    Route::get('/inputwalas', [WalasController::class, 'inputwalas'])->name('inputwalas');
    Route::post('/insertwalas', [WalasController::class, 'insertwalas'])->name('insertwalas');
    Route::get('/tampilkanwalas/{id}', [WalasController::class, 'tampilkanwalas'])->name('tampilkanwalas');
    Route::post('/updatewalas/{id}', [WalasController::class, 'updatewalas'])->name('updatewalas');
    Route::get('/deletewalas/{id}', [WalasController::class, 'deletewalas'])->name('deletewalas');

    // siswa
    Route::get('/siswaa', [SiswaController::class, 'siswa'])->name('siswa');
    Route::get('/inputsiswa', [SiswaController::class, 'inpsiswa'])->name('inpsiswa');
    Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->name('insertsiswa');
    Route::get('/tampilkansiswa/{id}', [SiswaController::class, 'tampilkansiswa'])->name('tampilkansiswa');
    Route::get('/detailsiswa/{id}', [SiswaController::class, 'detailsiswa'])->name('detailsiswa');
    Route::post('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->name('updatesiswa');
    Route::get('/deletesiswa/{id}', [SiswaController::class, 'deletesiswa'])->name('deletesiswa');

});

Route::group(['middleware' => ['auth', 'CekLevel:Admin,Guru']], function(){
    Route::get('/dua', [DashboardController::class, 'dua'])->name('dua');
    Route::get('/admin', [GuruController::class, 'guru'])->name('guru');
});
