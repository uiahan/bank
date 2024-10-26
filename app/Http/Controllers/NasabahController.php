<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NasabahController extends Controller
{
    //
    public function nasabah() {
        return view('page.nasabah.nasabah');
    }
    public function detailNasabah() {
        return view('page.nasabah.detailNasabah');
    }

    public function tambahNasabah() {
        return view('page.nasabah.tambahNasabah');
    }
}
