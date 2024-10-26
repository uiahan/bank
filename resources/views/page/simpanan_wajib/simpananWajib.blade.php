@extends('layout.master')
@section('title', 'Simpanan Wajib')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Simpanan Wajib</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Simpanan Wajib &gt; Dashboard</p>
                    </div>
                </div>
            </div>

            <div class="card count-card card-nasabah border-0 mt-4 shadow" style="background-color: #5692F9">
                <div class="row px-3 py-4">
                    <div class="col-7 text-white">
                        <h5>Simpanan Wajib :</h5>
                        <h1 class="px-3">1</h1>
                    </div>
                    <div class="col-5 d-flex align-items-center" style="height: 100%;">
                        <i class='bx bx-coin nav_icon text-white' style="font-size: 5rem"></i>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-4 p-4 shadow">
                <div class="d-flex flex-column text-center flex-md-row align-items-center">
                    <h4 class="me-auto mb-3 mb-md-0" style="color: #5692F9">Tabel Simpanan Wajib</h4>
                    <div class=" d-md-flex">
                        <h4 class="ms-md-auto me-md-2 mb-3 mb-md-0">
                            <a href="{{ route('buatSimpananWajib') }}" class="btn text-white rounded-5 btn-tambah-nasabah" style="background-color: #5692F9">
                                <i class="fa-solid fa-plus text-white me-1"></i> Buat Simpanan Wajib
                            </a>
                        </h4>
                        <h4 class="ms-md-auto me-md-2 mb-3 mb-md-0">
                            <a href="{{ route('tambahSimpananWajib') }}" class="btn text-white rounded-5 btn-tambah-nasabah" style="background-color: #5692F9">
                                <i class="bx bx-credit-card text-white me-1"></i> Gunakan Simpanan Wajib
                            </a>
                        </h4>
                        <h4 class="mb-3 mb-md-0">
                            <button onclick="window.print()" class="btn text-white rounded-5 btn-tambah-nasabah" style="background-color: #5692F9">
                                <i class="fa-solid fa-print text-white me-1"></i> Cetak PDF
                            </button>
                        </h4>

                    </div>
                </div>
                
                <hr>
                <form action="">
                    <div class="row">
                        <div class="col-xl-5 col-12">
                            <label for="anggota">Anggota</label>
                            <select name="anggota" id="anggota" class="form-control border-0" style="background-color: #ededed">
                                <option value="" {{ request('anggota') == '' ? 'selected' : '' }}>Semua</option>
                                <option value="pamen" {{ request('anggota') == 'pamen' ? 'selected' : '' }}>Pamen</option>
                                <option value="pama" {{ request('anggota') == 'pama' ? 'selected' : '' }}>Pama</option>
                                <option value="bintara" {{ request('anggota') == 'bintara' ? 'selected' : '' }}>Bintara</option>
                                <option value="pns" {{ request('anggota') == 'pns' ? 'selected' : '' }}>PNS</option>
                                <option value="alb" {{ request('anggota') == 'alb' ? 'selected' : '' }}>ALB</option>
                            </select>
                        </div>
                        <div class="col-xl-5 col-12 mt-xl-0 mt-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control border-0" style="background-color: #ededed">
                                <option value="aktiv" {{ request('status') == 'aktiv' ? 'selected' : '' }}>Aktiv</option>
                                <option value="non_aktiv" {{ request('status') == 'non_aktiv' ? 'selected' : '' }}>Non Aktiv</option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-12 d-flex align-items-end mt-xl-0 mt-4">
                            <button type="submit" class="text-white btn w-100 btn-tambah-nasabah" style="background-color: #5692F9">
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
                                <th scope="col">Nama</th>
                                <th scope="col">Tgl Join</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Anggota</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Nominal</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #f2f2f2">
                            <tr>
                                <th scope="row" style="vertical-align: middle;">1</th>
                                <td style="vertical-align: middle;">Farhan</td>
                                <td style="vertical-align: middle;">13 Oktober 2024</td>
                                <td style="vertical-align: middle;">089519094253</td>
                                <td style="vertical-align: middle;">Bintara</td>
                                <td style="vertical-align: middle;">Aktiv</td>
                                <td style="vertical-align: middle;">Keterangan</td>
                                <td style="vertical-align: middle;">Rp2.000.000</td>
                                <td style="vertical-align: middle;">Rp2.000.000</td>
                                <td class="text-center align-middle" style="vertical-align: middle;">
                                    <a href="" class="btn btn-success" style="padding: 12px 15px;">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                <td colspan="8" class="text-end">Total:</td>
                                <td>Rp2.000.000</td>
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
                        <th colspan="8" style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">Data Simpanan Wajib</th>
                    </tr>
                </thead>
                <thead class="" style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Nama</th>
                        <th style="border: 1px solid black; padding: 8px;">Tgl Join</th>
                        <th style="border: 1px solid black; padding: 8px;">No Hp</th>
                        <th style="border: 1px solid black; padding: 8px;">Anggota</th>
                        <th style="border: 1px solid black; padding: 8px;">Status</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Farhan</td>
                        <td style="border: 1px solid black; padding: 8px;">13 Oktober 2024</td>
                        <td style="border: 1px solid black; padding: 8px;">089519094253</td>
                        <td style="border: 1px solid black; padding: 8px;">Bintara</td>
                        <td style="border: 1px solid black; padding: 8px;">Aktiv</td>
                        <td style="border: 1px solid black; padding: 8px;">Keterangan</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp2.000.000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td colspan="7" style="border: 1px solid black; padding: 8px;" class="text-end">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp2.000.000</td>
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
