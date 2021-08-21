<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Sidang</a>
        <a href="transaksi-pembayaran.php">Transaksi Pembayaran</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Registrasi Sidang dan Wisuda</h6>
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
                    <label><b>LIST MAHASISWA KAMPUS :</b></label>
                    <label><b class="text-danger">JAKARTA PUSAT (KRAMAT RAYA)</b></label>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama Mahasiswa</th>
                                <th>Konsentrasi</th>
                                <th>Tahun</th>
                                <th>Tingkat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>180441020008</td>
                                <td>Andika Tri Handoyo</td>
                                <td>Teknik Informatika</td>
                                <td>2018</td>
                                <td>3</td>
                                <td><a href="edit-transaksi-pembayaran.php">Edit Transaksi</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>180113020010</td>
                                <td>Anisa Nuriah</td>
                                <td>Administrasi Perkantoran</td>
                                <td>2018</td>
                                <td>3</td>
                                <td><span class="btn btn-link btn-success">Lunas</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>180113020089</td>
                                <td>Apriliana</td>
                                <td>Administrasi Perkantoran</td>
                                <td>2018</td>
                                <td>3</td>
                                <td><span class="btn-link btn-success">Lunas</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>