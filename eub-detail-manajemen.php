<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="eub-dosen.php">EUB Dosen</a>
        <a href="eub-detail-soal.php">Detail Hasil EUB Dosen</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <a href='eub-manajemen.php' class="btn btn-link btn-danger px-20">Back</a>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail Hasil EUB Manajemen</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="grid-1 grid-gap-1">
                    <div class="my-1">
                        <label><b>[004] Kampus Jakarta Pusat ( Kramat raya )</b></label><br>
                        <label><b>Total Responden : 120 Mahasiswa</b></label><br>
                        <label><b>Grade  : A</b></label><br>
                        <label><b>Periode  : 20201 [ Ganjil ]</b></label><br>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th class="align-center">No</th>
                                <th class="align-left">Kategori</th>
                                <th class="align-center">MHS EUB</th>
                                <th class="align-center">Total Score</th>
                                <th class="align-center">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            	<td class="align-center">1</td>
                            	<td class="align-left">Pelayanan</td>
                            	<td class="align-center">120</td>
                            	<td class="align-center">400</td>
                            	<td class="align-center">A</td>
                            </tr>
                             <tr>
                            	<td class="align-center">2</td>
                            	<td class="align-left">Fasilitas Kampus</td>
                            	<td class="align-center">120</td>
                            	<td class="align-center">400</td>
                            	<td class="align-center">A</td>
                            </tr>
                             <tr>
                            	<td class="align-center">3</td>
                            	<td class="align-left">Kebersihan Kampus</td>
                            	<td class="align-center">120</td>
                            	<td class="align-center">430</td>
                            	<td class="align-center">A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="my-1">
                	<label><b>Final Score : 1230</b></label><br>
                </div>

            </div>
        </div>


    </div>
</div>
<?php include('footer-datatable.php') ?>