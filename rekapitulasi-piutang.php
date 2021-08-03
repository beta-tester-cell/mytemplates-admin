<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Transaksi</a>

        <a href="monitor-tagihan-mhs.php">Monitoring Tagihan Mahasiswa</a>

        <a href="rekapitulasi-piutang.php">Rekapitulasi Piutang</a>

    </div>

</div>

<div class="content">
    
    <div class="container">

        <div class="py-1">

            <div class="card">

                <div class="d-flex flex-start">

                     <a href="monitor-tagihan-mhs.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                   
                </div>

            </div>

        </div>

        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6> Rekapitulasi Tagihan Mahasiswa (Sesuai Rencana Pembayaran) </h6>

                    <div class="select-export" style="width: 100px; float: right; display: block;">

                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                        <div class="type-export">

                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                        </div>

                    </div>

                </div>

                <div class="form-inputs">

                    <div class="form grid-2 grid-gap-1 py-1">

                        <div class="input-group">

                            <div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>

                            <div class="input-group-icon">TO</div>

                            <div class="input-group-area"><input class="width-100" type="date" id="tanggal_akhir"></div>
                        </div>

                    </div>

                </div>

                <div class="table-responsive py-1">

                    <table id="datatable">

                        <thead class="bg-color-primary">

                            <tr>

                                <th class="align-center">No</th>

                                <th class="align-left" width="200">Prodi</th>

                                <th class="align-left">TA</th>

                                <th class="align-left">Tgl Rencana</th>

                                <th class="align-center">Total MHS</th>

                                <th class="align-left">Total Tagihan</th>

                                <th class="align-left">Realisasi</th>

                                <th class="align-left">Status</th>

                                <th class="align-center">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                        	<tr>

                        		<th class="align-center">1</th>

                        		<th class="align-left">Bisnis Administrasi (BA)</th>

                        		<th class="align-left">2020/2021</th>

                        		<th class="align-left">s/d 2021-08-10</th>

                        		<th class="align-center">70</th>

                        		<th class="align-left">IDR 70.000.000</th>

                        		<th class="align-left">IDR 70.000.000</th>

                        		<th class="align-left text-success">100% Paid</th>

                        		<th class="align-center">

                        			<a href="detail-rekapitulasi-piutang.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                        		</th>

                        	</tr>

                        	<tr>

                        		<th class="align-center">2</th>

                        		<th class="align-left">Manajemen Informatika (MI</th>

                        		<th class="align-left">2020/2021</th>

                        		<th class="align-left">s/d 2021-08-10</th>

                        		<th class="align-center">45</th>

                        		<th class="align-left">IDR 45.000.000</th>

                        		<th class="align-left">IDR 24.000.000</th>

                        		<th class="align-left text-danger">50% Paid</th>

                        		<th class="align-center">

                        			<a href="detail-rekapitulasi-piutang.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                        		</th>

                        	</tr>

                        	<tr>

                        		<th class="align-center">3</th>

                        		<th class="align-left">Administrasi Bisnis Internasional  (ABI)</th>

                        		<th class="align-left">2020/2021</th>

                        		<th class="align-left">s/d 2021-08-10</th>

                        		<th class="align-center">30</th>

                        		<th class="align-left">IDR 40.000.000</th>

                        		<th class="align-left">IDR 40.000.000</th>

                        		<th class="align-left text-success">100% Paid</th>

                        		<th class="align-center">

                        			<a href="detail-rekapitulasi-piutang.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                        		</th>

                        	</tr>

                        	<tr>

                        		<th class="align-center">4</th>

                        		<th class="align-left">Akuntansi (AK)</th>

                        		<th class="align-left">2020/2021</th>

                        		<th class="align-left">s/d 2021-08-10</th>

                        		<th class="align-center">63</th>

                        		<th class="align-left">IDR 70.000.000</th>

                        		<th class="align-left">IDR 70.000.000</th>

                        		<th class="align-left text-success">100% Paid</th>

                        		<th class="align-center">

                        			<a href="detail-rekapitulasi-piutang.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                        		</th>

                        	</tr>

                        </tbody>

                       <tfoot class="bg-color-primary">

                            <tr>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th class="align-left"><b>Grand Total</b></th>

                                <th class="align-left" style="background-color: maroon;">IDR 225.000.000</th>
                                
                                <th class="align-left" style="background-color: maroon;">IDR 204.000.000</th>
                                
                                <th class="align-left" style="background-color: maroon;">97% Paid</th>

                                <th></th>
                            </tr>

                         </tfoot>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('footer-datatable.php') ?>