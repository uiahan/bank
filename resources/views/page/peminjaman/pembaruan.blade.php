@extends('layout.master')
@section('title', 'Pembaruan')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="fw-bold text-secondary">Pembaruan</h3>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <p class="text-muted text-end text-secondary">Peminjaman &gt; Dashboard &gt; Pembaruan</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Pembaruan</h5>
                <form action="/tambah-nasabah" method="POST" class="mt-2">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="nasabah" class="form-label">Sisa Hutang</label>
                            <input type="number" readonly class="form-control border-0" id="nasabah" name="nasabah" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-md-0 mt-2">
                            <label for="nominal" class="form-label">Sudah Bayar</label>
                            <input type="number" readonly class="form-control border-0" id="nominal" name="nominal" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="nominal" class="form-label">Pinjam Baru</label>
                            <input type="number" class="form-control border-0" id="nominal" name="nominal" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="nominal" class="form-label">Total Pinjaman</label>
                            <input type="number" readonly class="form-control border-0" id="nominal" name="nominal" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="lamaPinjam" class="form-label">Lama Pinjam Baru</label>
                            <select class="form-control border-0" id="lamaPinjam" name="lamaPinjam" style="background-color: #ededed" required>
                                <option value="" disabled selected>Pilih lama pinjaman</option>
                                <option value="1">1 Bulan</option>
                                <option value="2">2 Bulan</option>
                                <option value="3">3 Bulan</option>
                                <option value="4">4 Bulan</option>
                                <option value="5">5 Bulan</option>
                                <option value="6">6 Bulan</option>
                                <option value="7">7 Bulan</option>
                                <option value="8">8 Bulan</option>
                                <option value="9">9 Bulan</option>
                                <option value="10">10 Bulan</option>
                                <option value="11">11 Bulan</option>
                                <option value="12">12 Bulan</option>
                            </select>
                        </div>                        
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jasa" class="form-label">Jasa % Baru</label>
                            <div class="input-group">
                                <input type="number" class="form-control border-0" id="jasa" name="jasa" style="background-color: #ededed" required>
                                <span class="input-group-text border-0" style="background-color: #ededed">%</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="asuransi" class="form-label">Asuransi % Baru</label>
                            <div class="input-group">
                                <input type="number" class="form-control border-0" id="asuransi" name="asuransi" style="background-color: #ededed" required>
                                <span class="input-group-text border-0" style="background-color: #ededed">%</span>
                            </div>
                        </div>                        
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jumlah" class="form-label">Pokok Angsuran Baru</label>
                            <input type="text" readonly class="form-control border-0" id="jumlah" name="jumlah" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jumlah" class="form-label">Total Angsuran</label>
                            <input type="text" readonly class="form-control border-0" id="jumlah" name="jumlah" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jumlah" class="form-label">Uang Diterima</label>
                            <input type="text" readonly class="form-control border-0" id="jumlah" name="jumlah" style="background-color: #ededed" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    <a href="{{ route('peminjaman') }}" class="btn btn-primary mt-3">Kembali</a>
                </form>                
            </div>
        </div>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    @endsection

    <style>
        @media print {
            .sidebar {
                display: none;
                /* Sembunyikan sidebar saat mencetak */
            }

            .header {
                display: none;
                /* Sembunyikan navbar saat mencetak */
            }

            /* Jika Anda ingin menyembunyikan elemen lain saat mencetak, tambahkan di sini */
        }

        @media (max-width: 768px) {
            .count-card {
                width: 100% !important;
            }
        }

        @media (min-width: 992px) {
            .count-card {
                width: 30% !important;
            }
        }

        .img-news {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .content-shifted {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        .sidebar {
            width: 250px;
        }

        .btn-tambah-nasabah {
            -webkit-box-shadow: 0px 0px 5px 0px #5692F9;
            -moz-box-shadow: 0px 0px 5px 0px #5692F9;
            box-shadow: 0px 0px 5px 0px #5692F9;
        }
    </style>
