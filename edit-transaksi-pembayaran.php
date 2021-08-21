<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Sidang</a>
        <a href="transaksi-pembayaran.php">Transaksi Pembayaran</a>
        <a href="transaksi-pembayaran.php">Transaksi Pembayaran</a>
    </div>
</div>
<div class="content">

    <div class="container">



        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Form Transaksi Pembayaran Mahasiswa</h6>

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

                    <div style="width: 200px;height:auto;">

                        <img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">

                    </div>

                    <div class="detail-list">

                        <div class="grid-3 grid-gap-2">

                            <div class="list-1">

                                <div class="grid-1 mb-1">
                                    <label><b>NIM</b></label>
                                    <span>180441020008</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Nama Mahasiswa</b></label>
                                    <span>Andika Tri Handoyo</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Konsentrasi</b></label>
                                    <span>Teknik Informatika</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Tahun Angkatan</b></label>
                                    <span>2018</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Tingkat</b></label>
                                    <span>Tingkat 3</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Kelas</b></label>
                                    <span>TI-18-III-1</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Pembimbing Akademik</b></label>
                                </div>
                            </div>

                            <div class="list-1">

                                <div class="grid-1 mb-1">
                                    <label><b>Biaya Sidang</b></label>
                                    <span>690,000</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Biaya Ijazah</b></label>
                                    <span>600,000</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Biaya Wisuda</b></label>
                                    <span>2,750,000</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Total Biaya Sidang dan Wisuda</b></label>
                                    <span>4,240,000</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Total yang sudah dibayarkan</b></label>
                                    <span>0</span>
                                </div>
                                <div class="grid-1 mb-1">
                                    <label><b>Total yang harus dibayarkan</b></label>
                                    <span>4,240,000</span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="list-nilai">

                        <a href="transaksi-pembayara.php" class="btn btn-link btn-danger text-center" style="width: 80px;">Back</a>

                    </div>

                </div>

                <div class="form-inputs">
                    <label><b>LIST MAHASISWA KAMPUS :</b></label>
                    <label><b class="text-danger">JAKARTA PUSAT (KRAMAT RAYA)</b></label>
                </div>


                <div class="py-1">

                    <div class="table-responsive">

                        <table id="datatable">

                            <thead class="bg-color-primary">

                                <tr>

                                    <th class="text-center">No</th>

                                    <th class="text-center">Jenis Biaya</th>

                                    <th class="text-center">Besaran Biaya</th>

                                    <th class="text-center">Realisasi Pembayaran</th>

                                    <th class="text-center">Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Sidang TA</td>
                                    <td class="align-right">690,000</td>
                                    <td class="align-right">0</td>
                                    <td class="text-center">
                                        <button class="btn btn-link btn-primary modal-button" data-toggle="modal" data-target="#Bayarsidang">Bayar Sidang TA</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ijazah</td>
                                    <td class="align-right">600,000</td>
                                    <td class="align-right">0</td>
                                    <td class="text-center">
                                        <button class="btn btn-link btn-primary modal-button" data-toggle="modal" data-target="#Bayarijazah">Bayar Ijazah</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wisuda</td>
                                    <td class="align-right">2,750,000</td>
                                    <td class="align-right">0</td>
                                    <td class="text-center">
                                        <button class="btn btn-link btn-primary modal-button" data-toggle="modal" data-target="#Bayarwisuda">Bayar Wisuda</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SKPI</td>
                                    <td class="align-right">200,000</td>
                                    <td class="align-right">0</td>
                                    <td class="text-center">
                                        <button class="btn btn-link btn-primary modal-button" data-toggle="modal" data-target="#Bayarskpi">Bayar SKPI</button>
                                    </td>
                                </tr>
                                <tr class="bg-color-secondary">
                                    <td colspan="2" class="align-right"><b>TOTAL</b></td>
                                    <td class="align-right"><b>4,240,000</b></td>
                                    <td class="align-right">0</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="align-right"><b>Total Tagihan</b></td>
                                    <td class="align-right bg-color-primary"><b>4,240,000</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="align-right"><b>Total Pembayaran</b></td>
                                    <td class="align-right bg-color-primary"><b>0</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="align-right"><b>Cashback</b></td>
                                    <td class="align-right bg-color-primary"><b>0</b></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="align-right"><b>Saldo</b></td>
                                    <td class="align-right bg-color-primary"><b>-4,240,000</b></td>
                                    <td></td>
                                </tr>


                            </tbody>

                        </table>

                    </div>

                    <p class="text-danger"><b>* Untuk melakukan perubahan besaran biaya, klik masing-masing di kolom "Jenis Biaya"</b></p>

                </div>
            </div>

            <!-- form modal sidang -->

            <div class="modal" id="Bayarsidang" tabindex="-1" aria-labelledby="BayarsidangLabel" aria-hidden="true">
                <div class="modal-dialog modal-fit-custom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="BayarsidangLabel">Form Transaksi Pembayaran Sidang dan Wisuda</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">

                                <div class="grid-2 mb-1">
                                    <label>NIM</label>
                                    <span>180441020008</Span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Nama Lengkap</label>
                                    <span>Andika Tri Handoyo</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Untuk Pembayaran</label>
                                    <span>Sidang TA</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Sumber Penerimaan</label>
                                    <select name="sumber" id="sumber">
                                        <option value="0">Terima Bank BNI SY</option>
                                    </select>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Bukti Terima Kas</label>

                                    <div class="form-info">

                                        <input class="width-100" type="text" name="bukti" id="bukti" value="2021-02345">

                                        <span class="text-danger">Nomor bukti ini otomatis counter</span>

                                    </div>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="datetime" name="tglpembayaran" id="tglpembayaran" value="2021-08-21">
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Yang harus dibayarkan</label>
                                    <input type="text" name="harusdibayar" id="harusidbayar" value="690000">
                                </div>

                                <div class="grid-2 mb-1">
                                    <label>Realisasi Pembayaran</label>
                                    <input type="text" name="realisasi" id="realisasi" value="0">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- form modal ijazah -->

            <div class="modal" id="Bayarijazah" tabindex="-1" aria-labelledby="BayarijazahLabel" aria-hidden="true">
                <div class="modal-dialog modal-fit-custom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="BayarijazahLabel">Form Transaksi Pembayaran Sidang dan Wisuda</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">

                                <div class="grid-2 mb-1">
                                    <label>NIM</label>
                                    <span>180441020008</Span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Nama Lengkap</label>
                                    <span>Andika Tri Handoyo</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Untuk Pembayaran</label>
                                    <span>Ijazah</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Sumber Penerimaan</label>
                                    <select name="sumber" id="sumber">
                                        <option value="0">Terima Bank BNI SY</option>
                                    </select>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Bukti Terima Kas</label>

                                    <div class="form-info">

                                        <input class="width-100" type="text" name="bukti" id="bukti" value="2021-02345">

                                        <span class="text-danger">Nomor bukti ini otomatis counter</span>

                                    </div>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="datetime" name="tglpembayaran" id="tglpembayaran" value="2021-08-21">
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Yang harus dibayarkan</label>
                                    <input type="text" name="harusdibayar" id="harusidbayar" value="600000">
                                </div>

                                <div class="grid-2 mb-1">
                                    <label>Realisasi Pembayaran</label>
                                    <input type="text" name="realisasi" id="realisasi" value="0">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- form modal wisuda -->
            <div class="modal" id="Bayarwisuda" tabindex="-1" aria-labelledby="BayarwisudaLabel" aria-hidden="true">
                <div class="modal-dialog modal-fit-custom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="BayarwisudaLabel">Form Transaksi Pembayaran Sidang dan Wisuda</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">

                                <div class="grid-2 mb-1">
                                    <label>NIM</label>
                                    <span>180441020008</Span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Nama Lengkap</label>
                                    <span>Andika Tri Handoyo</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Untuk Pembayaran</label>
                                    <span>Wisuda</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Sumber Penerimaan</label>
                                    <select name="sumber" id="sumber">
                                        <option value="0">Terima Bank BNI SY</option>
                                    </select>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Bukti Terima Kas</label>

                                    <div class="form-info">

                                        <input class="width-100" type="text" name="bukti" id="bukti" value="2021-02345">

                                        <span class="text-danger">Nomor bukti ini otomatis counter</span>

                                    </div>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="datetime" name="tglpembayaran" id="tglpembayaran" value="2021-08-21">
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Yang harus dibayarkan</label>
                                    <input type="text" name="harusdibayar" id="harusidbayar" value="2,750,000">
                                </div>

                                <div class="grid-2 mb-1">
                                    <label>Realisasi Pembayaran</label>
                                    <input type="text" name="realisasi" id="realisasi" value="0">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- form moda skpi -->
            <div class="modal" id="Bayarskpi" tabindex="-1" aria-labelledby="BayarskpiLabel" aria-hidden="true">
                <div class="modal-dialog modal-fit-custom">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="BayarskpiLabel">Form Transaksi Pembayaran Sidang dan Wisuda</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">

                                <div class="grid-2 mb-1">
                                    <label>NIM</label>
                                    <span>180441020008</Span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Nama Lengkap</label>
                                    <span>Andika Tri Handoyo</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Untuk Pembayaran</label>
                                    <span>SKPI</span>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Sumber Penerimaan</label>
                                    <select name="sumber" id="sumber">
                                        <option value="0">Terima Bank BNI SY</option>
                                    </select>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Bukti Terima Kas</label>

                                    <div class="form-info">

                                        <input class="width-100" type="text" name="bukti" id="bukti" value="2021-02345">

                                        <span class="text-danger">Nomor bukti ini otomatis counter</span>

                                    </div>
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Tanggal Pembayaran</label>
                                    <input type="datetime" name="tglpembayaran" id="tglpembayaran" value="2021-08-21">
                                </div>
                                <div class="grid-2 mb-1">
                                    <label>Yang harus dibayarkan</label>
                                    <input type="text" name="harusdibayar" id="harusidbayar" value="200,000">
                                </div>

                                <div class="grid-2 mb-1">
                                    <label>Realisasi Pembayaran</label>
                                    <input type="text" name="realisasi" id="realisasi" value="0">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-secondary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?php include('footer.php') ?>