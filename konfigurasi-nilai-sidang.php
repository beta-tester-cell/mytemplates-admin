<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
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
                    <h6>List Nilai Komponen Sidang</h6>
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
                    <a href="form-nilai-sidang.php" class="btn btn-link btn-secondary"> Add New </a>
                </div>
                <div class="table-responsive py-1">
                    <table id="datatable" class="table-list" border="1">
                        <thead>
                            <tr class="thead-color">
                                <th class="align-center">No</th>
                                <th class="align-left">Komponen</th>
                                <th class="align-center">Keterangan</th>
                                <th class="align-center">Bobot</th>
                                <th class="align-center">Periode</th>
                                <th class="align-center">Jenis Sidang</th>
                                <th class="align-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">Kesesuaian Susunan TA Bagian Awal (cover, pengesahan, keterangan perusahaan, kata pengantar dan daftar isi) dengan Pedoman Tugas Akhir</td>
                                <td class="align-center">Ketua Penguji</td>
                                <td class="align-center">5</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                             <tr>
                                <td class="align-center">2</td>
                                <td class="align-left">Kesesuaian Susunan TA Bagian Isi ( pendahuluan, landasan teori, profil perusahaan, pembahasan, dan penutup) dengan Pedoman Tugas Akhir</td>
                                <td class="align-center">Ketua Penguji</td>
                                <td class="align-center">5</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr> 
                            <tr>
                                <td class="align-center">3</td>
                                <td class="align-left">mat Tata Cara Penulisan Kata, Penomoran, Kutipan dan Daftar Pustaka dengan Pedoman Tugas Akhi</td>
                                <td class="align-center">Ketua Penguji</td>
                                <td class="align-center">5</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
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