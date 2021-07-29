<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Pusat</a>
        <a href="#">Kewajiban Cabang</a>
        <a href="create-invoice.php">List Create Invoice</a>
        <a href="list-transaksi-invoice.php">List Transaksi Invoice</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-transaksi-invoice.php" class="btn btn-link btn-primary">
                        <span>Create Transaksi Invoice</span>
                    </a>
                    <a href="list-create-invoice.php" class="btn btn-link btn-danger text-center" style="width: 65px; margin-left: 20px;">Back</a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Transaksi Invoice</h6>

                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="grid-1 grid-gap-1">
                    <table>
                        <tr class="hide-border-bottom">
                            <th width="200px">Total Tagihan Invoice</th>
                            <th width="20px">:</th>
                            <th>Rp. 8,000,000</th>
                        </tr>
                        <tr class="hide-border-bottom">
                            <th width="200px">Total Pembayaran</th>
                            <th width="20px">:</th>
                            <th>Rp. 5,000,000</th>
                        </tr>
                        <tr class="hide-border-bottom">
                            <th width="200px">Sisa Tagihan</th>
                            <th width="20px">:</th>
                            <th>Rp. 3,000,000</th>
                        </tr>
                    </table>
                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table class="table-list" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">No Invoice</th>
                                    <th class="align-left">Tgl Pembayaran</th>
                                    <th class="align-left">Kode Pembayaran</th>
                                    <th class="align-right">Nominal Pembayaran</th>
                                    <th class="align-center">Attachment</th>
                                    <th class="align-left">Via Pembayaran</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">0001/00111/VII/2021</td>
                                    <td class="align-left"> 2021-07-11</td>
                                    <td class="align-left">20210711001</td>
                                    <td class="align-right">Rp. 2,000,000</td>
                                    <td class="align-center text-primary"><i class="fa fa-file-text" aria-hidden="true"></i></td>
                                    <td class="align-left">Transfer Bank</td>
                                    <td class="align-center">   
                                        <a href="form-create-invoice.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">0001/00111/VII/2021</td>
                                    <td class="align-left"> 2021-07-13</td>
                                    <td class="align-left">20210713001</td>
                                    <td class="align-right">Rp. 1,500,000</td>
                                    <td class="align-center text-danger"><i class="fa fa-times" aria-hidden="true"></i></td>
                                    <td class="align-left">Transfer Bank</td>
                                    <td class="align-center">   
                                        <a href="form-create-invoice.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="align-center">3</td>
                                    <td class="align-left">0001/00111/VII/2021</td>
                                    <td class="align-left"> 2021-07-16</td>
                                    <td class="align-left">20210717001</td>
                                    <td class="align-right">Rp. 1,500,000</td>
                                    <td class="align-center text-primary"><i class="fa fa-file-text" aria-hidden="true"></i></td>
                                    <td class="align-left">Transfer Bank</td>
                                    <td class="align-center">   
                                        <a href="form-create-invoice.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
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