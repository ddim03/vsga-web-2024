<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelUserController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen Level User",
            'list' => ["Home", "Level"]
        ];
        $activeMenu = "level";
        return view('level.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu
        ]);
    }
}
