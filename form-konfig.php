<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-konfig.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW PRODUCT</span>
                    </a>
                    <a href="konfig-jurusan.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST PRODUCT CAMPUS</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Konfigurasi Program Kampus / Cabang</h6>
                </div>
                <div class="container">
                    <form>
                        <div class="form-inputs">
                            <label for="kampus">Kampus</label>
                            <input class="width-100" type="text" list="kampus" placeholder="Select or type for suggest" />

                            <datalist id="kampus">

                                <option value="PLJ Kramat Raya">

                                <option value="PLJ Pasar Minggu">

                                <option value="PLJ Bekasi">

                                <option value="PLJ Jakarta Timur">

                                <option value="PLB Karawang">

                                <option value="PLB Bandung">

                                <option value="PLB Tasikmalaya">

                            </datalist>
                        </div>
                        <div class="form-inputs">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan">
                                <option value="0">-- Pilih Jurusan --</option>
                                <option value="manajemen-informatika">Manajemen Informatika</option>
                                <option value="administrasi-bisnis">Administrasi Bisnis</option>
                                <option value="hubungan-masyarakat">Hubungan Masyarakat</option>
                                <option value="komputer-akuntansi">Komputer Akuntansi</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label for="TA">Tahun Akademik</label>
                            <input type="text" name="TA" id="ID" placeholder="Tahun Akademik">
                        </div>
                        <div class="form-inputs">
                            <label for="harga1">Harga Jual Tahun 1</label>
                            <input type="number" name="harga1" id="harga1">
                        </div>
                        <div class="form-inputs">
                            <label for="harga2">Harga Jual Tahun 2</label>
                            <input type="number" name="harga2" id="harga2">
                        </div>
                        <div class="form-inputs">
                            <label for="harga3">Harga Jual Tahun 3</label>
                            <input type="number" name="harga3" id="harga3">
                        </div>
                        <div class="form-inputs">
                            <label for="harga4">Harga Jual Tahun 4</label>
                            <input type="number" name="harga4" id="harga4">
                        </div>
                        <div class="d-flex flex-center py-1">

                            <button type="submit" class="btn btn-secondary btn-submit mx-1">Save</button>

                            <button type="reset" class="btn btn-danger btn-cancel mx-1">Cancel</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>