<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="#">Gelombang</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Konfigurasi Kebutuhan Sidang</h6>
                </div>
                <ul class="menu-widget">
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-gelombang-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-gelombang-sidang.php">Gelombang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-gelombang-sidang.php">Gelombang</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-ploting-dospem.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-ploting-dospem.php">Ploting Dosen Pembimbing</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-ploting-dospem.php">Ploting Dosen Pembimbing</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-nilai-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-nilai-bimbingan.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/validasi-pendaftaran-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Data Konfigurasi</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="py-1">
                    <a href="form-gelombang-sidang.php" class="btn btn-link btn-secondary"> Add New </a>
                </div>
                <div class="table-responsive py-1">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr class="thead-color">
                                <th rowspan="2">No</th>
                                <th rowspan="2">Periode</th>
                                <th colspan="2" class="align-center">Pendaftaran Bimbingan</th>
                                <th colspan="2" class="align-center">Pendaftaran Sidang</th>
                                <th colspan="2" class="align-center">Revisi Tugas Akhir</th>
                                <th colspan="2" class="align-center">Sidang Ulang</th>
                                <th rowspan="2">Action</th>
                            </tr>
                            <tr class="thead-color">
                                <!-- Pendaftaran Bimbingan -->
                                <th class="align-center">Awal</th>
                                <th class="align-center">Akhir</th>
                                <!-- Pendaftaran Sidang -->
                                <th class="align-center">Awal</th>
                                <th class="align-center">Akhir</th>
                                <!-- Revisi Tugas Akhir -->
                                <th class="align-center">Awal</th>
                                <th class="align-center">Akhir</th>
                                <!-- Sidang Ulang -->
                                <th class="align-center">Awal</th>
                                <th class="align-center">Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>21</td>
                                <td>2021-06-01</td>
                                <td>2021-07-30</td>
                                <td>2021-09-01</td>
                                <td>2021-10-15</td>
                                <td>2021-12-01</td>
                                <td>2021-12-15</td>
                                <td>2022-01-01</td>
                                <td>2022-01-31</td>
                                <td class="align-center">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>20</td>
                                <td>2021-06-01</td>
                                <td>2021-07-30</td>
                                <td>2021-09-01</td>
                                <td>2021-10-15</td>
                                <td>2021-12-01</td>
                                <td>2021-12-15</td>
                                <td>2022-01-01</td>
                                <td>2022-01-31</td>
                                <td class="align-center">
                                    <span class="text-danger">InActive</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>