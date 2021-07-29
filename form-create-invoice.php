<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Pusat</a>
        <a href="#">Kewajiban Cabang</a>
        <a href="list-create-invoice.php">List Create Invoice</a>
        <a href="form-create-invoice.php">Create Invoice</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="list-create-invoice.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Create Invoice</h6>
                </div>

                <div class="py-1">
                    <form>
                        <div class="form grid-2 grid-gap-1">
                            <div class="col-form-kiri">

                                <div class="form-inputs">
                                    <label><b> Invoice </b></label>
                                    <input class="width-100" id="Invoice" disabled type="text" value="INV" placeholder="Invoice">
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> No. Invoice </b></label>
                                    <input class="width-100" id="no_invoice" disabled type="text" value="0002/____/VII/2021" required placeholder="no_invoice">
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Cabang </b></label>
                                    <select name="list_cabang" class="width-100" id="list_cabang" required>
                                        <option value="0">-- Pilih Cabang --</option>
                                        <option value="1" selected> Kramat Raya</option>
                                        <option value="2">Semarang</option>
                                        <option value="3">Balikpapan</option>
                                    </select>
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Jenis Pendapatan</b></label>
                                    <select name="jenis_pendapatan" class="width-100" id="jenis_pendapatan" required>
                                        <option value="0">-- Pilih Jenis Pendapatan --</option>
                                        <option value="1" selected> Fee Organisasi</option>
                                        <option value="2"> Fee Francise</option>
                                        <option value="3"> Biaya Marketing</option>
                                        <option value="4"> Lain - Lain</option>
                                    </select>
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Keterangan</b></label>
                                    <textarea name="keterangan" class="width-100" id="keterangan" required>Pembayaran Fee Organisasi
                                    </textarea>
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Potongan PPh 23/26 10%</b></label>
                                    <div class="form-group">
                                        <label class="radio-button" style="margin-left:15px;"> Yes
                                            <input type="radio" id="yes" value="" name="potongan">
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="radio-button" style="margin-left:15px;"> No
                                            <input type="radio" id="no" value="" name="potongan">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger" required>*</span> Kuantitas </b></label>
                                    <input class="width-100" id="kuantitas" type="text" value="1" placeholder="kuantitas">
                                </div>

                            </div>

                            <div class="col-form-kanan">


                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Tanggal Invoice</b></label>
                                    <input class="width-100" id="tanggal_invoice" type="date" value="<?= date('Y-m-d') ?>" placeholder="Tanggal Invoice" required>
                                </div>


                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Jatuh Tempo</b></label>
                                    <input class="width-100" id="jatuh_tempo" type="date" value="<?= date('Y-m-d') ?>" placeholder="Jatuh Tempo" required>
                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Virtual Account </b></label>
                                    <input class="width-100" id="no_va" disabled type="text" value="9882938900400333" placeholder="no_va" required>
                                </div>


                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Harga Satuan </b></label>
                                    <div class="input-group">
                                        <div class="input-group-text" style="text-align: center;"><b>Rp</b></div>
                                        <div class="input-group-area"><input class="width-100" id="harga_satuan" type="text" value="12.000.000" placeholder="harga_satuan" required></div>
                                    </div>

                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Refund Tingkat </b></label>
                                    <div class="input-group">
                                        <div class="input-group-text" style="text-align: center;"><b>Rp</b></div>
                                        <div class="input-group-area"><input class="width-100" id="refund_tingkat" type="text" value="4.000.000" placeholder="refund_tingkat" required></div>
                                    </div>

                                </div>

                                <div class="form-inputs">
                                    <label><b><span class="text-danger">*</span> Total Nominal </b></label>
                                    <div class="input-group">
                                        <div class="input-group-text" style="text-align: center;"><b>Rp</b></div>
                                        <div class="input-group-area"> <input class="width-100" id="total_nominal" type="text" value="8.000.000" placeholder="total_nominal" required></div>
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