<?php include('header.php') ?>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Report Lembar Kegiatan Mengajar</h6>
                </div>

                <div class="d-flex flex-space-between flex-change grid-gap-1">
                    <div class="filter-monitor">
                        <select name="tahunakademik" id="tahunakademik">
                            <option value="0">-- Pilih Tahun Akademik --</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2020/2021">2019/2020</option>
                            <option value="2020/2021">2018/2019</option>
                        </select>
                        <select name="semester" id="semester">
                            <option value="0">-- Pilih Semester --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
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
                                    <th>No</th>
                                    <th class="align-left">Matakuliah</th>
                                    <th class="align-center">SKS</th>
                                    <th class="align-center">Smt</th>
                                    <th class="align-left">Kelas</th>
                                    <th class="align-center">Mhs</th>
                                    <th class="align-center">T.Pertemuan</th>
                                    <th class="align-center">R.Pertemuan</th>
                                    <th class="align-center">Rasio</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-left">IK_REGuler 01</td>
                                    <td class="align-center">27</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">14</td>
                                    <td class="align-center">50%</td>
                                    <td class="align-center">
                                        <a href="rekap-detail-lkm.php">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">Basis Data</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td class="align-left">IK_REGuler 01</td>
                                    <td class="align-center">27</td>
                                    <td class="align-center">28</td>
                                    <td class="align-center">14</td>
                                    <td class="align-center">50%</td>
                                    <td class="align-center">
                                        <a href="rekap-detail-lkm.php">View</a>
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