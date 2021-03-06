<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Mahasiswa</a>
        <a href="#">Perkuliahan</a>
        <a href="jadual-kuliah.php">Jadwal Kuliah</a>
        <a href="jadual-detail-pertemuan-kuliah.php">Pengiriman Pengerjaan Tugas</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <h6>Basis Data &rarr; IK_REGuler_01</h6>
            </div>
        </div>

        <div class="py-1 grid-custom-view grid-gap-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size: 20px;">Info Pertemuan</h6>
                </div>
                <div class="form grid-1">
                    <div class="my-1">
                        <input class="width-100" type="text" list="tanggal-pertemuan" value="Pertemuan Ke1 - 16 Juni 2021" placeholder="Pilih Tanggal Pertemuan" />
                        <datalist id="tanggal-pertemuan">
                            <option value="Pertemuan Ke1 - 16 Juni 2021">
                            <option value="Pertemuan Ke2 - 20 Juni 2021">
                            <option value="Pertemuan Ke3 - 22 Juni 2021">
                            <option value="Pertemuan Ke4 - 23 Juni 2021">
                            <option value="Pertemuan Ke5 - 25 Juni 2021">
                        </datalist>
                    </div>
                    <div class="my-1 grid-1">
                        <font><span style="font-size: 18px;">Kehadiran :</span><span class="text-success"> Hadir </span> [08.01]</font>
                        <span style="font-size: 18px;">Aktifitas :</span>
                        <a href="#" class="text-danger my-0">
                            <span class="menu-icon"><i class="fa fa-book"></i></span>
                            <b>&nbsp; Tugas 1 #Rosihan</b>
                        </a>
                    </div>
                    <div class="my-1">
                        <span style="font-size: 18px;">Group Discussion</span>
                        <p style="font-size: 18px;">None</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <font><span style="font-size: 18px;"><b>Pertemuan Ke 1</b></span> [Online] durasi <span style="font-size: 18px;" class="text-danger">08.00-09.45</span></font>
                </div>

                <div class="form">
                    <div class="card-body">
                        <div class="grid-1 grid-text">
                            <h6 style="font-size: 18px;">Nama Dosen :</h6>
                            <p>Masria, M.Kom</p>
                        </div>
                        <div class="my-1 grid-1 grid-text">
                            <h6 style="font-size: 18px;">Pokok Bahasan :</h6>
                            <p>Pengenalan Dasar</p>
                        </div>
                        <div class="my-1 grid-1 grid-text">
                            <h6 style="font-size: 18px;">Sub Pokok Bahasan :</h6>
                            <p>Mengenai Struktur Database</p>
                        </div>
                        <div class="my-1 grid-1 grid-text">
                            <h6 style="font-size: 18px;">Ruang :</h6>
                            <p>LMS-Online</p>
                        </div>
                        <div class="my-1 grid-1 ">
                            <h6 style="font-size: 18px;">Materi Ajar :</h6>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-link"></i></span>
                                <b>&nbsp;link Pembelajaran secara Online dengan Video Conferance</b>
                            </a>
                            <span class="text-mature"><i>Link ini digunakan untuk mengikuti pembelajaran online dengan menggunakan Aplikasi Google Meet</i></span>
                            <hr>
                            <a href="#" class="text-danger my-0">
                                <span class="menu-icon"><i class="fa fa-book"></i></span>
                                <b>&nbsp; Pertemuan 1</b>
                            </a>
                        </div>
                        <div class="my-1 grid-1">
                            <h6 style="font-size: 18px;">Tugas & Formatif :</h6>
                            <div class="grid-2 grid-gap-1 py-1">
                                <a href="#" class="text-danger">
                                    <span class="menu-icon"><i class="fa fa-file-text"></i></span>
                                    <b>&nbsp;Latihan-1</b>
                                </a>
                                <font>Batas Upload Tugas :<span class="text-success"> 2021-07-16 23:59 </span></font>
                            </div>
                        </div>

                        <div class="form-inputs">
                            <button href="#" disabled class="btn btn-secondary mx-1 ">Upload Tugas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<?php include('footer.php') ?>