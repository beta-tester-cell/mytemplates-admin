<?php include('header.php') ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($id == '0290091') {
        $nama = 'Masria';
    } else {
        $nama = "Test Nama Dosen";
    }
} else {
    $id = "";
}
?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="kelola-ploating-dosen.php">Kelola Ploating Dosen</a>
        <a href="detail-ploating-dosen.php">Detail Ploating Dosen</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1 grid-custom-view grid-gap-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size: 20px;">Personal Data Dosen</h6>
                </div>
                <div class="d-flex flex-center">
                    <img src="theme/img/default-user.jpg" alt="dp-dosen" class="img-circle-dp">
                </div>
                <div class="my-1 card-name-wrapper text-center">
                    <h6 style="font-size: 20px;"><?php echo $nama; ?></h6>
                    <span class="text-mature"><strong>NIDN : 0110090</strong></span><br>
                    <span class="text-mature">Type : A</span>
                </div>
                <div class="my-2">
                    <div class="card-header d-flex flex-space-between">
                        <h6 style="font-size: 20px;">Status</h6>
                    </div>
                    <div class="detail-wrapper my-0">
                        <div class="grid-1">
                            <span class="text-mature">Jabatan Fungsional :</span>
                            <span><b>Asiten Ahli</b></span>
                        </div>
                        <div class="grid-1 my-0">
                            <span class="text-mature">Sertifikasi :</span>
                            <span><b>Tersertifikasi</b></span>
                        </div>
                        <div class="grid-1 my-0">
                            <span class="text-mature">Nilai KUM :</span>
                            <span><b>300</b></span>
                        </div>
                        <div class="grid-1 my-0">
                            <span class="text-mature">Home Base :</span>
                            <span><b>Kramat Raya</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6 style="font-size: 20px;">Tahun Akademik 2020/2021</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="card-header form-inputs">
                    <div class="form grid-3 grid-gap-2 py-1">
                        <div class="input-group mx-1">
                            <label class="checkbox">
                                <input type="checkbox" class="checked-all" id="check-all"> Check All<br>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="d-flex flex-center">
                            <button class="btn btn-secondary btn-submit mx-1" style="width: 90px;" id="button-approve">Approve</button>
                            <span class="text-mature">Or</span>
                            <button class="btn btn-secondary btn-submit mx-1" style="width: 90px;" id="button-moveto">Move To</button>
                        </div>
                        <div class="input-group">
                            <select class="width-200" name="kampus" id="kampus">
                                <option value="">Pilih Kampus</option>
                                <option value="unit_id">Politeknik LP3I Jakarta</option>
                                <option value="3">Politeknik LP3I Bandung</option>
                                <option value="5">Politeknik LP3I Medan</option>
                                <option value="7">Politeknik LP3I Makasar</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-list">
                            <thead>
                                <tr>
                                    <th>Kampus</th>
                                    <th class="dt-left">Jurusan</th>
                                    <th>Kelas</th>
                                    <th class="dt-left">Matakuliah</th>
                                    <th>SKS</th>
                                    <th>Smt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="pilih-ploating" value="1"> Kramat Raya</td>
                                    <td>[23312] Manajemen Informatika</td>
                                    <td class="dt-center">00012</td>
                                    <td>Basis Data</td>
                                    <td class="dt-center">4</td>
                                    <td class="dt-center">1</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="pilih-ploating" value="1"> Kramat Raya</td>
                                    <td>[23312] Manajemen Informatika</td>
                                    <td class="dt-center">02023</td>
                                    <td>SQL & PHP</td>
                                    <td class="dt-center">4</td>
                                    <td class="dt-center">3</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="pilih-ploating" value="1"> Kramat Raya</td>
                                    <td>[23312] Manajemen Informatika</td>
                                    <td class="dt-center">10012</td>
                                    <td>Basis Data</td>
                                    <td class="dt-center">4</td>
                                    <td class="dt-center">1</td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" name="pilih-ploating" value="1"> Kramat Raya</td>
                                    <td>[23312] Bisnis Administrasi</td>
                                    <td class="dt-center">00012</td>
                                    <td>Aplikasi Komputer</td>
                                    <td class="dt-center">2</td>
                                    <td class="dt-center">1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="my-2 d-flex flex-center">
                    <!-- perhitungan sks berdasarka data yang di centang pada checkbox -->
                    <h6 style="font-size:20px;">Total SKS : 14</h6>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include('footer-datatable.php') ?>