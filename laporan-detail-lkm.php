<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Report</a>
        <a href="laporan-lkm.php">Report LKM</a>
        <a href="laporan-detail-lkm.php">Detail Report LKM</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <a href='laporan-lkm.php' class="btn btn-link btn-danger px-20">Back</a>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail LKM Dosen Per- Pertemuan</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="grid-3 grid-gap-1">
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
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th class="align-left">Nim</th>
                                <th class="align-left">Nama Mahasiswa</th>
                                <!--  <th class="align-left">Jurusan</th> -->
                                <th class="align-left">A</th>
                                <th class="align-left">H</th>
                                <th class="align-left">I</th>
                                <th class="align-left">S</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1222109</td>
                                <td>Rosihan Arbisaid</td>
                                <td>-</td>
                                <td>H</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>1222109</td>
                                <td>Irfan Zadin</td>
                                <td>A</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>1222109</td>
                                <td>Khaerul Istafa</td>
                                <td>-</td>
                                <td>H</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
</div>
<?php include('footer-datatable.php') ?>