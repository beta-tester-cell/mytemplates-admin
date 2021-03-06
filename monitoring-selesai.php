<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Cabang</a>
        <a href="#">Perkuliahan</a>
        <a href="monitoring-perkuliahaan.php">Monitoring Perkuliahan</a>
        <a href="#">Monitoring Perkuliahan Selesai</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <a href="monitoring-perkuliahaan.php" class="btn btn-link btn-danger px-20">Back</a>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail LKM Per- Pertemuan</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="grid-4 grid-gap-1">
                    <div class="my-1">
                        <label><b>Nama Dosen :</b></label><br>
                        <span>[122233] Sabrina, M.Kom</span><br>
                        <label><b>Matakuliah :</b></label><br>
                        <span>[009000] Basis Data</span><br>
                        <label><b>Tahun Akademik :</b></label><br>
                        <span>2020/2021</span>
                    </div>
                    <div class="my-1">
                        <label><b>Kelas :</b></label><br>
                        <span>IK01</span><br>
                        <label><b>SKS :</b></label><br>
                        <span>4 ( 28 Pertemuan )</span><br>
                        <label><b>Semester:</b></label><br>
                        <span>1 ( Ganjil )</span>
                    </div>
                    <div class="my-1">
                        <label><b>Materi :</b></label><br>
                        <span>Pengertian Basis Data</span><br>
                        <label><b>Sub Materi :</b></label><br>
                        <span>Sejarah Basis Data</span><br>
                        <label><b>Pertemuan Ke :</b></label><br>
                        <span>1</span>
                    </div>
                    <div class="my-1">
                        <label><b>Jam Mulai :</b></label><br>
                        <span>08:00 - 09:30</span><br>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th class="align-left">Nim</th>
                                <th class="align-left">Nama Mahasiswa</th>
                                <th class="align-center">A</th>
                                <th class="align-center">H</th>
                                <th class="align-center">I</th>
                                <th class="align-center">S</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1222109</td>
                                <td>Rosihan Arbisaid</td>
                                <td class="align-center">-</td>
                                <td class="align-center">H</td>
                                <td class="align-center">-</td>
                                <td class="align-center">-</td>
                            </tr>
                            <tr>
                                <td>1222109</td>
                                <td>Irfan Zadin</td>
                                <td class="align-center">A</td>
                                <td class="align-center">-</td>
                                <td class="align-center">-</td>
                                <td class="align-center">-</td>
                            </tr>
                            <tr>
                                <td>1222109</td>
                                <td>Khaerul Istafa</td>
                                <td class="align-center">-</td>
                                <td class="align-center">H</td>
                                <td class="align-center">-</td>
                                <td class="align-center">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
</div>
<?php include('footer-datatable.php') ?>