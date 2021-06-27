<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Mahasiswa</a>
        <a href="#">Perkuliahan</a>
        <a href="jadwal-ujian-semester.php">Ujian Semester</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Jadwal Ujian Semester</h6>
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
                            <select name="tahun-akademik" id="tahun-akademik">
                                <option value="">-- Tahun Akademik --</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021" selected>2020/2021</option>
                                <option value="2021/2022">2021/2022</option>
                            </select>
                        </div>

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

                        <div class="input-group">
                            <select name="ujian" id="ujian">
                                <option value="">-- Pilih Jenis Ujian --</option>
                                <option value="1" selected="">UTS</option>
                                <option value="2">UAS</option>
                            </select>
                        </div>

                        <a href="cetak-kartu-ujian.php" target="_blank"><button class="btn btn-submit btn-primary" style="width: 190px;padding:0.5rem;margin-top: 0px" id="button-view">Download Kartu Ujian</button></a>

                    </div>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Smt</th>
                                <th>Kelas</th>
                                <th>Ruang</th>
                                <th>Tanggal</th>
                                <th>Durasi</th>
                                <th>Soal</th>
                                <th>Jawaban</th>
                                <th>Status</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Pendidikan Agama</td>
                                <td>4</td>
                                <td>1</td>
                                <td>IK_Reguler 01</td>
                                <td>R.30</td>
                                <td>20 Juni 2021</td>
                                <td>08.00 - 09.45</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Selesai</td>
                                <td>-</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Basis Data</td>
                                <td>4</td>
                                <td>1</td>
                                <td>IK_Reguler 02</td>
                                <td>LMS-Online</td>
                                <td>21 Juni 2021</td>
                                <td>10.00 - 12.00</td>
                                <td><a href="#"><i class="fa fa-download"></i></a></td>
                                <td>-</td>
                                <td>Berlangsung</td>
                                <td><a href="#"><i class="fa fa-upload"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>