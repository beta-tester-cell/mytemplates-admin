<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="rekap-data-mahasiswa-kampus.php">Data Mahasiswa</a>
        <a href="rekap-data-mahasiswa-prodi.php">Data Mahasiswa Per-Prodi</a>
        <a href="rekap-data-mahasiswa.php">Detail Mahasiswa</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="rekap-data-mahasiswa-prodi.php" class="btn btn-link btn-danger px-20">
                        Back
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail Mahasiswa</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="text-kampus">
                    <font><span style="font-size:18px;"><b>Jakarta Pusat (Kramat Raya)</b></span></font><br>
                    <font><span style="font-size:16px;">Tahun Angkatan : 2020</span></font><br>
                    <font><span style="font-size:16px;">[00990] Manajemen Informatika</span></font>
                </div>


                <div class="table-responsive my-1">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Alamat</th>
                                <th>Telp</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Total SKS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>201992001</td>
                                <td>IRfan Zaadin</td>
                                <td>Sunter</td>
                                <td>08199887889</td>
                                <td>Irfan@gmail.com</td>
                                <td>Aktif</td>
                                <td>48 SKS</td>
                                <td>
                                    <a href="rekap-detail-mahasiswa.php">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>201992001</td>
                                <td>Khaerul IStafa</td>
                                <td>Sunter</td>
                                <td>08199887889</td>
                                <td>Irfan@gmail.com</td>
                                <td>Aktif</td>
                                <td>48 SKS</td>
                                <td>
                                    <a href="#">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>201992001</td>
                                <td>Rosihan Arbisaid</td>
                                <td>Sunter</td>
                                <td>08199887889</td>
                                <td>Irfan@gmail.com</td>
                                <td>Aktif</td>
                                <td>48 SKS</td>
                                <td>
                                    <a href="#">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>201992001</td>
                                <td>Fadillah Nurfitrah</td>
                                <td>Sunter</td>
                                <td>08199887889</td>
                                <td>Irfan@gmail.com</td>
                                <td>Aktif</td>
                                <td>48 SKS</td>
                                <td>
                                    <a href="#">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">Total</th>
                                <th colspan="7">34000</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>