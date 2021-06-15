<?php include('header.php') ?>
<div class="content">
    <div class="container" style="height: 80vh;">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="pengelolaan-matakuliah.php" class="btn btn-link">
                        <span>Data Master</span>
                    </a>
                    <span class="fa fa-chevron-right py-1"></span>
                    <a href="form-matakuliah.php" class="btn btn-link">
                        <span>Tambah Matakuliah</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">

            <div class="card">
                <div class="card-header">
                    <h6>Form Master Tambah Matakuliah</h6>
                </div>
                <form>
                    <div class="form-inputs">
                        <label>ID</label>
                        <input type="text" name="id_matakuliah" placeholder="ID Matakuliah">
                    </div>
                    <div class="form-inputs">
                        <label>Matakuliah</label>
                        <input type="text" name="matakuliah" placeholder="Nama Matakuliah">
                    </div>
                    <div class="form-inputs">
                        <label>SKS</label>
                        <input type="text" name="sks_matakuliah" placeholder="SKS Matakuliah">
                    </div>
                    <div class="form-inputs">
                        <label>Total Sesi</label>
                        <input type="text" name="total_sesi" placeholder="Total Sesi">
                    </div>
                    <div class="form-inputs">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan">
                            <option value="0">-- Pilih Jurusan --</option>
                            <option value="1">All</option>
                            <option value="2">Manajemen Informatika</option>
                            <option value="3">Administrasi Bisnis</option>
                            <option value="4">Komputerisasi Akuntansi</option>
                            <option value="5">Hubungan Masyarakat</option>
                        </select>
                    </div>
                    <div class="d-flex flex-center py-1">

                        <button type="submit" class="btn btn-secondary btn-submit mx-1">Submit</button>

                        <button type="reset" class="btn btn-danger btn-cancel mx-1">Cancel</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>