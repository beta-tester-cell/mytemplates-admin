<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="pengelolaan-matakuliah.php" class="btn btn-link">
                        <span>Data Master</span>
                    </a>
                    <span class="fa fa-chevron-right py-1"></span>
                    <a href="form-ebook.php" class="btn btn-link">
                        <span>Upload E-book</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-tabs px-0">
            <!-- Nav pills -->
            <ul class="nav nav-pills" id="tabs">
                <li class="nav-item">
                    <a class="nav-link" id="tab1">
                        <div class="wizard-wrapper">
                            <div class="wizard-number"><i class="fa fa-plus"></i></div>
                            <div class="wizard-label">
                                <span class="wizard-title">E-book</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2">
                        <div class="wizard-wrapper">
                            <div class="wizard-number"><i class="fa fa-plus"></i></div>
                            <div class="wizard-label">
                                <span class="wizard-title">Penerbit</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab3">
                        <div class="wizard-wrapper">
                            <div class="wizard-number"><i class="fa fa-plus"></i></div>
                            <div class="wizard-label">
                                <span class="wizard-title">Penulis</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="container tab-pane active" id="tab1C">
                    <form>
                        <div class="form-inputs">
                            <label>Kode Buku</label>
                            <input type="text" name="kode_buku" placeholder="Kode Buku">
                        </div>
                        <div class="form-inputs">
                            <label>Judul Buku</label>
                            <input type="text" name="judul_buku" placeholder="Judul Buku">
                        </div>
                        <div class="form-inputs">
                            <label>Penulis</label>
                            <select name="penulis" id="penulis">
                                <option value="0">-- Pilih Penulis --</option>
                                <option value="1">Wayan Suyatna</option>
                                <option value="1">Wayan Suyatna</option>
                                <option value="1">Wayan Suyatna</option>
                                <option value="1">Wayan Suyatna</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" placeholder="Tahun Terbit">
                        </div>
                        <div class="form-inputs">
                            <label>Penerbit</label>
                            <select name="penerbit" id="penerbit">
                                <option value="0">-- Pilih Penerbit --</option>
                                <option value="1">Lentera Ilmu</option>
                                <option value="1">Lentera Ilmu</option>
                                <option value="1">Lentera Ilmu</option>
                                <option value="1">Lentera Ilmu</option>
                            </select>
                        </div>
                        <div class="d-flex flex-center">
                            <button type="submit" class="btn btn-secondary btn-submit mx-1">Save</button>
                            <button type="reset" class="btn btn-danger btn-cancel mx-1">Back</button>
                        </div>
                    </form>

                </div>
                <div class="container tab-pane" id="tab2C" style="height:40vh">
                    <form>
                        <div class="form-inputs">
                            <label>Kode Penerbit</label>
                            <input type="text" name="kode_penerbit" placeholder="Kode Penerbit">
                        </div>
                        <div class="form-inputs">
                            <label>Nama Penerbit</label>
                            <input type="text" name="nama_penerbit" placeholder="Nama Penerbit">
                        </div>
                        <div class="d-flex flex-center">
                            <button type="submit" class="btn btn-secondary btn-submit mx-1">Save</button>
                            <button type="reset" class="btn btn-danger btn-cancel mx-1">Back</button>
                        </div>
                    </form>
                </div>
                <div class="container tab-pane" id="tab3C" style="height:40vh">
                    <form>
                        <div class="form-inputs">
                            <label>Kode Penulis</label>
                            <input type="text" name="kode_penulis" placeholder="Kode Penulis">
                        </div>
                        <div class="form-inputs">
                            <label>Nama Penulis</label>
                            <input type="text" name="nama_penulis" placeholder="Nama Penulis">
                        </div>
                        <div class="d-flex flex-center">
                            <button type="submit" class="btn btn-secondary btn-submit mx-1">Save</button>
                            <button type="reset" class="btn btn-danger btn-cancel mx-1">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>