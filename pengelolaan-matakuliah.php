<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="content-tabs ">
                <!-- Nav pills -->
                <ul class="nav nav-pills" id="tabs">
                    <li class="nav-item">
                        <a class="nav-link" id="tab1">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">1</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Master</span>
                                    <span class="wizard-desc">Matakuliah</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">2</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Master</span>
                                    <span class="wizard-desc">Kurikulum</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab3">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">3</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Dokumen</span>
                                    <span class="wizard-desc">E-book</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pd-30">

                    <!-- tab 1 start-->

                    <div class="tab-pane active" id="tab1C">
                        <div class="card-header d-flex flex-space-between">
                            <span class="total">Matakuliah | 120 Total</span>

                            <div>
                                <div class="select-export export-matakuliah">
                                    <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                                    <div class="type-export">
                                        <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                        <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                        <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                                    </div>
                                </div>
                                <a href="form-matakuliah.php" class="btn btn-link">
                                    <span><i class="fa fa-plus"></i> ADD A NEW</span>
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="datatable" class="table-list">
                                <thead>
                                    <th>No</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Matakuliah</th>
                                    <th>Jurusan</th>
                                    <th>Kampus</th>
                                    <th>Date Created</th>
                                    <th>Created By</th>
                                    <th>Updated Date</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                    <?php for ($i = 1; $i <= 5; $i++) {
                                        echo ' <tr>
                                                <td>' . $i . '</td>
                                                <td>2001002</td>
                                                <td>Business English</td>
                                                <td>All</td>
                                                <td>Politeknik LP3I Jakarta</td>
                                                <td>2021-02-09 16:27:53</td>
                                                <td>Tabah</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>
                                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                                </td>
                                            </tr>';
                                    } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- tab 1 end -->

                    <!-- tab 2 start -->

                    <div class="tab-pane" id="tab2C">
                        <div class="card-header d-flex flex-space-between">
                            <span class="total">SKS | 22 Total</span>

                            <div>

                                <div class="select-export export-matakuliah">
                                    <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                                    <div class="type-export">
                                        <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                        <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                        <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                                    </div>
                                </div>
                                <a href="form-kurikulum.php" class="btn btn-link">
                                    <span><i class="fa fa-plus"></i> ADD A NEW</span>
                                </a>
                            </div>
                        </div>

                        <div class="my-2">
                            <span class="fa fa-filter" style="margin-right: 30px;"></span>
                            <select name="jurusan" id="jurusan">
                                <option value="0">-- Pilih Jurusan --</option>
                                <option value="1">Informartika Komputer</option>
                                <option value="2">Administrasi Bisnis</option>
                                <option value="3">Komputerisasi Akuntasi</option>
                                <option value="4">Hubungan Masyarakat</option>
                            </select>
                            <input type="text" name="semester" placeholder="Semester">
                            <input type="text" name="tahun_angkatan" placeholder="Tahun Angkatan">
                            <input type="text" name="periode" placeholder="Periode">
                        </div>

                        <div class="table-responsive">
                            <table class="table-list" id="datatable2">
                                <thead>
                                    <th>No</th>
                                    <th>Matakuliah </th>
                                    <th>SKS</th>
                                    <th>Semester</th>
                                    <th>Prodi</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Akademik</th>
                                    <th>Periode</th>
                                    <th>File SAP</th>
                                    <th>Ebook</th>
                                    <th>Date Created</th>
                                    <th>Created By</th>
                                    <th>Updated Date</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>[2001001] Basis Data</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>Manajemen Informartika</td>
                                        <td>Informatika Komputer</td>
                                        <td>2020/2021</td>
                                        <td>2021</td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>

                                        </td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>

                                        </td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Tabah</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>[2001005] Algoritma</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>Manajemen Informartika</td>
                                        <td>Informatika Komputer</td>
                                        <td>2020/2021</td>
                                        <td>2021</td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>
                                        </td>
                                        <td></td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Tabah</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>[2001005] Algoritma</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>Manajemen Informartika</td>
                                        <td>Informatika Komputer</td>
                                        <td>2020/2021</td>
                                        <td>2021</td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>

                                        </td>
                                        <td></td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Tabah</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>[2001004] Businees English</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>Manajemen Informartika</td>
                                        <td>Informatika Komputer</td>
                                        <td>2020/2021</td>
                                        <td>2021</td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>

                                        </td>
                                        <td></td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Tabah</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>[2001004] Personality Development</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>Manajemen Informartika</td>
                                        <td>Informatika Komputer</td>
                                        <td>2020/2021</td>
                                        <td>2021</td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>
                                        </td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>

                                        </td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Tabah</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>[2001004] Pendidikan Agama</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>Manajemen Informartika</td>
                                        <td>Informatika Komputer</td>
                                        <td>2020/2021</td>
                                        <td>2021</td>
                                        <td>
                                            <span class="menu-icon"><i class="fa fa-check text-success"></i></span>

                                        </td>
                                        <td></td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Tabah</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- tab 2 end -->

                    <!-- tab 3 start -->

                    <div class="tab-pane" id="tab3C">
                        <div class="card-header d-flex flex-space-between">
                            <span class="total">E-book | 22 Total</span>

                            <div>
                                <div class="select-export export-matakuliah">
                                    <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                                    <div class="type-export">
                                        <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                        <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                        <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                                    </div>
                                </div>
                                <a href="form-ebook.php" class="btn btn-link">
                                    <span><i class="fa fa-plus"></i> Upload new</span>
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table-list" id="datatable3">
                                <thead>
                                    <th>Kode Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Tahun Terbit</th>
                                    <th>Upload Data</th>
                                    <th>Penerbit</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20MJ001</td>
                                        <td>Manajemen Perkantoran</td>
                                        <td>Ratna,M.M</td>
                                        <td>2020</td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Lentera Ilmu</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20EK001</td>
                                        <td>Dasar-dasar Akuntasi</td>
                                        <td>Rakhmat, S.E</td>
                                        <td>2019</td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Lentera Ilmu</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20EN001</td>
                                        <td>English Conversation</td>
                                        <td>Haris,M.M</td>
                                        <td>2019</td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Lentera Ilmu</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20MJ002</td>
                                        <td>Filling Manajemen</td>
                                        <td>Siswandi,S.E</td>
                                        <td>2018</td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Lentera Ilmu</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>20EK001</td>
                                        <td>Dasar-dasar Akuntansi</td>
                                        <td>Rakhmat,S.E</td>
                                        <td>2019</td>
                                        <td>2021-02-09 16:27:55</td>
                                        <td>Lentera Ilmu</td>
                                        <td>
                                            <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- tab 3 end -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>