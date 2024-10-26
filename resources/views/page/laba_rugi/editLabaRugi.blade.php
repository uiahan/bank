@extends('layout.master')
@section('title', 'Edit Laba Rugi')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="fw-bold text-secondary">Edit Laba Rugi</h3>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <p class="text-muted text-end text-secondary">Laba Rugi &gt; Dashboard &gt; Edit</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Laba Rugi</h5>
                <form action="{{ route('postEditLabaRugi', $labaRugi->id) }}" method="POST" class="mt-2">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="rincian_biaya" class="form-label">Rincian Biaya</label>
                            <input type="text" class="form-control border-0" id="rincian_biaya" name="rincian_biaya" value="{{ old('rincian_biaya', $labaRugi->rincian_biaya ?? '') }}" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-md-0 mt-2">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control border-0" id="tanggal" name="tanggal" value="{{ old('tanggal', $labaRugi->tanggal ?? '') }}" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jumlah_rincian" class="form-label">Jumlah Rincian</label>
                            <input type="number" class="form-control border-0" id="jumlah_rincian" name="jumlah_rincian" value="{{ old('jumlah_rincian', $labaRugi->jumlah_rincian ?? '') }}" style="background-color: #ededed" required min="0">
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jumlah_persen" class="form-label">Jumlah/%</label>
                            <input type="text" class="form-control border-0" id="jumlah_persen" name="jumlah_persen" value="{{ old('jumlah_persen', $labaRugi->jumlah_persen ?? '') }}" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="jumlah_akhir" class="form-label">Jumlah Akhir</label>
                            <input type="number" class="form-control border-0" id="jumlah_akhir" name="jumlah_akhir" value="{{ old('jumlah_akhir', $labaRugi->jumlah_akhir ?? '') }}" style="background-color: #ededed" required min="0">
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input class="form-control border-0" id="keterangan" name="keterangan" style="background-color: #ededed" value="{{ old('keterangan', $labaRugi->keterangan ?? '') }}"></input>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                    <a href="{{ route('labaRugi') }}" class="btn btn-primary mt-3">Kembali</a>
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
