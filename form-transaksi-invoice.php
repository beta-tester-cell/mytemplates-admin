<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Pusat</a>
        <a href="#">Kewajiban Cabang</a>
        <a href="create-invoice.php">List Create Invoice</a>
        <a href="list-transaksi-invoice.php">List Transaksi Invoice</a>
        <a href="form-transaksi-invoice.php">Form Transaksi Invoice</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="list-transaksi-invoice.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Form Transaksi Invoice</h6>
                </div>

                <div class="py-1">
                    <form>
                        <div class="form grid-2 grid-gap-1">
                            <div class="col-form-kiri">

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Tanggal Pembayaran</b></label>
                                    <input class="width-100" id="tanggal_pembayaran" type="date" value="<?= date('Y-m-d') ?>" required placeholder="Tanggal Invoice">
                                </div>

                                <div class="form-inputs">
                                    <label><b>Total Invoice </b></label>
                                     <div class="input-group">
                                        <div class="input-group-text" style="text-align: center;"><b>Rp</b></div>
                                        <div class="input-group-area"><input class="width-100" id="total_invoice" disabled type="text" value="3.000.000" placeholder="Total Invoice"></div>                   
                                    </div>

                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Kode Pembayaran </b></label>
                                    <input class="width-100" id="kode_pembayaran" type="text" value="20210711001" required placeholder="Kode Pembayaran">
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Bukti Pembayaran</b></label>
                                    <input type="file" required>
                                </div>


                            </div>

                            <div class="col-form-kanan">


                                <div class="form-inputs">
                                    <label><b>No Invoice </b></label>
                                    <input class="width-100" id="no_invoice" disabled type="text" value="0001/00111/VII/2021" placeholder="Invoice">
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Via Pembayaran </b></label>
                                    <input class="width-100" id="via_pembayaran" type="text" value="Transfer Bank" required placeholder="Via Pembayaran">                  
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Nominal Pembayaran </b></label>
                                     <div class="input-group">
                                        <div class="input-group-text" style="text-align: center;"><b>Rp</b></div>
                                        <div class="input-group-area"> <input class="width-100" id="nominal_pembayaran" type="text" value="3.000.000" required placeholder="Nominal Pembayaran"></div>                   
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-link btn-primary" style="float:right;">Submit</button>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>