<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Tools</a>

        <a href="pindah-prodi.php">Pindah Prodi</a>
        <a href="edit-pindah-prodi.php">Update Pindah Prodi</a>

    </div>

</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <h6>Form Pindah Prodi</h6>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Data Profil Aplikan</h6>
                </div>

                <div>
                    <div class="form-inputs">
                        <label> <b> ID Aplikan :</b></label>
                        <label><b>109521</b></label>
                    </div>
                    <div class="form-inputs">
                        <label> <b> Nomor Induk Mahasiswa Lama :</b></label>
                        <label><b>21011111011</b></label>
                    </div>
                    <div class="form-inputs">
                        <label> <b> Nama Aplikan :</b></label>
                        <label><b>Adinda Wardania</b></label>
                    </div>
                    <div class="form-inputs">
                        <label> <b> Konsentrasi lama/aktif :</b></label>
                        <label><b>Administrasi Bisnis</b></label>
                    </div>
                    <div class="form-inputs">
                        <label> <b> Presenter :</b></label>
                        <label><b>Siti Suryani</b></label>
                    </div>
                    <div class="form-inputs">
                        <label> <b> Asal Sekolah :</b></label>
                        <label><b>SMK Negeri 3 Jakarta</b></label>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Data Perubahan Pindah Konsentrasi Mahasiswa Aktif</h6>
                </div>

                <div>
                    <div class="form-inputs">
                        <label>Tanggal Pindah Jurusan :</label>
                        <input type="date" name="tanggalPindah" id="tanggalPindah" value="2021/08/16">
                    </div>
                    <div class="form-inputs">
                        <label>Konsentrasi/Prodi :</label>
                        <select name="prodi" id="prodi">
                            <option value="1">Administrasi Bisnis</option>
                            <option value="1">Administrasi Bisnis Internasional</option>
                            <option value="1">Hubungan Masyarakat</option>
                            <option value="1">Komputerisasi Akuntansi</option>
                            <option value="1">Manajemen Informatika</option>
                        </select>
                    </div>
                    <div class="form-inputs">
                        <label>Kelas</label>
                        <input type="text" name="kelas" id="kelas" value="AB-21-1-1">
                    </div>
                    <div class="form-inputs">
                        <label>Nomor Induk Mahasiswa Baru</label>
                        <input type="text" name="nim" id="nim" value="210111020038">
                    </div>
                    <span class="text-danger"><b>Nomor Induk yang dibuat secara otomatis sesuai dengan Aplikan di Tahun Akademik Marketing</b></span>
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
                        <label>Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="5">Potongan Beasiswa 5 jt selama 3 tahun</textarea>
                    </div>
                    <div class="form-inputs">
                        <label>Total yang sudah dibayarkan</label>
                        <input type="text" name="totalDibayarkan" id="totalDibayarkan" value="6600000">
                    </div>
                    <div class="form-inputs">
                        <label>Sisa Pembayaran</label>
                        <input type="text" name="sisaBayar" id="sisaBayar" value="8400000">
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