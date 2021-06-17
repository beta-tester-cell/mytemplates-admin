<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List KRS Mahasiswa</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="my-2 d-flex flex-change grid-gap-1">
                    <span class="fa fa-filter"></span>
                    <select name="TA" id="TA">
                        <option value="0">-- Pilih Tahun Akademik --</option>
                        <option value="1">2018/2019</option>
                        <option value="2">2019/2020</option>
                        <option value="3">2020/2021</option>
                    </select>
                    <select name="kelas" id="kelas">
                        <option value="0">-- Pilih Kelas --</option>
                        <option value="1">Reguler</option>
                        <option value="2">Karyawan</option>
                    </select>
                    <select name="semester" id="semester">
                        <option value="0">-- Pilih Semester --</option>
                        <option value="1">Genap</option>
                        <option value="2">Ganjil</option>
                    </select>
                </div>
                <div class="my-1">
                    <div class="info-krs">
                        <span><b>Dosen</b></span>
                        <span><b>: [989909] Masria,M.M</b></span>
                    </div>
                    <div class="info-krs">
                        <span><b>Matakuliah</b></span>
                        <span><b>: [989909] Basis Data</b></span>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <th>TA</th>
                            <th>Semester</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi</th>
                            <th>Tahun Angkatan</th>
                            <th>KRS</th>
                            <th>Periode</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>19910001</td>
                                <td>Irfan Zainal Abidin</td>
                                <td>Manajemen Informatika</td>
                                <td>2019</td>
                                <td>Sudah</td>
                                <td>2021[Ganjil]</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>209910002</td>
                                <td>Rosihan Arbisaid</td>
                                <td>Manajemen Informatika</td>
                                <td>2020</td>
                                <td>Sudah</td>
                                <td>2021[Ganjil]</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>209910003</td>
                                <td>Khaerul</td>
                                <td>Manajemen Informatika</td>
                                <td>2020</td>
                                <td>Sudah</td>
                                <td>2021[Ganjil]</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>209910004</td>
                                <td>Rakhmat SH</td>
                                <td>Manajemen Informatika</td>
                                <td>2019</td>
                                <td>Sudah</td>
                                <td>2021[Ganjil]</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>209910005</td>
                                <td>Rizal</td>
                                <td>Manajemen Informatika</td>
                                <td>2020</td>
                                <td>Sudah</td>
                                <td>2021[Ganjil]</td>
                            </tr>

                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>209910006</td>
                                <td>Fadillah Nur fitrah</td>
                                <td>Manajemen Informatika</td>
                                <td>2020</td>
                                <td class="text-danger">Belum</td>
                                <td>2021[Ganjil]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>