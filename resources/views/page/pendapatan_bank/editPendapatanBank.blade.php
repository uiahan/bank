@extends('layout.master')
@section('title', 'Edit Pendapatan Bank')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="fw-bold text-secondary">Edit Pendapatan Bank</h3>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <p class="text-muted text-end text-secondary">Pendapatan Bank &gt; Dashboard &gt; Edit</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Pendapatan Bank</h5>
                <form action="{{ route('postEditPendapatanBank', $pendapatanBank->id) }}" method="POST" class="mt-2">
                    @csrf
                    <div class="row">
                        <!-- Nama Bank -->
                        <div class="col-md-6 col-12">
                            <label for="nama_bank" class="form-label">Nama Bank</label>
                            <input type="text" value="{{ $pendapatanBank->nama_bank }}" class="form-control border-0" id="nama_bank" name="nama_bank" placeholder="Masukkan nama bank" style="background-color: #ededed" required>
                        </div>
                
                        <!-- Jumlah -->
                        <div class="col-md-6 col-12 mt-md-0 mt-2">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" value="{{ $pendapatanBank->jumlah }}" class="form-control border-0" id="jumlah" name="jumlah" placeholder="Masukkan jumlah" style="background-color: #ededed" min="0" required>
                        </div>
                        
                
                        <!-- Tanggal -->
                        <div class="col-md-6 col-12 mt-2">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" value="{{ $pendapatanBank->tanggal }}" class="form-control border-0" id="tanggal" name="tanggal" style="background-color: #ededed" required>
                        </div>
                
                        <!-- Keterangan -->
                        <div class="col-md-6 col-12 mt-2">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input class="form-control border-0" id="keterangan" value="{{ $pendapatanBank->keterangan }}" name="keterangan" placeholder="Masukkan keterangan" style="background-color: #ededed"></input>
                        </div>
                    </div>
                
                    <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                    <a href="{{ route('pendapatanBank') }}" class="btn btn-primary mt-3">Kembali</a>
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
