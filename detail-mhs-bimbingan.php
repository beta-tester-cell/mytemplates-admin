<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Cabang</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="list-dospem.php">Pengajuan Dosen Pembimbing</a>
        <a href="detail-list-dospem.php">Detail Dosen Pembimbing</a>
        <a href="detail-mhs-Bimbingan.php">Detail Mahasiswa Bimbingan</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail Mahasiswa Bimbingan Periode 21</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="py-1 grid-detail-list grid-gap-1">
                    <div style="width:150px;height:auto;">
                        <img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">
                    </div>
                    <div class="detail-list">
                        <div class="grid-4 grid-gap-2">
                            <div class="list-1">
                                <div class="detail-list">
                                    <label><b>Nama Mahasiswa</b></label><br>
                                    <span>[180099298] Rohmana</span>
                                </div>

                                <label><b>Dosen Pembimbing</b></label><br>
                                <span>[002899] Masria, M.Kom</span>
                            </div>
                            <div class="list-1">
                                <div class="detail-list">
                                    <label><b>Prodi</b></label><br>
                                    <span>[022] Manajemen Informatika</span>
                                </div>

                                <label><b>Judul TA/Skripsi</b></label><br>
                                <span>Sistem Perencanaan Budget Pada LP3I College (E-Budgeting)</span>
                            </div>
                            <div class="list-1">
                                <div class="detail-list">
                                    <label><b>Kampus</b></label><br>
                                    <span>Jakarta Pusat ( Kramat Raya)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-nilai">
                        <a href="detail-list-dospem.php" class="btn btn-link btn-danger export-list">Back</a>
                    </div>
                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table id="datatable">
                            <thead class="bg-color-primary">
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Tgl Bimbimgan</th>
                                    <th class="align-left">Bimbingan Ke</th>
                                    <th class="align-left">Materi</th>
                                    <th class="align-left">Catatan Pembimbing 1</th>
                                    <th class="align-left">Catatan Pembimbing 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">Kamis, 15 Juli 2021</td>
                                    <td class="align-left">Ke 1</td>
                                    <td class="align-left">BAB 1</td>
                                    <td class="align-left">
                                        <ul style="list-style-type:disc">
                                            <li>Perbaiki Penulisannya di BAB 1</li>
                                            <li>Pendahuluan di perbaiki karena tidak sesuai dengan jdul</li>
                                            <li>Batsan masalah dipersempit supaya tidak terlalu meluas</li>
                                        </ul>
                                    </td>
                                    <td class="align-left">-</td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">Sabtu 17 Juli 2021</td>
                                    <td class="align-left">Ke 2</td>
                                    <td class="align-left">BAB 1, BAB 2</td>
                                    <td class="align-left">
                                        <ul style="list-style-type:disc">
                                            <li>BAB 1 Sudah OK</li>
                                            <li>BAB 2 Cari refernsi Buku yang sesui</li>
                                        </ul>
                                    </td>
                                    <td class="align-left">-</td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">Senin 19 Juli 2021</td>
                                    <td class="align-left">Ke 3</td>
                                    <td class="align-left">BAB 2</td>
                                    <td class="align-left">
                                        <ul style="list-style-type:disc">
                                            <li>BAB 2 Sudah OK</li>
                                        </ul>
                                    </td>
                                    <td class="align-left">-</td>
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