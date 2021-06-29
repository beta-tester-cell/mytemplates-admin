<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Mahasiswa</a>
        <a href="#">Perkuliahan</a>
        <a href="form-perbaikan-nilai.php">Komponen Nilai</a>
    </div>
</div>
<div class="content">

    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="report-khs-cetak-komponen.php" target="_blank" class="btn-status btn-primary"><i class="fa fa-file-pdf"></i> Komponen</a>
                    <a href="form-perbaikan-nilai-card.php" target="_blank" class="btn-status btn-primary" style="margin-left:5px"><i class="fa fa-file-pdf"></i> KHS</a>
                    <a href="#" class="btn-status btn-danger" style="margin-left:5px" disabled><i class="fa fa-edit"></i> Form Perbaikan Nilai</a>
                </div>
            </div>
        </div>

        <div class="py-1">

            <!-- JIKA PENGISIAN KRS DITUTUP MAKA TAMPIL : form-krs-online-close.php -->

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Komponen Nilai</h6>

                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>

                </div>

                <div class="my-1">

                    <div class="d-flex grid-gap-1 py-1 flex-change">

                         <!-- <div class="filtering-tahun-akademik">
                            <select name="tahunakademik" id="tahunakademik">
                                <option value="">-- Pilih Tahun Akademik --</option>
                                <option value="2017/2018">2017/2018</option>
                                <option value="2018/2019">2018/2019</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021">2020/2021</option>
                            </select>
                        </div> -->

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

                    </div>

                    <div class="table-responsive">
                        <table class="table-list" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-left">Mata Kuliah</th>
                                    <th class="align-center">SKS</th>
                                    <th class="align-center">Smt</th>
                                    <th class="align-center">TA</th>
                                    <th class="align-center">H</th>
                                    <th class="align-center">T</th>
                                    <th class="align-center">F</th>
                                    <th class="align-center">UTS</th>
                                    <th class="align-center">UAS</th>
                                    <th class="align-center">SP</th>
                                    <th class="align-center">Akhir</th>
                                    <th class="align-center">HM</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>[0290091] Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2020/2021</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">70</td>
                                    <td class="align-center">67</td>
                                    <td class="align-center">0</td>
                                    <td class="align-center">72.8</td>
                                    <td class="align-center">B</td>
                                </tr>

                                <tr>
                                    <td>[0290001] Aplikasi Komputer 1</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2020/2021</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">70</td>
                                    <td class="align-center">67</td>
                                    <td class="align-center">0</td>
                                    <td class="align-center">72.8</td>
                                    <td class="align-center">B</td>
                                </tr>

                                <tr>
                                    <td>[0290001] Pendidikan Agama</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2020/2021</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">70</td>
                                    <td class="align-center">67</td>
                                    <td class="align-center">0</td>
                                    <td class="align-center">72.8</td>
                                    <td class="align-center">B</td>
                                </tr>

                                <tr>
                                    <td>[333333] Bahasa Inggris</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2020/2021</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">70</td>
                                    <td class="align-center">67</td>
                                    <td class="align-center">0</td>
                                    <td class="align-center">72.8</td>
                                    <td class="align-center">B</td>
                                </tr>

                                <tr>
                                    <td>[666666] Dasar-Dasar Komputer</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2020/2021</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">70</td>
                                    <td class="align-center">67</td>
                                    <td class="align-center">0</td>
                                    <td class="align-center">72.8</td>
                                    <td class="align-center">B</td>
                                </tr>

                                <tr>
                                    <td>[222222] Algoritma</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2020/2021</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">100</td>
                                    <td class="align-center">70</td>
                                    <td class="align-center">67</td>
                                    <td class="align-center">0</td>
                                    <td class="align-center">72.8</td>
                                    <td class="align-center">B</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include('footer-datatable.php') ?>