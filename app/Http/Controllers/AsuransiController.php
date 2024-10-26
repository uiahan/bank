<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsuransiController extends Controller
{
    //
    public function asuransi() {
        return view('page.asuransi.asuransi');
    }

    public function tambahAsuransi() {
        return view('page.asuransi.tambahAsuransi');
    }
}
