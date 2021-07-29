<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Virtual Account</a>
        <a href="billing-data.php">Billing Data</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-tambah-billing.php" class="btn btn-link btn-primary">
                        <span>Create Billing</span>
                    </a>
                    <a href="form-upload-bulk-billing.php" class="btn btn-link btn-primary" style="margin-left: 20px;">
                        <span>Bulk Upload Billing</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Billing Data Virtual Account</h6>

                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="filter-billing">
                    <div class="form-inputs">
                        <div class="form grid-2 grid-gap-1 py-1">
                            <div class="input-group">
                                <div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>
                                <div class="input-group-icon">TO</div>
                                <div class="input-group-area"><input class="width-100" type="date" id="tanggal_akhir"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table id="datatable">
                            <thead class="bg-color-primary">
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Billing Id</th>
                                    <th class="align-left">VA Number</th>
                                    <th class="align-left">Nama Mahasiswa</th>
                                    <th class="align-center">Prodi</th>
                                    <th class="align-right">Billing Ammount</th>
                                    <th class="align-left">Expired Date</th>
                                    <th class="align-left">Status</th>
                                    <th class="align-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">INV/001</td>
                                    <td class="align-left">9882304200700011</td>
                                    <td class="align-left">Rohmana</td>
                                    <td class="align-center">MI</td>
                                    <td class="align-right">1200000</td>
                                    <td class="align-left">2021-07-31 23:59</td>
                                    <td class="align-left"><span class="text-danger">Unpaid</span></td>
                                    <td class="align-center">
                                        <a href="detail-billing-data.php" class="text-primary" title="view"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">INV/002</td>
                                    <td class="align-left">9882304200700012</td>
                                    <td class="align-left">Rohmani</td>
                                    <td class="align-center">BA</td>
                                    <td class="align-right">1200000</td>
                                    <td class="align-left">2021-07-31 23:59</td>
                                    <td class="align-left"><span class="text-success">Paid</span></td>
                                    <td class="align-center">
                                        <a href="detail-billing-data.php" class="text-primary" title="view"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td class="align-left">INV/003</td>
                                    <td class="align-left">9882304200700013</td>
                                    <td class="align-left">Rohmanu</td>
                                    <td class="align-center">KA</td>
                                    <td class="align-right">1200000</td>
                                    <td class="align-left">2021-07-31 23:59</td>
                                    <td class="align-left"><span class="text-success">Paid</span></td>
                                    <td class="align-center">
                                        <a href="detail-billing-data.php" class="text-primary" title="view"><i class="fa fa-eye"></i></a>
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