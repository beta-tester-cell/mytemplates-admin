<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-jurusan.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW PRODUK</span>
                    </a>
                    <a href="pengelolaan-jurusan.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST PRODUK</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>
                        Pengelolaan Produk
                    </h6>
                </div>
                <div class="container">
                    <form>
                        <div class="form-inputs">
                            <label>Direktorat</label>
                            <select name="direktorat" id="direktorat">
                                <option value="PLJ">Politeknik LP3I Jakarta</option>
                                <option value="PLB">Politeknik LP3I Bandung</option>
                                <option value="PLM">Politeknik LP3I Medan</option>
                                <option value="polinas">Polinas</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Kode Produk</label>
                            <input type="text" name="kode-produk" placeholder="Kode Produk">
                        </div>
                        <div class="form-inputs">
                            <label>Nama Produk</label>
                            <input type="text" name="nama-produk" placeholder="Nama Produk">
                        </div>
                        <div class="form-inputs">
                            <label>Program Studi</label>
                            <input type="text" name="program-studi" placeholder="Program Studi">
                        </div>
                        <div class="form-inputs">
                            <label>Kode Prodi</label>
                            <input type="text" name="kode-prodi" placeholder="Kode Prodi">
                        </div>
                        <div class="form-inputs">
                            <label>Jenjang</label>
                            <select name="jenjang" id="jenjang">
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Pengelolaan Biaya Produk</h6>
                </div>
                <div class="container">
                    <form>
                        <div class="form-inputs">
                            <label>Harga Jual Tahun 1</label>
                            <input type="number" name="harga_tahun_1">
                        </div>
                        <div class="form-inputs">
                            <label>Harga Jual Tahun 2</label>
                            <input type="number" name="harga_tahun_2">
                        </div>
                        <div class="form-inputs">
                            <label>Harga Jual Tahun 3</label>
                            <input type="number" name="harga_tahun_3">
                        </div>
                        <div class="form-inputs">
                            <label>Harga Jual Tahun 4</label>
                            <input type="number" name="harga_tahun_4">
                        </div>
                        <div class="form-inputs">
                            <label>Total</label>
                            <input type="number" name="Total">
                        </div>
                        <div class="d-flex flex-center py-1">
                            <button class="btn btn-secondary btn-submit mx-1" type="submit">Save</button>
                            <button class="btn btn-danger btn-cancel mx-1" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>