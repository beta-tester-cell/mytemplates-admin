<?php include('header.php') ?>

<div class="content">
    <div class="container">
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
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size:20px;">Daftar Jadwal Ujian Semester</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
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
                    <select name="semester" id="semester">
                        <option value="0">-- Pilih Semester --</option>
                        <option value="1">Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                    </select>
                </div>

                <div class="grid-1">
                    <div class="table-responsive">
                        <table id="scroll-horizontal-datatable" class="table-list">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Matakuliah</th>
                                    <th>SKS</th>
                                    <th>Smt</th>
                                    <th>Kelas</th>
                                    <th>Ruang</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Jenis</th>
                                    <th>Pengawas</th>
                                    <th>Soal Ujian</th>
                                    <th>Jenis Soal</th>
                                    <th>Sumber Soal</th>
                                    <th>Kategori Ujian</th>
                                    <th>Total Mhs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td>Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td>IK_Reguler_01</td>
                                    <td>R.302</td>
                                    <td>Selasa, 20 Juni 2021</td>
                                    <td>08.00 - 09.45</td>
                                    <td class="align-center">UTS</td>
                                    <td>Masria, M.Kom</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">Lokal</td>
                                    <td>Masria, M.Kom</td>
                                    <td class="align-center">Utama</td>
                                    <td class="align-center">20</td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td>Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td>IK_Reguler_02</td>
                                    <td>LMS-Online</td>
                                    <td>Selasa, 20 Juli 2021</td>
                                    <td>10.00 - 11.45</td>
                                    <td class="align-center">UTS</td>
                                    <td>Masria, M.Kom</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">Lokal</td>
                                    <td>Masria, M.Kom</td>
                                    <td class="align-center">Utama</td>
                                    <td class="align-center">27</td>
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