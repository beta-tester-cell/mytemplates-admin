<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-siswa.php">Pengelolaan Mahasiswa</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <form>
            <div class="py-1">
                <div class="card">
                    <div class="d-flex flex-space-between align-center flex-change">
                        <div class="title-form">
                            <h6>Form Tambah Baru Mahasiswa</h6>
                        </div>
                        <div class="d-flex grid-gap-1">
                            <button class="btn btn-link btn-danger px-20">Back</button>
                            <button class="btn btn-link btn-secondary  px-20">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-tabs px-0">
                <!-- Nav pills -->
                <ul class="nav nav-pills" id="tabs">
                    <li class="nav-item">
                        <a class="nav-link" id="tab1">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">1</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Profile</span>
                                    <span class="wizard-desc">Biodata Mahasiswa</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">2</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Kemahasiswaan</span>
                                    <span class="wizard-desc">Data Kemahasiswaan</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab3">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">3</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Dokumen</span>
                                    <span class="wizard-desc">Dokumen Mahasiswa</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab4">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">4</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Orang Tua</span>
                                    <span class="wizard-desc">Data Orang Tua</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Tab1 biodata mahasiswa start -->

                    <div class="container tab-pane active" id="tab1C">
                        <div class="d-flex flex-change">
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
                            <div class="form-img">
                                <img src="theme/img/default-user.jpg" alt="">
                                <input type="file" name="img_mahasiswa">
                            </div>
                        </div>

                    </div>

                    <!-- tab1 biodata mahasiswa end -->

                    <!-- tab2 data mahasiswa start -->

                    <div class="container tab-pane" id="tab2C">
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
                    <!-- tab2 data mahasiswa end -->

                    <!-- tab3 dokumen mahasiswa start -->
                    <div class="container tab-pane" id="tab3C">
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
                    <!-- tab3 dokumen mahasiswa end -->

                    <!-- tab4 data ortu start  -->
                    <div class="container tab-pane" id="tab4C">
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
                    <!-- tab4 data ortu end  -->
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>