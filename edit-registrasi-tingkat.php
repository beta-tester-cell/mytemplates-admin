<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Transaksi</a>
        <a href="registrasi-mahasiswa.php">Registrasi Mahasiswa</a>
        <a href="#">Edit Registrasi Mahasiswa</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <h6>Form Registrasi Mahasiswa Tingkat 2</h6>
            </div>
        </div>
        <form>
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Profil Mahasiswa</h6>
                    </div>
                    <div class="d-flex flex-change-reverse">
                        <div class="form-mr-2">
                            <div class="form-inputs grid-gap-1">
                                <label>NIM</label>
                                <span><b>200551020013</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Nama Lengkap</label>
                                <span><b>Radinatul Kisma</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Tanggal Lahir</label>
                                <span><b>01 - Februari - 2003</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Tempat Lahir</label>
                                <span><b>Padang</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Jenis Kelamin</label>
                                <span><b>Perempuan</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Agama</label>
                                <span><b>Islam</b></span>
                            </div>
                            <div class="form-inputs  grid-gap-1">
                                <label for="alamat">Alamat</label>
                                <span><b>Kampung Rawa RT. 12 RW 04 No.35 Jln. kwista 9 kelurahan Galur, kecamatan Johar Baru,Jakarta pusat. Kodepos 10350</b></span>
                            </div>
                            <div class="form-inputs  grid-gap-1">
                                <label>Kode Pos</label>
                                <span><b>10410</b></span>
                            </div>
                            <div class="form-inputs  grid-gap-1">
                                <label>Telepon</label>
                                <span><b>0890789678687</b></span>
                            </div>
                            <div class="form-inputs  grid-gap-1">
                                <label>Email</label>
                                <div>
                                    <input class="width-100" type="text" name="email" id="email" value="email@email.com">
                                    <span class="text-danger">Email tidak boleh kosong</span> <br>
                                    <span>[untuk mengirim jumlah tagihan]</span>

                                </div>

                            </div>
                        </div>
                        <div style="width: 200px;">
                            <img src="theme/img/default-user.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Akademik</h6>
                    </div>
                    <div>
                        <div class="form-mr-2">
                            <div class="form-inputs grid-gap-1">
                                <label>Konsentrasi</label>
                                <span><b>Administrasi Bisnis Internasional</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Kelas</label>
                                <span><b>ABI-20-I-1 / Pagi</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Pembimbing Akademik</label>
                                <span><b>Mutjabah Fatururrahman, M.M.</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Tahun Masuk</label>
                                <span><b>2020</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Status Akademik</label>
                                <span><b>Aktif</b></span>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Tingkat/Tahun Ke</label>
                                <span><b>Tingkat 1</b></span>
                            </div>
                            <div class="form-inputs  grid-gap-1">
                                <label for="alamat">Jenis Pilihan Kelas</label>
                                <span><b>Reguler</b></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Registrasi Tingkat 2</h6>
                    </div>
                    <div>
                        <div class="form-mr-2">
                            <div class="form-inputs grid-gap-1">
                                <label>Tanggal Registrasi</label>
                                <input type="datetime" name="tglRegistrasi" id="tglRegistrasi">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Tahun Akademik</label>
                                <div>
                                    <input class="width-100" type="text" name="tahunAkademik" id="tahunAkademik">
                                    <span class="text-danger">
                                        Tahun Akademik mengikuti TA Marketing yang sedang berlangsung, jika tidak sesuai lakukan dengan manual dalam format</span> <span>0000/0000
                                    </span>
                                </div>

                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Kelas</label>
                                <div>
                                    <select name="kelas" id="kelas">
                                        <option value="1">-- Kelas --</option>
                                        <option value="1">ABI-20-II-1</option>
                                        <option value="1">ABI-20-II-2</option>
                                    </select>
                                    <select name="pilihan" id="pilihan">
                                        <option value="1">-- Pilihan --</option>
                                        <option value="1">ABI-20-II-1</option>
                                        <option value="1">ABI-20-II-2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Biaya Kuliah Tingkat 2</h6>
                    </div>
                    <div>
                        <div class="form-mr-2">
                            <div class="form-inputs grid-gap-1">
                                <label>Biaya Kuliah</label>
                                <input type="text" name="biayaKuliah" id="biayaKuliah">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Dana Pinjaman</label>
                                <input type="text" name="danaPinjaman" id="danaPinjaman">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Keterangan Potongan</label>
                                <select name="potongan" id="potongan">
                                    <option value="1">Tidak ada potongan</option>
                                    <option value="1">Potongan 50%</option>
                                    <option value="1">Potongan 60%</option>
                                </select>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Potongan Biaya</label>
                                <input type="text" name="potonganbiaya" id="potonganbiaya">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Total Potongan Biaya</label>
                                <input type="text" name="totalpotonganbiaya" id="totalpotonganbiaya">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Data Pembayaran Kuliah</h6>
                    </div>
                    <div>
                        <div class="form-mr-2">
                            <div class="form-inputs grid-gap-1">
                                <label>Sumber Penerimaan</label>
                                <select name="sumber" id="sumber">
                                    <option value="1">-- Sumber Penerimaan --</option>
                                </select>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Nomor Bukti/VA</label>

                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Waktu Expired Billing</label>
                                <input type="text" name="waktu" id="waktu">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Jenis Pembayaran</label>
                                <select name="jenispembayaran" id="jenispembayaran">
                                    <option value="1">-- Pilihan --</option>
                                </select>
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Potongan Diskon</label>
                                <input type="text" name="Potongandiskon" id="Potongandiskon">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Jumlah Tagihan</label>
                                <input type="text" name="JumlahTagihan" id="JumlahTagihan">
                            </div>
                            <div class="form-inputs grid-gap-1">
                                <label>Keterangan</label>
                                <textarea name="keterangan" id="keterangan" rows="5"></textarea>
                            </div>
                            <div class="noted-danger">
                                <ul>
                                    <li>DIWAJIBKAN KEPADA KEUANGAN UNTUK SELALU MENYIMPAN INVOICE REGISTRASI MAHASISWA</li>
                                    <li>EMAIL MAHASISWA DIWAJIBKAN UNTUK DIISI SESUAI EMAIL MASING-MASING MAHASISWA</li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="d-flex flex-center grid-gap-1 my-1">
                    <button type="submit" class="btn btn-secondary btn-submit ">Save Data</button>
                    <button type="button" class="btn btn-danger btn-submit">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>