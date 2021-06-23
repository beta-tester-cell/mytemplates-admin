<?php include('header.php') ?>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-kalender-akedemik.php" class="btn btn-link btn-primary">
                        <span><i class="fa fa-plus"></i> Add New</span>
                    </a>
                    <a href="form-upload-kalender-akedemik.php" class="btn btn-link btn-primary" style="margin-left: 20px;">
                        <span><i class="fa fa-plus"></i> Upload Kalender</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Kalender Akademik</h6>
                </div>

                <div class="d-flex flex-space-between">
                    <div class="filter-kalender">
                        <select name="tahunakademik" id="tahunakademik">
                            <option value="">-- Pilih Tahun Akademik --</option>
                            <option value="2017/2018">2017/2018</option>
                            <option value="2018/2019">2018/2019</option>
                            <option value="2019/2020">2019/2020</option>
                            <option value="2020/2021" selected>2020/2021</option>
                        </select>
                        <select name="Periode" id="Periode">
                            <option value="">-- Pilih Periode --</option>
                            <option value="Ganjil" selected>Ganjil</option>
                            <option value="Genap">Genap</option>
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
                                    <th class="align-left">No</th>
                                    <th class="align-left">Kegiatan</th>
                                    <th class="align-left">Start</th>
                                    <th class="align-left">End</th>
                                    <th class="align-center">Pelaksana</th>
                                    <th class="align-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-left">1</td>
                                    <td class="align-left">Rapat Persiapan Matrik Kelas Semester Ganjil TA.2020/2021</td>
                                    <td class="align-left">2020-09-01</td>
                                    <td class="align-left">2020-09-01</td>
                                    <td class="align-center">AKademik</td>
                                    <td class="align-center">
                                        <a href="#">View </a> |
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-left">2</td>
                                    <td class="align-left">Rapat Dosen di Kampus</td>
                                    <td class="align-left">2020-09-04</td>
                                    <td class="align-left">2020-09-04</td>
                                    <td class="align-center">AKademik</td>
                                    <td class="align-center">
                                        <a href="#">View </a> |
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-left">#</td>
                                    <td class="align-left">Pelatihan Dosen Terpusat</td>
                                    <td class="align-left">2020-09-05</td>
                                    <td class="align-left">2020-09-05</td>
                                    <td class="align-center">AKademik</td>
                                    <td class="align-center">
                                        <a href="#">View </a> |
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-left">4</td>
                                    <td class="align-left">Persiapan & Distribusi Bahan Ajar </td>
                                    <td class="align-left">2020-09-07</td>
                                    <td class="align-left">2020-09-09</td>
                                    <td class="align-center">AKademik</td>
                                    <td class="align-center">
                                        <a href="#">View </a> |
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-left">5</td>
                                    <td class="align-left">Pengisian KRS Online Semester Ganjil TA. 2020/2021</td>
                                    <td class="align-left">2020-09-10</td>
                                    <td class="align-left">2020-09-12</td>
                                    <td class="align-center">AKademik</td>
                                    <td class="align-center">
                                        <a href="#">View </a> |
                                        <a href="#">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-left">6</td>
                                    <td class="align-left"> Persiapan & Distribusi Bahan Ajar</td>
                                    <td class="align-left">2020-09-07</td>
                                    <td class="align-left">2020-09-19</td>
                                    <td class="align-center">AKademik</td>
                                    <td class="align-center">
                                        <a href="#">View </a> |
                                        <a href="#">Edit</a>
                                    </td>
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