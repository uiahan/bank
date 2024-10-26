@extends('layout.master')
@section('title', 'Detail Simpanan Pokok')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <h3 class="fw-bold text-secondary">Detail Simpanan Pokok</h3>
                    </div>
                    <div class="col-6 d-none d-md-block">
                        <p class="text-muted text-end text-secondary">Simpanan Pokok &gt; Dashboard &gt; Detail</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4" >
                <h5 class="fw-bold text-secondary">Data Simpanan Pokok</h5>
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
                    <div class="row">
                        <!-- Nama -->
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" value="Farhan" readonly class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <!-- No Hp -->
                        <div class="col-xl-6 col-12">
                            <label for="" class="form-label">No Hp</label>
                            <input type="text" value="089519094253" readonly class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <!-- Anggota -->
                        <div class="col-xl-4 col-12 mt-2">
                            <label for="" class="form-label">Tanggal</label>
                            <input type="text" value="13/09/24" readonly class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <!-- Status -->
                        <div class="col-xl-4 col-12 mt-2">
                            <label for="" class="form-label">Jumlah Setoran</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0" style="background-color: #ededed">
                        </div>
                        <!-- Total Simpanan Pokok -->
                        <div class="col-xl-4 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0" style="background-color: #ededed">
                        </div>
                    </div>
                    <a href="{{ route('simpananPokok') }}" class="btn btn-primary mt-3">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <div id="printableTable" style="display: none;" class="mt-5">
        <div>
        <table id="hal-2" class="mt-5"> <!-- Add page break before this table -->
            <thead>
                <tr>
                    <th colspan="5" style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">Detail Simpanan Pokok</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th style="border: 1px solid black; padding: 8px;">No</th>
                    <th style="border: 1px solid black; padding: 8px;">Nama</th>
                    <th style="border: 1px solid black; padding: 8px;">No Hp</th>
                    <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                    <th style="border: 1px solid black; padding: 8px;">Jumlah Setoran</th>
                </tr>
            </thead>
            <tbody style="background-color: #f2f2f2;">
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">1</td>
                    <th style="border: 1px solid black; padding: 8px;">Farhan</th>
                    <td style="border: 1px solid black; padding: 8px;">089519094253</td>
                    <td style="border: 1px solid black; padding: 8px;">13/09/24</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp500.000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr style="font-weight: semibold; background-color: #e0e0e0;">
                    <td style="border: 1px solid black; padding: 8px;"></td> <!-- Garis pada kolom No -->
                    <td colspan="3" style="border: 1px solid black; padding: 8px; text-align: right;">Total:</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp500.000</td>
         
                </tr>
            </tfoot>
        </table>
        
    </div>
    </div>

    <script>
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
            display: none; /* Sembunyikan sidebar saat mencetak */
        }

        .header {
            display: none; /* Sembunyikan navbar saat mencetak */
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


