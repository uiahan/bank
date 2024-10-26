<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananWajibController extends Controller
{
    //
    public function simpananWajib() {
        return view('page.simpanan_wajib.simpananWajib');
    }

    public function tambahSimpananWajib() {
        return view('page.simpanan_wajib.tambahSimpananWajib');
    }

    public function buatSimpananWajib() {
        return view('page.simpanan_wajib.buatSimpananWajib');
    }
}
