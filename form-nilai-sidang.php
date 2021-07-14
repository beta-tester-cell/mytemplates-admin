<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
        <a href="form-nilai-sidang.php">Form Nilai Komponen Sidang</a>
    </div>
</div>
<div class="content">
    <div class="container">
                <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Konfigurasi Kebutuhan Sidang</h6>
                </div>
                <ul class="menu-widget">
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-gelombang-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-gelombang-sidang.php">Gelombang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-gelombang-sidang.php">Gelombang</a>
                        </li>
                    <?php endif; ?>
                     <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-ploting-dospem.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-ploting-dospem.php">Ploting Dosen Pembimbing</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-ploting-dospem.php">Ploting Dosen Pembimbing</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-nilai-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                     <?php elseif($_SERVER['REQUEST_URI'] == '/mytemplates/form-nilai-sidang.php') : ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                    <?php endif; ?>
                     <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-nilai-bimbingan.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
                        </li>
                    <?php endif; ?>
                     <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/validasi-pendaftaran-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                   <h6>Form Konfigurasi Nilai Komponen</h6>
                </div>
                <form>
                    <div class="grid-gap-2 py-1">
                        <div class="input-data">
                            <div class="my-1">
                                <label><b>Jenis Sidang</b></label>
                                <select name="jenis_sidang" class="width-100" id="jenis_sidang">
                                    <option value="0">-- Pilih Jenis Sidang --</option>
                                    <option value="1" selected>Tugas Akhir (TA)</option>
                                    <option value="2">Tugas Akhir Susulan</option>
                                </select>
                            </div>

                            <div class="my-1">
                                <label><b>Periode</b></label>
                                <input class="width-100" id="periode" type="text" value="21" placeholder="Periode">
                            </div>

                            <div class="my-1">
                                <label><b>Komponen</b></label>
                                <textarea class="width-100" id="komponen" style="resize:none;height:100px;" type="text" placeholder="Komponen">
                                    Kesesuaian Susunan TA Bagian Awal (cover, pengesahan, keterangan
                                    perusahaan, kata pengantar dan daftar isi) dengan Pedoman Tugas Akhir
                                </textarea>
                            </div>

                             <div class="my-1">
                                <label><b>Kategori Komponen</b></label>
                                <select name="kategori_komponen" class="width-100" id="kategori_komponen">
                                    <option value="0">-- Pilih Kategori Komponen --</option>
                                    <option value="1" selected>Ketua Penguji</option>
                                    <option value="2">Penguji Ahli</option>
                                </select>
                            </div>

                            <div class="my-1">
                                <label><b>Bobot</b></label>
                                <input class="width-100" id="bobot" type="text" value="5" placeholder="Bobot">
                            </div>


                            <div class="d-flex py-1 ">
                                <button type="submit" style="width: 150px;" class="btn btn-secondary btn-submit mx-1">Simpan</button>
                                <a style="width: 150px;" class="btn btn-danger btn-cancel mx-1 text-center" href="konfigurasi-nilai-sidang.php">Back</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>