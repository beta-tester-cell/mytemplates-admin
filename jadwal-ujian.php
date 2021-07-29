<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="dashboard-page.php">Akademik Cabang</a>
        <a href="jadwal-ujian.php">Input Jadwal Ujian</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-jadwal-ujian.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD JADWAL UJIAN REGULER</span>
                    </a>
                    <a href="jadwal-ujian.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> DAFTAR UJIAN MODULER</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Jadwal Ujian Periode Ganjil 2020/2021</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="card-header form-inputs my-2">
                    <div class="form d-flex grid-4 grid-gap-1 py-1">
                        <div class="input-group">
                            <select name="ujian" id="ujian">
                                <option value="">Filter Jenis Ujian</option>
                                <option value="1">UTS</option>
                                <option value="2">UAS</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="jurusan" id="jurusan">
                                <option value="">Filter Jurusan</option>
                                <option value="1">Manajemen Informatika</option>
                                <option value="2">Akuntansi</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="tahun_akd" id="tahun_akd">
                                <option value="">Filter Tahun Akademik</option>
                                <option value="1">2019/2020</option>
                                <option value="2">2020/2021</option>
                                <option value="3">2021/2022</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="mata_kuliah" id="mata_kuliah">
                                <option value="">Filter Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="scroll-horizontal-datatable" class="table-list">
                        <thead style="white-space: nowrap;">
                            <tr>
                                <th>No</th>
                                <th class="dt-left">Program Studi</th>
                                <th>Mata Kuliah</th>
                                <th>Smt</th>
                                <th>Kelas</th>
                                <th>Ruang</th>
                                <th>Hari & Tanggal</th>
                                <th>Waktu</th>
                                <th>Jenis Ujian</th>
                                <th>Pengawas</th>
                                <th>Soal Ujian</th>
                                <th>Jenis Soal</th>
                                <th>Sumber Soal</th>
                                <th>Kategori Ujian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="dt-center">1</td>
                                <td>Manajemen Informatika</td>
                                <td>Basis Data</td>
                                <td class="dt-center">1</td>
                                <td>IK_Reguler 01</td>
                                <td>LMS-Online</td>
                                <td>Selasa, 15 Juni 2021</td>
                                <td>08.00 - 09.45</td>
                                <td class="dt-center">UTS</td>
                                <td>Masria, M.Kom</td>
                                <td class="dt-center">Tersedia</td>
                                <td>Lokal</td>
                                <td>Masria, M.Kom</td>
                                <td class="dt-center">Utama</td>
                                <td class="dt-center">
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="dt-center">2</td>
                                <td>Manajemen Informatika</td>
                                <td>Basis Data</td>
                                <td class="dt-center">1</td>
                                <td>IK_REG_Susulan</td>
                                <td>LMS-Online</td>
                                <td>Selasa, 15 Juni 2021</td>
                                <td>08.00 - 09.45</td>
                                <td class="dt-center">UTS</td>
                                <td>Susi</td>
                                <td class="dt-center">Tersedia</td>
                                <td>Lokal</td>
                                <td>Masria, M.Kom</td>
                                <td class="dt-center">Susulan</td>
                                <td class="dt-center">
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="dt-center">3</td>
                                <td>Manajemen Informatika</td>
                                <td>Pendidikan Pancasila</td>
                                <td class="dt-center">5</td>
                                <td>IK_Reguler 01</td>
                                <td>R. 302</td>
                                <td>Selasa, 15 Juni 2021</td>
                                <td>08.00 - 09.45</td>
                                <td class="dt-center">UTS</td>
                                <td>Karto</td>
                                <td class="dt-center">Tersedia</td>
                                <td>Terpusat</td>
                                <td>Tim Penyusun</td>
                                <td class="dt-center">Utama</td>
                                <td class="dt-center">
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
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