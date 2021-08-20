<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Tools</a>

        <a href="pindah-kampus.php">Pindah Kampus</a>

    </div>

</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header  d-flex flex-space-between">
                    <h6>Pindah Kampus</h6>

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
                                <th>Nim</th>
                                <th>Nama Mahasiswa</th>
                                <th>Konsentrasi</th>
                                <th>Kampus Asal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>160113030086</td>
                                <td>Dina Tri Wulandari</td>
                                <td>Administrasi Perkantoran</td>
                                <td>Blok M</td>
                                <td><a href="proses-pindah-kampus.php">Proses Data</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>180551120001</td>
                                <td>Sugianto</td>
                                <td>Administrasi Bisnis Internasional</td>
                                <td>Jakarta Timur 2</td>
                                <td><a href="#">Proses Data</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>200442150013</td>
                                <td>Gusti Ardian</td>
                                <td>Informatika Komputer</td>
                                <td>Pondok Cabe </td>
                                <td><a href="#">Proses Data</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>