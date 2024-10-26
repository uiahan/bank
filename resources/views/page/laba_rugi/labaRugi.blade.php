@extends('layout.master')
@section('title', 'Laba Rugi')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Laba Rugi</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Laba Rugi &gt; Dashboard</p>
                    </div>
                </div>
            </div>

            <div class="card card-nasabah count-card border-0 mt-4 shadow" style="background-color: #5692F9">
                <div class="row px-3 py-4">
                    <div class="col-7 text-white">
                        <h5>Laba Rugi :</h5>
                        <h1 class="px-3">{{ $labaRugiCount }}</h1>
                    </div>
                    <div class="col-5 d-flex align-items-center" style="height: 100%;">
                        <i class='bx bx-chart nav_icon text-white' style="font-size: 5rem"></i>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
                    <h4 class="me-auto mb-3 mb-md-0" style="color: #5692F9">Tabel Laba Rugi</h4>
                    <h4 class="ms-md-auto me-md-3 mb-3 mb-md-0">
                        <a href="{{ route('tambahLabaRugi') }}" class="btn text-white rounded-5 btn-tambah-nasabah"
                            style="background-color: #5692F9">
                            <i class="fa-solid fa-plus text-white me-1"></i> Tambah Laba Rugi
                        </a>
                    </h4>
                    <h4 class="mb-3 mb-md-0">
                        <button onclick="window.print()" class="btn text-white rounded-5 btn-tambah-nasabah"
                            style="background-color: #5692F9">
                            <i class="fa-solid fa-print text-white me-1"></i> Cetak PDF
                        </button>
                    </h4>
                </div>
                <hr>
                <form action="">
                    <div class="row">
                        <div class="col-xl-5 col-12 mt-xl-0 mt-3">
                            <label for="bulan_awal">Bulan Awal</label>
                            <select name="bulan_awal" id="bulan_awal" class="form-control border-0"
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
                        <div class="col-xl-5 col-12 mt-xl-0 mt-3">
                            <label for="bulan_akhir">Bulan Akhir</label>
                            <select name="bulan_akhir" id="bulan_akhir" class="form-control border-0"
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
                        <div class="col-xl-2 col-12 d-flex align-items-end mt-3">
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
                    <h5 class="mt-2">Biaya biaya</h5>
                    <table class="table" id="example">
                        <thead class="" style="background-color: #f2f2f2">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Rincian Biaya</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah Rincian</th>
                                <th scope="col">Jumlah/%</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jumlah Akhir</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            @foreach ($labaRugi as $item)
                                <tr>
                                    <th scope="row" style="vertical-align: middle;">{{ $loop->iteration }}</th>
                                    <td style="vertical-align: middle;">{{ $item->rincian_biaya }}</td>
                                    <td style="vertical-align: middle;">{{ $item->tanggal }}</td>
                                    <td style="vertical-align: middle;">{{ $item->jumlah_rincian }}</td>
                                    <td style="vertical-align: middle;">{{ $item->jumlah_persen }}</td>
                                    <td style="vertical-align: middle;">{{ $item->keterangan }}</td>
                                    <td style="vertical-align: middle;">{{ $item->jumlah_akhir }}</td>
                                    <td class="text-center align-middle" style="vertical-align: middle;">
                                        <a href="{{ route('editLabaRugi', $item->id) }}" class="btn btn-primary"
                                            style="padding: 12px 15px;">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('postHapusLabaRugi', $item->id) }}"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                            class="btn btn-danger" style="padding: 12px 15px;">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                <td colspan="3" class="text-end">Total:</td>
                                <td colspan="5">{{ $totalJumlah }}</td>
                               
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
                        <th colspan="8"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            LABA RUGI <br>UNIT SIMPAN PINJAM - PENDAPATAN DARI BANK <br>PERIODE JANUARI SAMPAI DENGAN
                            DESEMBER TAHUN 2024</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Bulan</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Januari</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Februari</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">dst</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1">
                            </td>
                    </tr>
                </tfoot>
            </table>
     

        <div style="page-break-before: always;" class="mt-5">
            <table>
                <thead>
                    <tr>
                        <th colspan="8"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            LABA RUGI <br>UNIT SIMPAN PINJAM - JASA PINJAMAN <br>PERIODE JANUARI SAMPAI DENGAN
                            DESEMBER TAHUN 2024</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Bulan</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Januari</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Februari</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">dst</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1">
                            </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div style="page-break-before: always;" class="mt-5">
            <table>
                <thead>
                    <tr>
                        <th colspan="8"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            LABA RUGI <br>UNIT SIMPAN PINJAM - BIAYA BIAYA PENGELUARAN <br>PERIODE JANUARI SAMPAI DENGAN
                            DESEMBER TAHUN 2024</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Rincian Biaya</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">PAJAK SIMPAN PINJAM</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">2</th>
                        <td style="border: 1px solid black; padding: 8px;">ATK</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1">
                            </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div style="page-break-before: always;" class="mt-5">
            <table>
                <thead>
                    <tr>
                        <th colspan="8"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            KESIMPULAN LABA RUGI <br>UNIT SIMPAN PINJAM <br>PERIODE JANUARI SAMPAI DENGAN
                            DESEMBER TAHUN 2024</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Rincian</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">TOTAL PENDAPATAN DARI BANK</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">2</th>
                        <td style="border: 1px solid black; padding: 8px;">TOTAL JASA PINJAMAN</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">3</th>
                        <td style="border: 1px solid black; padding: 8px;">TOTAL BIAYA BIAYA PENGELUARAN</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="1">
                            </td>
                    </tr>
                </tfoot>
            </table>
        </div>
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
        };

        window.onafterprint = function() {
            document.getElementById('printableTable').style.display = 'none'; // Hide the table after printing
            document.getElementById('printableArea').style.display = 'block'; // Show the form after printing
        };

        document.querySelector('button[onclick="window.print()"]').addEventListener('click', function() {
            setTimeout(function() {
                window.print();
            }, 500); // Add delay to ensure the table is shown before print dialog
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
    <script></script>
@endsection

<style>
    @media print {
        #printableTable {
            display: block !important;
            /* Force display the printable table */
        }

        #printableArea {
            display: none !important;
            /* Hide the non-printable area */
        }
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
