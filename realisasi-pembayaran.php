<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan</a>
        <a href="#">Report</a>
        <a href="realisasi-pembayaran.php">Realisasi Pembayaran</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Pembayaran yang masih harus dibayar 6 Bulan Terakhir</h6>
                </div>
                <div class="chart-container">
                    <canvas id="getRealisasiPembayaran"></canvas>
                </div>

            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Pembayaran sesuai dengan tanggal</h6>
                </div>

                <div class="form-inputs">
                    <div class="form grid-2 grid-gap-1 py-1">
                        <div class="input-group">
                            <div class="input-group-area"><input class="width-100" type="time" id="tanggal_awal"></div>
                            <div class="input-group-icon">TO</div>
                            <div class="input-group-area"><input class="width-100" type="time" id="tanggal_akhir"></div>
                        </div>
                        <button class="btn btn-secondary btn-submit" style="width: 70px;" id="button-view">View</button>
                    </div>
                </div>

                <div class="select-export" style="width: 100px; float: right; display: block;">
                    <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                    <!-- <div type="button" class="btn btn-link btn-secondary dropdown-button" style="width: 6vw;"><i class="fas fa-file-export"></i> Export</div> -->
                    <div class="type-export">
                        <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                        <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                        <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                    </div>
                </div>

                <h3><b>Collage</b></h3>
                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cabang</th>
                                <th class="align-right">Pembayaran</th>
                                <th class="align-right">Tingkat 1</th>
                                <th class="align-right">Tingkat 2</th>
                                <th class="align-right">Tingkat 3</th>
                                <th class="align-right">Tingkat 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Balikpapan</td>
                                <td class="align-right">250.000.000</td>
                                <td class="align-right">130.000.000</td>
                                <td class="align-right">120.000.000</td>
                                <td class="align-right">0</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Banda Aceh</td>
                                <td class="align-right">350.000.000</td>
                                <td class="align-right">250.000.000</td>
                                <td class="align-right">100.000.000</td>
                                <td class="align-right">0</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bandar Lampung</td>
                                <td class="align-right">150.000.000</td>
                                <td class="align-right">80.000.000</td>
                                <td class="align-right">70.000.000</td>
                                <td class="align-right">0</td>
                                <td class="align-right">0</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th><b>Total</b></th>
                                <th class="align-right">800.000.000</th>
                                <th class="align-right">460.000.000</th>
                                <th class="align-right">340.000.000</th>
                                <th class="align-right">0</th>
                                <th class="align-right">0</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <h3 style="margin-top: 20px;"><b>PLJ</b></h3>
                <div class="table-responsive">
                    <table class="table-list" id="datatable2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cabang</th>
                                <th class="align-right">Realisasi</th>
                                <th class="align-right">Tingkat 1</th>
                                <th class="align-right">Tingkat 2</th>
                                <th class="align-right">Tingkat 3</th>
                                <th class="align-right">Tingkat 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PLJ Kramat Raya</td>
                                <td class="align-right">270.000.000</td>
                                <td class="align-right">230.000.000</td>
                                <td class="align-right">220.000.000</td>
                                <td class="align-right">200.000.000</td>
                                <td class="align-right">120.000.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PLJ Pasar Minggu</td>
                                <td class="align-right">430.000.000</td>
                                <td class="align-right">250.000.000</td>
                                <td class="align-right">100.000.000</td>
                                <td class="align-right">80.000.000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PLJ Cilodong</td>
                                <td class="align-right">500.000.000</td>
                                <td class="align-right">180.000.000</td>
                                <td class="align-right">170.000.000</td>
                                <td class="align-right">150.000.000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>PLB Bandung</td>
                                <td class="align-right">740.000.000</td>
                                <td class="align-right">240.000.000</td>
                                <td class="align-right">300.000.000</td>
                                <td class="align-right">200.000.000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PLB Cimahi</td>
                                <td class="align-right">80.000.000</td>
                                <td class="align-right">60.000.000</td>
                                <td class="align-right">20.000.000</td>
                                <td class="align-right">0</td>
                                <td class="align-right">0</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th><b>Total</b></th>
                                <th class="align-right">2.020.000.000</th>
                                <th class="align-right">960.000.000</th>
                                <th class="align-right">810.000.000</th>
                                <th class="align-right">3.780.000.000</th>
                                <th class="align-right">120.000.000</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>