<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="jadwal-perkuliahan-list.php" class="btn-status btn-danger"><i class="fa fa-angle-left"></i> BACK</a>
                    <a href="#javascript:;" class="btn-status btn-primary" style="margin-left:10px"><i class="fa fa-plus"></i> ADD JADWAL ZONASI</a>
                </div>
            </div>
        </div>

        <div class="grid-2 grid-gap-1 py-1">

            <div class="card">
                <div class="card-header">
                    <h6>Input Jadwal Lokal</h6>
                </div>

                <div class="my-1">
                    <label><b>Tahun Akademik</b></label>
                    <input class="width-100" name="tahunakademik" type="text" value='2021/2022' placeholder="Tahun Akademik">
                </div>

                <div class="my-1">
                    <label><b>Pilih Dosen</b></label>
                    <select class="width-100" name="dosen" id="dosen">
                        <option value="">-- Pilih Dosen --</option>
                        <option value="Fadillah S.Kom" selected>Fadillah S.Kom</option>
                        <option value="Masria S.Kom">Masria S.Kom</option>
                        <option value="Sabrina S.Kom">Sabrina S.Kom</option>
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

                <div class="my-1">
                    <label><b>Pilih Mata Kuliah</b></label>
                    <select class="width-100" name="matakuliah" id="matakuliah">
                        <option value="">-- Pilih Mata Kuliah --</option>
                        <option value="Aplikasi Komputer 1">Aplikasi Komputer 1</option>
                        <option value="Aplikasi Komputer 2">Aplikasi Komputer 2</option>
                        <option value="Basis Data" selected>Basis Data</option>
                        <option value="Pemrograman PHP">Pemrograman PHP</option>
                    </select>
                </div>

                <div class="my-1">
                    <label><b>Pilih Kelas</b></label>
                    <select class="width-100" name="kelas" id="kelas">
                        <option value="">-- Pilih Kelas --</option>
                        <option value="BDIK01" selected>BDIK01</option>
                        <option value="BDIK02">BDIK02</option>
                        <option value="BDKA01">BDKA01</option>
                        <option value="BDKA02">BDKA02</option>
                    </select>
                </div>

                <div class="my-1">
                    <label><b>Hari</b></label>
                    <select class="width-100" name="hari" id="hari">
                        <option value="">-- Pilih Hari --</option>
                        <option value="Senin" selected="">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jum'at</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>

                <div class="my-1">
                    <label><b>Waktu</b></label>
                    <div class="form grid-2 grid-gap-1">
                        <label>
                            <input style="width:130px" type="time" name="jam-awal">
                        </label>
                        <label>
                            <input style="width:130px" type="time" name="jam-awal">
                        </label>
                    </div>
                </div>

                <div class="my-1">
                    <label><b>Lokasi Ruang</b></label>
                    <select class="width-100" name="ruang" id="ruang">
                        <option value="">-- Pilih Ruang --</option>
                        <option value="Ruang A01">Ruang A01</option>
                        <option value="Ruang A02">Ruang A02</option>
                        <option value="Lab Akuntansi">Lab Akuntansi</option>
                        <option value="Lab Informatika">Lab Informatika</option>
                        <option value="Lab Multimedia" selected>Lab Multimedia</option>
                    </select>
                </div>

                <button type='submit' class="btn btn-link btn-secondary px-20">Save</button>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Jadwal Kuliah </h6>

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
                    <div class="form-inputs">
                        <label>Jadwal </label>
                        <label>3 Total</label>
                    </div>
                    <div class="form-inputs">
                        <label>Tahun Akademik</label>
                        <label>2020/2021</label>
                    </div>
                    <div class="form-inputs">
                        <label>Nama Dosen</label>
                        <label>Trismaharini</label>
                    </div>

                    <div class="form-inputs">
                        <label>Tipe Dosen</label>
                        <label>A</label>
                    </div>

                    <div class="form-inputs">
                        <label><b>TOTAL SKS</b></label>
                        <label><b>10 SKS Terverifikasi</b></label>
                    </div>
                </div>


                <div class="table-responsive">
                        <table class="basic-table display-pa">
                            <thead>
                                <tr>
                                    <th class="align-left">Kampus</th>
                                    <th class="align-left">Jurusan</th>
                                    <th class="align-left">Smt</th>
                                    <th class="align-left">Mata Kuliah</th>
                                    <th class="align-left">SKS</th>
                                    <th class="align-left">Kelas</th>
                                    <th class="align-left">Lokasi</th>
                                    <th class="align-left">Jenis Jadwal</th>
                                    <th class="align-left">Hari</th>
                                    <th class="align-left">Waktu</th>
                                    <th class="align-left">Status</th>
                                    <th class="align-left">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kramat Raya</td>
                                    <td>Manajemen Informatika</td>
                                    <td>1</td>
                                    <td>Aplikasi Komputer 1</td>
                                    <td>4</td>
                                    <td>BDIK01</td>
                                    <td>R LAB 1</td>
                                    <td>Lokal</td>
                                    <td>Selasa</td>
                                    <td>08.00 - 11.45</td>
                                    <td>Verified</td>
                                    <td> <a href="jadwal-perkuliahan-action.php"><i class="fas fa-edit"></i></a> </td>
                                </tr>

                                <tr>
                                    <td>Kramat Raya</td>
                                    <td>Bisnis Administrasi</td>
                                    <td>1</td>
                                    <td>Aplikasi Komputer 1</td>
                                    <td>4</td>
                                    <td>BDIK09</td>
                                    <td>Online</td>
                                    <td>Zonasi</td>
                                    <td>Senin</td>
                                    <td>10.00 - 11.45</td>
                                    <td>Submitted</td>
                                    <td>
                                        <a href="jadwal-perkuliahan-action.php"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:;"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Jakarta Utara</td>
                                    <td>Manajemen Informatika</td>
                                    <td>1</td>
                                    <td>Pemrograman PHP</td>
                                    <td>4</td>
                                    <td>BDIK01</td>
                                    <td>Online</td>
                                    <td>Lokal</td>
                                    <td>Rabu</td>
                                    <td>08.00 - 11.45</td>
                                    <td>Verified</td>
                                    <td> <a href="jadwal-perkuliahan-action.php"><i class="fas fa-edit"></i></a> </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php'); ?>