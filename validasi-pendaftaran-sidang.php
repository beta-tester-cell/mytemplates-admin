<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
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
                    <h6>List Validasi Pendaftaran Sidang</h6>
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
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-link btn-secondary"> Add New </button>
                </div>
                <div class="table-responsive py-1">
                    <table id="datatable" class="table-list" border="1">
                        <thead>
                            <tr class="thead-color">
                                <th class="align-center">No</th>
                                <th class="align-left">Validasi</th>
                                <th class="align-center">Inisial</th>
                                <th class="align-center">Value</th>
                                <th class="align-center">Periode</th>
                                <th class="align-center">Jenis Sidang</th>
                                <th class="align-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">TOtal SKS </td>
                                <td class="align-center">SKS</td>
                                <td class="align-center">24</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">2</td>
                                <td class="align-left">Nilai D Maksmial 1 </td>
                                <td class="align-center">D</td>
                                <td class="align-center">1</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                             <tr>
                                <td class="align-center">3</td>
                                <td class="align-left">Tidak Ada NIlai E </td>
                                <td class="align-center">E</td>
                                <td class="align-center">0</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>	
                             <tr>
                                <td class="align-center">4</td>
                                <td class="align-left">Lunas Biaya Kuliah</td>
                                <td class="align-center">Biaya</td>
                                <td class="align-center">Y</td>
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