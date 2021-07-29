<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Pusat</a>
        <a href="#">Kewajiban Cabang</a>
        <a href="create-invoice.php">Create Invoice</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-create-invoice.php" class="btn btn-link btn-primary">
                        <span>Create Invoice</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Create Invoice</h6>

                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table class="table-list" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">No Invoice</th>
                                    <th class="align-left">Cabang</th>
                                    <th class="align-left">Tgl Invoice</th>
                                    <th class="align-left">Tgl Jatuhtempo</th>
                                    <th class="align-left">Jenis Pendapatan</th>
                                    <th class="align-center">Periode</th>
                                    <th class="align-right">Total Invoice</th>
                                    <th class="align-left">No Va</th>
                                    <th class="align-center">Status</th>
                                    <th class="align-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">0001/00111/VII/2021</td>
                                    <td class="align-left">Semarang</td>
                                    <td class="align-left">2021-07-05</td>
                                    <td class="align-left">2021-07-05</td>
                                    <td class="align-left">Fee Organisasi</td>
                                    <td class="align-center">072021</td>
                                    <td class="align-right">Rp. 8,000,000</td>
                                    <td class="align-left">9882938903900111</td>
                                    <td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B; color: white;">UNDERPAID</span></td>
                                    <td class="align-center">
                                       <a href="form-create-invoice.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                       <a href="list-transaksi-invoice.php" class="text-primary"><i class="fa fa-newspaper-o"></i></a>
                                       <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                   </td>
                               </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">0002/00111/VII/2021</td>
                                    <td class="align-left">Kramat Raya</td>
                                    <td class="align-left">2021-07-05</td>
                                    <td class="align-left">2021-07-05</td>
                                    <td class="align-left">Fee Organisasi</td>
                                    <td class="align-center">072021</td>
                                    <td class="align-right">Rp. 8,000,000</td>
                                    <td class="align-left">9882938903900111</td>
                                    <td class="align-center"><span class="btn-status btn-success">Paid</span></td>
                                    <td class="align-center">
                                       <a href="form-create-invoice.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                       <a href="list-transaksi-invoice.php" class="text-primary"><i class="fa fa-newspaper-o"></i></a>
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