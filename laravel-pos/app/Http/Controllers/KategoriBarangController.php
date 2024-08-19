<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Kategori Barang",
            'list' => ["Home", "Level"]
        ];
        $page = (object) [
            'title' => "Daftar Kategori",
        ];
        $activeMenu = "kategori";
        return view('kategori.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu,
            'page' => $page
        ]);
    }

    public function list()
    {
        $kategori = KategoriBarang::select('kategori_id', 'kategori_kode', 'kategori_nama');
        return DataTables::of($kategori)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kategori) { // menambahkan kolom aksi
                $btn = '<a href="' . url('/kategori/' . $kategori->kategori_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/kategori/' . $kategori->kategori_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/kategori/' . $kategori->kategori_id) . '">' . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
