@extends('layout.master')
@section('title', 'Pelunasan')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="fw-bold text-secondary">Pelunasan</h3>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <p class="text-muted text-end text-secondary">Peminjaman &gt; Dashboard &gt; Pelunasan</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Pelunasan</h5>
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
                            <label for="nominal" class="form-label">Jumlah Pelunasan</label>
                            <input type="number" class="form-control border-0" id="nominal" name="nominal" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="nominal" class="form-label">Sisa</label>
                            <input type="number" readonly class="form-control border-0" id="nominal" name="nominal" style="background-color: #ededed" required>
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
