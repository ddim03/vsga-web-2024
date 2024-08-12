<?php

use App\Http\Controllers\CRUDController;
use App\Http\Controllers\PengajarController;
use Illuminate\Support\Facades\Route;

Route::prefix('polinema')->group(function () {
    Route::get('dosen', function () {
        echo "<h1>Daftar dosen</h1>";
    });
    Route::get('tendik', function () {
        echo "<h1>Daftar tendik</h1>";
    });
    Route::get('jurusan', function () {
        echo "<h1>Daftar jurusan</h1>";
    });
});


Route::get('pesan-disini', function () {
    return '<h1>Pesan Disini</h1>';
});
Route::redirect('contact-us', 'pesan-disini');


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('tampil', function () {
    return view('tampil');
})->name('tampil');



Route::get('user/{name?}', function ($name = null) {
    return 'Nama Saya ' . $name;
});

Route::get('user/{name}', function ($name) {
    return 'Nama Saya ' . $name;
});

Route::get('hello', function () {
    return 'Hello World';
});

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    return "Maaf, Halaman ini tidak ditemukan";
});

Route::get('daftar-dosen', [PengajarController::class, 'daftarPengajar']);
Route::get('tabel-pengajar', [PengajarController::class, 'tabelPengajar']);
Route::get('blog-pengajar', [PengajarController::class, 'blogPengajar']);

Route::resource('crud', CRUDController::class);

Route::get('selamat', function () {
    return view('hello', ['name' => 'Dimas Gilang Dwi Aji']);
});
