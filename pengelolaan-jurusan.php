<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-jurusan.php">Pengelolaan Jurusan</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-jurusan.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW PRODUK</span>
                    </a>
                    <a href="pengelolaan-jurusan.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST PRODUK</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Produk Management</h6>
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
                                <th>Direktorat</th>
                                <th>Kode Produk</th>
                                <th>Nama Produk</th>
                                <th>Program Studi</th>
                                <th>Kode Prodi</th>
                                <th>Jenjang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PLJ</td>
                                <td>2001</td>
                                <td>Manajemen Informatika</td>
                                <td>Manajemen Informatika</td>
                                <td>33445</td>
                                <td>D3</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PLJ</td>
                                <td>2002</td>
                                <td>Administrasi Bisnis</td>
                                <td>Administrasi Bisnis</td>
                                <td>33544</td>
                                <td>D3</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PLJ</td>
                                <td>2003</td>
                                <td>Hubungan Masyarakat</td>
                                <td>Hubungan Masyarakat</td>
                                <td>33545</td>
                                <td>D3</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PLB</td>
                                <td>3001</td>
                                <td>Informatika Komputer</td>
                                <td>Manajemen Informatika</td>
                                <td>42432</td>
                                <td>D3</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PLB</td>
                                <td>3002</td>
                                <td>Sistem Informasi</td>
                                <td>Manajemen Informatika</td>
                                <td>42432</td>
                                <td>D3</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>PLB</td>
                                <td>3003</td>
                                <td>Komputer Akuntansi</td>
                                <td>Manajemen Informatika</td>
                                <td>42432</td>
                                <td>D3</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
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