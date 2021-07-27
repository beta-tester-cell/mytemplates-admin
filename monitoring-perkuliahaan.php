<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Report</a>
        <a href="monitoring-perkuliahan.php">Monitoring Perkuliahan</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Monitoring Proses Perkuliahaan</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="filter-monitor">
                    <input type="date" id="date-monitoring">
                    <input type="time" id="time-monitoring">
                    <select name="status" id="status-monitoring">
                        <option value="0">-- Pilih Status --</option>
                        <option value="1">Selesai</option>
                        <option value="2">Sedang Dimulai</option>
                        <option value="3">Belom Dimulai</option>
                    </select>
                </div>


                <div class="list-nilai py-1">

                    <div class="table-responsive list-table-nilai">
                        <table class="table-list" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-left">Nama Dosen</th>
                                    <th class="align-left">Kelas</th>
                                    <th class="align-left">MataKuliah</th>
                                    <th class="align-center">Smt</th>
                                    <th class="align-center">SKS</th>
                                    <th class="align-center">Pert Ke</th>
                                    <th class="align-left">Ruang</th>
                                    <th class="align-left">Hari & Tanggal</th>
                                    <th class="align-center">Jam Mulai</th>
                                    <th class="align-left">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>[20101] Sabrina S.KOM</td>
                                    <td>IK01</td>
                                    <td>Basis Data</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">2</td>
                                    <td class="align-center">1</td>
                                    <td>LMS Online</td>
                                    <td class="align-left">Senin, 2021-07-14</td>
                                    <td class="align-center">08.00</td>
                                    <td><a href="monitoring-selesai.php" style="color:red; font-weight: bold;"> Selesai</a></td>
                                </tr>
                                <tr>
                                    <td>[20102] Fadillah S.KOM</td>
                                    <td>IK01</td>
                                    <td>Aplikom 2</td>
                                    <td class="align-center">3</td>
                                    <td class="align-center">2</td>
                                    <td class="align-center">2</td>
                                    <td>LMS Online</td>
                                    <td class="align-left">Senin, 2021-07-15</td>
                                    <td class="align-center">08.00</td>
                                    <td><a href="monitoring-sedang-dimulai.php" style="color:green; font-weight: bold;">Sedang Dimulai</a></td>
                                </tr>
                                <tr>
                                    <td>[20103] Sabrina S.KOM</td>
                                    <td>IK01</td>
                                    <td>Sql Server</td>
                                    <td class="align-center">1</td>
                                    <td class="align-center">4</td>
                                    <td class="align-center">1</td>
                                    <td>LMS Online</td>
                                    <td class="align-left">Senin, 2021-07-16</td>
                                    <td class="align-center">08.00</td>
                                    <td style="color:black; font-weight: bold;">Belom Dimulai</td>
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