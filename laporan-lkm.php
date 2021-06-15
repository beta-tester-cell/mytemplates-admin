<?php include('header.php') ?>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Report Lembar Kegiatan Mengajar</h6>
                </div>

                <div class="d-flex flex-space-between">
                    <div class="filter-monitor">
                        <select name="tahunakademik" id="tahunakademik">
                            <option value="0">-- Pilih Tahun Akademik --</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2020/2021">2019/2020</option>
                            <option value="2020/2021">2018/2019</option>
                        </select>
                        <select name="semester" id="semester">
                            <option value="0">-- Pilih Semester --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <select name="namadosen" id="namadosen">
                            <option value="0">-- Pilih Nama Dosen --</option>
                            <option value="0000234">Masria M.Kom</option>
                            <option value="0000124">Khaerul Istafa</option>
                            <option value="1231313">Irfan Zadin</option>
                        </select>
                        <select name="matakuliah" id="matakuliah">
                            <option value="0">-- Pilih Mata Kuliah --</option>
                            <option value="2331">Basis Data</option>
                            <option value="1233">MySql</option>
                            <option value="5551"> Visual Basic</option>
                        </select>
                    </div>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>

                </div>

                <div class="list-nilai py-1">


                    <div class="table-responsive list-table-nilai">
                        <table class="basic-table" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-left">Kelas</th>
                                    <th class="align-left">Pert Ke</th>
                                    <th class="align-left">Ruang</th>
                                    <th class="align-left">Tanggal</th>
                                    <th class="align-left">Pokok Bahasan</th>
                                    <th class="align-left">Sub Pokok Bahasan</th>
                                    <th class="align-left">Tugas</th>
                                    <th class="align-left">Status</th>
                                    <th class="align-left">Kehadiran</th>
                                    <th class="align-left">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IK01</td>
                                    <td>1</td>
                                    <td>LMS Online</td>
                                    <td>2021-07-09</td>
                                    <td>Pengertian Basis Data</td>
                                    <td>Sejarah Basis Data</td>
                                    <td>-</td>
                                    <td>on Track</td>
                                    <td>25</td>
                                    <td><a href="laporan-detail-lkm.php">View</a></td>
                                </tr>
                                <tr>
                                    <td>IK01</td>
                                    <td>2</td>
                                    <td>LMS Online</td>
                                    <td>2021-07-16</td>
                                    <td>Struktur Data</td>
                                    <td>Memahami Struktur Data</td>
                                    <td>Membuat Struktur Data</td>
                                    <td>Make-up class</td>
                                    <td>25</td>
                                    <td><a href="laporan-detail-lkm.php">View</a></td>
                                </tr>
                                <tr>
                                    <td>IK01</td>
                                    <td>3</td>
                                    <td>LMS Online</td>
                                    <td>2021-07-21</td>
                                    <td>Pengertian Database</td>
                                    <td>Struktur Database</td>
                                    <td>Membuat Database</td>
                                    <td>on Track</td>
                                    <td>25</td>
                                    <td><a href="laporan-detail-lkm.php">View</a></td>
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