<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="dashboard-page.php">Akademik Cabang</a>
        <a href="jadwal-ujian.php">Input Jadwal Ujian</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-jadwal-ujian.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD JADWAL UJIAN REGULER</span>
                    </a>
                    <a href="jadwal-ujian.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> DAFTAR UJIAN MODULER</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Form Input Jadwal Ujian Reguler</h6>
                </div>

                <form>
                    <div class="form grid-2 grid-gap-1 py-1">
                        <div class="form-inputs">
                            <label>Tahun Akademik</label>
                            <input class="width-100" type="text" id="tahun_akd" name="tahun_akd" placeholder="xxxx/xxxx...">
                        </div>
                        <div class="form-inputs">
                            <label>Tanggal</label>
                            <input class="width-100" class="width-100" type="date" id="tanggal_ujian" name="tanggal_ujian">
                        </div>
                        <div class="form-inputs">
                            <label>Program Studi</label>
                            <select name="prodi" id="prodi">
                                <option value="">Pilih Program Studi</option>
                                <option value="product_id" selected>Manajemen Informatika</option>
                                <option value="2">Akuntansi</option>
                                <option value="3">Teknologi Komputer</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Jam Mulai-Akhir</label>
                            <div class="grid-2 grid-gap-1">
                                <input class="width-100" class="width-100" type="time" id="tanggal_ujian" name="tanggal_ujian">
                                <input class="width-100" class="width-100" type="time" id="tanggal_ujian" name="tanggal_ujian">
                            </div>
                        </div>
                        <div class="form-inputs">
                            <label>Semester</label>
                            <select name="semester" id="semester">
                                <option value="">Pilih Semester</option>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Ruang</label>
                            <select name="ruang" id="ruang">
                                <option value="">Pilih ruang</option>
                                <option value="1" selected>Ruang Lab Multimedia</option>
                                <option value="2">Ruang Lab Komputer</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Mata Kuliah</label>
                            <select name="mata_kuliah" id="mata_kuliah">
                                <option value="">Pilih Mata Kuliah</option>
                                <option value="1" selected>[0999786] Basis Data</option>
                                <option value="2">[679020] Pemograman Komputer</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Pengawas</label>
                            <select name="pengawas" id="pengawas">
                                <option value="">Pilih Pengawas</option>
                                <option value="1">Junaidi</option>
                                <option value="2">Putri Cantika</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Kelas</label>
                            <select name="kelas" id="kelas">
                                <option value="">Pilih Kelas</option>
                                <option value="1" selected>BDIK01</option>
                                <option value="2">BDIK02</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Perumus Soal</label>
                            <input class="width-100" type="text" id="perumus_soal" name="perumus_soal" placeholder="perumus soal..." value="[009000] Masria, M.Kom">
                        </div>
                        <div class="form-inputs">
                            <label>Jenis Ujian</label>
                            <div class="form-group">
                                <label class="radio-button"> UTS
                                    <input type="radio" value="uts" name="jenis_soal" id="jenis_soal">
                                    <span class="checkmark"></span>
                                </label>

                                <label class="radio-button"> UAS
                                    <input type="radio" value="uas" name="jenis_soal" id="jenis_soal" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form grid-1 grid-gap-1 py-1">
                        <div align="right">
                            <button type="submit" class="btn btn-secondary btn-submit mx-1" id="submit-jadwalujian">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php') ?>