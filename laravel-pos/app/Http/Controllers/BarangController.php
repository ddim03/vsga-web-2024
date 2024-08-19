<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Barang",
            'list' => ["Home", "Barang"]
        ];
        $activeMenu = "barang";
        return view('barang.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu
        ]);
    }
}
