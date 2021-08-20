<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Tools</a>

        <a href="pindah-prodi.php">Pindah Prodi</a>

    </div>

</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header  d-flex flex-space-between">
                    <h6>Pindah Konsentrasi</h6>

                    <div class="select-export">

                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                        <div class="type-export">

                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                        </div>

                    </div>
                </div>

                <div class="d-flex grid-gap-1 flex-change align-center my-1">
                    <div class="my-1">
                        <label for="tahun">Tahun Akademik</label>
                        <select name="tahun" id="tahun">
                            <option value="0">-- Pilih Tahun Akademik --</option>
                            <option value="1">2020/2021</option>
                            <option value="2">2019/2020</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 150px;height:100%">Search</button>
                    <button type="reset" class="btn btn-danger " style="width: 150px;height:100%">Reset</button>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Aplikan</th>
                                <th>Konsentrasi</th>
                                <th>Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Adinda Wardania</td>
                                <td>Administrasi Bisnis</td>
                                <td>-</td>
                                <td><a href="edit-pindah-prodi.php">Pindah Konsentrasi</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adinda Wardania</td>
                                <td>Administrasi Bisnis</td>
                                <td>-</td>
                                <td><a href="#">Pindah Konsentrasi</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Aditya Dwi Nugroho</td>
                                <td>Manajemen Informatika</td>
                                <td>-</td>
                                <td><a href="#">Pindah Konsentrasi</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>