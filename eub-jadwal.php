<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <?php if (!empty($_GET['bread'])) : ?>
            <a href="#">Akademik Pusat</a>
        <?php else : ?>
            <a href="#">Akademik Cabang</a>
        <?php endif; ?>
        <a href="eub-jadwal.php">Jadwal EUB</a>
    </div>
</div>
<div class="content">
    <div class="container">


        <div class="py-1">
            <div class="card">
                <div class="d-flex grid-gap-2">
                    <a href="form-tambah-jadwal-eub.php" class="btn btn-link"><i class="fa fa-plus"></i> ADD JADWAL </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Jadwal EUB</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="filter-eub">
                   <select name="Tahun Akademik" id="Tahun Akademik">
                        <option value="0">-- Pilih Tahun Akademik --</option>
                        <option value="2020/2021">2020/2021</option>
                        <option value="2020/2021">2020/2021</option>
                        <option value="2020/2021">2020/2021</option>
                    </select>
                    <select name="Periode" id="Periode">
                        <option value="0">-- Pilih Periode --</option>
                        <option value="20211">20211 (Ganjil)</option>
                        <option value="20211">20211 (Ganjil)</option>
                    </select>
                </div>

                <div class="py-1">


                    <div class="table-responsive">
                        <table class="table-list" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Tahun Akademik</th>
                                    <th class="align-center">Semester</th>
                                    <th class="align-left">Periode</th>
                                    <th class="align-left">Tanggal Mulai</th>
                                    <th class="align-left">Tanggal Akhir</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">2020/2021</td>
                                    <td class="align-center">1</td>
                                    <td class="align-left">20201</td>
                                    <td class="align-left">2021-07-01</td>
                                    <td class="align-left">2021-07-13</td>
                                    <td class="align-center">
                                        <a href="form-tambah-jadwal-eub.php" title="Edit" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">2020/2021</td>
                                    <td class="align-center">3</td>
                                    <td class="align-left">20201</td>
                                    <td class="align-left">2021-07-01</td>
                                    <td class="align-left">2021-07-13</td>
                                    <td class="align-center">
                                        <a href="form-tambah-jadwal-eub.php" title="Edit" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td class="align-left">2020/2021</td>
                                    <td class="align-center">5</td>
                                    <td class="align-left">20201</td>
                                    <td class="align-left">2021-07-01</td>
                                    <td class="align-left">2021-07-13</td>
                                    <td class="align-center">
                                        <a href="form-tambah-jadwal-eub.php" title="Edit" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>