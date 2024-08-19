<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $breadcrump = (object) [
            'title' => "Manajemen User",
            'list' => ["Home", "User"]
        ];
        $activeMenu = "user";
        return view('user.index', [
            'breadcrump' => $breadcrump,
            'activeMenu' => $activeMenu
        ]);
    }
}
