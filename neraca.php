<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Pusat</a>
        <a href="#">Report</a>
        <a href="neraca.php">Neraca</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex pb-1 line-bottom-2 flex-change grid-gap-1">
                    <div class="form grid-3 grid-gap-1 width-100">
                        <div class="form-inputs  my-0">
                            <label for="bulan">Bulan</label>
                            <select name="bulan" id="bulan">
                                <option selected="selected">-- Bulan --</option>
                                <?php
                                $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                                $jlh_bln = count($bulan);
                                for ($c = 0; $c < $jlh_bln; $c += 1) {
                                    echo "<option value=$bulan[$c]> $bulan[$c] </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-inputs  my-0">
                            <label for="tahun">Tahun</label>
                            <select name="tahun" id="tahun">
                                <option value="Selected">-- Tahun --</option>
                                <?php
                                $now = date('Y');

                                for ($a = 2010; $a <= $now; $a++) {
                                    echo "<option value='$a'>$a</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button class="btn btn-secondary btn-header">View</button>
                    </div>
                    <div class="d-flex grid-gap-1 flex-reverse-end width-100">
                        <a href="cetak-neraca.php" target="_blank" class="btn btn-link btn-primary dropdown-button"><i class="fa fa-print"></i> Print</a>
                        <div class="select-export" style="bottom: 0;">
                            <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>
                            <div class="type-export">
                                <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center my-1 line-bottom-1">
                    <h5>KAMPUS <span class="text-secondary">KRAMAT RAYA</span></h5>
                    <h6>NERACA</h6>
                    <p style="font-size:16px;">Desember & November 2021</p>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Catatan</th>
                                <th>Desember 2021</th>
                                <th>November 2021</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kas & Bank 2021</td>
                                <td class="text-center">1</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Kas ditangan</td>
                                <td class="text-center">2</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Piutang Mahasiswa</td>
                                <td class="text-center">3</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Dana Pinjaman</td>
                                <td class="text-center">4</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Hutang Bank</td>
                                <td class="text-center">5</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Hutang Karyawan</td>
                                <td class="text-center">6</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Leasing</td>
                                <td class="text-center">7</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Modal Tn X</td>
                                <td class="text-center">8</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Laba Ditahan</td>
                                <td class="text-center">9</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                            <tr>
                                <td>Laba Periode Berjalan</td>
                                <td class="text-center">10</td>
                                <td class="text-right">245,400,430</td>
                                <td class="text-right">245,400,430</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>