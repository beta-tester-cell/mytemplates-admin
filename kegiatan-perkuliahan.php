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
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size: 20px;">Pertemuan Ke-2</h6>
                    <span class="subtitle-text">18 Juni 2021, 08.00-09.45 [Online]</span>
                </div>

                <div class="form grid-custom-card-flip">
                    <div class="card-body">
                        <div class="grid-1">
                            <h6 style="font-size: 18px;">Pokok Bahasan :</h6>
                            <p>Pengenalan Dasar</p>
                        </div>
                        <div class="my-1 grid-1">
                            <h6 style="font-size: 18px;">Sub Pokok Bahasan :</h6>
                            <p>Mengenai Struktur Database</p>
                        </div>
                        <div class="my-1 grid-1">
                            <h6 style="font-size: 18px;">Materi Ajar :</h6>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-link"></i></span>
                                <b>&nbsp;link Pembelajaran secara Online dengan Video Conferance</b>
                            </a>
                            <span class="text-mature"><i>Link ini digunakan untuk mengikuti pembelajaran online dengan menggunakan Aplikasi Google Meet</i></span>
                            <hr>
                            <a href="#" class="text-danger my-0">
                                <span class="menu-icon"><i class="fa fa-book"></i></span>
                                <b>&nbsp;Materi Pertemuan 2</b>
                            </a>
                        </div>
                        <div class="my-1 grid-1">
                            <h6 style="font-size: 18px;">Tugas & Formatif :</h6>
                            <a href="#" class="text-danger">
                                <span class="menu-icon"><i class="fa fa-file-text"></i></span>
                                <b>&nbsp;Tugas - Basis Data</b>
                            </a>
                        </div>

                        <div class="d-flex flex-center py-1">
                            <a href="kegiatan-perkuliahan-old.php" class="align-center btn-status btn-secondary btn-submit mx-1 width-100">Mulai</a>
                            <a href="detail-lkm-dosen.php" class="align-center btn-status btn-medium btn-submit mx-1 width-100">Verifikasi Kehadiran Mhs</a>
                        </div>
                    </div>

                    <div class="card card-border grid-1">
                        <div class="my-0 card-header">
                            <h6 style="font-size:18px;">Aktivitas Perkuliahan</h6>
                            <div class="my-0">
                                <span class="menu-icon"><i class="fa fa-upload"></i></span>
                                <a href="upload-materi.php">&nbsp;Upload Materi</a>
                            </div>
                            <div class="my-0">
                                <span class="menu-icon"><i class="fa fa-external-link"></i></span>
                                <a href="embed-materi.php">&nbsp;Embed Materi</a>
                            </div>
                            <div class="my-0">
                                <span class="menu-icon"><i class="fa fa-external-link"></i></span>
                                <a href="link-materi.php">&nbsp;Link Materi</a>
                            </div>
                        </div>
                        <div class="my-0 card-header">
                            <h6 style="font-size:18px;">Aktivitas Latihan</h6>
                            <div class="my-0">
                                <span class="menu-icon"><i class="fa fa-upload"></i></span>
                                <a href="upload-soal.php">&nbsp;Upload Tugas/Formatif</a>
                            </div>
                            <div class="my-0">
                                <span class="menu-icon"><i class="fa fa-plus"></i></span>
                                <a href="pembuatan-soal.php">&nbsp;Buat Tugas/Formatif</a>
                            </div>
                            <div class="my-0">
                                <span class="menu-icon"><i class="fa fa-comments"></i></span>
                                <a href="message.php">&nbsp;Group Discussion</a>
                            </div>
                        </div>
                        <div class="my-0 card-header">
                            <h6 style="font-size:18px;">&nbsp;Lokasi Mengajar</h6>
                            <span class="text-mature"><i>Jl. Muara Bahari, Kel. Sunter Agung, Kec. Tanjung Priok, Kota Jakarta Utara </i></span>
                            <div class="my-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15927.243782077974!2d98.67106109999999!3d3.6306034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1623954838375!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>