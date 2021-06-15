<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Report Absensi Mahasiswa</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="form-inputs">
                    <div class="form d-flex grid-4 grid-gap-1 py-1">
                        <div class="input-group">
                            <select name="tahun_akd" id="tahun_akd">
                                <option value="">Pilih Tahun Akademik</option>
                                <option value="1">2019/2020</option>
                                <option value="2" selected>2020/2021</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="semester" id="semester">
                                <option value="">Pilih Semester</option>
                                <option value="1" selected>1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="dosen" id="dosen">
                                <option value="">Pilih Dosen</option>
                                <option value="id_dosen" selected>Sabrina, S.Kom</option>
                                <option value="id_dosen">Fadillah, S.Kom</option>
                                <option value="id_dosen">Masria, M.Kom</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="mata_kuliah" id="mata_kuliah">
                                <option value="">Pilih Mata Kuliah</option>
                                <option value="kode_mk" selected>Basis Data</option>
                                <option value="kode_mk">Apilkasi Komputer 2</option>
                                <option value="kode_mk">SQL Server</option>
                            </select>
                        </div>  
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="basic-table display">
                        <thead>
                            <tr>
                                <th>Nama Dosen</th>
                                <th>Tipe Dosen</th>
                                <th>Kelas</th>
                                <th>Total MHS</th>
                                <th class="dt-left">Mata Kuliah</th>
                                <th>Smt</th>
                                <th>SKS</th>
                                <th class="dt-left">Hari & Waktu</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>[20102] Sabrina, M.Kom</td>
                                <td class="dt-center">A</td>
                                <td class="dt-center">IK01</td>
                                <td class="dt-center">16</td>
                                <td>Basis Data</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center">2</td>
                                <td>Senin, 08.15-09.45</td>
                                <td class="dt-center">Active</td>
                                <td class="dt-center"><a href="detail-report-absensi-mhs.php" class="btn-status btn-secondary">View</a></td>
                            </tr>
                            <tr>
                                <td>[20101] Fadillah, S.Kom</td>
                                <td class="dt-center">A</td>
                                <td class="dt-center">IK01</td>
                                <td class="dt-center">25</td>
                                <td>Aplikasi Komputer 2</td>
                                <td class="dt-center">3</td>
                                <td class="dt-center">2</td>
                                <td>Selasa, 08.15-09.45</td>
                                <td class="dt-center">Active</td>
                                <td class="dt-center"><a href="detail-report-absensi-mhs.php" class="btn-status btn-secondary">View</a></td>
                            </tr>
                            <tr>
                                <td>[20101] Masria, M.Kom</td>
                                <td class="dt-center">A</td>
                                <td class="dt-center">IK01</td>
                                <td class="dt-center">16</td>
                                <td>SQL Server</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center">4</td>
                                <td>Senin, 12.15-14.45</td>
                                <td class="dt-center">Active</td>
                                <td class="dt-center"><a href="detail-report-absensi-mhs.php" class="btn-status btn-secondary">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer-datatable.php') ?>