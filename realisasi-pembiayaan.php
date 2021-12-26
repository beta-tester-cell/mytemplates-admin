<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan</a>
        <a href="#">Kewajiban Cabang</a>
        <a href="realisasi-pembiayaan.php">Realisasi Kewajiban Cabang</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Tagihan dan Realisasi Pembayaran Kewajiban Cabang untuk 6 Bulan Terakhir</h6>
                </div>
                <div class="chart-container">
                    <canvas id="getRealisasiPembiayaan"></canvas>
                </div>

            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Realisasi Kewajiban Cabang</h6>
                </div>

                <div class="form-inputs">
                    <div class="form grid-2 grid-gap-1 py-1">
                        <div class="input-group">
                            <div class="input-group-area"><input class="width-100" value="2021-06" type="month" id="tanggal_awal"></div>
                        </div>
                        <button class="btn btn-secondary btn-submit" style="width: 70px;" id="button-view">View</button>
                    </div>
                </div>

                <div class="select-export" style="width: 100px; float: right; display: block;">
                    <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
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
                                <th>By Organisasi</th>
                                <th>By Marketing</th>
                                <th>GSuite2</th>
                                <th>By Gedung</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Balikpapan</td>
                                <td class="text-right">10.000.000</td>
                                <td class="text-right">23.000.000</td>
                                <td class="text-right">8.000.000</td>
                                <td class="text-right">14.000.000</td>
                                <td class="text-right">55.000.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Banda Aceh</td>
                                <td class="text-right">11.000.000</td>
                                <td class="text-right">10.000.000</td>
                                <td class="text-right">7.000.000</td>
                                <td class="text-right">15.000.000</td>
                                <td class="text-right">43.000.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bandar Lampung</td>
                                <td class="text-right">8.000.000</td>
                                <td class="text-right">12.000.000</td>
                                <td class="text-right">10.000.000</td>
                                <td class="text-right">20.000.000</td>
                                <td class="text-right">50.000.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th><b>Total</b></th>
                                <th class="text-right">29.000.000</th>
                                <th class="text-right">45.000.000</th>
                                <th class="text-right">25.000.000</th>
                                <th class="text-right">49.000.000</th>
                                <th class="text-right">148.000.000</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <h3 style="margin-top: 20px;"><b>PLJ</b></h3>
                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Cabang</th>
                                <th>By Organisasi</th>
                                <th>By Marketing</th>
                                <th>GSuite2</th>
                                <th>By Gedung</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PLJ Kramat Raya</td>
                                <td class="text-right">20.000.000</td>
                                <td class="text-right">30.000.000</td>
                                <td class="text-right">18.000.000</td>
                                <td class="text-right">23.000.000</td>
                                <td class="text-right">91.000.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PLJ Pasar Minggu</td>
                                <td class="text-right">33.000.000</td>
                                <td class="text-right">15.000.000</td>
                                <td class="text-right">10.000.000</td>
                                <td class="text-right">13.000.000</td>
                                <td class="text-right">71.000.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PLJ Cilodong</td>
                                <td class="text-right">28.000.000</td>
                                <td class="text-right">30.000.000</td>
                                <td class="text-right">40.000.000</td>
                                <td class="text-right">20.000.000</td>
                                <td class="text-right">118.000.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>PLB Bandung</td>
                                <td class="text-right">19.000.000</td>
                                <td class="text-right">20.000.000</td>
                                <td class="text-right">30.000.000</td>
                                <td class="text-right">45.000.000</td>
                                <td class="text-right">114.000.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PLB Cimahi</td>
                                <td class="text-right">15.000.000</td>
                                <td class="text-right">18.000.000</td>
                                <td class="text-right">19.000.000</td>
                                <td class="text-right">13.000.000</td>
                                <td class="text-right">65.000.000</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th><b>Total</b></th>
                                <th class="text-right">115.000.000</th>
                                <th class="text-right">113.000.000</th>
                                <th class="text-right">117.000.000</th>
                                <th class="text-right">114.000.000</th>
                                <th class="text-right">459.000.000</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>