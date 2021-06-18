<?php include('header.php') ?>

<div class="content">
    <div class="container height-100">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Jadwal Kuliah</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="form-inputs">
                    <div class="form d-flex grid-gap-1">
                        <div class="input-group">
                            <input type="text" style="width:220px" name="" value="Tahun Akademik : 2020/2021" readonly="">
                        </div>
                        <div class="input-group">
                            <input type="text" style="width:100px" class="width-100" name="" value="Semester : 1" readonly="">
                        </div>
                        <div class="input-group">
                            <input type="text" style="width:100px" class="width-100" name="" value="2021-07-16" readonly="">
                        </div>
                        <div class="form-inputs">
                            <input class="width-100" type="text" style="width:200px" name="" placeholder="Filter Matakuliah">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="basic-table display">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Mata Kuliah</th>
                                <th>SKS</th>
                                <th>Smt</th>
                                <th>Dosen</th>
                                <th>Ruang</th>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Pert. ke</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IK_REGULER</td>
                                <td>Basis Data</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td>Masria M.Kom</td>
                                <td>LMS-Online</td>
                                <td class="dt-center">Selasa</td>
                                <td class="dt-center">2021-07-16 </td>
                                <td class="dt-center">08.00 - 09.45</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><label style="background-color: yellow"><a href="form-jadwal-kuliah-matakuliah.php"> On Going</a></label></td>
                            </tr>

                            <tr>
                                <td>IK_REGULER</td>
                                <td>Aplikasi Komputer</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td>Masria M.Kom</td>
                                <td>Lab 2</td>
                                <td class="dt-center">Selasa</td>
                                <td class="dt-center">2021-07-16 </td>
                                <td class="dt-center">10.00 - 11.45</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><label style="background-color: red">To Do</label></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer-datatable.php') ?>