<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-kampus.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> ADD A NEW UNIT</span>
                    </a>
                    <a href="pengelolaan-kampus.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST CAMPUS</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Form Tambah Data Baru Kampus</h6>
                </div>
                <div class="container">
                    <form>
                        <div class="form-inputs">
                            <label>Kode Unit</label>
                            <input type="text" name="kode_unit" id="kode_unit" placeholder="Kode Unit">
                        </div>
                        <div class="form-inputs">
                            <label>Nama Unit</label>
                            <input type="text" name="nama_unit" id="nama_unit" placeholder="Nama Unit">
                        </div>
                        <div class="form-inputs">
                            <label>Induk Unit</label>
                            <select name="induk_unit" id="induk_unit">
                                <option value="0">-- Pilih Induk Unit --</option>
                                <option value="1000">Head Office</option>
                                <option value="2000">Direktorat PLJ</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Level Unit</label>
                            <select name="level_unit" id="level_unit">
                                <option value="0">-- Pilih Level Unit --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Status Aktif</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="form-inputs">
                            <label>Status Unit</label>
                            <select name="status_unit" id="status_unit">
                                <option value="0">-- Pilih Status Unit --</option>
                                <option value="aktif">Aktif</option>
                                <option value="non-aktif">Non Aktif</option>
                                <option value="peralihan">Peralihan</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label>Jenis Unit</label>
                            <select name="jenis_unit" id="jenis_unit">
                                <option value="0">-- Pilih jenis Unit --</option>
                                <option value="milik">Milik</option>
                                <option value="mitra">Mitra</option>
                                <option value="kerjasama">Kerjasama</option>
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

</div>
<?php include('footer.php') ?>