<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Report</a>

        <a href="potensi-realisasi-revenue.php">Potensi/Realisasi Revenue</a>

        <a href="report-potensi-revenue.php">Report Potensi/Realisasi Revenue</a>

        <a href="detail-payment-history.php">Detail Payment History</a>

    </div>

</div>

<div class="content">

    <div class="container">



        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Detail Payment History</h6>

                    <div class="d-flex grid-gap-1">

                        <a href="report-potensi-revenue.php" class="btn btn-link btn-danger px-20">Back</a>

                        <div class="select-export" style="margin-top: 8px;">

                            <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                            <div class="type-export">

                                <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                                <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                                <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="py-1 grid-detail-list grid-gap-1">

                    <div style="width: 150px;height:auto;">

                        <img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">

                    </div>

                    <div class="detail-list">

                        <div class="grid-3 grid-gap-2">

                            <div class="list-1">

                                <label><b>Nama Mahasiswa</b></label><br>

                                <span>[180099298] Rohmana</span>



                            </div>

                            <div class="list-1">

                                <label><b>Prodi</b></label><br>

                                <span>[022] Manajemen Informatika</span>




                            </div>

                            <div class="list-1">

                                <label><b>Kampus</b></label><br>

                                <span>Jakarta Pusat ( Kramat Raya)</span>

                            </div>

                            <div class="list-1">

                                <label><b>VA Number</b></label><br>

                                <span>9882304200700011</span>
                            </div>

                            <div class="list-1">

                                <label><b>Tahun Angkatan</b></label><br>

                                <span>2018</span>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="total-history">

                    <div class="py-1 d-flex grid-gap-1 flex-center align-start">

                        <div class="outstanding-textbox">

                            <label style="background-color: #FBBC04; padding: 10px;"><b> Total Biaya : </b> Rp. 14.000.000,-</label><br>

                        </div>

                        <div class="pembayaran-textbox">

                            <label style="background-color: #70AD47; padding: 10px 8px;"><b> Total Realisasi : </b> Rp.10.600.000 ,-</label><br>

                        </div>

                    </div>


                </div>


                <div class="py-1">

                    <div class="table-responsive">

                        <table id="datatable">

                            <thead class="bg-color-primary">

                                <tr>

                                    <th class="align-center">No</th>

                                    <th class="align-left">Tanggal Rencana</th>

                                    <th class="align-center">Nominal</th>

                                    <th class="align-center">Terbayar</th>

                                    <th class="align-left">Tanggal Pembayaran</th>

                                    <th class="align-center">Selisih</th>

                                    <th class="align-left">Keterangan</th>


                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td class="align-center">1</td>

                                    <td class="align-left">2020-09-10</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-left">2020-09-15</td>

                                    <td class="align-center">0</td>

                                    <td class="align-left">LUNAS</td>

                                </tr>

                                <tr>

                                    <td class="align-center">2</td>

                                    <td class="align-left">2020-10-10</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-left">2020-10-20</td>

                                    <td class="align-center">0</td>

                                    <td class="align-left">LUNAS</td>

                                </tr>

                                <tr>

                                    <td class="align-center">3</td>

                                    <td class="align-left">2020-11-10</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-left">2020-11-23</td>

                                    <td class="align-center">0</td>

                                    <td class="align-left">LUNAS</td>

                                </tr>

                                <tr>

                                    <td class="align-center">4</td>

                                    <td class="align-left">2020-12-10</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-left">2020-12-11</td>

                                    <td class="align-center">0</td>

                                    <td class="align-left">LUNAS</td>

                                </tr>

                                <tr>

                                    <td class="align-center">5</td>

                                    <td class="align-left">2020-01-10</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-left">2020-01-13</td>

                                    <td class="align-center">0</td>

                                    <td class="align-left">LUNAS</td>

                                </tr>

                                <tr>

                                    <td class="align-center">6</td>

                                    <td class="align-left">2020-02-10</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-center">2.000.000</td>

                                    <td class="align-left">2020-01-13</td>

                                    <td class="align-center">(3.400.000)</td>

                                    <td class="align-left">Kurang Bayar</td>

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