<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Virtual Account</a>
        <a href="list-history-paymentVA.php">Payment History</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Payment History Virtual Account</h6>

                    <div class="select-export">
                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="filter-billing">
                    <div class="form-inputs">
                        <div class="form grid-2 grid-gap-1 py-1">
                            <div class="input-group">
                                <div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>
                                <div class="input-group-icon">TO</div>
                                <div class="input-group-area"><input class="width-100" type="date" id="tanggal_akhir"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="py-1">
                    <div class="table-responsive">
                        <table id="datatable">
                            <thead class="bg-color-primary">
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Billing Id</th>
                                    <th class="align-left">VA Number</th>
                                    <th class="align-left">Name</th>
                                    <th class="align-center">Prodi</th>
                                    <th class="align-right">Payment Ammount</th>
                                    <th class="align-left">Payment Date</th>
                                    <th class="align-left">Journal Number</th>
                                    <th class="align-left">Channel</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<tr>
                            		<td class="align-center">1</td>
                            		<td class="align-left">INV/001</td>
                            		<td class="align-left">9882304200700011</td>
                            		<td class="align-left">Rohmana</td>
                            		<td class="align-center">MI</td>
                            		<td class="align-right">1200000</td>
                            		<td class="align-left">2021-07-27 23:59</td>
                            		<td class="align-left">72553</td>
                            		<td class="align-left">(01) ATM</td>
                            	</tr>
                            	<tr>
                            		<td class="align-center">2</td>
                            		<td class="align-left">INV/002</td>
                            		<td class="align-left">9882304200700012</td>
                            		<td class="align-left">Rohmani</td>
                            		<td class="align-center">BA</td>
                            		<td class="align-right">1200000</td>
                            		<td class="align-left">2021-07-27 23:59</td>
                            		<td class="align-left">72114</td>
                            		<td class="align-left">(02) Teller</td>
                            	</tr>
                            	<tr>
                            		<td class="align-center">3</td>
                            		<td class="align-left">INV/003</td>
                            		<td class="align-left">9882304200700013</td>
                            		<td class="align-left">Rohmanu</td>
                            		<td class="align-center">KA</td>
                            		<td class="align-right">1200000</td>
                            		<td class="align-left">2021-07-27 23:59</td>
                            		<td class="align-left">72128</td>
                            		<td class="align-left">(01) ATM</td>
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