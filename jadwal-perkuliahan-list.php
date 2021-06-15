<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="jadwal-perkuliahan-tambah.php" class="btn-status btn-primary"><i class="fa fa-plus"></i> ADD JADWAL LOKAL</a>
                </div>
            </div>
        </div>

        <div class="py-1">


            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Jadwal Periode 2020/2021 </h6>

                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>

                </div>

                <div class="py-1">

                    <div class="d-flex grid-gap-1 py-1 flex-change">

                        <div class="filtering-jurusan">
                            <select name="jurusan" id="jurusan">
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="1">Administrasi Bisnis</option>
                                <option value="2">Administrasi Perkantoran</option>
                                <option value="3">Informatika Komputer</option>
                                <option value="4">Komputerisasi Akuntansi</option>
                            </select>
                        </div>

                        <div class="filtering-tahun-akademik">
                            <select name="tahunakademik" id="tahunakademik">
                                <option value="">-- Pilih Tahun Akademik --</option>
                                <option value="2017/2018">2017/2018</option>
                                <option value="2018/2019">2018/2019</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021">2020/2021</option>
                            </select>
                        </div>

                        <div class="filtering-semester">
                            <select name="semester" id="semester">
                                <option value="">-- Pilih Semester --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>

                        <button class="btn btn-submit btn-primary" style="width: 150px;padding:0.5rem" id="button-view">Submit</button>
                    </div>

                    <div class="table-responsive">
                        <table class="basic-table display-pa">
                            <thead>
                                <tr>
                                    <th class="align-left">Nama Dosen</th>
                                    <th class="align-left">Status</th>
                                    <th class="align-left">Tipe Dosen</th>
                                    <th class="align-left">Kelas</th>
                                    <th class="align-left">Total Mhs</th>
                                    <th class="align-left">Mata Kuliah</th>
                                    <th class="align-left">Semester</th>
                                    <th class="align-left">SKS</th>
                                    <th class="align-left">Hari - Waktu</th>
                                    <th class="align-left">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>[20102] Sabrina S.KOM</td>
                                    <td>Active</td>
                                    <td>A</td>
                                    <td>IK01</td>
                                    <td>16</td>
                                    <td>Basis Data</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>Senin, 08.15 - 9.45</td>
                                    <td> <a href="jadwal-perkuliahan-action.php"><i class="fas fa-edit"></i></a> </td>
                                </tr>
                                <tr>
                                    <td>[20101] Fadillah S.KOM</td>
                                    <td>Active</td>
                                    <td>A</td>
                                    <td>IK01</td>
                                    <td>25</td>
                                    <td>Aplikom 2</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>Selasa, 08.15 - 9.45</td>
                                    <td> <a href="jadwal-perkuliahan-action.php"><i class="fas fa-edit"></i></a> </td>
                                </tr>
                                <tr>
                                    <td>[20103] Masria M.KOM</td>
                                    <td>Active</td>
                                    <td>A</td>
                                    <td>IK01</td>
                                    <td>16</td>
                                    <td>SQL Server</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>Senin, 09.15 - 11.45</td>
                                    <td> <a href="jadwal-perkuliahan-action.php"><i class="fas fa-edit"></i></a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include('footer-datatable.php') ?>