<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Sidang</a>

        <a href="validasi-pelunasan.php">Validasi Pelunasan</a>

    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Validasi Pelunasan Sidang</h6>

                    <div class="select-export">

                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                        <div class="type-export">

                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                        </div>

                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
                                <th>Tahun Akademik</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>180113020043</td>
                                <td>Ardhi Maulana Asshidiq</td>
                                <td>Administrasi Perkantoran</td>
                                <td>2018</td>
                                <td><a href="edit-validasi-pelunasan.php" class="btn btn-link btn-primary">Pelunasan</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>180113020044</td>
                                <td>Arief Satria Nugraha</td>
                                <td>Informatika Komputer</td>
                                <td>2018</td>
                                <td><span class="btn btn-link btn-success">Lunas</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>180113020045</td>
                                <td>Aris Setiawan</td>
                                <td>Informatika Komputer</td>
                                <td>2018</td>
                                <td><span class="btn btn-link btn-success">Lunas</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>180113020046</td>
                                <td>Asterid Harmayanti</td>
                                <td>Administrasi Perkantoran</td>
                                <td>2018</td>
                                <td><span class="btn btn-link btn-success">Lunas</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>