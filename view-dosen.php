<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-dosen.php">Pengelolaan Dosen</a>
        <a href="view-dosen.php">View Dosen</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-dosen.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW DOSEN</span>
                    </a>
                    <a href="pengelolaan-dosen.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST DOSEN</span>
                    </a>
                </div>
            </div>
        </div>

        <form>
            <div class="py-1">
                <div class="card">
                    <div class="card-header d-flex flex-space-between align-item-end">

                        <h6>Biodata Dosen</h6>

                        <div class="image-profile">
                            <img src="theme/img/default-user.jpg" alt="">
                            <p class="text-center">Dra. Euis Winarti,M.M</p>
                        </div>
                    </div>

                    <div class="grid-2 grid-gap-3">
                        <div>
                            <div class="form-inputs">
                                <label>Dosen ID</label>
                                <input type="text" name="dosen_id" id="dosen_id" placeholder="ID Dosen" value="1000" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Nama Dosen</label>
                                <input type="text" name="nama_dosen" id="nama_dosen" placeholder="Nama Dosen" value="Dra.Euis Winarti" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Gelar Tertinggi</label>
                                <input type="text" name="gelar" id="gelar" placeholder="Gelar Tertinggi" value="M.M" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="-" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="1970-01-01" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Jenis Kelamin</label>
                                <div class="form-group">
                                    <label class="radio-button"> Laki-laki
                                        <input type="radio" value="laki-laki" disabled>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-button"> Perempuan
                                        <input type="radio" value="perempuan" checked disabled>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="form-inputs">
                                <label>No. Rekening</label>
                                <input type="number" name="no_rekening" id="no_rekening" placeholder="No. Rekening" value="9988776655" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Nama Bank</label>
                                <input type="text" name="nama_bank" id="nama_bank" placeholder="Nama Bank" value="BSM" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Atas Nama</label>
                                <input type="text" name="atas_nama" id="atas_nama" placeholder="Atas Nama" value="Euis Winarti" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Mobile Phone</label>
                                <input type="text" name="mobile_phone" id="mobile_phone" placeholder="Mobile Phone" value="0813789980" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" value="euis@lp3i.ac.id" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Photo</label>
                                <input type="file" name="photo" id="photo" value="euis.jpg" disabled>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Detail Dosen</h6>
                    </div>

                    <div class="grid-2 grid-gap-3">
                        <div>
                            <div class="form-inputs">
                                <label>Pendidikan Terakhir</label>
                                <select name="pend_terakhir" id="pend_terakhir" disabled>
                                    <option value="0">-- Pilih Pendidikan Terakhir --</option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="sma">SMA</option>
                                    <option value="d3">D3</option>
                                    <option value="s1">S1</option>
                                    <option value="s2" selected>S2</option>
                                    <option value="s3">S3</option>
                                </select>
                            </div>
                            <div class="form-inputs">

                                <label>Jurusan</label>

                                <input class="width-100" type="text" list="jurusan" placeholder="Select or type for suggest" value="Manajemen" disabled />

                                <datalist id="jurusan">
                                    <option value="Akuntansi">
                                    <option value="Manajemen">
                                    <option value="Administrasi Bisnis">
                                    <option value="Sekretaris">
                                    <option value="Administrasi Perkantoran">
                                    <option value="Manajemen Informatika">
                                    <option value="Multimedia">
                                </datalist>

                            </div>
                            <div class="form-inputs">
                                <label>Nama Universitas</label>
                                <input type="text" name="nama_pt" id="nama_pt" placeholder="Nama Universitas" value="Universitas Indonesia" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Tahun Lulus</label>
                                <input type="text" name="tahun_lulus" id="tahun_lulus" placeholder="Tahun Lulus" value="2007" disabled>
                            </div>
                        </div>
                        <div>
                            <div class="form-inputs">

                                <label>Home Base</label>

                                <input class="width-100" type="text" list="home_base" placeholder="Select or type for suggest" value="PLJ Kramat Raya" disabled />

                                <datalist id="home_base">
                                    <option value="PLJ Kramat Raya">
                                    <option value="PLJ Jakarta Timur">
                                    <option value="PLJ Pasar Minggu">
                                    <option value="PLJ Pondok Gede">
                                </datalist>

                            </div>

                            <div class="form-inputs">
                                <label>Tanggal Bergabung</label>
                                <input type="date" name="tanggal_bergabung" id="tanggal_bergabung" value="2002-01-20" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Jenis Dosen</label>
                                <input type="text" name="jenis_dosen" id="jenis_dosen" value="Type A" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Status Keaktifan</label>
                                <label class="switch">
                                    <input type="checkbox" checked disabled>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6>Status Dosen</h6>
                    </div>
                    <div class="grid-2">
                        <div>
                            <div class="form-inputs">
                                <label>Jabatan Fungsional</label>
                                <select name="jabatan" id="jabatan" disabled>
                                    <option value="0">-- Pilih Jabatan Fungsional --</option>
                                    <option value="asisten_ahli" selected>Asisten Ahli</option>
                                </select>
                            </div>
                            <div class="form-inputs">
                                <label>Nilai KUM</label>
                                <input type="number" name="nilai_kum" id="nilai_kum" placeholder="Nilai KUM" value="300" disabled>
                            </div>
                            <div class="form-inputs">
                                <label>Sertifikasi Dosen</label>
                                <select name="jabatan" id="jabatan" disabled>
                                    <option value="0">-- Pilih Sertifikasi --</option>
                                    <option value="tersertifikasi" selected>Tersertifikasi</option>
                                    <option value="belum_tersertifikasi">Belum Tersertifikasi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php') ?>