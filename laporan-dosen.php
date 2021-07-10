<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Dosen</a>
        <a href="#">Report</a>
        <a href="laporan-dosen.php">Dosen</a>
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
                        <h6>Rekapitulasi Dosen Berdasarkan Tahun Akademik</h6>
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
                                        <th class="align-left">Tahun Akademik</th>
                                        <th class="align-left">Periode</th>
                                        <th class="align-center">Total Dosen</th>
                                        <th class="align-center">Tetap</th>
                                        <th class="align-center">Part Time</th>
                                        <th class="align-center">NIDN</th>
                                        <th class="align-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-center">1</td>
                                        <td class="align-left">2020/2021</td>
                                        <td class="align-left">20201 [ Ganjil ]</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">2</td>
                                        <td class="align-left">2020/2021</td>
                                        <td class="align-left">20202 [ Genap ]</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">3</td>
                                        <td class="align-left">2020/2021</td>
                                        <td class="align-left">20191 [ Ganjil ]</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">4</td>
                                        <td class="align-left">2020/2021</td>
                                        <td class="align-left">20192 [ Genap ]</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td class="align-center">3</td>
                                        <td class="align-left">2020/2021</td>
                                        <td class="align-left">20181 [ Ganjil ]</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">4</td>
                                        <td class="align-left">2020/2021</td>
                                        <td class="align-left">20182 [ Genap ]</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                        
                </div>

                <div class="container tab-pane" id="tab2C">

                    <div class="py-1">
                        <h6>Rekapitulasi Dosen Detail</h6>
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
                                        <th class="align-center">Total Dosen</th>
                                        <th class="align-center">Tetap</th>
                                        <th class="align-center">Part Time</th>
                                        <th class="align-center">NIDN</th>
                                        <th class="align-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-center">1</td>
                                        <td class="align-center">120</td>
                                        <td class="align-center">80</td>
                                        <td class="align-center">40</td>
                                        <td class="align-center">50</td>
                                        <td class="align-center">
                                            <a href="laporan-detail-dosen.php">View</a>
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

</div>

<?php include('footer-datatable.php') ?>