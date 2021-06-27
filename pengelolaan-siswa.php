<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-siswa.php">Pengelolaan Mahasiswa</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-siswa.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD NEW STUDENT</span>
                    </a>

                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Student Management</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Kampus</th>
                                <th>Angkatan</th>
                                <th>Jurusan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex grid-gap-1 flex-change">
                                        <div class="image-student">
                                            <img src="theme/img/default-user.jpg" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="name">Indah Susanti</span>
                                            <span class="nim">20198091120</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column campus">
                                        <div class="text-primary">
                                            <p> Politeknik LP3I Jakarta</p>
                                        </div>
                                        <div class="text-secondary">
                                            <p>Kramat Raya</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="years">2020/2021</span>
                                        <span class="angkatan">Tingkat 2</span>
                                    </div>
                                </td>
                                <td>Manajemen Informatika</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex grid-gap-1 flex-change">
                                        <div class="image-student">
                                            <img src="theme/img/default-user.jpg" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="name">Firman Ahmad</span>
                                            <span class="nim">20198091120</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column campus">
                                        <div class="text-primary">
                                            <p> Politeknik LP3I Jakarta</p>
                                        </div>
                                        <div class="text-secondary">
                                            <p>Kramat Raya</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="years">2019/2020</span>
                                        <span class="angkatan">Tingkat 3</span>
                                    </div>
                                </td>
                                <td>Manajemen Informatika</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex grid-gap-1 flex-change">
                                        <div class="image-student">
                                            <span class="symbol symbol-primary">D</span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="name">Dewi Utari</span>
                                            <span class="nim">20198091120</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column campus">
                                        <div class="text-primary">
                                            <p> Politeknik LP3I Jakarta</p>
                                        </div>
                                        <div class="text-secondary">
                                            <p>Kramat Raya</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="years">2019/2020</span>
                                        <span class="angkatan">Tingkat 3</span>
                                    </div>
                                </td>
                                <td>Manajemen Informatika</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="d-flex grid-gap-1 flex-change">
                                        <div class="image-student">
                                            <img src="theme/img/default-user.jpg" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="name">Farhan Tanjung</span>
                                            <span class="nim">20198091120</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column campus">
                                        <div class="text-primary">
                                            <p> Politeknik LP3I Jakarta</p>
                                        </div>
                                        <div class="text-secondary">
                                            <p>Kramat Raya</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="years">2021/2022</span>
                                        <span class="angkatan">Tingkat 1</span>
                                    </div>
                                </td>
                                <td>Manajemen Informatika</td>
                                <td><span class="btn-status btn-mature">Cuti</span></td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <div class="d-flex grid-gap-1 flex-change">
                                        <div class="image-student">
                                            <span class="symbol symbol-secondary">S</span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <span class="name">Siska Handayani</span>
                                            <span class="nim">20198091120</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column campus">
                                        <div class="text-primary">
                                            <p> Politeknik LP3I Jakarta</p>
                                        </div>
                                        <div class="text-secondary">
                                            <p>Kramat Raya</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span class="years">2020/2021</span>
                                        <span class="angkatan">Tingkat 2</span>
                                    </div>
                                </td>
                                <td>Manajemen Informatika</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>