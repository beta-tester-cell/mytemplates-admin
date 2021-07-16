<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Dokumen Sidang</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Upload Dokumen Sidang</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="my-1">
                            <label><b>Periode</b></label>
                            <input class="width-100" id="periode" type="text" value="21" placeholder="Periode">
                        </div>
                        <div class="my-1">
                            <label><b>Nama Dokumen</b></label>
                            <input class="width-100" id="nama_dokumen" type="text" value="Buku Panduan Tugas Akhir" placeholder="Nama Dokumen">
                        </div>
                        <div class="my-1">
                            <label><b>Jenjang</b></label>
                            <select class="width-100" name="jenjang" id="jenjang">
                                <option value="0">-- Pilih Jenjang --</option>
                                <option value="1" selected>D3 [Tugas Akhir]</option>
                                <option value="2">S1 [Skripsi]</option>
                            </select>
                        </div>  
                        <div class="my-1">
                            <label><b>Prodi</b></label>
                            <select class="width-100" name="prodi" id="prodi">
                                <option value="0">-- Pilih Prodi --</option>
                                <option value="1" selected>Manajemen Informatika</option>
                                <option value="2">Administrasi Perkantoran</option>
                                <option value="3">Multimedia</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>File Upload</b></label>
                            <div class="form-info">
                                <input class="width-100" type="file">
                                <span class="text-danger">* Hanya Boleh PDF, Max 500 Kb</span>
                            </div>
                        </div>

                        <div class="d-flex flex-center py-1">
                            <button type="submit" class="btn btn-primary btn-submit mx-1">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Dokumen Sidang</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="py-1 form-inputs">
                        <select class="width-100" name="jenjang" id="jenjang">
                            <option value="0">-- Pilih Jenjang --</option>
                            <option value="1" selected>D3 [Tugas Akhir]</option>
                            <option value="2">S1 [Skripsi]</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table-list">
                            <thead>
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">Nama Dokumen</th>
                                    <th class="align-left">Jenjang</th>
                                    <th class="align-left">Periode</th>
                                    <th class="align-left">Prodi</th>
                                    <th class="align-center">Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">Buku Panduan Tugas Akhir</td>
                                    <td class="align-left">D3</td>
                                    <td class="align-left">21</td> 
                                    <td class="align-left">Manajemen Informatika</td>
                                    <td class="align-center">
                                        <a href="#" class="btn btn-link text-primary"><i class="fa fa-download"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">2</td>
                                    <td class="align-left">Tata Terteib SIdang TA</td>
                                    <td class="align-left">D3</td>
                                    <td class="align-left">21</td> 
                                    <td class="align-left">Manajemen Informatika</td>
                                    <td class="align-center">
                                        <a href="#" class="btn btn-link text-primary"><i class="fa fa-download"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">3</td>
                                    <td class="align-left">Surat Sosialisasi Sidang</td>
                                    <td class="align-left">D3</td>
                                    <td class="align-left">21</td> 
                                    <td class="align-left">Manajemen Informatika</td>
                                    <td class="align-center">
                                        <a href="#" class="btn btn-link text-primary"><i class="fa fa-download"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>