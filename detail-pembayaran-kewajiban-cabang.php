<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Tagihan Cabang</a>
        <a href="pembayaran-kewajiban-cabang.php">Pembayaran Kewajiban Cabang</a>
        <a href="detail-pembayaran-kewajiban-cabang.php">Detail Pembayaran Kewajiban Cabang</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Detail Pembayaran Kewajiban Cabang</h6>
                </div>

                <div class="d-flex flex-reverse grid-gap-1">
                    <div class="width-100">
                        <div class="form-inputs" style="gap: 10px;">
                            <b>Invoice Number </b>
                            <span>: INV/3210800111</span>
                        </div>
                        <div class="form-inputs" style="gap: 10px;">
                            <b>Due date</b>
                            <span>: 2021-08-10 20:00</span>
                        </div>
                        <div class="form-inputs" style="gap: 10px;">
                            <b>Desciption</b>
                            <span>: Gsuite Bulan Agustus</span>
                        </div>
                        <div class="form-inputs" style="gap: 10px;">
                            <b>Billing Account</b>
                            <span>: IDR 15.000.000</span>
                        </div>
                        <div class="form-inputs" style="gap: 10px;">
                            <b>Status</b>
                            <span class="text-success">: PAID</span>
                        </div>
                    </div>


                    <div class="flex-button">
                        <a href="penguncian-mahasiswa.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table>
                        <thead class="bg-color-primary">
                            <th>No</th>
                            <th>Payment Date</th>
                            <th>Bank Account</th>
                            <th>Amount</th>
                            <th>Attachment</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2021-08-10 09:00</td>
                                <td>BNI KCP Kwitang</td>
                                <td>IDR 5000.000,-</td>
                                <td><a href="#" class="text-success">22-2021-08-10.pdf</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2021-08-02 14:00</td>
                                <td>BNI KCP Kwitang</td>
                                <td>IDR 10.000.000,-</td>
                                <td><a href="#" class="text-success">21-2021-08-02.pdf</a></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="align-right"><b>Grand Total</b></td>
                                <td colspan="2"><b>IDR 15.000.000,-</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<?php include('footer.php') ?>