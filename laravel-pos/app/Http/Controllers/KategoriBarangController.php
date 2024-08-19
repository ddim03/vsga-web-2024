<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Kategori Barang",
            'list' => ["Home", "Kategori"]
        ];
        $activeMenu = "kategori";
        return view('kategori.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu
        ]);
    }
}
