<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="billing-data.php">Billing Data</a>
        <a href="detail-billing-data.php">Detail Billing Data</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail Billing Data</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="py-1 grid-detail-list grid-gap-2">
                    <div class="form-img">
                       <img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">
                    </div>
                   <div class="detail-list">
                       <div class="grid-4 grid-gap-2">
                            <div class="list-1">
                                <div class="detail-list">
                                   <label><b>Nama Mahasiswa</b></label><br>
                                   <span>[180099298] Rohmana</span>
                                </div>

                               <label><b>VA Number</b></label><br>
                               <span>9882304200700011</span>
                            </div>
                            <div class="list-1">
                                <div class="detail-list">
                                   <label><b>Prodi</b></label><br>
                                   <span>[022] Manajemen Informatika</span>
                                </div>
                            </div>
                            <div class="list-1">
                               <div class="detail-list">
                                   <label><b>Kampus</b></label><br>
                                   <span>Jakarta Pusat ( Kramat Raya)</span>
                                </div>
                            </div>
                       </div>
                   </div>
                   <div class="list-nilai">
                        <a href="billing-data.php" class="btn btn-link btn-danger export-list">Back</a>
                   </div>
                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table id="datatable">
                            <thead class="bg-color-primary">
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Billing ID</th>
                                    <th class="align-right">Ammount</th>
                                    <th class="align-right">Discount</th>
                                    <th class="align-left">Keterangan</th>
                                    <th class="align-right">Penalty</th>
                                    <th class="align-right">Total Ammount</th>
                                    <th class="align-left">Billing to</th>
                                    <th class="align-left">Expired Date</th>
                                    <th class="align-left">Status</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">INV21070001</td>
                                    <td class="align-right">7.000.000</td>
                                    <td class="align-right">500.000</td>
                                    <td class="align-left">Pembayaran 5 Bulan</td>
                                    <td class="align-right">0</td>
                                    <td class="align-right">6.500.000</td>
                                    <td class="align-left">Pembayaran Angsuran</td>
                                    <td class="align-left">2021-07-31</td>
                                    <td class="align-left"><span class="text-danger">Unpaid</span></td>
                                    <td class="align-center">
                                        <a href="form-tambah-billing.php?action=update" class="btn btn-link text-secondary" title="Update Billing"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">INV21060321</td>
                                    <td class="align-right">1.200.000</td>
                                    <td class="align-right">0</td>
                                    <td class="align-left">-</td>
                                    <td class="align-right">0</td>
                                    <td class="align-right">1.200.000</td>
                                    <td class="align-left">Pembayaran Angsuran</td>
                                    <td class="align-left">2021-06-30</td>
                                    <td class="align-left"><span class="text-success">[1.200.000] Paid</span></td>
                                    <td class="align-center">
                                        <a href="form-tambah-billing.php?action=update" class="btn btn-link text-secondary" title="Update Billing"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td class="align-left">INV20050123</td>
                                    <td class="align-right">500.000</td>
                                    <td class="align-right">0</td>
                                    <td class="align-left">-</td>
                                    <td class="align-right">0</td>
                                    <td class="align-right">500.000</td>
                                    <td class="align-left">Uji Kompetensi</td>
                                    <td class="align-left">2021-05-30</td>
                                    <td class="align-left"><span class="text-success">[500.000] Paid</span></td>
                                    <td class="align-center">
                                        <a href="form-tambah-billing.php?action=update" class="btn btn-link text-secondary" title="Update Billing"><i class="far fa-edit"></i></a>
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