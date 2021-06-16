<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">

            <!-- JIKA PENGISIAN KRS DITUTUP MAKA TAMPIL : form-krs-online-close.php -->

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Form Pengisian KRS Online </h6>

                </div>

                <div class="py-1">

                    <div class="d-flex grid-gap-1 py-1 flex-change">

                        <div class="filtering-tahun-akademik">
                            <select name="tahunakademik" id="tahunakademik">
                                <option value="">-- Pilih Tahun Akademik --</option>
                                <option value="2017/2018">2017/2018</option>
                                <option value="2018/2019">2018/2019</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021" selected>2020/2021</option>
                            </select>
                        </div>

                        <div class="filtering-semester">
                            <select name="semester" id="semester">
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

                        <div class="filtering-jurusan">
                            <select name="jurusan" id="jurusan">
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="1">Administrasi Bisnis</option>
                                <option value="2">Administrasi Perkantoran</option>
                                <option value="3" selected>Informatika Komputer</option>
                                <option value="4">Komputerisasi Akuntansi</option>
                            </select>
                        </div>

                        <div class="check-all-btn" style="margin-top:8px">
                            <input type="checkbox" name="check-all" id="check-all">
                           <label><b>Check All</b></label>
                        </div>

                        <button class="btn btn-submit btn-primary" style="width: 150px;padding:0.5rem" id="button-view">Simpan</button>
                    </div>

                    <div class="table-responsive">
                        <table class="basic-table display-pa">
                            <thead>
                                <tr>
                                    <th class="align-left" colspan="2">No</th>
                                    <th class="align-left">Mata Kuliah</th>
                                    <th class="align-left">SKS</th>
                                    <th class="align-left">Smt</th>
                                    <th class="align-left">Dosen</th>
                                    <th class="align-left">Hari</th>
                                    <th class="align-left">Jam</th>
                                    <th class="align-left">Ruang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="id[]"></td>
                                    <td>1</td>
                                    <td>[989909] Basis Data</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>Masria M.Kom</td>
                                    <td>Senin</td>
                                    <td>08.15 - 11.45</td>
                                    <td>Lab 2</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="id[]"></td>
                                    <td>2</td>
                                    <td>[333333] Bahasa Inggris</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>Harris Effendi</td>
                                    <td>Selasa</td>
                                    <td>08.15 - 11.45</td>
                                    <td>R301</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="id[]"></td>
                                    <td>3</td>
                                    <td>[444444] Aplikasi Komputer 1</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>Masria M.Kom</td>
                                    <td>Rabu</td>
                                    <td>08.15 - 11.45</td>
                                    <td>Lab 2</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="id[]"></td>
                                    <td>4</td>
                                    <td>[555555] Pendidikan Agama</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>Vitoyo</td>
                                    <td>Jumat</td>
                                    <td>08.15 - 11.45</td>
                                    <td>Masjid Al-Mukaromah</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="id[]"></td>
                                    <td>5</td>
                                    <td>[666666] Dasar-Dasar Komputer</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>Nasril, M.Kom</td>
                                    <td>Kamis</td>
                                    <td>08.15 - 11.45</td>
                                    <td>R101</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="id[]" id="id[]"></td>
                                    <td>6</td>
                                    <td>[222222] Algoritma</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>Teddy Setiadi M.Kom</td>
                                    <td>Senin</td>
                                    <td>13.00 - 17.00</td>
                                    <td>LMS-Online</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="check-all-btn" style="margin-top:8px">
                           <label><b>Total SKS : </b></label>
                            <label><b>22 SKS</b></label>
                        </div>

                        <div class="check-all-btn" style="margin-top:8px;float:right;">
                           <label><b><font color="red">Batas Waktu Pengisian : </font></b></label>
                            <label><b><font color="red">2021-07-20</font></b></label>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include('footer-datatable.php') ?>