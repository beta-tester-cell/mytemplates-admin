<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Report</a>

        <a href="potensi-realisasi-revenue.php">Potensi/Realisasi Revenue</a>

    </div>

</div>

<div class="content">

    <div class="container">


        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Potensi/Realisasi Revenue</h6>



                    <div class="select-export my-0">

                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                        <div class="type-export">

                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                        </div>

                    </div>

                </div>



                <div class="filter-revenue">

                    <div class="form-inputs">

                        <div class="d-flex flex-change grid-gap-1 py-1">

                            <div class="input-group">

                                <div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>

                                <div class="input-group-icon">TO</div>

                                <div class="input-group-area"><input class="width-100" type="date" id="tanggal_akhir"></div>

                            </div>

                            <select name="report" id="report" style="height: 40px;">

                                <option value="0">-- Pilih Tipe Report --</option>

                                <option value="Report Acrual Basis" selected>Report Acrual Basis</option>

                                <option value="Report Cash Basis">Report Cash Basis</option>

                            </select>

                        </div>

                    </div>

                </div>



                <div class="py-1">

                    <div class="table-responsive">

                        <table id="datatable" class="table-list">

                            <thead class="bg-color-primary">

                                <tr class="thead-color">

                                    <th class="align-center" rowspan="2">No</th>

                                    <th class="align-left" rowspan="2">Prodi</th>

                                    <th class="align-center" colspan="2">September (2020)</th>

                                    <th class="align-center" colspan="2">Oktober (2020)</th>

                                    <th class="align-center" colspan="2">November (2020)</th>

                                    <th class="align-center" colspan="2">Desember (2020)</th>

                                    <th class="align-center" colspan="2">Januari (2021)</th>

                                    <th class="align-center" colspan="2">Februari (2021)</th>

                                    <th class="align-center" colspan="2">Total Revenue</th>

                                    <th class="align-center" rowspan="2">Rasio</th>

                                </tr>

                                <tr class="thead-color">

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                    <th>Potensi</th>

                                    <th>Realisasi</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td class="align-center">1</td>

                                    <td class="align-left"><a href="report-potensi-revenue.php">MI</a></td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">150.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">100.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">50.000.000</td>

                                    <td class="align-left">50.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">150.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">100.000.000</td>

                                    <td class="align-left">970.000.000</td>

                                    <td class="align-left">670.000.000</td>

                                    <td class="align-center">69%</td>

                                </tr>

                                <tr>
                                    <td class="align-center">2</td>

                                    <td class="align-left"><a href="report-potensi-revenue.php">AB</a></td>

                                    <td class="align-left">150.000.000</td>

                                    <td class="align-left">100.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">60.000.000</td>

                                    <td class="align-left">60.000.000</td>

                                    <td class="align-left">150.000.000</td>

                                    <td class="align-left">100.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">880.000.000</td>

                                    <td class="align-left">780.000.000</td>

                                    <td class="align-center">88%</td>

                                </tr>

                                <tr>
                                    <td class="align-center">3</td>

                                    <td class="align-left"><a href="report-potensi-revenue.php">KA</a></td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">1.200.000.000</td>

                                    <td class="align-left">1.200.000.000</td>

                                    <td class="align-center">10%</td>

                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th><b>Total</b></th>
                                    <th class="align-left">550.000.000</th>
                                    <th class="align-left">450.000.000</th>
                                    <th class="align-left">600.000.000</th>
                                    <th class="align-left">500.000.000</th>
                                    <th class="align-left">440.000.000</th>
                                    <th class="align-left">440.000.000</th>
                                    <th class="align-left">310.000.000</th>
                                    <th class="align-left">310.000.000</th>
                                    <th class="align-left">550.000.000</th>
                                    <th class="align-left">450.000.000</th>
                                    <th class="align-left">600.000.000</th>
                                    <th class="align-left">500.000.000</th>
                                    <th class="align-left">3.050.000.000</th>
                                    <th class="align-left">2.650.000.000</th>
                                    <th></th>
                                </tr>
                            </tfoot>

                        </table>

                    </div>

                </div>



            </div>

        </div>

    </div>

</div>



<?php include('footer-datatable.php') ?>