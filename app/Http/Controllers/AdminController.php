<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('halaman-utama');
    }
    public function menuAdmin()
    {
        return view('menu-admin');
    }

}
