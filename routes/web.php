<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staticController;

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

Route::controller(staticController::class)->group(function () {
    Route::get('/', 'index')->name('static.index');
    Route::get('/tentang', 'profil')->name('static.profil');
    Route::get('/data-mahasiswa', 'dataMahasiswa')->name('static.dataMahasiswa');
    Route::get('/struktur-pimpinan', 'strukturPimpinan')->name('static.strukturPimpinan');
    // Route::get('/kuesioner-mahasiswa', 'kuesionerMahasiswa')->name('static.kuesionerMahasiswa');
    // Route::get('/kuesioner-alumni', 'kuesionerAlumni')->name('static.kuesionerAlumni');
    Route::get('/kuesioner-tatakelola', 'kuesionerTatakelola')->name('static.kuesionerTatakelola');
    Route::get('/kuesioner-vmts', 'kuesionerVMTS')->name('static.kuesionerVMTS');
    Route::get('/kuesioner-sarana-prasarana', 'kuesionerSaranaPrasarana')->name('static.kuesionerSaranaPrasarana');
    Route::get('/kuesioner-mitra', 'kuesionerMitra')->name('static.kuesionerMitra');
    Route::get('/kuesioner-kepuasan-mahasiswa', 'kuesionerKMahasiswa')->name('static.kuesionerKMahasiswa');

    Route::get('/kuesioner-vmts/hasil', 'hasilkuesionerVMTS')->name('static.hasilkuesionerVMTS');
    Route::get('/kuesioner-tatakelola/hasil', 'hasilkuesionerTatakelola')->name('static.hasilkuesionerTatakelola');
    Route::get('/kuesioner-sarana-prasarana/hasil', 'hasilkuesionerSaranaPrasarana')->name('static.hasilkuesionerSaranaPrasarana');
    Route::get('/kuesioner-mitra/hasil', 'hasilkuesionerMitra')->name('static.hasilkuesionerMitra');
    Route::get('/kuesioner-kepuasan-mahasiswa/hasil', 'hasilkuesionerKMahasiswa')->name('static.hasilkuesionerKMahasiswa');




    Route::get('/data-dosen', 'dataDosen')->name('static.dataDosen');

    // Fasilitas
    Route::get('/fasilitas/laboratorium', 'laboratorium')->name('static.laboratorium');
    Route::get('/fasilitas/ruangdosen', 'ruangdosen')->name('static.ruangdosen');
    Route::get('/fasilitas/ruang', 'ruang')->name('static.ruang');
    Route::get('/fasilitas/general', 'general')->name('static.general');
    Route::get('/fasilitas/perpustakaan', 'perpustakaan')->name('static.perpustakaan');

    // Page
    Route::get('/berita/{param}', 'pages')->name('static.pages');

    // Berita & Info
    Route::get('/berita', 'berita')->name('static.berita');

    //Kurikulum
    Route::get('/kurikulum', 'kurikulum')->name('static.kurikulum');
});
