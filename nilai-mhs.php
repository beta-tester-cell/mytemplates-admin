<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <h6 style="font-size:22px;">Nama Mata Kuliah &rarr; Kode Kelas</h6>
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
                        <li class="active"><a href="#">Pertemuan Ke-1 <br> (15 Juni 2021)</a></li>
                        <li><a href="#">Pertemuan Ke-2 <br> (18 Juni 2021)</a></li>
                        <li><a href="#">Pertemuan Ke-3 <br> (24 Juni 2021)</a></li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size: 20px;">List Aktifitas Mahasiswa</h6>
                </div>

                <!-- table ini tampil dengan menyesuaikan dari isian tugas atau formatif, jika dosen mengaktfikan fitur tugas maka hanya table nilai tugas yang nampil atau jika dosen mengaktifkan fitur formatif maka hanya table formatif yang nampil begitu pun jika keduanya diaktifkan, maka kedua tabel ditampilkan -->

                <div class="table-responsive">
                    <span class="text-mature">
                        <h6 style="font-size: 15px;"><i>Form Nilai - Tugas</i></h6>
                    </span>
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Judul Aktifitas</th>
                                <th class="align-center">File</th>
                                <th class="align-center">Tgl Upload</th>
                                <th class="align-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>122200</td>
                                <td>Rosihan Arbi Said</td>
                                <td>Tugas 1</td>
                                <td class="align-center">
                                    <a href="#">
                                        <span class="menu-icon"><i class="fa fa-download"></i></span>
                                    </a>
                                </td>
                                <td class="align-center">2021-01-07 17:00</td>
                                <td class="align-center">
                                    <input type="number" name="nilai" id="nilai" class="align-center" min="0" max="100" style="width:70px;">
                                </td>
                            </tr>
                            <tr>
                                <td>122209</td>
                                <td>Irfan Zadin</td>
                                <td>Tugas 1</td>
                                <td class="align-center">
                                    <a href="#">
                                        <span class="menu-icon"><i class="fa fa-download"></i></span>
                                    </a>
                                </td>
                                <td class="align-center">2021-01-07 18:12</td>
                                <td class="align-center">
                                    <input type="number" name="nilai" id="nilai" class="align-center" min="0" max="100" style="width:70px;">
                                </td>
                            </tr>
                            <tr>
                                <td>122216</td>
                                <td>Khaerul Mustafa</td>
                                <td>Tugas 1</td>
                                <td class="align-center">
                                    <a href="#">
                                        <span class="menu-icon"><i class="fa fa-download"></i></span>
                                    </a>
                                </td>
                                <td class="align-center">2021-01-07 14:22</td>
                                <td class="align-center">
                                    <input type="number" name="nilai" id="nilai" class="align-center" min="0" max="100" style="width:70px;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="my-2 table-responsive">
                    <span class="text-mature">
                        <h6 style="font-size: 15px;"><i>Form Nilai - Formatif</i></h6>
                    </span>

                    <!-- == pesan yang nampil jika tidak ada tugas formatif -->
                    <!-- <div align="center">
                        <h6 style="font-size: 12px;">Tidak ada tugas formatif</h6>
                    </div> -->
                    <!-- == End -->

                    <table class="table-list">
                        <thead>
                            <tr>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Judul Aktifitas</th>
                                <th class="align-center">File</th>
                                <th class="align-center">Tgl Upload</th>
                                <th class="align-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>122200</td>
                                <td>Rosihan Arbi Said</td>
                                <td>Tugas 1</td>
                                <td class="align-center">
                                    <a href="#">
                                        <span class="menu-icon"><i class="fa fa-download"></i></span>
                                    </a>
                                </td>
                                <td class="align-center">2021-01-07 17:00</td>
                                <td class="align-center">
                                    <input type="number" name="nilai" id="nilai" class="align-center" min="0" max="100" style="width:70px;">
                                </td>
                            </tr>
                            <tr>
                                <td>122209</td>
                                <td>Irfan Zadin</td>
                                <td>Tugas 1</td>
                                <td class="align-center">
                                    <a href="#">
                                        <span class="menu-icon"><i class="fa fa-download"></i></span>
                                    </a>
                                </td>
                                <td class="align-center">2021-01-07 18:12</td>
                                <td class="align-center">
                                    <input type="number" name="nilai" id="nilai" class="align-center" min="0" max="100" style="width:70px;">
                                </td>
                            </tr>
                            <tr>
                                <td>122216</td>
                                <td>Khaerul Mustafa</td>
                                <td>Tugas 1</td>
                                <td class="align-center">
                                    <a href="#">
                                        <span class="menu-icon"><i class="fa fa-download"></i></span>
                                    </a>
                                </td>
                                <td class="align-center">2021-01-07 14:22</td>
                                <td class="align-center">
                                    <input type="number" name="nilai" id="nilai" class="align-center" min="0" max="100" style="width:70px;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>