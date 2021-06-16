<?php include('header.php') ?>

<div class="content">

    <div class="container">

        <div class="py-1">

            <div class="card">
                <div class="card-header d-flex flex-space-between" style="min-height: 50px">
                    <h6>Form Tambah Baru Mahasiswa </h6>

                    <div class="d-flex flex-start">
                        <a href="#javascript:;" class="btn-status btn-danger"><i class="fa fa-angle-left"></i> BACK</a>
                        <a href="#javascript:;" class="btn-status btn-primary" style="margin-left:10px"><i class="fa fa-plus"></i> SAVE</a>
                    </div>

                </div>
            </div>

        </div>

        <style type="text/css">
            .f1{
                font-size:18px;
            }
            .f2{
                font-size:15x;
            }
        </style>

        <div class="py-1" style="margin-top:-40px">

            <!-- BEGIN TAB CARD -->

             <div class="content-tabs">

            <!-- Nav pills -->

            <ul class="nav nav-pills" id="tabs">

                <li class="nav-item">
                    <a class="nav-link" id="tab1">
                        <font class="f1"> Profile</font> 
                        <br><font class="f2">Biodata Mahasiswa</font>
                    </a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" id="tab2">
                        <font class="f1"> Kemahasiswaan</font> 
                        <br><font class="f2">Data Mahasiswa</font>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="tab3">
                        <font class="f1"> Dokumen</font> 
                        <br><font class="f2">Dokumen Mahasiswa</font>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="tab4">
                        <font class="f1"> Orang Tua</font> 
                        <br><font class="f2">Data Data</font>
                    </a>
                </li>

            </ul>



            <!-- Tab panes -->

            <div class="tab-content">

                <div class="container tab-pane active" id="tab1C">

                    <div class="form grid-2 grid-gap-1 py-1">

                        <!-- BEGIN FORM 1 -->
                        <div class="card">

                            <form>

                        <div class="form-inputs">

                            <label>ID</label>

                            <input class="width-100" type="text" name="id" value="1">

                        </div>

                        <div class="form-inputs">

                            <label>NIK</label>

                             <input class="width-100" type="text" name="nik" value="31720111330011552">

                        </div>

                         <div class="form-inputs">

                            <label>NIM</label>

                             <input class="width-100" type="text" name="nim" value="180442020018">

                        </div>

                        <div class="form-inputs">

                            <label>Nama Lengkap</label>

                             <input class="width-100" type="text" name="namalengkap" value="Khaerul Istafa">

                        </div>

                        <div class="form-inputs">

                            <label>Tanggal Lahir</label>

                            <input class="width-100" type="date" name="tgl-lahir">

                        </div>

                         <div class="form-inputs">

                            <label>Tempat Lahir</label>

                             <input class="width-100" type="text" name="tmp-lahir" value="Jakarta">

                        </div>

                        <div class="form-inputs">

                            <label>Jenis Kelamin</label>

                            <div class="d-flex flex-start">
                             <label class="radio-button"> Laki-laki
                                <input type="radio" name="jenis-kelamin" value="" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="radio-button"> Perempuan
                                <input type="radio" name="jenis-kelamin" value="">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        </div>

                        <div class="form-inputs">

                            <label>Agama</label>

                             <select name="agama" id="agama">
                                <option value="">-- Pilih Agama --</option>
                                <option value="islam" selected>Islam</option>
                                <option value="kristen-katolik">Kristen Katolik</option>
                                <option value="kristen-protestan">Kristen Protestan</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="kong Hu Cu">Kong Hu Cu</option>
                            </select>

                        </div>

                        <div class="form-inputs">

                            <label>Email</label>

                             <input class="width-100" type="email" name="email" value="khaeruistafa@gmail.com">

                        </div>

                    </div>

                    <!-- END FORM 1 -->

                    <!-- BEGIN FORM 2 -->
                     <div class="card">

                        <div class="form-inputs">

                            <label>No. Handphone</label>

                             <input class="width-100" type="text" name="hp" value="084888233554">

                        </div>

                        <div class="form-inputs">

                            <label>Email Orang Tua</label>

                             <input class="width-100" type="email" name="email-ortu" value="khaeruistafa@gmail.com">

                        </div>

                        <div class="form-inputs">

                            <label>No. Handphone Orang Tua</label>

                             <input class="width-100" type="text" name="hp-ortu" value="086623344520">

                        </div>

                        <div class="form-inputs">

                            <label>Foto</label>

                            <input class="width-100" type="file" name="foto">

                        </div>

                        <div class="d-flex flex-center py-1">

                            <button type="submit" class="btn btn-primary btn-submit mx-1">Submit</button>

                            <button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>

                        </div>

                    </form>
                    </div>
                    <!-- END FORM 2 -->

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