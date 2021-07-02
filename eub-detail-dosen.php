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
                <a href='eub-dosen.php' class="btn btn-link btn-danger px-20">Back</a>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail Hasil EUB Dosen</h6>
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
                        <label><b>[09909] Masria, M.Kom</b></label><br>
                        <label><b>Total SKS : 6 SKS</b></label><br>
                        <label><b>Grade  : A</b></label><br>
                        <label><b>Periode  : 20201 [ Ganjil ]</b></label><br>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th class="align-center">No</th>
                                <th class="align-left">Matakuliah</th>
                                <th class="align-center">SKS</th>
                                <th class="align-left">Kampus</th>
                                <th class="align-center">Total MHS</th>
                                <th class="align-center">MHS EUB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">[22222] Basis Data</td>
                                <td class="align-center">4</td>
                                <td class="align-left">Jakarta Pusat(Kramat Raya)</td>
                                <td class="align-center">28</td>
                                <td class="align-center">26</td>
                            </tr>
                             <tr>
                                <td class="align-center">2</td>
                                <td class="align-left">[22222] Aplikom 1</td>
                                <td class="align-center">4</td>
                                <td class="align-left">Jakarta Pusat(Kramat Raya)</td>
                                <td class="align-center">28</td>
                                <td class="align-center">26</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


    </div>
</div>
<?php include('footer-datatable.php') ?>