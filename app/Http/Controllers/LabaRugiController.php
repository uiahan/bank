<?php

namespace App\Http\Controllers;

use App\Models\LabaRugi;
use Illuminate\Http\Request;

class LabaRugiController extends Controller
{
    //
    public function labaRugi()
    {
        $labaRugi = LabaRugi::all();
        $labaRugiCount = LabaRugi::count();
        $totalJumlah = $labaRugi->sum('jumlah_rincian');
        return view('page.laba_rugi.labaRugi', compact('labaRugi', 'totalJumlah', 'labaRugiCount'));
    }

    public function tambahLabaRugi()
    {
        return view('page.laba_rugi.tambahLabaRugi');
    }

    public function editLabaRugi($id)
    {
        $labaRugi = LabaRugi::findOrFail($id);
        return view('page.laba_rugi.editLabaRugi', compact('labaRugi'));
    }

    public function postTambahLabaRugi(Request $request)
    {
        // Validasi input
        $request->validate([
            'rincian_biaya' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_rincian' => 'required|numeric', // Menggunakan numeric
            'jumlah_persen' => 'required|string|max:255',
            'jumlah_akhir' => 'required|numeric', // Menggunakan numeric
            'keterangan' => 'nullable|string',
        ]);

        // Membuat instance baru dari model
        $biaya = new LabaRugi();
        $biaya->rincian_biaya = $request->rincian_biaya;
        $biaya->tanggal = $request->tanggal;
        $biaya->jumlah_rincian = $request->jumlah_rincian;
        $biaya->jumlah_persen = $request->jumlah_persen;
        $biaya->jumlah_akhir = $request->jumlah_akhir;
        $biaya->keterangan = $request->keterangan;
        $biaya->save();

        // Redirect kembali ke halaman dengan notifikasi
        return redirect()->route('labaRugi')->with('notif', 'Data berhasil ditambahkan');
    }

    public function postEditLabaRugi(Request $request, $id) {
        $request->validate([
            'rincian_biaya' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_rincian' => 'required|numeric', // Menggunakan numeric
            'jumlah_persen' => 'required|string|max:255',
            'jumlah_akhir' => 'required|numeric', // Menggunakan numeric
            'keterangan' => 'nullable|string',
        ]);
    
        // Mengupdate data yang ada
        $biaya = LabaRugi::findOrFail($id);
        $biaya->rincian_biaya = $request->rincian_biaya;
        $biaya->tanggal = $request->tanggal;
        $biaya->jumlah_rincian = $request->jumlah_rincian;
        $biaya->jumlah_persen = $request->jumlah_persen;
        $biaya->jumlah_akhir = $request->jumlah_akhir;
        $biaya->keterangan = $request->keterangan;
        $biaya->save();
    
        // Redirect kembali ke halaman dengan notifikasi
        return redirect()->route('labaRugi')->with('notif', 'Data berhasil diperbarui');
    }

    public function postHapusLabaRugi($id) {
        $biaya = LabaRugi::findOrFail($id); // Cari data berdasarkan ID
        $biaya->delete(); // Hapus data
    
        return redirect()->route('labaRugi')->with('notif', 'Data berhasil dihapus');
    }
}
