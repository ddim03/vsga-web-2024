<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LevelUserController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Level User",
            'list' => ["Home", "Level"]
        ];
        $page = (object) [
            'title' => "Daftar Level",
        ];
        $activeMenu = "level";
        return view('level.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu,
            'page' => $page
        ]);
    }

    public function list()
    {
        $level = LevelModel::select('level_id', 'level_kode', 'level_nama');
        return DataTables::of($level)
            ->addIndexColumn()
            ->addColumn('aksi', function ($level) { // menambahkan kolom aksi
                $btn = '<a href="' . url('/level/' . $level->level_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/level/' . $level->level_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/level/' . $level->level_id) . '">' . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
