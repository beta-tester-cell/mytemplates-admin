<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-dosen.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW DOSEN</span>
                    </a>
                    <a href="pengelolaan-dosen.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST DOSEN</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <ul class="menu-widget">
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/pengelolaan-dosen.php') :
                    ?>
                        <li class="active">
                            <a href="pengelolaan-dosen.php">Politeknik LP3I Jakarta</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="pengelolaan-dosen.php">Politeknik LP3I Jakarta</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/list-dosen.php') :
                    ?>
                        <li class="active">
                            <a href="list-dosen.php" class="">Politeknik LP3I Medan</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="list-dosen.php" class="">Politeknik LP3I Medan</a>
                        </li>
                    <?php endif; ?>
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
                    <h6>Dosen Management</h6>
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
                                <td>ID Dosen</td>
                                <td>Nama Dosen</td>
                                <td>Pendidikan Terakhir</td>
                                <td>Perguruan Tinggi</td>
                                <td>Jurusan</td>
                                <td>Kampus</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>0329077903</td>
                                <td>Indah Susanti</td>
                                <td>S2</td>
                                <td>Universitas X</td>
                                <td>TI</td>
                                <td>Kramat</td>
                                <td>
                                    <a href="edit-dosen.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="view-dosen.php" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>031809802</td>
                                <td>Purwanto</td>
                                <td>S2</td>
                                <td>Universitas V</td>
                                <td>Akuntansi</td>
                                <td>Bekasi</td>
                                <td>
                                    <a href="edit-dosen.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="view-dosen.php" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>0310098102</td>
                                <td>Lindayanti</td>
                                <td>S2</td>
                                <td>Universitas y</td>
                                <td>Komunikasi</td>
                                <td>Pondok Cabe</td>
                                <td>
                                    <a href="edit-dosen.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="view-dosen.php" class="text-primary"><i class="far fa-eye"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>