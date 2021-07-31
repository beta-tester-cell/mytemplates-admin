<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Report</a>

        <a href="potensi-realisasi-revenue.php">Potensi/Realisasi Revenue</a>

        <a href="report-potensi-revenue.php">Report Potensi/Realisasi Revenue</a>

    </div>

</div>

<div class="content">

    <div class="container">


        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Report Potensi/Realisasi Revenue</h6>

                    <div class="d-flex grid-gap-1">

                        <a href="potensi-revenue.php" class="btn btn-link btn-danger px-20">Back</a>

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



                <div class="filter-revenue">

                    <div class="form-inputs">

                        <div class="d-flex flex-change grid-gap-1">

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

                            <select name="tahun-angkatan" id="tahun-angkatan" style="height: 40px;">

                                <option value="0">-- Pilih Tahun Angkatan --</option>

                                <option value="1">2018</option>

                                <option value="2">2019</option>

                                <option value="3">2020</option>

                            </select>

                        </div>

                    </div>

                </div>

                <div class="prodi-list">
                    <div class="grid-1 grid-gap-1">
                        <table>
                            <tr class="hide-border-bottom">
                                <th width="80px">Prodi</th>
                                <th width="20px">:</th>
                                <th>Manajemen Informatika</th>
                            </tr>
                        </table>
                    </div>
                </div>



                <div class="py-1">

                    <div class="table-responsive">

                        <table id="datatable" class="table-list">

                            <thead class="bg-color-primary">

                                <tr class="thead-color">

                                    <th class="align-center" rowspan="2">No</th>

                                    <th class="align-left" rowspan="2">Nim</th>

                                    <th class="align-left" rowspan="2">Nama Mahasiswa</th>

                                    <th class="align-center" rowspan="2">Tahun Angkatan</th>

                                    <th class="align-center" colspan="2">September (2020)</th>

                                    <th class="align-center" colspan="2">Oktober (2020)</th>

                                    <th class="align-center" colspan="2">November (2020)</th>

                                    <th class="align-center" colspan="2">Desember (2020)</th>

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

                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td class="align-center">1</td>

                                    <td class="align-left">18122212</td>

                                    <td class="align-left"><a href="detail-payment-history.php">Rohmana</a></td>

                                    <td class="align-center">2018</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">150.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">100.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">50.000.000</td>

                                    <td class="align-left">50.000.000</td>

                                </tr>

                                <tr>
                                    <td class="align-center">2</td>

                                    <td class="align-left">18122212</td>

                                    <td class="align-left"><a href="detail-payment-history.php">Rohimin</a></td>

                                    <td class="align-center">2018</td>

                                    <td class="align-left">150.000.000</td>

                                    <td class="align-left">100.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">120.000.000</td>

                                    <td class="align-left">60.000.000</td>

                                    <td class="align-left">60.000.000</td>

                                </tr>

                                <tr>
                                    <td class="align-center">3</td>

                                    <td class="align-left">18122212</td>

                                    <td class="align-left"><a href="detail-payment-history.php">Rohmantul</a></td>

                                    <td class="align-center">2018</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                </tr>

                                <tr>
                                    <td class="align-center">4</td>

                                    <td class="align-left">20122212</td>

                                    <td class="align-left"><a href="detail-payment-history.php">Rohana</a></td>

                                    <td class="align-center">2020</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

                                    <td class="align-left">200.000.000</td>

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