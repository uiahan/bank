<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapKas extends Controller
{
    //
    public function rekapKas() {
        return view('page.rekap_kas.rekapKas');
    }

    public function excel() {
        return view('page.rekap_kas.excel');
    }
}
