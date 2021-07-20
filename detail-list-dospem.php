<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Cabang</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="list-dospem.php">Pengajuan Dosen Pembimbing</a>
        <a href="detail-list-dospem.php">Detail Dosen Pembimbing</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Mahasiswa Bimbingan Periode 21</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-space-between flex-change grid-gap-1 list-nilai">
                    <div class="filter-monitor ">
                        <select name="dospem" id="dospem">
                            <option value="0">-- Pilih Nama Pembimbing --</option>
                            <option value="Masria M.Kom" selected>Masria M.Kom</option>
                            <option value="Nasril, M.Kom">Nasril, M.Kom</option>
                            <option value="Teddy Setiadi">Teddy Setiadi</option>
                        </select>
                        <select name="periode" id="periode">
                            <option value="0">-- Pilih Periode --</option>
                            <option value="21" selected>21</option>
                            <option value="20">20</option>
                            <option value="19">19</option>
                        </select>
                    </div>
                        <a href="list-dospem.php" class="btn btn-link btn-danger export-list">Back</a>
                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table id="datatable">
                            <thead class="bg-color-primary">
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Nama Mahasiswa</th>
                                    <th class="align-left">Prodi</th>
                                    <th class="align-left">Kampus</th>
                                    <th class="align-left">Judul</th>
                                    <th class="align-center">Proses Bimbingan</th>
                                    <th class="align-center">Dokumen Proposal</th>
                                </tr>
                            </thead>
                            <tbody>
                             <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">
                                    <div class="d-flex flex-column">
                                      <span>Rohmana</span>
                                      <span>180099298</span>
                                    </div>
                                </td>
                                <td class="align-left"> Manajemen Informatika 022 </td>
                                <td class="align-left">Jakarta Pusat (Kramat Raya)</td>
                                <td class="align-left">Sistem Perencanaan Budget Pada LP3I College (E-Budgeting)</td>
                                <td class="align-center">3</td>
                                <td class="align-center">
                                    <a href="detail-mhs-bimbingan.php"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                             <tr>
                                <td class="align-center">2</td>
                                <td class="align-left">
                                    <div class="d-flex flex-column">
                                      <span>Kosim</span>
                                      <span>180229298</span>
                                    </div>
                                </td>
                                <td class="align-left"> Manajemen Informatika 022 </td>
                                <td class="align-left">Cilodong</td>
                                <td class="align-left">Sistem Penerimaan Siswa Baru pada Sekolah SLB jakarta</td>
                                <td class="align-center">2</td>
                                <td class="align-center">
                                    <a href="detail-mhs-bimbingan.php"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">3</td>
                                <td class="align-left">
                                    <div class="d-flex flex-column">
                                      <span>Karim</span>
                                      <span>180094444</span>
                                    </div>
                                </td>
                                <td class="align-left"> Manajemen Informatika 022 </td>
                                <td class="align-left">Jakarta Pusat (Kramat Raya)</td>
                                <td class="align-left">Sistem Penjualan Pulsa Maret Cell</td>
                                <td class="align-center">-</td>
                                <td class="align-center">
                                    <a href="detail-mhs-bimbingan.php"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">4</td>
                                <td class="align-left">
                                    <div class="d-flex flex-column">
                                      <span>Hana Munawaroh</span>
                                      <span>180056444</span>
                                    </div>
                                </td>
                                <td class="align-left"> Manajemen Informatika 022 </td>
                                <td class="align-left">Bekasi</td>
                                <td class="align-left">Sistem Pencatatan Absensi Online</td>
                                <td class="align-center">1</td>
                                <td class="align-center">
                                    <a href="detail-mhs-bimbingan.php"><i class="fa fa-eye"></i></a>
                                </td>
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