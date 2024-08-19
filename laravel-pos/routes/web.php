<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\LevelUserController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokBarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/level', [LevelUserController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/kategori', [KategoriBarangController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/stok', [StokBarangController::class, 'index']);
Route::get('/penjualan', [PenjualanController::class, 'index']);
