<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-kampus.php">Pengelolaan Kampus</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-kampus.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW UNIT</span>
                    </a>
                    <a href="pengelolaan-kampus.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST CAMPUS</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Unit Campus Management</h6>
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
                                <th>Unit ID</th>
                                <th>Nama Unit</th>
                                <th>Induk Unit</th>
                                <th>Level Unit</th>
                                <th>Status</th>
                                <th>Kerjasama</th>
                                <th>Jenis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1000</td>
                                <td>Head Office</td>
                                <td>0</td>
                                <td>1</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td> <span class="text-primary"> Milik</span></td>
                                <td>HQ</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2000</td>
                                <td>Direktorat PLJ</td>
                                <td>1000</td>
                                <td>2</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td><span class="text-primary">Milik</span></td>
                                <td>PTS</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2001</td>
                                <td>Kramat Raya</td>
                                <td>2000</td>
                                <td>2</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td> <span class="text-success"> Kerjasama</span></td>
                                <td>PTS</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2002</td>
                                <td>Pasar Minggu</td>
                                <td>2000</td>
                                <td>3</td>
                                <td><span class="btn-status btn-mature">Peralihan</span></td>
                                <td> <span class="text-secondary"> Mitra </span></td>
                                <td>PTS</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2003</td>
                                <td>Cimone</td>
                                <td>2000</td>
                                <td>3</td>
                                <td><span class="btn-status btn-danger">Non Aktif</span></td>
                                <td> <span class="text-secondary"> Mitra </span></td>
                                <td>College</td>
                                <td>
                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2004</td>
                                <td>Jakarta Utara</td>
                                <td>2000</td>
                                <td>3</td>
                                <td><span class="btn-status btn-primary">Aktif</span></td>
                                <td> <span class="text-primary"> Milik </span></td>
                                <td>College</td>
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