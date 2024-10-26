@extends('layout.master')
@section('title', 'Peminjaman')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Peminjaman</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Peminjaman &gt; Dashboard</p>
                    </div>
                </div>
            </div>

            <div class="card card-nasabah count-card border-0 mt-4 shadow" style="background-color: #5692F9">
                <div class="row px-3 py-4">
                    <div class="col-7 text-white">
                        <h5>Peminjaman :</h5>
                        <h1 class="px-3">1</h1>
                    </div>
                    <div class="col-5 d-flex align-items-center" style="height: 100%;">
                        <i class='bx bx-credit-card nav_icon text-white' style="font-size: 5rem"></i>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <div class="d-flex flex-wrap align-items-center mb-3">
                    <h4 class="me-auto mb-2" style="color: #5692F9;">Tabel Peminjaman</h4>
                    <div class="d-flex flex-wrap">
                        <a href="{{ route('laporan') }}" class="btn text-white rounded-5 btn-tambah-nasabah mb-2 me-2"
                            style="background-color: #5692F9;">
                            <i class="fa-solid fa-file text-white me-1"></i> PDF/Laporan
                        </a>
                        <a href="{{ route('buatPeminjaman') }}" class="btn text-white rounded-5 btn-tambah-nasabah mb-2 me-2"
                            style="background-color: #5692F9;">
                            <i class="fa-solid fa-plus text-white me-1"></i> Create Pinjaman
                        </a>
                        <a href="{{ route('histori') }}" class="btn text-white rounded-5 btn-tambah-nasabah mb-2 me-2"
                            style="background-color: #5692F9;">
                            <i class="fa-solid fa-clock-rotate-left me-1"></i> Historis Pinjaman
                        </a>
                        <a href="" onclick="window.print()" class="btn text-white rounded-5 btn-tambah-nasabah mb-2 me-2"
                            style="background-color: #5692F9;">
                            <i class="fa-solid fa-print text-white me-1"></i> Cetak Piutang
                        </a>
                    </div>
                </div>
                <hr>
                <form action="">
                    <div class="row">
                        <div class="col-xl-5 col-12">
                            <label for="anggota">Anggota</label>
                            <select name="anggota" id="anggota" class="form-control border-0"
                                style="background-color: #ededed">
                                <option value="" {{ request('anggota') == '' ? 'selected' : '' }}>Semua</option>
                                <option value="pamen" {{ request('anggota') == 'pamen' ? 'selected' : '' }}>Pamen</option>
                                <option value="pama" {{ request('anggota') == 'pama' ? 'selected' : '' }}>Pama</option>
                                <option value="bintara" {{ request('anggota') == 'bintara' ? 'selected' : '' }}>Bintara
                                </option>
                                <option value="pns" {{ request('anggota') == 'pns' ? 'selected' : '' }}>PNS</option>
                                <option value="alb" {{ request('anggota') == 'alb' ? 'selected' : '' }}>ALB</option>
                            </select>
                        </div>
                        <div class="col-xl-5 col-12 mt-xl-0 mt-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control border-0"
                                style="background-color: #ededed">
                                <option value="aktiv" {{ request('status') == 'aktiv' ? 'selected' : '' }}>Aktiv</option>
                                <option value="non_aktiv" {{ request('status') == 'non_aktiv' ? 'selected' : '' }}>Non
                                    Aktiv
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-12 d-flex align-items-end mt-xl-0 mt-4">
                            <button type="submit" class="text-white btn w-100 btn-tambah-nasabah"
                                style="background-color: #5692F9">
                                <i class="fa-solid fa-filter me-2"></i>Filter
                            </button>
                        </div>
                    </div>
                </form>
                @if (session('notif'))
                    <div class="alert alert-success">
                        {{ session('notif') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead style="background-color: #f2f2f2">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Tgl Pinjam</th>
                                <th scope="col">Total Pinjam</th>
                                <th scope="col">Lama Pinjaman</th>
                                <th scope="col">Sisa Waktu Pinjam</th>
                                <th scope="col">Jasa %</th>
                                <th scope="col">Asuransi %</th>
                                <th scope="col">Pokok Angsuran</th>
                                <th scope="col">Sisa Hutang</th>
                                <th scope="col">Total Ansguran</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            <th scope="row" style="vertical-align: middle;">1</th>
                            <td style="vertical-align: middle;">Farhan</td>
                            <td style="vertical-align: middle;">089519094253</td>
                            <td style="vertical-align: middle;">13 Oktober 2024</td>
                            <td style="vertical-align: middle;">Rp2.000.000</td>
                            <td style="vertical-align: middle;">1 bulan</td>
                            <td style="vertical-align: middle;">1 minggu</td>
                            <td style="vertical-align: middle;">2%</td>
                            <td style="vertical-align: middle;">2%</td>
                            <td style="vertical-align: middle;">Rp2.000.000</td>
                            <td style="vertical-align: middle;">Rp2.000.000</td>
                            <td style="vertical-align: middle;">Rp2.000.000</td>
                            <td class="text-center align-middle" style="vertical-align: middle; white-space: nowrap;">
                                <a href="{{ route('pelunasan') }}" class="btn btn-success me-1"
                                    style="padding: 12px 15px;">
                                    <i class="fa-regular fa-credit-card"></i> Pelunasan
                                </a>
                                <a href="{{ route('pembaruan') }}" class="btn btn-success me-1"
                                    style="padding: 12px 15px;">
                                    <i class="fa-solid fa-pen-to-square"></i> Pembaruan
                                </a>
                                <a href="{{ route('detailPeminjaman') }}" class="btn btn-primary me-1"
                                    style="padding: 12px 15px;">
                                    <i class="fa-regular fa-eye"></i> Detail
                                </a>
                            </td>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                <td colspan="11" class="text-end">Total:</td>
                                <td>Rp2.000.000</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div id="printableTable" style="display: none;" class="mt-5">
            <table class="table table-bordered table-striped" id="example">
                <thead style="background-color: #f2f2f2">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">Total Pinjam</th>
                        <th scope="col">Lama Pinjaman</th>
                        <th scope="col">Sisa Waktu Pinjam</th>
                        <th scope="col">Jasa %</th>
                        <th scope="col">Asuransi %</th>
                        <th scope="col">Pokok Angsuran</th>
                        <th scope="col">Sisa Hutang</th>
                        <th scope="col">Total Ansguran</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <th scope="row" style="vertical-align: middle;">1</th>
                    <td style="vertical-align: middle;">Farhan</td>
                    <td style="vertical-align: middle;">089519094253</td>
                    <td style="vertical-align: middle;">13 Oktober 2024</td>
                    <td style="vertical-align: middle;">Rp2.000.000</td>
                    <td style="vertical-align: middle;">1 bulan</td>
                    <td style="vertical-align: middle;">1 minggu</td>
                    <td style="vertical-align: middle;">2%</td>
                    <td style="vertical-align: middle;">2%</td>
                    <td style="vertical-align: middle;">Rp2.000.000</td>
                    <td style="vertical-align: middle;">Rp2.000.000</td>
                    <td style="vertical-align: middle;">Rp2.000.000</td>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td colspan="11" class="text-end">Total:</td>
                        <td>Rp2.000.000</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        window.onbeforeprint = function() {
            document.getElementById('printableTable').style.display = 'block'; // Show the table before printing
            document.getElementById('printableArea').style.display = 'none'; // Hide the form before printing
        }

        window.onafterprint = function() {
            document.getElementById('printableTable').style.display = 'none'; // Hide the table after printing
            document.getElementById('printableArea').style.display = 'block'; // Show the form after printing
        }
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <script></script>
@endsection

<style>
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
        Copy Text
    }

    .btn-primary {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(13, 109, 252, 1);
        -moz-box-shadow: 0px 0px 5px 0px rgba(13, 109, 252, 1);
        box-shadow: 0px 0px 5px 0px rgba(13, 109, 252, 1);
    }

    .btn-danger {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(219, 53, 69, 1);
        -moz-box-shadow: 0px 0px 5px 0px rgba(219, 53, 69, 1);
        box-shadow: 0px 0px 5px 0px rgba(219, 53, 69, 1);
        Copy Text
    }

    .btn-success {
        -webkit-box-shadow: 0px 0px 5px 0px #00752f;
        -moz-box-shadow: 0px 0px 5px 0px #00752f;
        box-shadow: 0px 0px 5px 0px #00752f;
        Copy Text
    }
</style>