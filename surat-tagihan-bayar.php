<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Report</a>
        <a href="surat-tagihan-bayar.php">Surat Tagihan Pembayaran</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Surat Tagihan Pembayaran Mahasiswa</h6>
                </div>
                <div class="mb-2">
                    <div class="form-inputs">
                        <label for="tahunajaran">Tahun Ajaran</label>
                        <select name="tahunajaran" id="tahunajaran">
                            <option value="0">-- Tahun Ajaran --</option>
                            <option value="1">2010/2011</option>
                            <option value="2">2011/2012</option>
                            <option value="3">2012/2013</option>
                            <option value="4">2013/2014</option>
                            <option value="5">2014/2015</option>
                            <option value="6">2015/2016</option>
                            <option value="7">2016/2017</option>
                            <option value="8">2017/2018</option>
                            <option value="9">2018/2019</option>
                            <option value="10">2019/2020</option>
                            <option value="11">2020/2021</option>
                            <option value="12">2021/2022</option>
                        </select>
                    </div>

                    <div class="form-inputs">
                        <label for="bulan">Bulan</label>
                        <select name="bulan" id="bulan">
                            <option value="0">-- Bulan --</option>
                            <?php
                            $months = array(1 => 'Januari.', 2 => 'Februari.', 3 => 'Maret.', 4 => 'April.', 5 => 'Mei', 6 => 'Juni.', 7 => 'Juli.', 8 => 'Agustus.', 9 => 'September.', 10 => 'Oktober.', 11 => 'November.', 12 => 'Desember.');
                            $transposed = array_slice($months, date('n'), 12, true) + array_slice($months, 0, date('n'), true);
                            $last8 = array_reverse(array_slice($transposed, -8, 12, true), true);

                            foreach ($months as $num => $name) {
                                printf('<option value="%u">%s</option>', $num, $name);
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-inputs">
                        <label for="konsentrasi">Konsentrasi</label>
                        <select name="konsentrasi" id="konsentrasi">
                            <option value="0">-- Pilih Konsentrasi --</option>
                            <option value="1">Administrasi Bisnis</option>
                            <option value="2">Sekretaris</option>
                            <option value="3">Komputerisasi Akuntansi</option>
                            <option value="4">Informatika Komputer</option>
                            <option value="5">Administrasi Perkantoran</option>
                            <option value="6">Hubungan Masyarakat</option>
                            <option value="7">Multimedia</option>
                            <option value="8">Keuangan Perbankan Syariah</option>
                            <option value="9">Administrasi Bisnis Otomotif</option>
                            <option value="10">Administrasi Bisnis Internasional</option>
                            <option value="11">Multimedia dan Komunikasi Visual</option>
                            <option value="12">Manajemen Informatika</option>
                            <option value="13">Teknik Otomotif</option>
                            <option value="14">Teknik Informatika</option>
                        </select>
                    </div>
                    <div class="form-inputs">
                        <label for="kelas">Kelas</label>
                        <select name="kelas" id="kelas">
                            <option value="0">-- Kelas --</option>
                            <option value="1">AB-20-I-1</option>
                            <option value="2">AB-M-140</option>
                            <option value="3">AB-M-142</option>
                            <option value="3">B001-01</option>
                        </select>
                    </div>
                    <div class="form-inputs">
                        <label for="kplasurat">Kepala Surat</label>
                        <textarea name="kplasurat" id="kplasurat" rows="3">Teriring salam dan doa semoga Bapak/Ibu selalu senantiasa berada dalam lindungan Tuhan yang Maha Kuasa dan diberikan kesehatan dalam menjalankan aktifitas sehari-hari, Amin.</textarea>
                    </div>
                    <div class="form-inputs">
                        <label for="isisurat">Isi Surat</label>
                        <div>
                            <textarea class="width-100" name="isisurat" id="isisurat" rows="3">Pembayaran kuliah dapat dibayarkan dengan cara transfer... (isi sesuai dengan kebutuhan)</textarea>
                            <span class="text-danger"><b>Isi surat akan tersimpan otomatis sesuai dengan adanya perubahan</b></span>
                        </div>
                    </div>

                    <div class="d-flex flex-center">
                        <a href="#" class="btn btn-submit btn-secondary text-center">Cetak Surat Tagihan Mahasiswa</a>
                    </div>
                </div>

                <div class="my-1">
                    <button class="btn btn-link btn-primary">Tandai Semua</button>
                    <button class="btn btn-link btn-danger">Hilangkan </button>
                </div>

                <div class="my-1">
                    <div class="form-inputs">
                        <span class="text-primary"><b>DAFTAR MAHASISWA KONSENTRASI:</b></span>
                        <span><b>ADMINISTRASI BISNIS</b></span>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="posting">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>1</td>
                                <td>200111020002</td>
                                <td>Regina Handayani Savitri</td>
                                <td></td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="posting">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>2</td>
                                <td>200111020006</td>
                                <td>Zufar Ramadhan Putra Hardyan</td>
                                <td></td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td>
                                    <label class="checkbox">
                                        <input type="checkbox" value="posting">
                                        <span class="checkmark"></span>
                                    </label>
                                </td>
                                <td>3</td>
                                <td>200111020010</td>
                                <td>Eva Dorince Sipora Marisan</td>
                                <td></td>
                                <td>--</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>