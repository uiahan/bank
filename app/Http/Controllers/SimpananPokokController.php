<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananPokokController extends Controller
{
    //
    public function simpananPokok() {
        return view('page.simpanan_pokok.simpananPokok');
    }

    public function buatSimpananPokok() {
        return view('page.simpanan_pokok.buatSimpananPokok');
    }
    
    public function bayarSimpananPokok() {
        return view('page.simpanan_pokok.bayarSimpananPokok');
    }

    public function bayarAllSimpananPokok() {
        return view('page.simpanan_pokok.bayarAllSimpananPokok');
    }

    public function detailSimpananPokok() {
        return view('page.simpanan_pokok.detailSimpananPokok');
    }
}
