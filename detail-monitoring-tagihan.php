<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Transaksi</a>

        <a href="monitor-tagihan-mhs.php">Monitoring Tagihan Mahasiswa</a>
        
        <a href="detail-monitoring-tagihan.php">Detail Rekapitulasi Piutang</a>

    </div>

</div>

<div class="content">

    <div class="container">



        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Detail Collecting Progress</h6>

                    <div class="select-export">

                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                        <div class="type-export">

                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                        </div>

                    </div>

                </div>



                <div class="py-1 grid-detail-list grid-gap-1">

                    <div style="width: 150px;height:auto;">

                        <img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">

                    </div>

                    <div class="detail-list">

                        <div class="grid-4 grid-gap-2">

                            <div class="list-1">

                                <div class="detail-list">

                                    <label><b>Nama Mahasiswa</b></label><br>

                                    <span>[180099298] Rohmana</span>

                                </div>



                                <label><b>VA Number</b></label><br>

                                <span>9882304200700011</span>

                            </div>

                            <div class="list-1">

                                <div class="detail-list">

                                    <label><b>Prodi</b></label><br>

                                    <span>[022] Bisnis Administrasi</span>

                                </div>

                                <label><b>Kampus</b></label><br>

                                <span>Jakarta Pusat ( Kramat Raya)</span>

                            </div>

                        </div>

                    </div>

                    <div class="list-nilai">

                        <a href="monitor-tagihan-mhs.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>

                    </div>

                </div>



                <div class="py-1">

                    <div class="table-responsive">

                        <table id="datatable">

                            <thead class="bg-color-primary">

                                <tr>

                                    <th class="align-center">No</th>

                                    <th class="align-left">Due Date</th>

                                    <th class="align-left">Ammount</th>

                                    <th class="align-left">Collection Detail</th>

                                    <th class="align-left">Collection Result</th>

                                    <th class="align-left">Payment Date</th>

                                    <th class="align-left">Payment Amount</th>

                                </tr>

                            </thead>

                            <tbody>

                            	<tr>

                            		<th class="align-center">1</th>

                            		<th class="align-left">2021-07-10</th>

                            		<th class="align-left">IDR 1.200.000</th>

                            		<th class="align-left">
                            			<ul style="list-style-type:disc">

                            				<li>[<span class="text-danger">2021-08-01</span>] Mengirimkan kembali surat tagihan</li>

                            				<li>[<span class="text-danger">2021-08-01</span>]  Memanggil Orang Tua</li>

                            			</ul>
                            		</th>

                            		<th class="align-left">Akan Dibayarkan di Tanggal 03 Agustus 2021</th>

                            		<th class="align-left">2021-08-02</th>

                            		<th class="align-left"> 

	                            		<div class="d-flex flex-column">

	                                        <span class="years">IDR 1.200.000</span>

	                                        <span class="text-danger">INV/21080022</span>

	                                    </div>
                                	</th>

                            	</tr>
                                

                            </tbody>

                        </table>

                    </div>

                    <div class="prodi-list">

                    	<div class="grid-1 grid-gap-1">

                    		<table>

                    			<tr class="hide-border-bottom">

                    				<td width="180px">Collection Officer</td>

                    				<td width="20px">:</td>

                    				<td><b>Midayanti</b></td>

                    			</tr>

                    			<tr class="hide-border-bottom">

                    				<td width="180px">Collection Activity </td>

                    				<td width="20px">:</td>

                    				<td><b>2</b> Activity</td>

                    			</tr>

                    			<tr class="hide-border-bottom">

                    				<td width="180px">Effectiveness</td>

                    				<td width="20px">:</td>

                    				<td class="text-success"><b>100%</b></td>

                    			</tr>

                    		</table>

                    	</div>

                    </div>

                </div>



            </div>

        </div>

    </div>

</div>



<?php include('footer-datatable.php') ?>