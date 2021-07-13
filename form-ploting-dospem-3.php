<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="#">Ploting Dosen Pembimbing</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Konfigurasi Dosen Pembimbing</h6>
                </div>
                <div class="grid-custom-row grid-gap-1">
                    <div class="form-upload">
                        <form>
                            <div class="form-mr-2 py-1">
                                <div class="form-inputs">
                                    <label><b>Jenis Sidang</b></label>
                                    <select name="jenis_sidang" id="jenis_sidang">
                                        <option value="0">-- Pilih Jenis Sidang --</option>
                                        <option value="1" selected>Tugas Akhir (TA)</option>
                                        <option value="2">Tugas Akhir Susulan</option>
                                    </select>
                                </div>
                                <div class="form-inputs">
                                    <label><b>Periode</b></label>
                                    <input class="width-100" id="periode" type="text" value="21" placeholder="Periode">
                                </div>
                                <div class="form-inputs">
                                    <label><b>Dosen Pembimbing</b></label>
                                    <select name="dospem" id="dospem">
                                        <option value="0">-- Pilih Dosen Pembimbing --</option>
                                        <option value="1">Masria, M.Kom</option>
                                        <option value="2">>Nasril, M.Kom</option>
                                        <option value="3" selected>Euis Winarti</option>
                                    </select>
                                </div>
                                <div class="d-flex grid-gap-1 py-1">
                                    <button type="submit" style="width: 150px;" class="btn btn-secondary btn-submit mx-1">Simpan</button>
                                    <a style="width: 150px;" class="btn btn-danger btn-cancel mx-1 text-center" href="konfigurasi-ploting-dospem.php">Back</a>
                                </div>
                            </div>

                    </div>

                    <div class="py-1">
                        <div class="grid-button">
                            <div class="total">
                                <label><b>Total Mahasiswa</b></label>
                                <input style="width: 50px;" type="text" value="10" disabled>
                            </div>
                            <div class="button-plot">
                                <a href="#" class="btn btn-link btn-secondary" data-toggle="modal" data-target="#exampleModal">Add Komponen</a>
                                <button class="btn btn-link btn-secondary">Delete All</button>
                            </div>
                        </div>
                        <div class="table-responsive py-1">
                            <table class="table-list" id="datatable">
                                <thead>
                                    <tr>
                                        <th class="align-center">No</th>
                                        <th class="align-center">Nim</th>
                                        <th class="align-left">Nama Mahasiswa</th>
                                        <th class="align-left">Prodi</th>
                                        <th class="align-center">Jenjang</th>
                                        <th class="align-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-center">1</td>
                                        <td class="align-center">180009990 </td>
                                        <td class="align-left"> Rakhmat SH</td>
                                        <td class="align-left">Manajemen Informatika</td>
                                        <td class="align-center">D3</td>
                                        <td class="align-center">
                                            <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">2</td>
                                        <td class="align-center">180009992 </td>
                                        <td class="align-left"> Rosihan</td>
                                        <td class="align-left">Manajemen Informatika</td>
                                        <td class="align-center">D3</td>
                                        <td class="align-center">
                                            <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-center">3</td>
                                        <td class="align-center">180009993 </td>
                                        <td class="align-left"> Rohmana</td>
                                        <td class="align-left">Manajemen Informatika</td>
                                        <td class="align-center">D3</td>
                                        <td class="align-center">
                                            <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <label class="text-danger">* Ploting Mahasiswa Bimbingan tidak boleh lebih dari 10 MHS</label>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>


<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fit-custom">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" class="align-center">Tambah Komponen Bimbingan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="grid-gap-2">
                    <div class="input-data">
                        <div class="form-inputs">
                            <label><b>Cabang/Kampus</b></label>
                            <select name="cabang_kampus" id="cabang_kampus">
                                <option value="0">-- Pilih Cabang/Kampus --</option>
                                <option value="1" selected>Jakarta Pusat (Kramat Raya)</option>
                                <option value="2">Cilodong</option>
                                <option value="3">Blok M</option>
                            </select>
                        </div>
                        <div class="form-inputs">
                            <label><b>Prodi</b></label>
                            <select name="prodi" id="prodi">
                                <option value="0">-- Pilih Prodi --</option>
                                <option value="1" selected>Manajemen Informatika</option>
                                <option value="2">Administrasi Perkantoran</option>
                                <option value="3">Multimedia</option>
                            </select>
                        </div>
                        <div class="table-responsive py-1">
                            <table class="table-list" id="datatable2">
                                <thead>
                                    <tr>
                                        <th class="align-center">No</th>
                                        <th class="align-center">Nim</th>
                                        <th class="align-left">Nama Mahasiswa</th>
                                        <th class="align-left">Prodi</th>
                                        <th class="align-center">Jenjang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-center"><input type="checkbox" name="checkbox_mhs[]"> 1</td>
                                        <td class="align-center">180009990 </td>
                                        <td class="align-left"> Rakhmat SH</td>
                                        <td class="align-left">Manajemen Informatika</td>
                                        <td class="align-center">D3</td>
                                    </tr>
                                    <tr>
                                        <td class="align-center"><input type="checkbox" name="checkbox_mhs[]"> 2</td>
                                        <td class="align-center">180009992 </td>
                                        <td class="align-left"> Rosihan</td>
                                        <td class="align-left">Manajemen Informatika</td>
                                        <td class="align-center">D3</td>
                                    </tr>
                                    <tr>
                                        <td class="align-center"><input type="checkbox" name="checkbox_mhs[]"> 3</td>
                                        <td class="align-center">180009993 </td>
                                        <td class="align-left"> Rohmana</td>
                                        <td class="align-left">Manajemen Informatika</td>
                                        <td class="align-center">D3</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex py-1 ">
                            <button type="submit" style="width: 150px;" class="btn btn-secondary btn-submit mx-1">Tambah</button>
                            <button type="button" style="width: 150px;" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>