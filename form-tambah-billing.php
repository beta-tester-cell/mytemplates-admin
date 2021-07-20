<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="billing-data.php">Billing Data</a>
        <a href="form-tambah-billing.php">Form Tambah Billing</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="billing-data.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                    <a href="form-update-billing.php" class="btn btn-link btn-primary" style="margin-left: 20px;">
                        <span>Bulk Upload Billing</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Add Billing</h6>
                </div>
                <form>
                    <div class="form grid-2 grid-gap-1 py-1">
                        <div class="col-form-kiri">
                            <div class="form-inputs">
                                <label><b>Created As</b></label>
                                <div>
                                    <label class="radio-button"> Single
                                        <input type="radio" checked value="">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-button" style="margin-left:15px;"> Multiple
                                        <input type="radio" value="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Payment Account</b></label>
                                <select name="payment_account" class="width-100" id="payment_account">
                                    <option value="0">-- Pilih Payment Account --</option>
                                    <option value="1" selected>BNI Virtual Account</option>
                                </select>
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Billing ID</b></label>
                                <input class="width-100" id="billing_id" type="text" readonly value="INV/00003" placeholder="billing_id">
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Billing To</b></label>
                                <select name="payment_account" class="width-100" id="payment_account">
                                    <option value="0">-- Pilih Billing To --</option>
                                    <option value="1" selected> Pembayaran Angusran</option>
                                    <option value="2"> Uji Kompetensi</option>
                                    <option value="3"> Seminar</option>
                                    <option value="4"> Company Visit</option>
                                </select>
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Name</b></label>
                                <input class="width-100" type="text" value="[1800900] Rohmana" list="invoice_name" id="invoice_to" placeholder="Cari Invoice To" />
                                <datalist id="invoice_name">
                                    <option value="[1800900] Rohmana">
                                    <option value="[1800900] Khaerul">
                                    <option value="[1800900] Rihmin">
                                    <option value="[1800900] Kosim">
                                    <option value="[1800900] Rosim">
                                </datalist>
                                <input type="hidden" name="invoice_name" id="invoice_to_id">
                            </div>

                            <div class="form-inputs">
                                <!-- VA Number ter-isi disaat terpilih Invoice To -->
                                <label><b><span class="text-danger">*</span> VA Number</b></label>
                                <input class="width-100" id="va_number" type="text" readonly value="988230420192019" placeholder="va_number">
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Email</b></label>
                                <input class="width-100" id="email" type="text" value="Rohman@gmail.com" placeholder="email">
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Phone Number</b></label>
                                <input class="width-100" id="phnoe_number" type="text" value="081318784466" placeholder="phnoe_number">
                            </div>
                        </div>
                        <div class="col-form-kanan">
                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Billing Period</b></label>
                                <input class="width-100" id="date_period" type="date" value="<?= date('Y-m-d') ?>" placeholder="va_number">
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Billing Ammount</b></label>
                                <input class="width-100" id="bil_ammount" type="text" value="7.000.000" placeholder="Billing Ammount">
                            </div>

                            <div class="form-inputs">
                                <label><b>Discount To</b></label>
                                <select name="discount-to" class="width-100" id="discount-to">
                                    <option value="0">-- Pilih Discount To --</option>
                                    <option value="1" selected> Pembayaran 5 Bulan</option>
                                </select>
                            </div>

                            <div class="form-inputs">
                                <label><b>Discount</b></label>
                                <input class="width-100" id="discount" type="text" value="500.000" placeholder="discount">
                            </div>

                            <div class="form-inputs">
                                <label><b>Penalty</b></label>
                                <input class="width-100" id="penalty" type="text" value="0" placeholder="penalty">
                            </div>

                            <div class="form-inputs">
                                <!-- Jika Combo Box Pembayaran Angsuran Maka Total Ammount Diambil S/D Bulan Ini / Sekarang -->
                                <label><b><span class="text-danger">*</span> Total Billing Ammount</b></label>
                                <input class="width-100" id="total_bill_ammount" type="text" value="6.500.000" placeholder="Total Billing Ammount">
                            </div>

                            <div class="form-inputs">
                                <label><b><span class="text-danger">*</span> Expired Date</b></label>
                                <input class="width-100" id="expired_date" type="date" value="<?= date('Y-m-d') ?>" placeholder="Expired Date">
                            </div>
                            <button type="submit" class="btn btn-link btn-primary" style="float:right;">Create Billing</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>