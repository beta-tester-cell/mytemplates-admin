<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Verifikasi Soal Ujian Periode Ganjil 2020/2021</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-header form-inputs">
                    <div class="form d-flex grid-4 grid-gap-1 py-1 my-1">
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
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th class="dt-center">No</th>
                                <th>Mata Kuliah</th>
                                <th class="dt-center">Smt</th>
                                <th>Kelas</th>
                                <th class="dt-center">Jenis Ujian</th>
                                <th>Ruang</th>
                                <th>Hari & Tanggal</th>
                                <th class="dt-center">Status</th>
                                <th class="dt-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="dt-center">1</td>
                                <td>[89900] Basis Data</td>
                                <td class="dt-center">1</td>
                                <td>IK_REGuler 01</td>
                                <td class="dt-center">UTS</td>
                                <td>LMS-Online</td>
                                <td>Selasa, 15 Juni 2021</td>
                                <td class="dt-center">Terverifikasi</td>
                                <td class="dt-center">
                                    <a href="view-soal-ujian.php" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="dt-center">1</td>
                                <td>[89900] Basis Data</td>
                                <td class="dt-center">1</td>
                                <td>IK_REG_Susulan</td>
                                <td class="dt-center">UTS</td>
                                <td>LMS-Online</td>
                                <td>Selasa, 15 Juni 2021</td>
                                <td class="dt-center">Terverifikasi</td>
                                <td class="dt-center">
                                    <a href="view-soal-ujian.php" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="dt-center">1</td>
                                <td>[89900] Basis Data</td>
                                <td class="dt-center">1</td>
                                <td>IK_REGuler 01</td>
                                <td class="dt-center">UTS</td>
                                <td>R.202</td>
                                <td>Selasa, 15 Juni 2021</td>
                                <td class="dt-center">Terverifikasi</td>
                                <td class="dt-center">
                                    <a href="view-soal-ujian.php" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
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