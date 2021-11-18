<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome'); // main page
});

Route::get('/', function () {
    return 'Selamat Datang di Praktikum PABWE';
});

Route::get('test', function () {
    return 'Selamat Datang di Praktikum PABWE dengan alamat sub-domain test';
});

Route::get('test/{jenis}', function($jenis) {
    return 'Selamat Datang di ujian ' . $jenis . ' PABWE';
});

Route::get('mahasiswa', [MahasiswaController::class, 'getDataMahasiswa']);
// Route::get('kuliah/materi', [KuliahController::class, 'viewMateri']);
// Route::get('kuliah/perkuliahan', [KuliahController::class, 'viewKuliah']);


