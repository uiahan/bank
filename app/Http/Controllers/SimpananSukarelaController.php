<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananSukarelaController extends Controller
{
    //
    public function simpananSukarela() {
        return view('page.simpanan_sukarela.simpananSukarela');
    }

    public function tambahSimpananSukarela() {
        return view('page.simpanan_sukarela.tambahSimpananSukarela');
    }

    public function detailSimpananSukarela() {
        return view('page.simpanan_sukarela.detailSimpananSukarela');
    }
}
