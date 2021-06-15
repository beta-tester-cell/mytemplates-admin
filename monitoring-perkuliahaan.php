<?php include('header.php') ?>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Monitoring Proses Perkuliahaan</h6>
                </div>
                

                <div class="filter-monitor">
                    <input   type="date" id="date-monitoring">
                    <input type="time"  id="time-monitoring">
                    <select name="status"   id="status-monitoring">
                        <option value="0">-- Pilih Status --</option>
                        <option value="1">Selesai</option>
                        <option value="2">Sedang Dimulai</option>
                        <option value="3">Belom Dimulai</option>
                    </select>
                </div>

                <div class="list-nilai py-1">
                    <div class="select-export export-list">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>

                    <div class="table-responsive list-table-nilai">
                        <table class="basic-table" id="datatable">
                            <thead>
                                <tr>
                                    <th class="align-left">Nama Dosen</th>
                                    <th class="align-left">Kelas</th>
                                    <th class="align-left">MataKuliah</th>
                                    <th class="align-left">Smt</th>
                                    <th class="align-left">SKS</th>
                                    <th class="align-left">Pert Ke</th>
                                    <th class="align-left">Ruang</th>
                                    <th class="align-left">Hari & Tanggal</th>
                                    <th class="align-left">Jam Mulai</th>
                                    <th class="align-left">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>[20101] Sabrina S.KOM</td>
                                    <td>IK01</td>
                                    <td>Basis Data</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>LMS Online</td>
                                    <td>Senin, 2021-07-14</td>
                                    <td>08.00</td>
                                    <td style="color:red; font-weight: bold;">Selesai</td>
                                </tr>
                                <tr>
                                    <td>[20102] Fadillah S.KOM</td>
                                    <td>IK01</td>
                                    <td>Aplikom 2</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>LMS Online</td>
                                    <td>Senin, 2021-07-15</td>
                                    <td>08.00</td>
                                    <td style="color:green; font-weight: bold;">Sedang Dimulai</td>
                                </tr>
                                <tr>
                                    <td>[20103] Sabrina S.KOM</td>
                                    <td>IK01</td>
                                    <td>Sql Server</td>
                                    <td>1</td>
                                    <td>4</td>
                                    <td>1</td>
                                    <td>LMS Online</td>
                                    <td>Senin, 2021-07-16</td>
                                    <td>08.00</td>
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