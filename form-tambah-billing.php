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
                    <a href="form-upload-bulk-billing.php" class="btn btn-link btn-primary" style="margin-left: 20px;">
                        <span>Bulk Upload Billing</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Create Billing</h6>
                </div>
                <div class="form grid-2 grid-gap-1">
                    <div class="form-inputs">
                        <label><b>Created As</b></label>
                        <div class="form-group">
                            <label class="radio-button"> Single
                                <input type="radio" id="single" value="">
                                <span class="checkmark"></span>
                            </label>
                            <?php if (empty($_GET['action'])) : ?>
                                <label class="radio-button" style="margin-left:15px;"> Multiple
                                    <input type="radio" id="multiple" value="">
                                    <span class="checkmark"></span>
                                </label>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div id="form-created-single">

                    <form>

                        <div class="form grid-2 grid-gap-1">

                            <div class="col-form-kiri">

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Payment Account</b></label>
                                    <select name="payment_account" class="width-100" id="payment_account">
                                        <option value="0">-- Pilih Payment Account --</option>
                                        <option value="1" selected>BNI Virtual Account</option>
                                    </select>
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span>TRX_ID / Billing ID</b></label>
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

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Description</b></label>
                                    <input class="width-100" id="desd" type="text" value="Tagihan Maret - Juli" placeholder="Description">
                                </div>

                            </div>

                            <div class="col-form-kanan">

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Billing Period</b></label>
                                    <input class="width-100" id="billing_period" type="date" value="<?= date('Y-m-d') ?>" placeholder="Billing Period">
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
                                    <input class="width-100" id="expired_date" type="datetime-local" value="<?= date('Y-m-d') ?>" placeholder="Expired Date">
                                </div>

                                <?php if (empty($_GET['action'])) : ?>
                                    <div class="form-inputs">
                                        <label><b><span class="text-danger">*</span> Billing Type </b></label>
                                        <input class="width-100" id="blling_type" type="text" disabled value="Fix Payment" placeholder="Billing Type">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($_GET['action'])) : ?>
                                    <button type="submit" class="btn btn-link btn-primary" style="float:right;">Update Billing</button>
                                <?php else : ?>
                                    <a href='list-billing-log.php' class="btn btn-link btn-primary" style="float:right;">Submit</a>
                                <?php endif; ?>
                            </div>

                        </div>

                    </form>

                </div>

                <div id="form-created-mutliped">

                    <form>

                        <div class="form grid-2 grid-gap-1">

                            <div class="col-form-kiri">

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Payment Account</b></label>
                                    <select name="payment_account" class="width-100" id="payment_account">
                                        <option value="0">-- Pilih Payment Account --</option>
                                        <option value="1" selected>BNI Virtual Account</option>
                                    </select>
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
                                    <label><b><span class="text-danger">*</span> Prodi </b></label>
                                    <input class="width-100" id="prodi" type="text" value="Manajemen Informatika" placeholder="prodi">
                                </div>
                            </div>

                            <div class="col-form-kanan">
                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Billing Period</b></label>
                                    <input class="width-100" id="billing_period" type="date" value="<?= date('Y-m-d') ?>" placeholder="Billing Period">
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Expired Date</b></label>
                                    <input class="width-100" id="expired_date" type="datetime-local" value="<?= date('Y-m-d') ?>" placeholder="Expired Date">
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Billing Type </b></label>
                                    <input class="width-100" id="blling_type" type="text" disabled value="Fix Payment" placeholder="Billing Type">
                                </div>

                                <?php if (!empty($_GET['action'])) : ?>
                                    <button type="submit" class="btn btn-link btn-primary" style="float:right;">Update Billing</button>
                                <?php else : ?>
                                    <a href='list-billing-log.php' class="btn btn-link btn-primary" style="float:right;">Submit</a>
                                <?php endif; ?>
                            </div>

                        </div>

                        <div class="py-1">
                            <div class="form-group">
                                <label class="checkbox">
                                    <input type="checkbox" id="btn_check"><b> Check All </b><br>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="table-responsive">
                                <table id="datatable">
                                    <thead class="bg-color-primary">
                                        <tr>
                                            <th>MHS_ID</th>
                                            <th>Billing_ID</th>
                                            <th>VA Number</th>
                                            <th>Customer Name</th>
                                            <th>Customer Email</th>
                                            <th>Customer Phone</th>
                                            <th>Ammount</th>
                                            <th>Discount</th>
                                            <th>Disc_Desc</th>
                                            <th>Penalty</th>
                                            <th>Trx_Ammount</th>
                                            <th>Description</th>
                                            <th style="display: none;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" name="mhs_check[]"> 18099989</td>
                                            <td>INV21070001</td>
                                            <td>9882034129345650</td>
                                            <td>Rohmana</td>
                                            <td>rohmana@gmail.com</td>
                                            <td>08199888999</td>
                                            <td>
                                                <input type="text" name="ammount" id="ammount" value="7.000.000">
                                            </td>
                                            <td>
                                                <input type="text" name="discont" id="discont" value="350.000">
                                            </td>
                                            <td>
                                                <input type="text" name="discont_desc" id="discont_desc" value="Cash 4 Bulan">
                                            </td>
                                            <td><input type="text" name="penalty" id="penalty" value="0"></td>
                                            <td><input type="text" name="trx_ammount" id="trx_ammount" readonly value="6.350.000"></td>
                                            <td>Pembayaran Angsuran</td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" name="mhs_check[]"> 18092222</td>
                                            <td>INV21060321</td>
                                            <td>9882034129342222</td>
                                            <td>Rohimin</td>
                                            <td>-rohimin@gmail.com</td>
                                            <td>081799988878</td>
                                            <td><input type="text" name="ammount" id="ammount" value="1.200.000"></td>
                                            <td><input type="text" name="discont" id="discont" value="0"></td>
                                            <td><input type="text" name="discont_desc" id="discont_desc" value="-"></td>
                                            <td><input type="text" name="penalty" id="penalty" value="0"></td>
                                            <td><input type="text" name="trx_ammount" id="trx_ammount" readonly value="1.200.000"></td>
                                            <td>Pembayaran Angsuran</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#single').prop('checked', true);
        $("#form-created-mutliped").hide();
    });

    $(document).on('click', '#single', function() {
        $('#multiple').prop('checked', false);
        $("#form-created-single").show();
        $("#form-created-mutliped").hide();
    });

    $(document).on('click', '#multiple', function() {
        $('#single').prop('checked', false);
        $("#form-created-mutliped").show();
        $("#form-created-single").hide();
    });

    $(document).on('click', '#btn_check', function() {
        all_checked();
    });

    function all_checked() {
        var checkbox = document.getElementsByName("mhs_check[]");
        var count_checkbox = checkbox.length;
        var i = 0;
        for (i = 0; i < count_checkbox; i++) {
            checkbox[i].checked = true;

        }
    }
</script>