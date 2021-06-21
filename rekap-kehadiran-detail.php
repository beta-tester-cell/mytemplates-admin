<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">

            <!-- JIKA PENGISIAN KRS DITUTUP MAKA TAMPIL : form-krs-online-close.php -->

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Report Absensi Mahasiswa </h6>

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

                    <div class="d-flex grid-gap-3 flex-change">

                        <div class="my-1">
                            <label><b>Nama Dosen : </b></label><br>
                            <label>Masria, M.Kom</label>
                        </div>

                        <div class="my-1">
                            <label><b>Kelas : </b></label><br>
                            <label>IK-Reguler 01</label>
                        </div>

                        <div class="my-1">
                            <label><b>Tahun Akademik : </b></label><br>
                            <label>2020/2021</label>
                        </div>

                    </div>

                    <div class="d-flex grid-gap-3 flex-change">

                        <div class="my-1">
                            <label><b>Mata Kuliah : </b></label><br>
                            <label>[0290091] Basis Data</label>
                        </div>

                        <div class="my-1">
                            <label><b>SKS : </b></label><br>
                            <label>4 (28 Pertemuan)</label>
                        </div>

                        <div class="my-1">
                            <label><b>Semester : </b></label><br>
                            <label>1 (Ganjil)</label>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="basic-table display-pa">
                            <thead>
                                <tr>
                                    <th class="align-left">NIM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th class="align-center">Jurusan</th>
                                    <th class="align-center">1</th>
                                    <th class="align-center">2</th>
                                    <th class="align-center">3</th>
                                    <th class="align-center">4</th>
                                    <th class="align-center">5</th>
                                    <th class="align-center">6</th>
                                    <th class="align-center">7</th>
                                    <th class="align-center">8</th>
                                    <th class="align-center">9</th>
                                    <th class="align-center">10</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>202662554110</td>
                                    <td>Rosihan Arbi Said</td>
                                    <td>Manajemen Informatika</td>
                                    <td class="align-center">H</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                </tr>

                                <tr>
                                    <td>202662554111</td>
                                    <td>Irfan Zadin</td>
                                    <td>Manajemen Informatika</td>
                                    <td class="align-center">H</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                </tr>

                                <tr>
                                    <td>202662554112</td>
                                    <td>Khaerul Istafa</td>
                                    <td>Manajemen Informatika</td>
                                    <td class="align-center">H</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                    <td class="align-center">-</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include('footer-datatable.php') ?>