<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('pages.konsultasi.index');
    }

    public function lingkungan()
    {
        return view('pages.konsultasi.lingkungan');
    }

    public function k3()
    {
        return view('pages.konsultasi.k3');
    }
}
