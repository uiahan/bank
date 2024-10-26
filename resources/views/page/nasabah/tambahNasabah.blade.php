@extends('layout.master')
@section('title', 'Tambah Nasabah')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Tambah Nasabah</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Nasabah &gt; Dashboard &gt; Tambah</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Nasabah</h5>
                <form action="/tambah-nasabah" method="POST" class="mt-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control border-0" id="nama" name="nama" placeholder="Masukkan nama nasabah" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-md-0 mt-2">
                            <label for="tgl_join" class="form-label">Tanggal Join</label>
                            <input type="date" class="form-control border-0" id="tgl_join" name="tgl_join" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="no_hp" class="form-label">No HP</label>
                            <input type="tel" class="form-control border-0" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="no_rek" class="form-label">No Rek</label>
                            <input type="text" class="form-control border-0" id="no_rek" name="no_rek" placeholder="Masukkan nomor rekening" style="background-color: #ededed" required>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="anggota" class="form-label">Anggota</label>
                            <select class="form-control border-0" id="anggota" name="anggota" style="background-color: #ededed" required>
                                <option value="">Pilih anggota</option>
                                <option value="Bintara">Bintara</option>
                                <option value="Tamtama">Tamtama</option>
                                <option value="Perwira">Perwira</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mt-2">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control border-0" id="status" name="status" style="background-color: #ededed" required>
                                <option value="">Pilih status</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non-Aktif">Non-Aktif</option>
                            </select>
                        </div>
                        <div class="col-12 mt-2">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control border-0" id="alamat" name="alamat" placeholder="Masukkan alamat nasabah" style="background-color: #ededed" rows="3" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                    <a href="{{ route('nasabah') }}" class="btn btn-primary mt-3">Kembali</a>
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
