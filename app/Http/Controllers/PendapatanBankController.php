<?php

namespace App\Http\Controllers;

use App\Models\PendapatanBank;
use Illuminate\Http\Request;

class PendapatanBankController extends Controller
{
    //
    public function pendapatanBank()
    {
        $pendapatanBankCount = PendapatanBank::count();
        $pendapatanBank = PendapatanBank::all();
        $totalJumlah = $pendapatanBank->sum('jumlah');
        return view('page.pendapatan_bank.pendapatanBank', compact('pendapatanBank', 'totalJumlah', 'pendapatanBankCount'));
    }

    public function tambahPendapatanBank()
    {
        return view('page.pendapatan_bank.tambahPendapatanBank');
    }

    public function editPendapatanBank($id)
    {
        $pendapatanBank = PendapatanBank::findOrFail($id);
        return view('page.pendapatan_bank.editPendapatanBank', compact('pendapatanBank'));
    }

    public function postTambahPendapatanBank(Request $request)
    {
        $request->validate([
            'nama_bank' => 'required|string|max:255',
            'jumlah' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $bank = new PendapatanBank();
        $bank->nama_bank = $request->nama_bank;
        $bank->jumlah = $request->jumlah;
        $bank->tanggal = $request->tanggal;
        $bank->keterangan = $request->keterangan;
        $bank->save();

        return redirect()->route('pendapatanBank')->with('notif', 'Data berhasil ditambahkan');
    }

    public function postEditPendapatanBank(Request $request, $id)
    {
        $request->validate([
            'nama_bank' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $bank = PendapatanBank::findOrFail($id);
        $bank->nama_bank = $request->nama_bank;
        $bank->jumlah = $request->jumlah;
        $bank->tanggal = $request->tanggal;
        $bank->keterangan = $request->keterangan;
        $bank->save();

        return redirect()->route('pendapatanBank')->with('notif', 'Data berhasil diperbarui');
    }

    public function postHapusPendapatanBank($id)
    {
        $bank = PendapatanBank::findOrFail($id);
        $bank->delete();
        return redirect()->route('pendapatanBank')->with('notif', 'Data berhasil dihapus');
    }
}
