<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('pages.beranda');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function layanan()
    {
        return view('pages.layanan');
    }

    public function produk()
    {
        return view('pages.produk');
    }

    public function produkDetail()
    {
        return view('pages.produk-detail');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
