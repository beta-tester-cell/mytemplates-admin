<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Dosen</a>
        <a href="#">Report</a>
        <a href="laporan-dosen.php">Dosen</a>
        <a href="laporan-detail-dosen.php">Lapran Detail Dosen</a>
    </div>
</div>
<div class="content">

    <div class="container">

        <div class="content-tabs">

            <!-- Nav pills -->

            <ul class="nav nav-pills" id="tabs">

                <li class="nav-item">

                    <a class="nav-link" id="tab1">Rekap Tahun Akademik</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" id="tab2">Rekap All</a>

                </li>

            </ul>



            <!-- Tab panes -->

            <div class="tab-content">

                <div class="container tab-pane active" id="tab1C">

                    <div class="py-1">
                        <h6>Detail Dosen Berdasarkan Tahun Akademik</h6>
                        <hr>
                    </div>

                    <div class="filter-dosen form-inputs">
                        <select name="tahunakademik" id="tahunakademik">
                            <option value="">-- Pilih Tahun Akademik --</option>
                            <option value="2017/2018">2017/2018</option>
                            <option value="2018/2019">2018/2019</option>
                            <option value="2019/2020">2019/2020</option>
                            <option value="2020/2021" selected>2020/2021</option>
                        </select>
                        <select name="Peripde" id="Peripde" style="width: 430px;"  >
                            <option value="">-- Pilih Prodi --</option>
                            <option value="20120" selected>20120</option>
                            <option value="20121">20121</option>
                            <option value="20191">20191</option>
                            <option value="20192">20192</option>
                        </select>
                     </div>

                     <div class="py-1">
                        <div class="table-responsive">
                            <table class="table-list" id="datatable">
                                <thead>
                                    <tr>
                                        <th class="align-center">No</th>
                                        <th class="align-left">ID Dosen</th>
                                        <th class="align-left">NIDN</th>
                                        <th class="align-left">Nama Dosen</th>
                                        <th class="align-left">Gelar</th>
                                        <th class="align-center">Pengalaman Mengajar</th>
                                        <th class="align-left">Jenis Dosen</th>
                                        <th class="align-left">Home Base</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td class="align-center">1</td>
                                        <td class="align-left">00122</td>
                                        <td class="align-left">2012234</td>
                                        <td class="align-left">Masria</td>
                                        <td class="align-left">M.Kom</td>
                                        <td class="align-center">12Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">2</td>
                                        <td class="align-left">00123</td>
                                        <td class="align-left">2031123</td>
                                        <td class="align-left">Nasril</td>
                                        <td class="align-left">M.Kom</td>
                                        <td class="align-center">12Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">3</td>
                                        <td class="align-left">00124</td>
                                        <td class="align-left">-</td>
                                        <td class="align-left">Karto</td>
                                        <td class="align-left">S.Kom</td>
                                        <td class="align-center">2Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">4</td>
                                        <td class="align-left">00125</td>
                                        <td class="align-left">-</td>
                                        <td class="align-left">Fadillah</td>
                                        <td class="align-left">S.Kom</td>
                                        <td class="align-center">1Th</td>
                                        <td class="align-left">Partime</td>
                                        <td class="align-left">-</td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">5</td>
                                        <td class="align-left">00126</td>
                                        <td class="align-left">4452112</td>
                                        <td class="align-left">Teddy</td>
                                        <td class="align-left">M.Kom</td>
                                        <td class="align-center">12Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Cilodong</td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">6</td>
                                        <td class="align-left">00127</td>
                                        <td class="align-left">2221134</td>
                                        <td class="align-left">Euis WInarti</td>
                                        <td class="align-left">M.Ba</td>
                                        <td class="align-center">22Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                        
                </div>

                <div class="container tab-pane" id="tab2C">

                    <div class="py-1">
                        <h6>Detail Dosen</h6>
                        <hr>
                    </div>

                    <div class="filter-dosen form-inputs">
                        <select name="kriteria" id="kriteria">
                            <option value="" selected>-- Pilih Kriteria --</option>
                        </select>
                     </div>

                     <div class="py-1">
                        <div class="table-responsive">
                            <table class="table-list" id="datatable2">
                                <thead>
                                    <tr>
                                        <th class="align-center">No</th>
                                        <th class="align-left">ID Dosen</th>
                                        <th class="align-left">NIDN</th>
                                        <th class="align-left">Nama Dosen</th>
                                        <th class="align-left">Gelar</th>
                                        <th class="align-center">Pengalaman Mengajar</th>
                                        <th class="align-left">Jenis Dosen</th>
                                        <th class="align-left">Home Base</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td class="align-center">1</td>
                                        <td class="align-left">00122</td>
                                        <td class="align-left">2012234</td>
                                        <td class="align-left">Masria</td>
                                        <td class="align-left">M.Kom</td>
                                        <td class="align-center">12Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">2</td>
                                        <td class="align-left">00123</td>
                                        <td class="align-left">2031123</td>
                                        <td class="align-left">Nasril</td>
                                        <td class="align-left">M.Kom</td>
                                        <td class="align-center">12Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">3</td>
                                        <td class="align-left">00124</td>
                                        <td class="align-left">-</td>
                                        <td class="align-left">Karto</td>
                                        <td class="align-left">S.Kom</td>
                                        <td class="align-center">2Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">4</td>
                                        <td class="align-left">00125</td>
                                        <td class="align-left">-</td>
                                        <td class="align-left">Fadillah</td>
                                        <td class="align-left">S.Kom</td>
                                        <td class="align-center">1Th</td>
                                        <td class="align-left">Partime</td>
                                        <td class="align-left">-</td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">5</td>
                                        <td class="align-left">00126</td>
                                        <td class="align-left">4452112</td>
                                        <td class="align-left">Teddy</td>
                                        <td class="align-left">M.Kom</td>
                                        <td class="align-center">12Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Cilodong</td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">6</td>
                                        <td class="align-left">00127</td>
                                        <td class="align-left">2221134</td>
                                        <td class="align-left">Euis WInarti</td>
                                        <td class="align-left">M.Ba</td>
                                        <td class="align-center">22Th</td>
                                        <td class="align-left">Tetap</td>
                                        <td class="align-left">Jakarta Pusat ( Kramat Raya)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>

</div>

<?php include('footer-datatable.php') ?>