<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Dosen</a>
        <a href="jadwal-perkuliahan-dosen.php">Jadwal Perkuliahan</a>
        <a href="upload-soal-ujian.php">Upload Soal Ujian</a>
        <a href="upload-soal-ujian-tambah.php">Tambah Soal Ujian </a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1 grid-custom-view grid-gap-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size:20px;">Tools Ujian Semester</h6>
                </div>

                <div class="grid-1">
                    <div class="my-0">
                        <span class="menu-icon"><i class="fa fa-calendar-check-o"></i></span>
                        <a href="ujian-semester.php">&nbsp;Jadwal Ujian Kelas Reguler</a>
                    </div>
                    <div class="my-0">
                        <span class="menu-icon"><i class="fa fa-upload"></i></span>
                        <a href="upload-soal-ujian.php">&nbsp;Upload Soal UTS/UAS</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size:20px;">Upload Soal UTS/UAS</h6>
                </div>

                <form>
                    <div class="form-inputs">
                        <label>Mata Kuliah</label>
                        <select name="matakuliah" id="matakuliah">
                            <option value="">== Pilih Matakuliah ==</option>
                            <option value="1" selected>[9988899] Basis Data</option>
                            <option value="2">[0929337] Jaringan Komputer</option>
                            <option value="3">[9989920]Visual Basic</option>
                        </select>
                    </div>
                    <div class="form-inputs">
                        <label>Tahun Akademik</label>
                        <input type="text" id="ta" name="ta" value="2020/2021" readonly>
                    </div>
                    <div class="form-inputs">
                        <label>Semester</label>
                        <input type="text" id="smt" name="smt" value="1" readonly>
                    </div>
                    <div class="form-inputs">
                        <label>Kelas</label>
                        <input type="text" id="kelas" name="kelas" value="IK_REGULER_01" readonly>
                    </div>
                    <div class="form-inputs">
                        <label>Jenis Soal</label>
                        <select name="jenis" id="jenis">
                            <option value="">== Pilih Jenis Soal ==</option>
                            <option value="1" selected>UTS</option>
                            <option value="2">UAS</option>
                            <option value="3">Susulan UTS</option>
                            <option value="4">Susulan UAS</option>
                        </select>
                    </div>

                    <hr>

                    <div class="form-inputs my-1">
                        <label></label>
                        <div class="form-group">
                            <label class="radio-button"> Upload New
                                <input type="radio" name="metode" id="metode" value="1" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radio-button"> From Drive
                                <input type="radio" name="metode" id="metode" value="2">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <!-- jika user memilih metode upload file melalui "FROM DRIVE" maka akan tampil combo box yang ada dibawah ini -->

                    <!-- <div class="form-inputs">
                        <label>File Upload</label>
                        <select name="jenis" id="jenis">
                            <option value="">== Pilih Dokumen ==</option>
                            <option value="1">Dokumen 1.pdf</option>
                            <option value="2">Dokumen 2.pdf</option>
                            <option value="3">Dokumen 3.pdf</option>
                            <option value="4">Dokumen 4.pdf</option>
                        </select>
                    </div> -->

                    <div class="form-inputs">
                        <label>File Upload</label>
                        <div class="form-info">
                            <input type="file" id="upload" name="upload" placeholder="Text Here..." accept="application/pdf"> <br>
                            <span class="text-danger"><i>*File wajib berformat PDF dan tidak lebih dari 5 Mb</i></span>
                        </div>
                    </div>
                    <div class="form-inputs">
                        <label>Keterangan</label>
                        <textarea name="keterangan" id="keterangan" rows="5"></textarea>
                    </div>

                    <div class="d-flex flex-start py-1">
                        <button type="submit" class="btn btn-secondary mx-1">Upload</button>
                        <button type="reset" class="btn btn-medium mx-1">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>