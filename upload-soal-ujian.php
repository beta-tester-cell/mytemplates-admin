<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Dosen</a>
        <a href="jadwal-perkuliahan-dosen.php">Jadwal Perkuliahan</a>
        <a href="upload-soal-ujian.php">Upload Soal Ujian</a>
    </div>
</div>
<div class="content">
    <div class="container" style="height: 80vh;">
        <div class="py-1 grid-custom-view grid-gap-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size:20px;">Tools Ujian Semester</h6>
                </div>

                <div class="grid-1">
                    <div class="my-0">
                        <span class="menu-icon"><i class="fa fa-calendar-check-o"></i></span>
                        <a href="ujian-semester.php">&nbsp;Jadwal Ujian Kelas Reguler</a>
                    </div>
                    <div class="my-0">
                        <span class="menu-icon"><i class="fa fa-upload"></i></span>
                        <a href="upload-soal-ujian.php">&nbsp;Upload Soal UTS/UAS</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-space-between align-center">
                    <h6 style="font-size:20px;margin:0px;">Upload Soal UTS/UAS</h6>
                    <a href="upload-soal-ujian-tambah.php" class="btn btn-link"><i class="fa fa-plus"></i> Add New</a>
                </div>

                <div class="grid-1">
                    <div class="table-responsive">
                        <table id="datatable" class="table-list">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Matakuliah</th>
                                    <th>SKS</th>
                                    <th>Smt</th>
                                    <th>Kelas</th>
                                    <th>File Soal</th>
                                    <th class="align-center">Status</th>
                                    <th>Jenis Soal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td>Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td>IK_Reguler_01</td>
                                    <td class="align-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                    <td class="align-center"><span class="btn-status btn-success">Terverifikasi</span></td>
                                    <td class="align-center">UTS</td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td>Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td>IK_Reguler_02</td>
                                    <td class="align-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                    <td class="align-center"><span class="btn-status btn-success">Terverifikasi</span></td>
                                    <td class="align-center">UTS</td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td>Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td>IK_Reguler_03</td>
                                    <td class="align-center"><a href="#"><i class="fa fa-download"></i></a></td>
                                    <td class="align-center"><span class="btn-status btn-danger">Belum Verifikasi</span></td>
                                    <td class="align-center">UTS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>