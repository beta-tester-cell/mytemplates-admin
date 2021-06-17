<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="report-khs-cetak-komponen.php" target="_blank" class="btn-status btn-primary"> CETAK KOMPONEN</a>
                    <a href="report-khs-cetak.php" target="_blank" class="btn-status btn-primary" style="margin-left:10px"> CETAK KHS</a>
                </div>
            </div>
        </div>

        <div class="grid-2 grid-gap-1 py-1">

            <div class="card">
                <div class="card-header">
                    <h6>Report Nilai Komponen</h6>
                </div>

                <div class="my-1">
                    <label><b>Tahun Akademik</b></label>
                    <select class="width-100" name="tahunakademik" id="tahunakademik">
                        <option value="">-- Pilih Tahun Akademik --</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2020/2021" selected>2020/2021</option>
                        <option value="2021/2022">2021/2022</option>
                    </select>
                </div>

                <div class="my-1">
                    <label><b>Pilih Semester</b></label>
                    <select class="width-100" name="semester" id="semester">
                        <option value="">-- Pilih Semester --</option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>

                <div class="my-1">
                    <label><b>Pilih Jurusan</b></label>
                    <select class="width-100" name="jurusan" id="jurusan">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="1">Administrasi Bisnis</option>
                        <option value="2">Administrasi Perkantoran</option>
                        <option value="3" selected>Informatika Komputer</option>
                        <option value="4">Komputerisasi Akuntansi</option>
                    </select>
                </div>

                <button type='submit' class="btn btn-link btn-secondary px-20">Submit</button>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Nilai Komponen Mahasiswa </h6>

                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button">Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="py-1">
                     <input type="checkbox" name="check-all" id="check-all">
                    <label><b>Check All</b></label>
                </div>


                <div class="table-responsive">
                    <table class="basic-table">
                        <thead>
                            <tr>
                                <th colspan="2">Nama Mahasiswa</th>
                                <th>Jurusan</th>
                                <th>Total SKS</th>
                                <th>Realisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>[0290091] Fadilah Nurfitrah</td>
                                <td>Manajemen Informatika</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>[0290001] Irfan Zadin</td>
                                <td>Manajemen Informatika</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>[0330000] Khaerul IStafa</td>
                                <td>Manajemen Informatika</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>[0290004] Rosihan Arbisaid</td>
                                <td>Manajemen Informatika</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>[0290007] Muhammad Rizal</td>
                                <td>Manajemen Informatika</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>[0290009] Elawati</td>
                                <td>Manajemen Informatika</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php'); ?>