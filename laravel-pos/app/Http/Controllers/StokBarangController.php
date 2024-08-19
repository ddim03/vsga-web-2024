<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Stok Barang",
            'list' => ["Home", "Stok"]
        ];
        $activeMenu = "stok";
        return view('stok.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu
        ]);
    }
}
