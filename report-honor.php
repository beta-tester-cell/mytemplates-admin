<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Dosen</a>
        <a href="#">Report</a>
        <a href="report-honor.php">Honor</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Data Report Honor</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="filter-honor">
                	<div class="my-1">
                		<label><b>Periode Rekap</b></label>
                		<div class="form-input my-0">	
                			<select name='periode_rekap' style="width: 	400px;" id='periode_rekap'>
                				<option value="">-- Pilih Periode --</option>
                				<option value="1" selected>2021-05-24 - 2021-06-25</option>
                			</select>
                		</div>
                	</div>
                </div>

                <div class="table-responsive py-1">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th class="align-center">No</th>
                                <th class="align-left">Periode Rekap</th>
                                <th class="align-left">Periode</th>
                                <th class="align-center">Total Sesi</th>
                                <th class="align-right">Honor/Sesi</th>
                                <th class="align-right">Total Honor</th>
                                <th class="align-right">Total Potongan</th>
                                <th class="align-right">Honor Dibayarkan</th>
                                <th class="align-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">2021-05-24 - 2021-06-25</td>
                                <td class="align-left">20201</td>
                                <td class="align-center">14</td>
                                <td class="align-right">Rp. 45.000</td>
                                <td class="align-right">Rp. 1.845.000</td>
                                <td class="align-right">Rp. 46.125</td>
                                <td class="align-right">Rp. 1.798.875</td>
                                <td class="align-center">
                                    <a href="report-cetak-honor-dosen.php" target="_blank" class="btn btn-link text-primary"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>