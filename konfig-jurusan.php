<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-konfig.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW PRODUCT</span>
                    </a>
                    <a href="konfig-jurusan.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST PRODUCT CAMPUS</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <ul class="menu-widget">
                    <li class="active">
                        <a href="konfig-jurusan.php">Politeknik LP3I Jakarta</a>
                    </li>
                    <li>
                        <a href="#" class="">Politeknik LP3I Medan</a>
                    </li>
                    <li>
                        <a href="#" class="">Politeknik LP3I Bandung</a>
                    </li>
                    <li>
                        <a href="#" class="">Polinas</a>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Product Campus Management</h6>
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
                                <td>No</td>
                                <td>Kampus</td>
                                <td>Jurusan</td>
                                <td>TA</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kramat Raya</td>
                                <td>Management Informatika</td>
                                <td>2021/2022</td>
                                <td>
                                    <a href="#" class="text-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary" title="View"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger" title="Delete"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kramat Raya</td>
                                <td>Komputer Akuntansi</td>
                                <td>2021/2022</td>
                                <td>
                                    <a href="#" class="text-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary" title="View"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger" title="Delete"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kramat Raya</td>
                                <td>Administrasi Bisnis</td>
                                <td>2021/2022</td>
                                <td>
                                    <a href="#" class="text-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary" title="View"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger" title="Delete"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kramat Raya</td>
                                <td>Hubungan Masyarakat</td>
                                <td>2021/2022</td>
                                <td>
                                    <a href="#" class="text-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary" title="View"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger" title="Delete"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bekasi</td>
                                <td>Management Informatika</td>
                                <td>2021/2022</td>
                                <td>
                                    <a href="#" class="text-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary" title="View"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger" title="Delete"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Pasar Minggu</td>
                                <td>Management Informatika</td>
                                <td>2021/2022</td>
                                <td>
                                    <a href="#" class="text-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-primary" title="View"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger" title="Delete"><i class="fas fa-eraser"></i></a>
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