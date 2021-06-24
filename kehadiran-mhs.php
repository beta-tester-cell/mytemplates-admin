<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="jadwal-perkuliahan-dosen.php" class="btn btn-link text-danger">
                        <span><i class="fa fa-arrow-left"></i> Back</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size:22px;">Report Absensi Mahasiswa</h6>
                    <div class="select-export" style="width: 100px; float: right; display: block;">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="card-header d-flex flex-start my-2">
                    <div class="grid-3 grid-gap-1 py-1">
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Nama Dosen :</strong></span>
                                <span class="text-mature">[122332] Sabrina, M.Kom</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Kelas :</strong></span>
                                <span class="text-mature">IK_Reguler_01</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Tahun Akademik</strong></span>
                                <span class="text-mature">2020/2021</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>MataKuliah :</strong></span>
                                <span class="text-mature">[009000] Basis Data</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>SKS :</strong></span>
                                <span class="text-mature">4 (28 Pertemuan)</span>
                            </div>
                        </div>
                        <div class="detail-wrapper mx-1">
                            <div class="grid-1">
                                <span><strong>Semester :</strong></span>
                                <span class="text-mature">1 (Ganjil)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="scroll-horizontal-datatable" class="basic-table" style="width:100%;">
                        <thead>
                            <tr>
                                <th rowspan="2" class="align-center">NIM</th>
                                <th rowspan="2">Nama Mahasiswa</th>
                                <th rowspan="2">Jurusan</th>
                                <th colspan="28" class="align-center">Pertemuan Ke</th>
                            </tr>
                            <tr>
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
                                <th class="align-center">11</th>
                                <th class="align-center">12</th>
                                <th class="align-center">13</th>
                                <th class="align-center">14</th>
                                <th class="align-center">15</th>
                                <th class="align-center">16</th>
                                <th class="align-center">17</th>
                                <th class="align-center">18</th>
                                <th class="align-center">19</th>
                                <th class="align-center">20</th>
                                <th class="align-center">21</th>
                                <th class="align-center">22</th>
                                <th class="align-center">23</th>
                                <th class="align-center">24</th>
                                <th class="align-center">25</th>
                                <th class="align-center">26</th>
                                <th class="align-center">27</th>
                                <th class="align-center">28</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1222009</td>
                                <td>Rosihan Arbi Said</td>
                                <td>Manajemen Informatika</td>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center text-success">S</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                            </tr>
                            <tr>
                                <td class="align-center">1222009</td>
                                <td>Irfan Zadin</td>
                                <td>Manajemen Informatika</td>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center text-danger">A</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                            </tr>
                            <tr>
                                <td class="align-center">1222009</td>
                                <td>Khairul Mustafa</td>
                                <td>Manajemen Informatika</td>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center text-secondary">I</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">H</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                                <th class="align-center">-</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>