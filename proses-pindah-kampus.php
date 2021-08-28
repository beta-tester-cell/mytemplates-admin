<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Tools</a>

        <a href="pindah-kampus.php">Pindah Kampus</a>
        <a href="proses-pindah-prodi.php">Proses Pindah Kampus</a>

    </div>

</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="py-1">
                <div class="card">
                    <h6>
                        Form Pindah Kampus
                    </h6>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Data Profil Mahasiswa</h6>
                </div>

                <div>
                    <div class="form-inputs">
                        <label> <b> Nomor Induk Asal Mahasiswa:</b></label>
                        <input type="text" name="nim" id="nim" value="160113030086" readonly>
                    </div>
                    <div class="form-inputs">
                        <label> <b>Nama Lengkap:</b></label>
                        <input type="text" name="nama" id="nama" value="Dina Tri Wulandari" readonly>
                    </div>
                    <div class="form-inputs">
                        <label> <b> Konsentrasi :</b></label>
                        <input type="text" name="konsentrasi" id="konsentrasi" value="Administrasi Perkantoran" readonly>
                    </div>
                    <div class="form-inputs">
                        <label> <b>Tahun Angkatan :</b></label>
                        <input type="text" name="tahunAngkatan" id="tahunAngkatan" value="2016" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Data Perubahan Pindah Kampus Mahasiswa Aktif</h6>
                </div>

                <div>
                    <div class="form-inputs">
                        <label>Tanggal Pindah Kampus :</label>
                        <input type="date" name="tanggalPindah" id="tanggalPindah" value="2021/08/16">
                    </div>
                    <div class="form-inputs">
                        <label>Tahun Akademik</label>
                        <input type="text" name="tahunAkademik" id="tahunAkademik" value="2018/2019">
                    </div>
                    <div class="form-inputs">
                        <label>Kelas</label>
                        <input type="text" name="kelas" id="kelas" value="AB-18-1-1">
                    </div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Data Pembiayaan Kuliah</h6>
                </div>

                <div>
                    <div class="form-inputs">
                        <label>Biaya Kuliah:</label>
                        <input type="text" name="biaya" id="biaya" value="17000000">
                    </div>
                    <div class="form-inputs">
                        <label>Dana Pinjaman:</label>
                        <input type="text" name="danaPinjaman" id="danaPinjaman" value="0">
                    </div>
                    <div class="form-inputs">
                        <label>Potongan Biaya</label>
                        <input type="text" name="potonganBiaya" id="potonganBiaya" value="200000">
                    </div>
                    <div class="form-inputs">
                        <label>Total Biaya Kuliah</label>
                        <input type="text" name="totalBiaya" id="totalBiaya" value="15000000">
                    </div>

                    <div class="form-inputs">
                        <label>Total yang sudah dibayarkan</label>
                        <input type="text" name="totalDibayarkan" id="totalDibayarkan" value="6600000">
                    </div>
                    <div class="form-inputs">
                        <label>Sisa Pembayaran</label>
                        <input type="text" name="sisaBayar" id="sisaBayar" value="8400000">
                    </div>
                    <div class="form-inputs">
                        <label>Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="5">Potongan Beasiswa 5 jt selama 3 tahun</textarea>
                    </div>


                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="d-flex flex-center grid-gap-1">
                <button type="submit" class="btn btn-secondary btn-submit ">Save Data</button>
                <button type="button" class="btn btn-danger btn-submit">Cancel</button>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>