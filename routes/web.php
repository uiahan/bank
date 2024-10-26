<?php

use App\Http\Controllers\AsuransiController;
use App\Http\Controllers\LabaRugiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\NeracaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PendapatanBankController;
use App\Http\Controllers\RekapKas;
use App\Http\Controllers\SimpananPokokController;
use App\Http\Controllers\SimpananSukarelaController;
use App\Http\Controllers\SimpananWajibController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//login route
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');
Route::get('/postLogout', [LoginController::class, 'postLogout'])->name('postLogout');

Route::middleware('auth')->group(function () {
    //nasabah route
    Route::get('/nasabah', [NasabahController::class, 'nasabah'])->name('nasabah');
    Route::get('/detailNasabah', [NasabahController::class, 'detailNasabah'])->name('detailNasabah');
    Route::get('/tambahNasabah', [NasabahController::class, 'tambahNasabah'])->name('tambahNasabah');

    //simpanan wajib route
    Route::get('/simpananWajib', [SimpananWajibController::class, 'simpananWajib'])->name('simpananWajib');
    Route::get('/tambahSimpananWajib', [SimpananWajibController::class, 'tambahSimpananWajib'])->name('tambahSimpananWajib');
    Route::get('/buatSimpananWajib', [SimpananWajibController::class, 'buatSimpananWajib'])->name('buatSimpananWajib');

    //simpanan pokok route
    Route::get('/simpananPokok', [SimpananPokokController::class, 'simpananPokok'])->name('simpananPokok');
    Route::get('/buatSimpananPokok', [SimpananPokokController::class, 'buatSimpananPokok'])->name('buatSimpananPokok');
    Route::get('/bayarSimpananPokok', [SimpananPokokController::class, 'bayarSimpananPokok'])->name('bayarSimpananPokok');
    Route::get('/bayarAllSimpananPokok', [SimpananPokokController::class, 'bayarAllSimpananPokok'])->name('bayarAllSimpananPokok');
    Route::get('/detailSimpananPokok', [SimpananPokokController::class, 'detailSimpananPokok'])->name('detailSimpananPokok');

    //simpanan sukarela route
    Route::get('/simpananSukarela', [SimpananSukarelaController::class, 'simpananSukarela'])->name('simpananSukarela');
    Route::get('/tambahSimpananSukarela', [SimpananSukarelaController::class, 'tambahSimpananSukarela'])->name('tambahSimpananSukarela');
    Route::get('/detailSimpananSukarela', [SimpananSukarelaController::class, 'detailSimpananSukarela'])->name('detailSimpananSukarela');

    //peminjaman route
    Route::get('/peminjaman', [PeminjamanController::class, 'peminjaman'])->name('peminjaman');
    Route::get('/buatPeminjaman', [PeminjamanController::class, 'buatPeminjaman'])->name('buatPeminjaman');
    Route::get('/detailPeminjaman', [PeminjamanController::class, 'detailPeminjaman'])->name('detailPeminjaman');
    Route::get('/pelunasan', [PeminjamanController::class, 'pelunasan'])->name('pelunasan');
    Route::get('/pembaruan', [PeminjamanController::class, 'pembaruan'])->name('pembaruan');
    Route::get('/histori', [PeminjamanController::class, 'histori'])->name('histori');
    Route::get('/laporan', [PeminjamanController::class, 'laporan'])->name('laporan');

    //asuransi route
    Route::get('/asuransi', [AsuransiController::class, 'asuransi'])->name('asuransi');
    Route::get('/tambahAsuransi', [AsuransiController::class, 'tambahAsuransi'])->name('tambahAsuransi');

    //neraca route
    Route::get('/neraca', [NeracaController::class, 'neraca'])->name('neraca');

    //pendapatan bank route
    Route::get('/pendapatanBank', [PendapatanBankController::class, 'pendapatanBank'])->name('pendapatanBank');
    Route::get('/tambahPendapatanBank', [PendapatanBankController::class, 'tambahPendapatanBank'])->name('tambahPendapatanBank');
    Route::get('/editPendapatanBank/{id}', [PendapatanBankController::class, 'editPendapatanBank'])->name('editPendapatanBank');
    Route::get('/postHapusPendapatanBank/{id}', [PendapatanBankController::class, 'postHapusPendapatanBank'])->name('postHapusPendapatanBank');
    Route::post('/postTambahPendapatanBank', [PendapatanBankController::class, 'postTambahPendapatanBank'])->name('postTambahPendapatanBank');
    Route::post('/postEditPendapatanBank/{id}', [PendapatanBankController::class, 'postEditPendapatanBank'])->name('postEditPendapatanBank');

    //pendapatan bank route
    Route::get('/labaRugi', [LabaRugiController::class, 'labaRugi'])->name('labaRugi');
    Route::get('/tambahLabaRugi', [LabaRugiController::class, 'tambahLabaRugi'])->name('tambahLabaRugi');
    Route::get('/editLabaRugi/{id}', [LabaRugiController::class, 'editLabaRugi'])->name('editLabaRugi');
    Route::post('/postTambahLabaRugi', [LabaRugiController::class, 'postTambahLabaRugi'])->name('postTambahLabaRugi');
    Route::post('/postEditLabaRugi/{id}', [LabaRugiController::class, 'postEditLabaRugi'])->name('postEditLabaRugi');
    Route::get('/postHapusLabaRugi/{id}', [LabaRugiController::class, 'postHapusLabaRugi'])->name('postHapusLabaRugi');

    //rekap kas route
    Route::get('/rekapKas', [RekapKas::class, 'rekapKas'])->name('rekapKas');
    Route::get('/excel', [RekapKas::class, 'excel'])->name('excel');
});
