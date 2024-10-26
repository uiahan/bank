@extends('layout.master')
@section('title', 'Pendapatan Bank')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Pendapatan Bank</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Pendapatan Bank &gt; Dashboard</p>
                    </div>
                </div>
            </div>

            <div class="card card-nasabah count-card border-0 mt-4 shadow" style="background-color: #5692F9">
                <div class="row px-3 py-4">
                    <div class="col-7 text-white">
                        <h5>Pendapatan Bank :</h5>
                        <h1 class="px-3">{{ $pendapatanBankCount }}</h1>
                    </div>
                    <div class="col-5 d-flex align-items-center" style="height: 100%;">
                        <i class='bx bx-bar-chart nav_icon text-white' style="font-size: 5rem"></i>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center">
                    <h4 class="me-auto mb-3 mb-md-0" style="color: #5692F9">Tabel Pendapatan Bank</h4>
                    <h4 class="ms-md-auto me-md-3 mb-3 mb-md-0">
                        <a href="{{ route('tambahPendapatanBank') }}" class="btn text-white rounded-5 btn-tambah-nasabah" style="background-color: #5692F9">
                            <i class="fa-solid fa-plus text-white me-1"></i> Tambah Pendapatan Bank
                        </a>
                    </h4>
                    <h4 class="mb-3 mb-md-0">
                        <button onclick="window.print()" class="btn text-white rounded-5 btn-tambah-nasabah" style="background-color: #5692F9">
                            <i class="fa-solid fa-print text-white me-1"></i> Cetak PDF
                        </button>
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
                <div class="table-responsive">
                    <table class="table" id="example">
                        <thead class="" style="background-color: #f2f2f2">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Bank</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            @foreach ($pendapatanBank as $item)    
                            <tr>
                                <th scope="row" style="vertical-align: middle;">{{ $loop->iteration }}</th>
                                <td style="vertical-align: middle;">{{ $item->nama_bank }}</td>
                                <td style="vertical-align: middle;">{{ $item->tanggal }}</td>
                                <td style="vertical-align: middle;">{{ $item->keterangan }}</td>
                                <td style="vertical-align: middle;">Rp{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                                <td class="text-center align-middle" style="vertical-align: middle;">
                                    <a href="{{ route('editPendapatanBank', $item->id) }}" class="btn btn-primary" style="padding: 12px 15px;">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="{{ route('postHapusPendapatanBank', $item->id) }}"
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
                                <td colspan="4" class="text-end">Total:</td>
                                <td>Rp{{ number_format($totalJumlah, 0, ',', '.') }}</td>
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
                        <th colspan="8" style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">DAFTAR RINCIAN PENDAPATAN BANK BULAN JANUARI SAMPAI OKTOBER PAMEN TAHUN 2024
                        </th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Nama Bank</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    @foreach ($pendapatanBank as $item)    
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">{{ $loop->iteration }}</th>
                        <td style="border: 1px solid black; padding: 8px;">{{ $item->nama_bank }}</td>
                        <td style="border: 1px solid black; padding: 8px;">{{ $item->tanggal }}</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                        <td style="border: 1px solid black; padding: 8px;">{{ $item->keterangan }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="2" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;" colspan="2">Rp{{ number_format($totalJumlah, 0, ',', '.') }}</td>
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
