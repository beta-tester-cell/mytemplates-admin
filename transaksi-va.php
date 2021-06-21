<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Data Transaksi</h6>
                    <div class="select-export">
                    <a href="#javascript:;"><button class="btn btn-link btn-primary">Form Re-schedule Pembayaran</button></a>
                    </div>

                </div>

                <div class="card-header">
                    <div class="d-flex grid-gap-1 py-1 flex-change">

                        <div class="filtering-tahun-akademik">
                            <label><b>No. Virtual Account</b> : </label>
                        <label>988122230988849</label>
                        </div>

                    </div>
                </div>
                <div class="table-responsive">
                    <table id="transaksi-va" class="table-list">
                        <thead>
                            <tr>
                                <th class="dt-center">No</th>
                                <th>Billing ID</th>
                                <th class="dt-right">Billing Amount</th>
                                <th class="dt-center">Due Date</th>
                                <th class="dt-center">Description</th>
                                <th class="dt-center">Download Invoice</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="dt-center">1</td>
                                <td>INV/21071110</td>
                                <td class="dt-right">Rp. 1.200.000,-</td>
                                <td class="dt-center">2021-07-30</td>
                                <td class="dt-center">Tagihan Mei-Juni</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>History Transaksi</h6>
                </div>

                <div class="table-responsive">
                    <table id="datatable-jadwal-ujian" class="table-list">
                        <thead>
                            <tr>
                                <th class="dt-center">No</th>
                                <th>Billing ID</th>
                                <th class="dt-right">Billing Amount</th>
                                <th class="dt-center">Due Date</th>
                                <th class="dt-center">Description</th>
                                <th class="dt-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="dt-center">1</td>
                                <td>INV/21071109</td>
                                <td class="dt-right">Rp. 600.000,-</td>
                                <td class="dt-center">2021-05-30</td>
                                <td class="dt-center">Tagihan Mei</td>
                                <td class="dt-center"><font color="red">Expired</font></td>
                            </tr>

                            <tr>
                                <td class="dt-center">2</td>
                                <td>INV/21071109</td>
                                <td class="dt-right">Rp. 600.000,-</td>
                                <td class="dt-center">2021-06-10</td>
                                <td class="dt-center">Tagihan Mei</td>
                                <td class="dt-center"><font color="green">Paid</font></td>
                            </tr>

                            <tr>
                                <td class="dt-center">3</td>
                                <td>INV/21071108</td>
                                <td class="dt-right">Rp. 300.000,-</td>
                                <td class="dt-center">2021-04-30</td>
                                <td class="dt-center">Tagihan Ujikom</td>
                                <td class="dt-center"><font color="green">Paid</font></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>