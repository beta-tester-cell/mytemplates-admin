<?php include('header.php') ?>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="rekap-data-mahasiswa.php" class="btn btn-link btn-danger px-20">
                        Back
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Profil Biodata</h6>
                </div>
                <div class="d-flex flex-change">
                    <div class="form-img" style="margin-right: 150px; ">
                        <img src="theme/img/default-user.jpg" alt="">
                    </div>
                    <div class="form-mr-2">
                        <div class="form-inputs">
                            <label>ID</label>
                            <input type="text" name="id_mahasiswa" placeholder="ID Mahasiswa">
                        </div>
                        <div class="form-inputs">
                            <label>NIK</label>
                            <input type="text" name="nik" placeholder="NIK">
                        </div>
                        <div class="form-inputs">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-inputs">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir">
                        </div>
                        <div class="form-inputs">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-inputs">
                            <label>Jenis Kelamin</label>
                            <div class="form-group">
                                <label class="radio-button"> Laki-laki
                                    <input type="radio" value="Laki-laki">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-button"> Perempuan
                                    <input type="radio" value="Perempuan">
                                    <span class="checkmark"></span>
                                </label>

                            </div>
                        </div>
                        <div class="form-inputs">
                            <label>Agama</label>
                            <select name="agama" id="agama">
                                <option value="0">-- Pilih Agama --</option>

                                <option value="islam">Islam</option>

                                <option value="kristen">Kristen</option>

                                <option value="katolik">Katolik</option>

                                <option value="hindu">Hindu</option>

                                <option value="budha">Budha</option>

                            </select>
                        </div>
                        <div class="form-inputs">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-inputs">
                            <label for="email">No.Handphone</label>
                            <input type="text" name="no_hp" placeholder="No. Handphone">
                        </div>
                        <div class="form-inputs">
                            <label for="email">Email Orang tua</label>
                            <input type="email" name="email_ortu" placeholder="Email Orang Tua">
                        </div>
                        <div class="form-inputs">
                            <label for="email">No.Handphone Orang tua</label>
                            <input type="text" name="no_hp_ortu" placeholder="No. Handphone Orang Tua">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Profil Akademik</h6>
                </div>
                <div class="form-inputs">
                    <label>Institusi</label>
                    <input type="text" name="institusi" placeholder="Institusi">
                </div>
                <div class="form-inputs">
                    <label>Kampus</label>
                    <input type="text" name="kampus" placeholder="Kampus">
                </div>
                <div class="form-inputs">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Jurusan">
                </div>
                <div class="form-inputs">
                    <label>Tahun Angkatan</label>
                    <input type="text" name="tahun_angkatan" placeholder="Tahun Angkatan">
                </div>
                <div class="form-inputs">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" rows="5"></textarea>
                </div>
                <div class="form-inputs">
                    <label>Provinsi</label>
                    <input list="provinsilist" id="provinsi" placeholder="Select or Type of Province">
                    <datalist id="provinsilist">
                        <option data-value="1">Jakarta</option>
                        <option data-value="2">Jawa Barat</option>
                        <option data-value="3">Jawa Timur</option>
                        <option data-value="4">Jawa Tengah</option>
                    </datalist>
                    <input type="hidden" name="provinsi" id="provinsi-id">
                </div>
                <div class="form-inputs">
                    <label>Kabupaten</label>
                    <input list="kabupatenlist" id="kabupaten" placeholder="Select or Type of kabupaten">
                    <datalist id="kabupatenlist">
                        <option data-value="1">Bogor</option>
                        <option data-value="2">Bekasi</option>
                        <option data-value="3">Depok</option>
                        <option data-value="4">Tanggerang</option>
                    </datalist>
                    <input type="hidden" name="kabupaten" id="kabupaten-id">
                </div>
                <div class="form-inputs">
                    <label>Kecamatan</label>
                    <input type="text" list="kecamatanlist" id="kecamatan" placeholder="Select or type for Kecamatan" />
                    <datalist id="kecamatanlist">
                        <option data-value="1">Batu Tulis</option>
                        <option data-value="2">Cipaku</option>
                        <option data-value="3">Cikaret</option>
                        <option data-value="4">Bojong</option>
                    </datalist>
                    <input type="hidden" name="kecamatan" id="kecamatan-id">
                </div>
                <div class="form-inputs">
                    <label>Kelurahan</label>
                    <input type="text" list="kelurahan" placeholder="Select or type for Kelurahan" />
                    <datalist id="kelurahan">
                        <option value="Utara">
                        <option value="Selatan">
                        <option value="Timur">
                        <option value="Barat">
                        <option value="Tengah">
                    </datalist>
                </div>
                <div class="form-inputs">
                    <label>Kodepos</label>
                    <input type="text" name="kodepos" placeholder="Kodepos">
                </div>
                <div class="form-inputs">
                    <label>Pembimbing Akademik</label>
                    <input type="text" list="PA" placeholder="Select or type for Pembimbing Akademik" />
                    <datalist id="PA">
                        <option value="Drs. Subagio">
                        <option value="Drs. Subagio">
                        <option value="Drs. Subagio">
                        <option value="Drs. Subagio">
                        <option value="Drs. Subagio">
                    </datalist>
                </div>
                <div class="form-inputs">
                    <label>Status</label>
                    <select name="status" id="status">
                        <option value="0">-- Pilih Status Mahasiswa --</option>
                        <option value="1">Aktif</option>
                        <option value="2">Cuti</option>
                        <option value="3">Non-Aktif</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Kelengkapan Data Akademik</h6>
                </div>
                <div class="form-inputs doc-grid-custom">
                    <label>KTP</label>
                    <input type="file" name="ktp">
                    <a href="#" class="text-primary d-flex flex-center view-docs"> View</a>
                </div>
                <div class="form-inputs doc-grid-custom">
                    <label>Kartu Keluarga</label>
                    <input type="file" name="kk">
                    <a href="#" class="text-primary d-flex flex-center view-docs">View</a>
                </div>
                <div class="form-inputs doc-grid-custom">
                    <label>Akte Kelahiran</label>
                    <input type="file" name="akte">
                    <a href="#" class="text-primary d-flex flex-center view-docs">View</a>
                </div>
                <div class="form-inputs doc-grid-custom">
                    <label>Ijazah SMU</label>
                    <input type="file" name="ijazah">
                    <a href="#" class="text-primary d-flex flex-center view-docs">View</a>
                </div>
                <div class="form-inputs doc-grid-custom">
                    <label>Kartu Mahasiswa</label>
                    <input type="file" name="ktm">
                    <a href="#" class="text-primary d-flex flex-center view-docs">View</a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Profil Orang Tua</h6>
                </div>
                <div class="card-header">
                    <h6>Ayah</h6>
                </div>

                <div class="form-inputs">
                    <label>NIK</label>
                    <input type="text" name="nik_ayah" placeholder="NIK Ayah">
                </div>
                <div class="form-inputs">
                    <label>Nama</label>
                    <input type="text" name="nama_ayah" placeholder="Nama Ayah">
                </div>
                <div class="form-inputs">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir_ayah">
                </div>
                <div class="form-inputs">
                    <label>Pendidikan</label>
                    <select name="pendidikan_ayah" id="pendidikan_ayah">
                        <option value="0">-- Pilih Pendidikan --</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="d1">D1</option>
                        <option value="d2">D2</option>
                        <option value="d3">D3</option>
                        <option value="d4">D4</option>
                        <option value="s1">S1</option>
                        <option value="s2">S2</option>
                        <option value="s3">S3</option>
                    </select>
                </div>
                <div class="form-inputs">
                    <label>Pekerjaan</label>
                    <select name="pekerjaan_ayah" id="pekerjaan_ayah">
                        <option value="0">-- Pilih Pekerjaan --</option>
                        <option value="tidak_bekerja">Tidak bekerja</option>
                        <option value="pegawai_swasta">Pegawai Swasta</option>
                        <option value="pegawai_negeri">Pegawai Negeri</option>
                        <option value="wirausaha">Wirausaha</option>
                        <option value="buruh">buruh</option>
                    </select>
                </div>
                <div class="form-inputs">
                    <label>Penghasilan</label>
                    <input type="text" name="penghasilan_ayah" id="penghasilan_ayah">
                </div>

                <div class="card-header">
                    <h6>Ibu</h6>
                </div>
                <div class="form-inputs">
                    <label>NIK</label>
                    <input type="text" name="nik_ibu" placeholder="NIK Ibu">
                </div>
                <div class="form-inputs">
                    <label>Nama</label>
                    <input type="text" name="nama_ibu" placeholder="Nama Ibu">
                </div>
                <div class="form-inputs">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir_ibu">
                </div>
                <div class="form-inputs">
                    <label>Pendidikan</label>
                    <select name="pendidikan_ibu" id="pendidikan_ibu">
                        <option value="0">-- Pilih Pendidikan --</option>
                        <option value="sd">SD</option>
                        <option value="smp">SMP</option>
                        <option value="sma">SMA</option>
                        <option value="d1">D1</option>
                        <option value="d2">D2</option>
                        <option value="d3">D3</option>
                        <option value="d4">D4</option>
                        <option value="s1">S1</option>
                        <option value="s2">S2</option>
                        <option value="s3">S3</option>
                    </select>
                </div>
                <div class="form-inputs">
                    <label>Pekerjaan</label>
                    <select name="pekerjaan_ibu" id="pekerjaan_ibu">
                        <option value="0">-- Pilih Pekerjaan --</option>
                        <option value="tidak_bekerja">Tidak bekerja</option>
                        <option value="pegawai_swasta">Pegawai Swasta</option>
                        <option value="pegawai_negeri">Pegawai Negeri</option>
                        <option value="wirausaha">Wirausaha</option>
                        <option value="buruh">buruh</option>
                    </select>
                </div>
                <div class="form-inputs">
                    <label>Penghasilan</label>
                    <input type="text" name="penghasilan_ibu" id="penghasilan_ibu">
                </div>
            </div>
        </div>



        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Data Pendidikan</h6>
                </div>
                <span style="font-size:16px;">Semester 1 TA : 2020/2021</span><br>

                <div class="table-responsive">

                    <table border='1' style='border-collapse: collapse; width:50% !important; margin-top:20px'>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Nilai</th>
                        </tr>

                        <tr>
                            <td>1</td>
                            <td>098898</td>
                            <td>Basis Data</td>
                            <td>4</td>
                            <td>100</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>098894</td>
                            <td>Bahasa Inggris</td>
                            <td>4</td>
                            <td>100</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>098892</td>
                            <td>Pendidikan Agama</td>
                            <td>2</td>
                            <td>100</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>098895</td>
                            <td>Aplikasi Komputer 1</td>
                            <td>4</td>
                            <td>100</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>098899</td>
                            <td>Mysql Database</td>
                            <td>4</td>
                            <td>100</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>098890</td>
                            <td></td>
                            <td>4</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td colspan='5'>

                                <table style='padding:7px'>
                                    <tr>
                                        <td>TOTAL SKS</td>
                                        <td>:</td>
                                        <td>22 SKS</td>
                                        <td width='150px'>&nbsp;</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>IPK</td>
                                        <td>:</td>
                                        <td>4</td>
                                        <td width='150px'>&nbsp;</td>
                                        <td>Predikat</td>
                                        <td>:</td>
                                        <td>CUMLAUDE</td>
                                    </tr>

                                </table>

                            </td>
                        </tr>


                    </table>
                </div>

            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Profil Kompetensi</h6>
                </div>
                <font><span style="font-size:18px;"><b>berisi semua kompetensi yg pernah diikuti</b></span></font>

            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Profil Penempatan & Karir</h6>
                </div>
                <font><span style="font-size:18px;"><b>Data Penempatan Kerja dan histori Karir</b></span></font>

            </div>
        </div>


    </div>
</div>

<?php include('footer-datatable.php') ?>