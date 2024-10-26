@extends('layout.master')
@section('title', 'Neraca')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Neraca</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Neraca &gt; Dashboard</p>
                    </div>
                </div>
            </div>

            <div class="card card-nasabah count-card border-0 mt-4 shadow" style="background-color: #5692F9">
                <div class="row px-3 py-4">
                    <div class="col-7 text-white">
                        <h5>Total Neraca :</h5>
                        <h1 class="px-3">1</h1>
                    </div>
                    <div class="col-5 d-flex align-items-center" style="height: 100%;">
                        <i class='bx bx-folder nav_icon text-white' style="font-size: 5rem"></i>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <div class="d-flex">
                    <h4 class="me-auto" style="color: #5692F9">Tabel Neraca</h4>
                    <h4 class="ms-auto"><button onclick="window.print()" class="btn text-white rounded-5 btn-tambah-nasabah"
                            style="background-color: #5692F9"><i class="fa-solid fa-print text-white me-1"></i> Cetak
                            PDF</button>
                    </h4>
                </div>
                <hr>
                <form action="">
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <label for="">Tanggal Awal</label>
                            <input type="date" class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="">Tanggal Akhir</label>
                            <input type="date" class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <div class="col-xl-4 col-12 mt-3">
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
                        <div class="col-xl-4 col-12 mt-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control border-0"
                                style="background-color: #ededed">
                                <option value="aktiv" {{ request('status') == 'aktiv' ? 'selected' : '' }}>Aktiv</option>
                                <option value="non_aktiv" {{ request('status') == 'non_aktiv' ? 'selected' : '' }}>Non Aktiv
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-12 d-flex align-items-end mt-3">
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
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <h5 class="mt-4">Kredit / Penambahan</h5>
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead class="" style="background-color: #f2f2f2">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Kredit/Penambahan</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            <tr>
                                <th scope="row" style="vertical-align: middle;">1</th>
                                <td style="vertical-align: middle;">Oktober</td>
                                <td style="vertical-align: middle;">Rp100.000</td>
                                <td style="vertical-align: middle;">Tidak Ada</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                <td colspan="2" class="text-end">Total:</td>
                                <td>Rp50.000</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <h5 class="mt-4">Debit / Pengurangan</h5>
                <div class="table-responsive">
                    <table class="table" id="example2">
                        <thead class="" style="background-color: #f2f2f2">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Bulan</th>
                                <th scope="col">Debit/Pengurangan</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            <tr>
                                <th scope="row" style="vertical-align: middle;">1</th>
                                <td style="vertical-align: middle;">Oktober</td>
                                <td style="vertical-align: middle;">Rp100.000</td>
                                <td style="vertical-align: middle;">Tidak Ada</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                <td colspan="2" class="text-end">Total:</td>
                                <td>Rp50.000</td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div id="printableTable" style="display: none;" class="mt-5">   
            <table>
                <thead>
                    <tr>
                        <th colspan="8" style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">DAFTAR RINCIAN DEBIT BULAN JANUARI SAMPAI OKTOBER PAMEN TAHUN 2024</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Rincian</th>
                        <th style="border: 1px solid black; padding: 8px;">Debt/Pengurangan</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Lorem</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="2">Rp50.000</td>
                    </tr>
                </tfoot>
            </table>
            <table class="mt-4">
                <thead>
                    <tr>
                        <th colspan="8" style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">DAFTAR RINCIAN KREDIT BULAN JANUARI SAMPAI OKTOBER PAMEN TAHUN 2024</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Rincian</th>
                        <th style="border: 1px solid black; padding: 8px;">Kredit/Penambahan</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Lorem</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="2">Rp50.000</td>
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
        new DataTable('#example2');
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
