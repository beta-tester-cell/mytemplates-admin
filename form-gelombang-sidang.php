<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="#">Gelombang</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Input Konfigurasi Gelombang Sidang</h6>
                </div>
                <form>
                    <div class="grid-gap-2 py-1">
                        <div class="input-data">
                            <div class="form-inputs">
                                <label><b>Periode</b></label>
                                <input class="width-100" id="periode" type="text" placeholder="Periode" value="21">
                            </div>

                            <div class="form-inputs">
                                <label><b>Ploting Bimbingan</b></label>
                                <div class="form grid-2 grid-gap-1">
                                    <div class="input-group">
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_awal_ploting"></div>
                                        <div class="input-group-icon">TO</div>
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_akhir_ploting"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-inputs">
                                <label><b>Pendaftaran Sidang</b></label>
                                <div class="form grid-2 grid-gap-1">
                                    <div class="input-group">
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_awal_pendaftaran"></div>
                                        <div class="input-group-icon">TO</div>
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_akhir_pendaftaran"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-inputs">
                                <label><b>Revisi</b></label>
                                <div class="form grid-2 grid-gap-1">
                                    <div class="input-group">
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_awal_revisi"></div>
                                        <div class="input-group-icon">TO</div>
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_akhir_revisi"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-inputs">
                                <label><b>Sidang Ulang</b></label>
                                <div class="form grid-2 grid-gap-1">
                                    <div class="input-group">
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_awal_sidang"></div>
                                        <div class="input-group-icon">TO</div>
                                        <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_akhir_sidang"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-inputs">
                                <label><b>Jenis Sidang</b></label>
                                <select name="jenis_sidang" id="jenis_sidang">
                                    <option value="0">-- Pilih Jenis Sidang --</option>
                                    <option value="1" selected>Tugas Akhir (TA)</option>
                                    <option value="2">Tugas Akhir Susulan</option>
                                </select>
                            </div>

                            <div class="form-inputs">
                                <label><b>Set As</b></label>
                                <select name="set_as_status" id="set_as_status">
                                    <option value="0">-- Pilih Set As --</option>
                                    <option value="1" selected>Active</option>
                                    <option value="2">InActive</option>
                                </select>
                            </div>

                            <div class="d-flex py-1 ">
                                <button type="submit" style="width: 150px;" class="btn btn-secondary btn-submit mx-1">Simpan</button>
                                <a style="width: 150px;" class="btn btn-danger btn-cancel mx-1 text-center" href="konfigurasi-gelombang-sidang.php">Back</a>
                            </div>

                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>