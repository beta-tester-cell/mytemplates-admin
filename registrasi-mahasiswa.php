<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Transaksi</a>
        <a href="registrasi-mahasiswa.php">Registrasi Mahasiswa</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Registrasi Mahasiswa</h6>

                    <div class="select-export">

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
                                <th>Nama Mahasiswa</th>
                                <th>Konsentrasi</th>
                                <th>No.Handphone</th>
                                <th>Registrasi Tingkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Radinatul Kisma</td>
                                <td>Administrasi Perkantoran</td>
                                <td>0890789678687</td>
                                <td><a href="#" data-toggle="modal" data-target="#registrasitingkat">Registrasi Tingkat 1</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sugianto</td>
                                <td>Administrasi Perkantoran</td>
                                <td>0890789678687</td>
                                <td><a href="#">Registrasi Tingkat 2</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Gusti Ardian</td>
                                <td>Administrasi Perkantoran</td>
                                <td>0890789678687</td>
                                <td><a href="#">Registrasi Tingkat 3</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

            <!-- form registrasi tingkat -->
            <div class="modal" id="registrasitingkat" tabindex="-1" aria-labelledby="registrasitingkatLabel" aria-hidden="true">
                <div class="modal-dialog modal-fit-custom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registrasitingkatLabel">Jenis Registrasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label class="radio-button"> Non VA
                                        <input type="radio" value="laki-laki" name="jenis">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-button"> VA
                                        <input type="radio" value="perempuan" name="jenis">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <a href="edit-registrasi-tingkat.php" class="btn btn-secondary text-center" style="height:42px;">Proses</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>