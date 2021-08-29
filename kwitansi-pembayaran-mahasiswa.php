<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Report</a>
        <a href="surat-tagihan-bayar.php">Cetak Kwitansi Pembayaran Mahasiswa</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Cetak Kwintasi Pembayaran Mahasiswa</h6>
                </div>

                <div class="form-inputs">
                    <span><b>LIST MAHASISWA KAMPUS</b></span>
                    <span class="text-danger"><b>JAKARTA PUSAT (KRAMAT RAYA)</b></span>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Mahasiswa</td>
                                <td>Konsentrasi</td>
                                <td>Nomor Bukti</td>
                                <td>Tanggal Bayar</td>
                                <td>Jumlah Bayar</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Abdulah Agim</td>
                                <td>Multimedia dan Komunikasi Visual</td>
                                <td>INV/221070049120</td>
                                <td>2021-07-13</td>
                                <td>3000000</td>
                                <td><a href="cetak-kwitansi.php" target="_blank">Cetak PDF</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adinda Wardania</td>
                                <td>Administrasi Bisnis</td>
                                <td>INV/221060048991</td>
                                <td>2021-07-10</td>
                                <td>1050000</td>
                                <td><a href="cetak-kwitansi.php">Cetak PDF</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Adistia Pratiwi</td>
                                <td>Komputerisasi Bisnis</td>
                                <td>INV/221060048991</td>
                                <td>2021-07-10</td>
                                <td>1000000</td>
                                <td><a href="cetak-kwitansi.php">Cetak PDF</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>