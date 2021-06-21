<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Rekap Kehadiran</h6>
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

                        <div class="my-1">
                         <div class="input-group">
                            <select name="tahun-akademik" id="tahun-akademik">
                                <option value="">-- Tahun Akademik --</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021" selected>2020/2021</option>
                                <option value="2021/2022">2021/2022</option>
                            </select>
                        </div>
                    </div>

                        <div class="my-1">
                        <div class="input-group">
                            <select name="semester" id="semester">
                                <option value="">-- Pilih Semester --</option>
                                <option value="1" selected>Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                                <option value="7">Semester 7</option>
                                <option value="8">Semester 8</option>
                            </select>
                        </div>
                    </div>

                        <div class="my-1">
                            <input type="date" name="tanggal">
                        </div>

                        <div class="my-1">
                        <div class="input-group">
                            <select name="matakuliah" id="matakuliah">
                                <option value="">-- Pilih Mata Kuliah --</option>
                                <option value="Aplikasi Komputer 1">Aplikasi Komputer 1</option>
                                <option value="Aplikasi Komputer 2">Aplikasi Komputer 2</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman PHP">Pemrograman PHP</option>
                            </select>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table id="datatable-jadwal-ujian-semester" class="table-list">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th class="dt-center">SKS</th>
                                <th class="dt-center">Smt</th>
                                <th>Dosen</th>
                                <th>Ruang</th>
                                <th class="dt-center">Hari</th>
                                <th class="dt-center">Tanggal</th>
                                <th class="dt-center">Waktu</th>
                                <th class="dt-center">T. Per</th>
                                <th class="dt-center">R. Per</th>
                                <th class="dt-center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>IK-Reguler 01</td>
                                <td>Basis Data</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td>Masria, M.Kom</td>
                                <td>LMS-Online</td>
                                <td class="dt-center">Selasa</td>
                                <td class="dt-center">20 Juni 2021</td>
                                <td class="dt-center">08.00 - 09.45</td>
                                <td class="dt-center">28</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="rekap-kehadiran-detail.php" target="_blank">View</a></td>
                            </tr>

                            <tr>
                                <td>IK-Reguler 01</td>
                                <td>Aplikasi Komputer 1</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td>Masria, M.Kom</td>
                                <td>Lab-2</td>
                                <td class="dt-center">Selasa</td>
                                <td class="dt-center">20 Juni 2021</td>
                                <td class="dt-center">08.00 - 09.45</td>
                                <td class="dt-center">28</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="rekap-kehadiran-detail.php" target="_blank">View</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>