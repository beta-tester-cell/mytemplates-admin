<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Mahasiswa</a>
        <a href="jadwal-perkuliahan-dosen.php">Kelengkapan Biodata</a>
    </div>
</div>
<div class="content">

    <div class="container">

        <div class="py-1">

            <div class="card">
                <div class="card-header d-flex flex-space-between" style="min-height: 50px">
                    <h6>Form Tambah Baru Mahasiswa </h6>

                    <div class="d-flex flex-start">
                        <a href="#javascript:;" class="btn-status btn-danger"> BACK</a>
                        <a href="#javascript:;" class="btn-status btn-primary" style="margin-left:10px">SAVE</a>
                    </div>

                </div>
            </div>

        </div>


        <div class="py-1">

            <!-- BEGIN TAB CARD -->

            <div class="content-tabs px-0">

                <!-- Nav pills -->

                <ul class="nav nav-pills" id="tabs">
                    <li class="nav-item">
                        <a class="nav-link" id="tab1">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">1</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Profile</span>
                                    <span class="wizard-desc">Biodata Mahasiswa</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">2</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Kemahasiswaan</span>
                                    <span class="wizard-desc">Data Kemahasiswaan</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab3">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">3</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Dokumen</span>
                                    <span class="wizard-desc">Dokumen Mahasiswa</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab4">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">4</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Orang Tua</span>
                                    <span class="wizard-desc">Data Orang Tua</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>



                <!-- Tab panes -->

                <div class="tab-content">

                    <div class="container tab-pane active" id="tab1C">

                        <div class="d-flex flex-change">
                            <div class="form-mr-2">
                                <div class="form-inputs">
                                    <label>ID</label>
                                    <input type="text" name="id_mahasiswa" value="1" placeholder="ID Mahasiswa">
                                </div>
                                <div class="form-inputs">
                                    <label>NIK</label>
                                    <input type="text" name="nik" value="31710000427839" placeholder="NIK">
                                </div>
                                <div class="form-inputs">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" value="Khaerul Istafa" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-inputs">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" value="06/07/2021" name="tanggal_lahir">
                                </div>
                                <div class="form-inputs">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="Jakarta" placeholder="Tempat Lahir">
                                </div>
                                <div class="form-inputs">
                                    <label>Jenis Kelamin</label>
                                    <div class="form-group">
                                        <label class="radio-button"> Laki-laki
                                            <input type="radio" value="Laki-laki" checked>
                                            <span class="checkmark"></span>
                                        </label>

                                        <label class="radio-button"> Perempuan
                                            <input type="radio" value="Perempuan">
                                            <span class="checkmark"></span>
                                        </label>

                                    </div>
                                </div>
                                <div class="form-inputs">
                                    <label>Agama</label>
                                    <select name="agama" id="agama">
                                        <option value="0">-- Pilih Agama --</option>

                                        <option value="islam" selected>Islam</option>

                                        <option value="kristen">Kristen</option>

                                        <option value="katolik">Katolik</option>

                                        <option value="hindu">Hindu</option>

                                        <option value="budha">Budha</option>

                                    </select>
                                </div>
                                <div class="form-inputs">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="demo@gmail.com" placeholder="Email">
                                </div>
                                <div class="form-inputs">
                                    <label for="email">No.Handphone</label>
                                    <input type="text" name="no_hp" value="082486346728" placeholder="No. Handphone">
                                </div>
                                <div class="form-inputs">
                                    <label for="email">Email Orang tua</label>
                                    <input type="email" name="email_ortu" value="admin@admin.com" vlauplaceholder="Email Orang Tua">
                                </div>
                                <div class="form-inputs">
                                    <label for="email">No.Handphone Orang tua</label>
                                    <input type="text" name="no_hp_ortu" value="089798678436" placeholder="No. Handphone Orang Tua">
                                </div>
                            </div>
                            <div class="form-img">
                                <img src="theme/img/default-user.jpg" alt="">
                                <input type="file" name="img_mahasiswa">
                            </div>
                        </div>

                    </div>



                    <div class="container tab-pane" id="tab2C">

                        <form>

                            <div class="form-inputs">

                                <label>Text</label>

                                <input class="width-100" type="text" placeholder="Text Here...">

                            </div>

                            <div class="form-inputs">

                                <label>Email</label>

                                <input type="email" placeholder="Text Here...">

                            </div>

                            <div class="form-inputs">

                                <label>Number</label>

                                <input class="width-100" type="number" placeholder="Text Here...">

                            </div>

                            <div class="d-flex flex-center py-1">

                                <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                                <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                            </div>

                        </form>

                    </div>

                    <div class="container tab-pane" id="tab3C">

                        <form>

                            <div class="form-inputs">

                                <label>Text</label>

                                <input class="width-100" type="text" placeholder="Text Here...">

                            </div>

                            <div class="form-inputs">

                                <label>Email</label>

                                <input type="email" placeholder="Text Here...">

                            </div>

                            <div class="form-inputs">

                                <label>Number</label>

                                <input class="width-100" type="number" placeholder="Text Here...">

                            </div>

                            <div class="d-flex flex-center py-1">

                                <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                                <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                            </div>

                        </form>

                    </div>

                    <div class="container tab-pane" id="tab4C">

                        <form>

                            <div class="form-inputs">

                                <label>Text</label>

                                <input class="width-100" type="text" placeholder="Text Here...">

                            </div>

                            <div class="form-inputs">

                                <label>Email</label>

                                <input type="email" placeholder="Text Here...">

                            </div>

                            <div class="form-inputs">

                                <label>Number</label>

                                <input class="width-100" type="number" placeholder="Text Here...">

                            </div>

                            <div class="d-flex flex-center py-1">

                                <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                                <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <!-- END TAB CARD -->
        </div>

    </div>

    <?php include('footer-datatable.php') ?>