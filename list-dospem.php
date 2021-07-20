<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Cabang</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="list-dospem.php">Pengajuan Dosen Pembimbing</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Dosen Pembimbing Periode 21</h6>
                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-space-between flex-change grid-gap-1">
                    <div class="filter-monitor">
                        <select name="dospem" id="dospem">
                            <option value="0">-- Pilih Nama Pembimbing --</option>
                            <option value="Masria M.Kom">Masria M.Kom</option>
                            <option value="Nasril, M.Kom">Nasril, M.Kom</option>
                            <option value="Teddy Setiadi">Teddy Setiadi</option>
                        </select>
                        <select name="periode" id="periode">
                            <option value="0">-- Pilih Periode --</option>
                            <option value="21">21</option>
                            <option value="20">20</option>
                            <option value="19">19</option>
                        </select>
                    </div>
                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table id="datatable">
                            <thead class="bg-color-primary">
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Nama Dosen</th>
                                    <th class="align-center">Periode</th>
                                    <th class="align-center">Total Mhs</th>
                                    <th class="align-center">Mhs Kampus</th>
                                    <th class="align-center">Proposal Disetujui</th>
                                    <th class="align-center">Proses Bimbingan</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">Masria, M.Kom</td>
                                <td class="align-center">21</td>
                                <td class="align-center">10</td>
                                <td class="align-center">3</td>
                                <td class="align-center">10</td>
                                <td class="align-center">70%</td>
                                <td class="align-center">
                                    <a href="detail-list-dospem.php"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">2</td>
                                <td class="align-left">Nasril, M.Kom</td>
                                <td class="align-center">21</td>
                                <td class="align-center">10</td>
                                <td class="align-center">3</td>
                                <td class="align-center">10</td>
                                <td class="align-center">70%</td>
                                <td class="align-center">
                                    <a href="detail-list-dospem.php"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">3</td>
                                <td class="align-left">Teddy Setiadi</td>
                                <td class="align-center">21</td>
                                <td class="align-center">10</td>
                                <td class="align-center">3</td>
                                <td class="align-center">10</td>
                                <td class="align-center">70%</td>
                                <td class="align-center">
                                    <a href="detail-list-dospem.php"><i class="fa fa-eye"></i></a>
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

<?php include('footer-datatable.php') ?>