<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LisensiController extends Controller
{
    public function index()
    {
        return view('pages.lisensi.index');
    }
}
