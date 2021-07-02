<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Dosen</a>
        <a href="jadwal-perkuliahan-dosen.php">Jadwal Perkuliahan</a>
        <a href="kegiatan-perkuliahan.php">Kegiatan Perkuliahan</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <h6 style="font-size:22px;">Basis Data &rarr; IK_REGULER_01</h6>
            </div>
        </div>

        <div class="py-1 grid-custom-view grid-gap-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size: 20px;">List Pertemuan</h6>
                </div>
                <div class="form grid-1">
                    <h6 style="font-size: 18px;">Kegiatan Perkuliahan</h6>
                    <ul class="menu-widget">

                        <!-- terdapat 3 class btn yang digunakan pada widget ini
                        1. btn-secondary : menyatakan jadwal perkuliahan yang telah berlalu
                        2. btn-primary : menyatakan jadwal perkuliahan yang saat ini sedang berlangsung
                        3. btn-medium : menyatakan jadwal perkuliahan yang akan datang -->

                        <li class="active">
                            <a href="kegiatan-perkuliahan.php">
                                Pertemuan Ke-1 <br> (15 Juni 2021)
                            </a>
                        </li>
                        <li>
                            <a href="kegiatan-perkuliahan.php">
                                Pertemuan Ke-2 <br> (18 Juni 2021)
                            </a>
                        </li>
                        <li style="background-color: #d9d9d9;">
                            <a href="#">
                                Pertemuan Ke-3 <br> (24 Juni 2021)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <font><span style="font-size: 20px;"><b>Pertemuan Ke-2</b></span></font><br>
                    <span class="subtitle-text">18 Juni 2021, 08.00-09.45 [Online]</span>
                </div>

                <div class="form">
                    <form>
                        <div class="card card-border">
                            <div class="my-0 card-header">
                                <h6 style="font-size:18px;">Link Materi Ajar</h6>
                            </div>
                            <div class="my-0 card-body">

                                <div class="my-1">
                                    <label><b>Pilihan Soal</b></label>
                                    <select class="width-100" name="piliah_soal" id="piliah_soal">
                                        <option value="">-- Pilihan Soal --</option>
                                        <option value="Formatif">Formatif</option>
                                        <option value="Tugas">Tugas</option>
                                    </select>
                                </div>

                                <div class="my-1">
                                    <label><b>Judul</b></label>
                                    <input class="width-100" type="text" placeholder="Judul">
                                </div>

                                <div class="my-1">
                                    <label><b>Deskripsi </b></label>
                                    <textarea class="width-100" id="mytextarea">Hello, World!</textarea>
                                </div>

                                <div class=" my-1">
                                    <label><b>Pilih File Ajar</b></label>
                                    <input class="width-100" type="file">
                                </div>


                                <div class="input-group my-1">
                                    <div class="input-group-text"><b>Tanggal Awal</b></div>
                                    <div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>
                                </div>

                                <div class="input-group my-1">
                                    <div class="input-group-text"><b>Tanggal Akhir</b></div>
                                    <div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>
                                </div>

                                <div class="d-flex">
                                    <button type="submit" style="width: 150px;" class="btn btn-secondary btn-submit mx-1">Simpan</button>
                                    <a style="width: 150px;" class="btn btn-danger btn-cancel mx-1 text-center" href="kegiatan-perkuliahan.php">Back</a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php') ?>