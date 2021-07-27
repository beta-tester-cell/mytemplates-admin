<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Dosen</a>
        <a href="jadwal-perkuliahan-dosen.php">Jadwal Perkuliahan</a>
        <a href="kegiatan-perkuliahan.php">Kegiatan Perkuliahan</a>
        <a href="detail-lkm-dosen.php">Detail Pertemuan</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="kegiatan-perkuliahan.php" class="btn btn-link btn-danger"> Back
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail LKM Dosen Per-Pertemuan</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <div class="grid-3 grid-gap-1 py-1">
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Nama Dosen :</strong></span>
                                <span class="text-mature">[122332] Sabrina, M.Kom</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Kelas :</strong></span>
                                <span class="text-mature">IK01</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Materi :</strong></span>
                                <span class="text-mature">Pengertian Basis Data</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>MataKuliah :</strong></span>
                                <span class="text-mature">[009000] Basis Data</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>SKS :</strong></span>
                                <span class="text-mature">4 (28 Pertemuan)</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Sub Materi :</strong></span>
                                <span class="text-mature">Sejarah Basis Data</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Tahun Akademik :</strong></span>
                                <span class="text-mature">2020/2021</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Semester :</strong></span>
                                <span class="text-mature">1 (Ganjil)</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Pertemuan Ke :</strong></span>
                                <span class="text-mature">1</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th class="align-center">NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
                                <th class="align-center">Kehadiran</th>
                                <th class="align-center">Check In</th>
                                <th class="align-center">Location</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1222009</td>
                                <td>Rosihan Arbi Said</td>
                                <td>Manajemen Informatika</td>
                                <td class="align-center"><b>H</b></td>
                                <td class="align-center">08.19</td>
                                <td class="align-center">
                                    <a href="#"><span class="menu-icon"><i class="fa fa-map-marker"></i></span></a>
                                </td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td class="align-center">1222009</td>
                                <td>Irfan Zadin</td>
                                <td>Manajemen Informatika</td>
                                <td class="align-center"><span class="text-danger"><b>I</b></span></td>
                                <td class="align-center">-</td>
                                <td class="align-center">
                                    -
                                </td>
                                <td>Kawinan Kakak</td>
                            </tr>
                            <tr>
                                <td class="align-center">1222009</td>
                                <td>Khairul Mustafa</td>
                                <td>Manajemen Informatika</td>
                                <td class="align-center"><b>H</b></td>
                                <td class="align-center">08.12</td>
                                <td class="align-center">
                                    <a href="#"><span class="menu-icon"><i class="fa fa-map-marker"></i></span></a>
                                </td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex flex-start py-1">
                    <button type="submit" class="btn btn-secondary btn-link" data-toggle="modal" data-target="#verifikasilkm" id="verifikasi">Verifikasi</button>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal" id="verifikasilkm" tabindex="-1" aria-labelledby="ValidasiUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fit-custom">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="ValidasiUpdateLabel">Tambah Mahasiswa Ploting PA</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="height: 150px;">
                    <h6 style="text-align:center; ">Apakah anda yakin??</h6>
                    <h6 style="font-size: 20px; text-align:center; line-height: inherit;"> Melakukan Verifikasi Berarti Anda Mengirimkan Data Absensi Kepada Bagian Pendidikan</h6>
                </div>
                <div class="modal-footer">
                    <a href="kegiatan-perkuliahan-old.php" class="btn btn-secondary text-center" style="height: 42px;">Yes</a>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tinjau Ulang</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>