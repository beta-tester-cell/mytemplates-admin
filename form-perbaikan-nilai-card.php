<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Mahasiswa</a>
        <a href="#">Perkuliahan</a>
        <a href="form-perbaikan-nilai.php">Komponen Nilai</a>
        <a href="form-perbaikan-nilai-card.php">Form KHS</a>
    </div>
</div>

<style type='text/css'>
    font {
        font-family: arial;
    }
</style>

<div class="content">

    <div class="container">

        <div class="py-1">

            <!-- JIKA PENGISIAN KRS DITUTUP MAKA TAMPIL : form-krs-online-close.php -->

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Form KHS </h6>

                    <div class="select-export">
                        <a href="report-khs-cetak.php" target="_blank"> <div type="button" class="btn btn-link btn-secondary"> <i class="fa fa-file-pdf"></i> Cetak KHS</div></a>
                    </div>

                </div>

                <div class="py-1">

                    <div class="card">
                        <div class="form d-flex grid-gap-1">
                            <div class="my-1">
                                <label><b>NIM</b></label><br>
                                <label>1920022122</label>
                            </div>
                            <div class="my-1">
                                <label><b>TAHUN AKADEMIK</b></label><br>
                                <label>2020/2021</label>
                            </div>

                            <div class="my-1">
                                <label><b>NAMA LENGKAP</b></label><br>
                                <label>Rosihan Arbi Said</label>
                            </div>
                            <div class="my-1">
                                <label><b>PRODI</b></label><br>
                                <label>MANAJEMEN INFORMATIKA</label>
                            </div>

                            <div class="my-1">
                                <label><b>SEMESTER</b></label><br>
                                <label>1 (GANJIL)</label>
                            </div>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table border=1 style='width:100%;margin-top:20px'>
                            <tr>
                                <td class='head-col'>No</td>
                                <td class='head-col'>Kode</td>
                                <td class='head-col'>Mata Kuliah</td>
                                <td class='head-col'>HM</td>
                                <td class='head-col'>AM</td>
                                <td class='head-col'>SKS</td>
                                <td class='head-col'>M</td>
                            </tr>

                            <tr>
                                <td class='cen-col'>1</td>
                                <td class='pad-col'>911120</td>
                                <td class='pad-col'>Bahasa Indonesia</td>
                                <td class='cen-col'>A+</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>16</td>
                            </tr>

                            <tr>
                                <td class='cen-col'>2</td>
                                <td class='pad-col'>911125</td>
                                <td class='pad-col'>Basis Data</td>
                                <td class='cen-col'>A+</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>16</td>
                            </tr>

                            <tr>
                                <td class='cen-col'>3</td>
                                <td class='pad-col'>911126</td>
                                <td class='pad-col'>Aplikasi Komputer</td>
                                <td class='cen-col'>A+</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>2</td>
                                <td class='cen-col'>8</td>
                            </tr>

                            <tr>
                                <td class='cen-col'>4</td>
                                <td class='pad-col'>911127</td>
                                <td class='pad-col'>Pendidikan Agama</td>
                                <td class='cen-col'>A+</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>2</td>
                                <td class='cen-col'>8</td>
                            </tr>

                            <tr>
                                <td class='cen-col'>5</td>
                                <td class='pad-col'>911128</td>
                                <td class='pad-col'>General English</td>
                                <td class='cen-col'>A+</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>16</td>
                            </tr>

                            <tr>
                                <td class='cen-col'>6</td>
                                <td class='pad-col'>911129</td>
                                <td class='pad-col'>SQL Server</td>
                                <td class='cen-col'>A+</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>4</td>
                                <td class='cen-col'>16</td>
                            </tr>

                            <tr>
                                <td colspan=5 height='30px' style='padding-right:10px;text-align:right'> JUMLAH</td>
                                <td class='cen-col'>20</td>
                                <td class='cen-col'>80</td>
                            </tr>

                            <tr>
                                <td colspan=7>

                                    <table style='padding:7px' border="0">
                                        <tr>
                                            <td style="width:25%">Index Prestasi Semester (IPS)</td>
                                            <td style="width:2%">:</td>
                                            <td style="width:10%">4.00</td>
                                            <td style="width:15%">&nbsp;</td>
                                            <td style="width:6%">Predikat</td>
                                            <td style="width:2%">:</td>
                                            <td style="width:40%">CUMLAUDE</td>
                                        </tr>

                                        <tr>
                                            <td>Index Prestasi Kumulatif (IPK)</td>
                                            <td>:</td>
                                            <td>4.00</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>

                        </table>

                     <!-- BEGIN FORM 2 -->
                        <table style='margin-top:20px;'>
                            <tr>
                                <td style='padding-left:16px' colspan="3"><b>Keterangan :</b></td>
                            </tr>
                            <tr>
                                <td width=10px>HM</td>
                                <td width=10px>:</td>
                                <td>Huruf Mutu</td>
                            </tr>

                            <tr>
                                <td width=10px>AM</td>
                                <td width=10px>:</td>
                                <td>Angka Mutu</td>
                            </tr>

                            <tr>
                                <td width=10px>M</td>
                                <td width=10px>:</td>
                                <td>SKS x AM</td>
                            </tr>
                        </table>
                    <!-- END FORM 2 -->

                    </div>

                </div>
            </div>

        </div>
    </div>

    <?php include('footer-datatable.php') ?>