<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <a href="#">Keuangan Cabang</a>
        <a href="#">Report</a>
        <a href="registresi-mahasiswa.php">Registrasi Mahasiswa</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Cetak Registrasi Mahasiswa</h6>
                </div>
                <div class="mb-2">
                    <div class="form-inputs">
                        <label for="tahunangkatan">Tahun Angkatan</label>
                        <select name="tahunangkatan" id="tahunangkatan">
                            <option value="0">-- Tahun Angkatan --</option>
                            <?php
                            for ($i = 2006; $i <= 2021; $i++) {
                                echo '<option value="0">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>
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
                        <label for="tingkat">Tingkat</label>
                        <select name="tingkat" id="tingkat">
                            <option value="0">-- Tingkat --</option>
                            <option value="1">Tingkat 1</option>
                            <option value="2">Tingkat 2</option>
                            <option value="3">Tingkat 3</option>
                            <option value="4">S1</option>
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


                    <div class="d-flex flex-center">
                        <a href="cetak-daftar-mahasiswa.php" class="btn btn-submit btn-secondary text-center" target="_blank">Cetak Daftar Mahasiswa Registrasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>