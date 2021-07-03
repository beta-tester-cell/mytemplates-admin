<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <?php if (!empty($_GET['bread'])) : ?>
            <a href="#">Akademik Pusat</a>
            <?php else : ?>
                <a href="#">Akademik Cabang</a>
            <?php endif; ?>
            <a href="eub-jadwal.php">Jadwal EUB</a>
            <a href="form-tambah-jadwal-eub.php">Input Jadwal EUB</a>
        </div>
    </div>
    <div class="content">
        <div class="container">


           <div class="py-1">
            <div class="card">
                <a href='eub-jadwal.php' class="btn btn-link btn-danger px-20">Back</a>
            </div>
        </div>


        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Input Jadwal EUB</h6>
                </div>

                <div class="py-1">


                    <div class="form-inputs">
                        <label><b>Tahun Akademik</b></label>
                        <select name="Tahun Akademik" id="Tahun Akademik">
                            <option value="0">-- Pilih Tahun Akademik --</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2020/2021">2020/2021</option>
                        </select>
                    </div>
                    <div class="form-inputs">
                        <label><b>Periode</b></label>
                        <select name="Periode" id="Periode">
                            <option value="0">-- Pilih Periode --</option>
                            <option value="20211">20211 (Ganjil)</option>
                            <option value="20211">20211 (Ganjil)</option>
                        </select>
                    </div>


                    <div class="form-inputs">
                        <label><b>Tanggal Pelaksanaan</b></label>
                        <div class="form grid-2 grid-gap-1">
                            <div class="input-group">
                                <div class="input-group-area"><input type="date" class="width-100" id="tanggal_awal"></div>
                                <div class="input-group-icon">TO</div>
                                <div class="input-group-area"><input type="date" class="width-100" id="tanggal_akhir"></div>
                            </div><br>
                            <button class="btn btn-primary btn-submit" type="submit" id="button-view">Simpan</button>
                        </div>
                    </div>


                    <label class="text-danger">Jadwal EUB Ganjil 20201 : 2021-07-01 s/d 2021-09-30 ( Sesuai Kalender Akademik )</label>




                </div>

            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>