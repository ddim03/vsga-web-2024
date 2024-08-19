<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Transaksi Penjualan",
            'list' => ["Home", "Penjualan"]
        ];
        $activeMenu = "penjualan";
        return view('penjualan.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu
        ]);
    }
}
