<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Tagihan Cabang</a>
        <a href="pembayaran-kewajiban-cabang.php">Pembayaran Kewajiban Cabang</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header mb-2">
                    <div class=" d-flex flex-space-between flex-change">
                        <h6>List Tagihan Kewajiban Cabang</h6>

                        <div class="select-export">
                            <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                            <div class="type-export">
                                <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable">
                        <thead class="bg-color-primary">
                            <th>No</th>
                            <th>Invoice</th>
                            <th>Description</th>
                            <th>Due Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>INV/1210800112</td>
                                <td>Fee Organisasi</td>
                                <td>2021-08-10 20:00</td>
                                <td>IDR 55.200.000</td>
                                <td class="text-danger">Unpaid</td>
                                <td><a href="#" data-toggle="modal" data-target="#invoice">Pay</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>INV/3210800111</td>
                                <td>G-suite Bulan Agustus</td>
                                <td>2021-08-10 20:00</td>
                                <td>IDR 15.000.000</td>
                                <td class="text-danger">10.000.000 (Under Paid)</td>
                                <td><a href="#" data-toggle="modal" data-target="#invoice">Pay</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>INV/210700323</td>
                                <td>Gsuite Bulan Juli</td>
                                <td>2021-07-10 20:00</td>
                                <td>IDR 15.000.000</td>
                                <td class="text-success">Paid</td>
                                <td><a href="detail-pembayaran-kewajiban-cabang.php">Detail</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>INV/210700322</td>
                                <td>Fee Marketing</td>
                                <td>2021-07-10 20:00</td>
                                <td>IDR 40.000.000</td>
                                <td class="text-success">Paid</td>
                                <td><a href="detail-pembayaran-kewajiban-cabang.php">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="modal" id="invoice" tabindex="-1" aria-labelledby="invoice" aria-hidden="true">
                    <div class="modal-dialog modal-width-custom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="invoice"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">
                                    <div class="d-flex flex-reverse grid-gap-2">
                                        <div>
                                            <div class="form-inputs" style="gap: 10px;">
                                                <label for="dueDate">Due date</label>
                                                <input type="datetime-local" name="dueDate" id="dueDate">
                                            </div>
                                            <div class="form-inputs" style="gap: 10px;">
                                                <label for="billing">Billing Amount</label>
                                                <input type="text" name="billing" id="billing">
                                            </div>
                                            <div class="form-inputs" style="gap: 10px;">
                                                <label for="Tpayment">Total Payment</label>
                                                <input type="text" name="Tpayment" id="Tpayment">
                                            </div>
                                            <div class="form-inputs" style="gap: 10px;">
                                                <label for="Desc">Description</label>
                                                <textarea row="5" name="Desc" id="Desc"> </textarea>
                                            </div>
                                        </div>
                                        <div>
                                            <h4>INVOICE</h4>
                                            <input type="text" value="INV/3210800111" disabled>
                                        </div>
                                    </div>
                                    <div class="form-invoice-inline grid-gap-1 my-1">

                                        <div class="list-form-collection">


                                            <label>Payment Date</label>

                                            <input class="width-100" type="date">


                                        </div>

                                        <div class="list-form-collection">

                                            <label>Bank/Account</label>

                                            <input class="width-100" type="text">

                                        </div>

                                        <div class="list-form-collection">

                                            <label>Amount</label>

                                            <input class="width-100" type="text">


                                        </div>

                                        <div class="list-form-collection">

                                            <label>Attachment</label>

                                            <input class="width-100" type="file">

                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('footer-datatable.php') ?>