<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    //
    public function peminjaman() {
        return view('page.peminjaman.peminjaman');
    }

    public function buatPeminjaman() {
        return view('page.peminjaman.buatPeminjaman');
    }

    public function detailPeminjaman() {
        return view('page.peminjaman.detailPeminjaman');
    }

    public function pelunasan() {
        return view('page.peminjaman.pelunasan');
    }

    public function pembaruan() {
        return view('page.peminjaman.pembaruan');
    }

    public function histori() {
        return view('page.peminjaman.histori');
    }

    public function laporan() {
        return view('page.peminjaman.laporan');
    }
}
