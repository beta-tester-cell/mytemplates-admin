<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">

            <!-- JIKA PENGISIAN KRS DITUTUP MAKA TAMPIL : form-krs-online-close.php -->

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Nilai Komponen </h6>

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

                    <div class="d-flex grid-gap-1 flex-change">

                        <div class="my-1">
                            <label><b>Tahun Akademik : </b></label>
                            <label>2020/2021</label>
                        </div>

                        <div class="my-1">
                            <label><b>Semester : </b></label>
                            <label>1</label>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="basic-table display-pa">
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