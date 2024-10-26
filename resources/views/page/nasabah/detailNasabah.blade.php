@extends('layout.master')
@section('title', 'Detail Nasabah')
@section('content')
    <div class="d-flex">
        @include('template.sidebar')
        <div class="container mt-4 mt-md-5 py-5" id="printableArea">
            <div class="p-4 shadow card border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="fw-bold text-secondary">Detail Nasabah</h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted text-end text-secondary">Nasabah &gt; Dashboard &gt; Detail</p>
                    </div>
                </div>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <h5 class="fw-bold text-secondary">Data Nasabah</h5>
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
                        <div class="col-xl-4 col-12">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" value="Farhan" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- No Hp -->
                        <div class="col-xl-4 col-12">
                            <label for="" class="form-label">No Hp</label>
                            <input type="text" value="089519094253" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Anggota -->
                        <div class="col-xl-4 col-12">
                            <label for="" class="form-label">Anggota</label>
                            <input type="text" value="Bintara" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <div class="mt-4">
                            <hr>
                        </div>
                        <!-- Status -->
                        <div class="col-xl-12 col-12 mt-">
                            <label for="" class="form-label">Status</label>
                            <input type="text" value="Aktiv" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Simpanan Pokok -->
                        <div class="col-xl-6 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Simpanan Pokok</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Jasa Simpanan Pokok -->
                        <div class="col-xl-6 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Jasa Simpanan Pokok</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Simpanan Wajib -->
                        <div class="col-xl-6 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Simpanan Wajib</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Jasa Simpanan Wajib -->
                        <div class="col-xl-6 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Jasa Simpanan Wajib</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Simpanan Sukarela -->
                        <div class="col-xl-6 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Simpanan Sukarela</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <div class="col-xl-6 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Jasa Simpanan Sukarela</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <div class="mt-4">
                            <hr>
                        </div>
                        <!-- Pinjaman -->
                        <div class="col-xl-12 col-12">
                            <label for="" class="form-label">Pinjaman</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Jasa Pinjaman -->
                        <div class="col-xl-4 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Jasa Pinjaman</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Penghasilan Lainnya -->
                        <div class="col-xl-4 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Penghasilan Lainnya</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Total Saldo -->
                        <div class="col-xl-4 col-12 mt-2">
                            <label for="" class="form-label text-primary">Total Saldo</label>
                            <input type="text" value="Rp200.000" readonly class="form-control border-0"
                                style="background-color: #ededed">
                        </div>
                        <!-- Keterangan -->
                        <div class="mt-4">
                            <hr>
                        </div>
                        <div class="col-xl-12 col-12">
                            <label for="" class="form-label">Keterangan</label>
                            <textarea readonly class="form-control border-0" style="background-color: #ededed">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio distinctio illum repellendus aliquam eligendi mollitia, dolores perferendis sit atque, recusandae cum molestiae nam aperiam! Labore eaque ea aut doloremque numquam.</textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card p-4 shadow border-0 mt-4">
                <div class="">
                    <h5 class="fw-bold text-secondary">Detail Simpanan Pokok</h5>
                    <div class="mt-2">
                        <table class="table table-bordered" id="example">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Setoran</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #f2f2f2;">
                                <tr>
                                    <td>1</td>
                                    <td>13/09/24</td>
                                    <td>Rp50.000</td>
                                    <td>Lorem Ipsum</td>
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
            <div class="card p-4 shadow border-0 mt-4">
                <div class="mt-4">
                    <h5 class="fw-bold text-secondary">Detail Simpanan Wajib</h5>
                    <div class="mt-2">
                        <table class="table table-bordered" id="example2">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Setoran</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #f2f2f2;">
                                <tr>
                                    <td>1</td>
                                    <td>13/09/24</td>
                                    <td>Rp50.000</td>
                                    <td>Lorem Ipsum</td>
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
            <div class="card p-4 shadow border-0 mt-4">
                <div class="mt-4">
                    <h5 class="fw-bold text-secondary">Detail Simpanan Sukarela</h5>
                    <div class="mt-2">
                        <table class="table table-bordered" id="example3">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Setoran</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #f2f2f2;">
                                <tr>
                                    <td>1</td>
                                    <td>13/09/24</td>
                                    <td>Rp50.000</td>
                                    <td>Lorem Ipsum</td>
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
            <div class="card p-4 shadow border-0 mt-4">
                <div class="mt-4">
                    <h5 class="fw-bold text-secondary">Detail Simpanan Lainnya</h5>
                    <div class="mt-2">
                        <table class="table table-bordered" id="example4">
                            <thead style="background-color: #f2f2f2;">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Setoran</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #f2f2f2;">
                                <tr>
                                    <td>1</td>
                                    <td>13/09/24</td>
                                    <td>Rp50.000</td>
                                    <td>Lorem Ipsum</td>
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
            <div class="card p-4 shadow border-0 mt-4">
                <div class="mt-4">
                    <h5 class="fw-bold text-secondary">Detail Peminjaman</h5>
                    <div class="mt-2">
                        <div class="mb-4">
                            <table id="example5" class="mt-2 table table-bordered">
                                <thead style="background-color: #f2f2f2;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Jasa</th>
                                        <th>Cicilan</th>
                                        <th>Pokok</th>
                                        <th>Total Telah Dicicil</th>
                                        <th>Total Jasa</th>
                                        <th>Sisa Cicilan</th>
                                        <th>Ket</th>
                                    </tr>
                                </thead>
                                <tbody style="background-color: #f2f2f2;">
                                    <tr>
                                        <th>1</th>
                                        <td>Peminjaman pertama</td>
                                        <td>Rp10.000.000</td>
                                        <td>01 Januari 2024</td>
                                        <td>10 bulan</td>
                                        <td>1%</td>
                                        <td>Rp1.100.000</td>
                                        <td>Rp1.000.000</td>
                                        <td>Rp5.500.000</td>
                                        <td>Rp500.000</td>
                                        <td>Rp5.000.000</td>
                                        <td>Lorem Ipsum</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Peminjaman Kedua</td>
                                        <td>Rp10.000.000</td>
                                        <td>01 Januari 2024</td>
                                        <td>10 bulan</td>
                                        <td>1%</td>
                                        <td>Rp1.100.000</td>
                                        <td>Rp1.000.000</td>
                                        <td>Rp5.500.000</td>
                                        <td>Rp500.000</td>
                                        <td>Rp5.000.000</td>
                                        <td>Lorem Ipsum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class="table table-bordered" id="example6"> <!-- Add page break before this table -->
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah Setoran</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: #f2f2f2;">
                                <tr>
                                    <th>1</th>
                                    <td>13/09/24</td>
                                    <td>Rp50.000</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>13/09/24</td>
                                    <td>Rp50.000</td>
                                    <td>Lorem Ipsum</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr style="font-weight: semibold; background-color: #e0e0e0;">
                                    <td></td> <!-- Garis pada kolom No -->
                                    <td colspan="1">Total:</td>
                                    <td>Rp100.000</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="printableTable" style="display: none;" class="mt-5">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr>
                    <th colspan="2"
                        style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">Data
                        Nasabah</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #f2f2f2">
                    <td style="border: 1px solid black; padding: 8px;">Nama :</td>
                    <td style="border: 1px solid black; padding: 8px;">Farhan</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">No Hp :</td>
                    <td style="border: 1px solid black; padding: 8px;">089519094253</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">Anggota :</td>
                    <td style="border: 1px solid black; padding: 8px;">Bintara</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">Status :</td>
                    <td style="border: 1px solid black; padding: 8px;">Aktiv</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Simpanan Pokok :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Jasa Simpanan Pokok :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Simpanan Wajib :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Jasa Simpanan Wajib :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Simpanan Sukarela :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Jasa Simpanan Sukarela :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">Pinjaman :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Jasa Pinjaman :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Penghasilan Lainnya :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr class="text-danger">
                    <td style="border: 1px solid black; padding: 8px;">Total Saldo :</td>
                    <td style="border: 1px solid black; padding: 8px;">Rp200.000</td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; padding: 8px;">Keterangan :</td>
                    <td style="border: 1px solid black; padding: 8px;">Lorem ipsum dolor sit amet consectetur adipisicing.
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="page-break-before: always;">
            <table id="hal-2" class="mt-5"> <!-- Add page break before this table -->
                <thead>
                    <tr>
                        <th colspan="4"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            Detail Simpanan Pokok</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah Setoran</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">13/09/24</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem Ipsum</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td> <!-- Garis pada kolom No -->
                        <td colspan="1" style="border: 1px solid black; padding: 8px; text-align: right;">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tfoot>
            </table>
            <table id="hal-2" class="mt-4"> <!-- Add page break before this table -->
                <thead>
                    <tr>
                        <th colspan="4"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            Detail Simpanan Wajib</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah Setoran</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">13/09/24</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem Ipsum</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td> <!-- Garis pada kolom No -->
                        <td colspan="1" style="border: 1px solid black; padding: 8px; text-align: right;">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tfoot>
            </table>
            <table id="hal-2" class="mt-4"> <!-- Add page break before this table -->
                <thead>
                    <tr>
                        <th colspan="4"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            Detail Simpanan Sukarela</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah Setoran</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">13/09/24</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem Ipsum</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td> <!-- Garis pada kolom No -->
                        <td colspan="1" style="border: 1px solid black; padding: 8px; text-align: right;">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tfoot>
            </table>
            <table id="hal-2" class="mt-4"> <!-- Add page break before this table -->
                <thead>
                    <tr>
                        <th colspan="4"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            Detail Penghasilan Lainnya</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah Setoran</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">13/09/24</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem Ipsum</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td> <!-- Garis pada kolom No -->
                        <td colspan="1" style="border: 1px solid black; padding: 8px; text-align: right;">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div style="page-break-before: always;">
            <table id="hal-2" class="mt-5"> <!-- Add page break before this table -->
                <thead>
                    <tr>
                        <th colspan="12"
                            style="text-align: center; padding: 8px; background-color: #f2f2f2; border: 1px solid black;">
                            Detail Peminjaman</th>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Nama</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Waktu</th>
                        <th style="border: 1px solid black; padding: 8px;">Jasa</th>
                        <th style="border: 1px solid black; padding: 8px;">Cicilan</th>
                        <th style="border: 1px solid black; padding: 8px;">Pokok</th>
                        <th style="border: 1px solid black; padding: 8px;">Total Telah Dicicil</th>
                        <th style="border: 1px solid black; padding: 8px;">Total Jasa</th>
                        <th style="border: 1px solid black; padding: 8px;">Sisa Cicilan</th>
                        <th style="border: 1px solid black; padding: 8px;">Ket</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">Peminjaman pertama</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp10.000.000</td>
                        <td style="border: 1px solid black; padding: 8px;">01 Januari 2024</td>
                        <td style="border: 1px solid black; padding: 8px;">10 bulan</td>
                        <td style="border: 1px solid black; padding: 8px;">1%</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp1.100.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp1.000.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp5.500.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp500.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp5.000.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem Ipsum</td>
                    </tr>
                </tbody>
            </table>
            <table id="hal-2" class="mt-4"> <!-- Add page break before this table -->
                <thead>
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">No</th>
                        <th style="border: 1px solid black; padding: 8px;">Tanggal</th>
                        <th style="border: 1px solid black; padding: 8px;">Jumlah Setoran</th>
                        <th style="border: 1px solid black; padding: 8px;">Keterangan</th>
                    </tr>
                </thead>
                <tbody style="background-color: #f2f2f2;">
                    <tr>
                        <th style="border: 1px solid black; padding: 8px;">1</th>
                        <td style="border: 1px solid black; padding: 8px;">13/09/24</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;">Lorem Ipsum</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr style="font-weight: semibold; background-color: #e0e0e0;">
                        <td style="border: 1px solid black; padding: 8px;"></td> <!-- Garis pada kolom No -->
                        <td colspan="1" style="border: 1px solid black; padding: 8px; text-align: right;">Total:</td>
                        <td style="border: 1px solid black; padding: 8px;">Rp50.000</td>
                        <td style="border: 1px solid black; padding: 8px;"></td>
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
        new DataTable('#example2');
        new DataTable('#example3');
        new DataTable('#example4');
        new DataTable('#example5');
        new DataTable('#example6');

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
