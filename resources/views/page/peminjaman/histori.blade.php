@extends('layout.master')
@section('title', 'Histori Peminjaman')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Histori Peminjaman</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Peminjaman &gt; Dashboard &gt; Histori</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Histori Peminjaman</h5>
                <form action="" class="mt-3">
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <label for="">Tanggal Awal</label>
                            <input type="date" class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <div class="col-xl-6 col-12">
                            <label for="">Tanggal Akhir</label>
                            <input type="date" class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <div class="col-xl-6 col-12 d-flex align-items-end mt-3">
                            <button type="submit" class="text-white btn w-100 btn-tambah-nasabah"
                                style="background-color: #5692F9">
                                <i class="fa-solid fa-filter me-2"></i>Filter
                            </button>
                        </div>
                        <div class="col-xl-6 col-12 d-flex align-items-end mt-3">
                            <button type="button" class="text-white btn w-100 btn-tambah-nasabah" onclick="window.print()"
                                style="background-color: #5692F9">
                                <i class="fa-solid fa-print text-white me-1"></i> Cetak PDF
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                <form action="" class="mt-2">
                    <table class="table table-bordered" id="example">
                        <thead style="background-color: #f2f2f2">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Tgl Pinjam</th>
                                <th scope="col">Tgl Pelunasan</th>
                                <th scope="col">Lama Pinjaman</th>
                                <th scope="col">Total Jasa yang Diberikan</th>
                                <th scope="col">Total Pinjam</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                <td colspan="7" class="text-end">Total:</td>
                                <td>Rp1.000.000</td>
                            </tr>
                        </tfoot>
                    </table>
                    <a href="{{ route('peminjaman') }}" class="btn btn-primary mt-3">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <div id="printableTable" style="display: none;" class="mt-5">
        <table class="table table-bordered table-striped">
            <thead style="background-color: #f2f2f2">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Tgl Pinjam</th>
                    <th scope="col">Tgl Pelunasan</th>
                    <th scope="col">Lama Pinjaman</th>
                    <th scope="col">Total Jasa yang Diberikan</th>
                    <th scope="col">Total Pinjam</th>
                </tr>
            </thead>
            <tbody style="background-color: #f2f2f2">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr style="font-weight: semibold; background-color: #e0e0e0;">
                    <td colspan="7" class="text-end">Total:</td>
                    <td>Rp1.000.000</td>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');

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
