@extends('layout.master')
@section('title', 'Bayar All Simpanan Pokok')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Bayar All Simpanan Pokok</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Simpanan Pokok &gt; Dashboard &gt; Bayar All</p>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <h5 class="me-auto text-secondary">Data simpanan Pokok</h5>
                <hr>
                <form action="">
                    <div class="row">
                        <div class="col-xl-8 col-12 mt-xl-0 mt-3">
                            <label for="bulan">Bulan</label>
                            <select name="bulan" id="bulan" class="form-control border-0"
                                style="background-color: #ededed">
                                <option value="" {{ request('bulan') == '' ? 'selected' : '' }}>Semua</option>
                                <option value="01" {{ request('bulan') == '01' ? 'selected' : '' }}>Januari</option>
                                <option value="02" {{ request('bulan') == '02' ? 'selected' : '' }}>Februari</option>
                                <option value="03" {{ request('bulan') == '03' ? 'selected' : '' }}>Maret</option>
                                <option value="04" {{ request('bulan') == '04' ? 'selected' : '' }}>April</option>
                                <option value="05" {{ request('bulan') == '05' ? 'selected' : '' }}>Mei</option>
                                <option value="06" {{ request('bulan') == '06' ? 'selected' : '' }}>Juni</option>
                                <option value="07" {{ request('bulan') == '07' ? 'selected' : '' }}>Juli</option>
                                <option value="08" {{ request('bulan') == '08' ? 'selected' : '' }}>Agustus</option>
                                <option value="09" {{ request('bulan') == '09' ? 'selected' : '' }}>September</option>
                                <option value="10" {{ request('bulan') == '10' ? 'selected' : '' }}>Oktober</option>
                                <option value="11" {{ request('bulan') == '11' ? 'selected' : '' }}>November</option>
                                <option value="12" {{ request('bulan') == '12' ? 'selected' : '' }}>Desember</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-12 d-flex align-items-end mt-xl-0 mt-4">
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
                    <form action="">
                        <table class="table" id="example">
                            <thead style="background-color: #f2f2f2">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">
                                        <input type="checkbox" id="checkAll" /> Ceklis All
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #f2f2f2">
                                <tr>
                                    <th scope="row" style="vertical-align: middle;">1</th>
                                    <td style="vertical-align: middle;">Farhan</td>
                                    <td>
                                        <input type="checkbox" class="checkItem" />
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" style="vertical-align: middle;">2</th>
                                    <td style="vertical-align: middle;">Airin</td>
                                    <td>
                                        <input type="checkbox" class="checkItem" />
                                    </td>
                                </tr>
                                <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
                            </tbody>
                        </table>
                        <button class="btn btn-primary mt-1">Bayar All</button>
                        <a href="{{ route('simpananPokok') }}" class="btn btn-primary mt-1 ms-1">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="printableTable" style="display: none;" class="mt-5">
        <table>
            <thead>
                <tr>
                    <th colspan="8"
                        style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                        TAGIHAN BULAN OKTOBER PAMEN TAHUN 2024</th>
                </tr>
            </thead>
            <thead class="" style="background-color: #f2f2f2">
                <tr>
                    <th style="border: 1px solid black; padding: 8px;">No</th>
                    <th style="border: 1px solid black; padding: 8px;">Nama</th>
                    <th style="border: 1px solid black; padding: 8px;">Saldo Bulan Sebelumnya (September)</th>
                    <th style="border: 1px solid black; padding: 8px;">Tagihan Bulan Yang Dipilih (Oktober)</th>
                    <th style="border: 1px solid black; padding: 8px;">Tunggakan Yang Belum Dibayar</th>
                    <th style="border: 1px solid black; padding: 8px;">Total Tagihan</th>
                    <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                </tr>
            </thead>
            <tbody style="background-color: #f2f2f2">
                <tr>
                    <th style="border: 1px solid black; padding: 8px;"></th>
                    <td style="border: 1px solid black; padding: 8px;"></td>
                    <td style="border: 1px solid black; padding: 8px;"></td>
                    <td style="border: 1px solid black; padding: 8px;"></td>
                    <td style="border: 1px solid black; padding: 8px;"></td>
                    <td style="border: 1px solid black; padding: 8px;"></td>
                    <td style="border: 1px solid black; padding: 8px;"></td>
                </tr>
            </tbody>
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

        document.getElementById('checkAll').addEventListener('change', function() {
            let checkboxes = document.querySelectorAll('.checkItem');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = document.getElementById('checkAll').checked;
            });
        });

        // Script for the "Ceklis Semua" button to check all checkboxes
        document.getElementById('selectAllButton').addEventListener('click', function() {
            let checkboxes = document.querySelectorAll('.checkItem');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true; // Automatically check all
            });
            document.getElementById('checkAll').checked = true; // Also check the "Ceklis All" checkbox
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <script></script>
@endsection

<style>
    @media (min-width: 768px) {
        .count-card {
            width: 50% !important;
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
