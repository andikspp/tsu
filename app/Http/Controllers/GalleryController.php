<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    public function index()
    {
        $images = Storage::files('public/gallery');

        $images = array_slice($images, 0, 28);

        return view('pages.gallery', compact('images'));
    }
}
