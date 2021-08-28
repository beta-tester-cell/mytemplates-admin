<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Sidang</a>

        <a href="validasi-pelunasan.php">Validasi Pelunasan</a>
        <a href="edit-validasi-pelunasan.php">Edit Validasi Pelunasan</a>

    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Form Transaksi Pembayaran Mahasiswa</h6>
                </div>

                <div class="py-1 grid-detail-list grid-gap-1">

                    <div style="width: 200px;height:auto;">

                        <img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">

                    </div>

                    <div class="detail-list">

                        <div class="d-flex">
                            <div class="list-1">

                                <div class="form-inputs">
                                    <label><b>NIM</b></label>
                                    <span>180441020008</span>
                                </div>
                                <div class="form-inputs">
                                    <label><b>Nama Mahasiswa</b></label>
                                    <span>Ardhi Maulana Asshidiq</span>
                                </div>
                                <div class="form-inputs">
                                    <label><b>Konsentrasi</b></label>
                                    <span>Administrasi Perkantoran</span>
                                </div>
                                <div class="form-inputs">
                                    <label><b>Tahun Angkatan</b></label>
                                    <span>2016</span>
                                </div>
                                <div class="form-inputs">
                                    <label><b>Kelas</b></label>
                                    <span>AP-M-257</span>
                                </div>
                                <div class="form-inputs">
                                    <label><b>Pembimbing Akademik</b></label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="list-nilai">

                        <a href="validasi-pelunasan.php" class="btn btn-link btn-danger text-center" style="width: 80px;">Back</a>

                    </div>

                </div>

                <div>
                    <h6><b>TABEL MONITORING BIAYA PENDIDIKAN </b></h6>
                </div>

                <div class="table-responsive">
                    <table>
                        <thead class="bg-color-primary">
                            <tr>
                                <th>No</th>
                                <th>Tahun Akademik</th>
                                <th>Total Biaya Kuliah</th>
                                <th>Total Berbayar</th>
                                <th>Jenis Pembayaran</th>
                                <th>Total Tunggakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #d9d9d9;">
                                <td colspan="6">LIST MAHASISWA KAMPUS : JAKARTA PUSAT (KRAMAT RAYA)</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2016/2017</td>
                                <td class="align-right">18,500,000</td>
                                <td class="align-right">18,500,000</td>
                                <td>Angsuran</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2017/2018</td>
                                <td class="align-right">18,500,000</td>
                                <td class="align-right">18,500,000</td>
                                <td>Angsuran</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>2018/2019</td>
                                <td class="align-right">16,000,000</td>
                                <td class="align-right">16,000,000</td>
                                <td>Angsuran</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr style="background-color: #d9d9d9;">
                                <td colspan="2" class="align-right"><b>TOTAL</b></td>
                                <td class="align-right">53,000,000</td>
                                <td class="align-right">53,000,000</td>
                                <td></td>
                                <td class="align-right">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="my-1">
                    <h6><b>TABEL MONITORING PEMBAYARAN BIAYA SIDANG DAN WISUDA</b></h6>
                </div>
                <div class="table-responsive">
                    <table>
                        <thead class="bg-color-primary">
                            <tr>
                                <th>No</th>
                                <th>Jenis Biaya</th>
                                <th>Besaran Biaya</th>
                                <th>Realisasi Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #d9d9d9;">
                                <td colspan="6">LIST MAHASISWA KAMPUS : JAKARTA PUSAT (KRAMAT RAYA)</td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Sidang </td>
                                <td class="align-right">690,000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ijazah</td>
                                <td class="align-right">600,000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Wisuda </td>
                                <td class="align-right">2,750,000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>SKPI</td>
                                <td class="align-right">200,000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td class="align-right" colspan="2"><b>TOTAL</b></td>
                                <td class="align-right">4,240,000</td>
                                <td class="align-right">0</td>
                            </tr>
                            <tr>
                                <td class="align-right" colspan="3"><b>Total Tagihan</b></td>
                                <td class="align-right bg-color-primary">4,240,000</td>
                            </tr>
                            <tr>
                                <td class="align-right" colspan="3"><b>Total Pembayaran</b></td>
                                <td class="align-right bg-color-primary">0</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="align-right"><b>Cash back</b></td>
                                <td class="align-right bg-color-primary">0</td>
                            </tr>
                            <tr>
                                <td class="align-right" colspan="3"><b>Saldo</b></td>
                                <td class="align-right bg-color-primary">-4,240,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex flex-end my-1">
                    <button type="submit" class="btn btn-submit btn-secondary">Proses Pelunasan Biaya Pendidikan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>