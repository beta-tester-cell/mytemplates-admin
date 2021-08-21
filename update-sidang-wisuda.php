<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Sidang</a>

        <a href="daftar-sidang-wisuda.php">Registrasi Sidang dan Wisuda</a>
        <a href="update-sidang-wisuda.php">Daftar Registrasi Sidang dan Wisuda</a>

    </div>

</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Data Profil Mahasiswa</h6>
                </div>

                <div class="d-flex flex-change-reverse">
                    <div class="form-mr-2">
                        <div class="form-inputs grid-gap-1">
                            <label>NIM</label>
                            <input type="text" name="nim" value="180442020031" disabled>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" value="Achmad Rizqi Yulianto" disabled>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Tanggal Lahir</label>
                            <input type="date" value="16/07/2000" name="tanggal_lahir" disabled>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="Jakarta" disabled>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Jenis Kelamin</label>
                            <div class="form-group">
                                <label class="radio-button"> Laki-laki
                                    <input type="radio" value="Laki-laki" name="jenis-kelamin" disabled="true" checked>
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-button"> Perempuan
                                    <input type="radio" value="Perempuan" name="jenis-kelamin" disabled>
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                        </div>
                        <div class="form-inputs grid-gap-1">
                            <label>Agama</label>
                            <select name="agama" id="agama" disabled>
                                <option value="0">-- Pilih Agama --</option>

                                <option value="islam" selected>Islam</option>

                                <option value="kristen">Kristen</option>

                                <option value="katolik">Katolik</option>

                                <option value="hindu">Hindu</option>

                                <option value="budha">Budha</option>

                            </select>
                        </div>
                        <div class="form-inputs  grid-gap-1">
                            <label for="alamat">Alamat</label>
                            <input type="email" name="alamat" value="jalan kampung kebon kelapa Rt.7/2" disabled>
                        </div>
                        <div class="form-inputs  grid-gap-1">
                            <label>Kode Pos</label>
                            <input type="text" name="kode" value="-" disabled>
                        </div>
                        <div class="form-inputs  grid-gap-1">
                            <label>Telepon</label>
                            <input type="text" name="telepon" value="08561846156" disabled>
                        </div>
                    </div>
                    <div style="width: 200px;">
                        <img src="theme/img/default-user.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Akademik</h6>
                    </div>

                    <div>
                        <div class="form-inputs">
                            <label>Konsentrasi/Prodi :</label>
                            <select name="prodi" id="prodi" disabled>
                                <option value="1">Administrasi Bisnis</option>
                                <option value="1">Administrasi Bisnis Internasional</option>
                                <option value="1">Hubungan Masyarakat</option>
                                <option value="1">Komputerisasi Akuntansi</option>
                                <option value="1" selected>Manajemen Informatika</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Kelas</label>
                            <input type="text" name="kelas" id="kelas" value="IK-18-III-1 / MALAM" disabled>
                        </div>
                        <div class="form-inputs">
                            <label>Pembimbing Akademik</label>
                            <input type="text" name="PA" id="PA" value="Karto S.Kom" disabled>
                        </div>
                        <div class="form-inputs">
                            <label>Tahun Masuk</label>
                            <input type="text" name="tahun" id="tahun" value="2018" disabled>
                        </div>
                        <div class="form-inputs">
                            <label>Status Akademik</label>
                            <input type="text" name="status" id="status" value="Aktif" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Proses Rencana Biaya Sidang dan Wisuda</h6>
                    </div>

                    <div>
                        <div class="form-inputs">
                            <label>Angkatan Wisuda Ke</label>
                            <input type="text" name="angkatan" id="angkatan" value="24">
                        </div>
                        <div class="form-inputs">
                            <label>Biaya Sidang dan Wisuda</label>
                            <input type="text" name="biaya" id="biaya" value="4240000">
                        </div>
                        <div class="form-inputs">
                            <label>Potongan Biaya</label>
                            <input type="text" name="potonganBiaya" id="potonganBiaya" value="200000">
                        </div>
                        <div class="form-inputs">
                            <label>Total Biaya Sidang dan Wisuda</label>
                            <input type="text" name="totalBiaya" id="totalBiaya" value="15000000">
                        </div>
                        <div class="form-inputs">
                            <label>Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="5"></textarea>
                        </div>
                        <div class="form-inputs">
                            <label>Untuk Komponen Biaya</label>
                            <div>
                                <label class="checkbox">
                                    <input type="checkbox" value="sidang ta"> Sidang TA
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="Ijazah">Ijazah
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="Wisuda"> Wisuda
                                    <span class="checkmark"></span>
                                </label>
                                <label class="checkbox">
                                    <input type="checkbox" value="SKPI"> SKPI
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <span class="text-danger"><b>Biaya akumulasi akan membagi komponen biaya sesuai dengan ketentuan yang berlaku</b></span>

                        <div class="d-flex flex-center grid-gap-1 my-1">
                            <button type="submit" class="btn btn-secondary btn-submit ">Save Data</button>
                            <button type="button" class="btn btn-danger btn-submit">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>