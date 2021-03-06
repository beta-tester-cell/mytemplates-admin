<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="dashboard-page.php">Akademik Cabang</a>
        <a href="#">Tools</a>
        <a href="pengelolaan-pembimbingakad.php">Pengajuan Perubahan Status Mahasiswa</a>
    </div>
</div>
<div class="content">

    <div class="container">

        <div class="form grid-custom-card grid-gap-1 py-1">


            <div class="card">

                <div class="card-header">
                    <h6>Form Pengajuan Perubahan Status Mahasiswa</h6>
                </div>
                <form>
                    <div class="my-1">
                        <label><b>Nama Mahasiswa</b></label>
                        <input class="width-100" type="text" list="list_mahasiswa" value="180442020018 [Khaerul Istafa]" placeholder="-- Pilih Nama Mahasiswa --" />
                        <datalist id="list_mahasiswa">
                            <option value="180442020018 [Khaerul Istafa]">
                            <option value="180442020018 [Fikri Noviansyah]">
                            <option value="180442020018 [Rizal Liyan Syah]">
                        </datalist>
                        <input type="hidden" name="list_mahasiswa" id="listmahasiswa-id">
                    </div>

                    <div class="my-1">
                        <label><b>Prodi</b></label>
                        <select class="width-100" name="list_prodi" id="list_prodi">
                            <option value="0">-- Pilih Prodi --</option>
                            <option value="1">[001] Administrasi Perkantoran</option>
                            <option value="2" selected>[002] Informatika Komputer</option>
                            <option value="3">[003] Teknik Komputer</option>
                        </select>
                    </div>

                    <div class="my-1">
                        <label><b>Tahun Akademik</b></label>
                        <select class="width-100" name="list_tahunakademik" id="list_tahunakademik">
                            <option value="0">-- Tahun Akademik --</option>
                            <option value="1" selected>2020/2021 - 20201</option>
                            <option value="2">2019/2020 - 19200</option>
                        </select>
                    </div>

                    <div class="my-1">
                        <label><b>Pilihan Status</b></label>
                        <select class="width-100" name="list_status" id="list_status">
                            <option value="0">-- Pilih Status --</option>
                            <option value="1" selected>Cuti</option>
                            <option value="2">Izin</option>
                        </select>
                    </div>

                    <div class="my-1">
                        <label><b>Keterangan</b></label>
                        <select class="width-100" name="list_keterangan" id="list_keterangan">
                            <option value="0">-- Pilih Keterangan --</option>
                            <option value="1" selected>Tidak Ada Biaya Kuliah </option>
                            <option value="2">Keadaan Darurat</option>
                        </select>
                    </div>

                    <div class="my-1">
                        <label><b>File</b></label>
                        <div class="form-info">
                            <input class="width-100" type="file">
                            <span class="text-danger" style="font-size: 13px;">File format must be .pdf, max 500KB</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-link btn-primary  px-20"> Simpan </button>
                </form>
            </div>


            <div class="card">
                <div class="card-header">
                    <h6>List Data Pengajuan Perubahan Status Mahasiswa <h6>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
                                <th>TA Pengajuan</th>
                                <th>STS Update</th>
                                <th>Ket. Perubahan</th>
                                <th>Status</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>Rakhmat SH</span>
                                        <span>180123000</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>MI</span>
                                        <span>002</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>2020/2021</span>
                                        <span>20211[Ganjil]</span>
                                    </div>
                                </td>
                                <td class="align-center">Cuti</td>
                                <td>Ingin Bekerja Dulu</td>
                                <td>Disetujui</td>
                                <td class="align-center">
                                    <a href="#" class="text-primary"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-center">2</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>Rakhmat SH</span>
                                        <span>180123000</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>MI</span>
                                        <span>002</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>2020/2021</span>
                                        <span>20211[Ganjil]</span>
                                    </div>
                                </td>
                                <td class="align-center">Cuti</td>
                                <td>Tidak Ada Biaya</td>
                                <td>Pending</td>
                                <td class="align-center">
                                    <a href="#" class="text-primary"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-center">3</td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>Rakhmat SH</span>
                                        <span>180123000</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        <span>MI</span>
                                        <span>002</span>
                                    </div>
                                </td>
                                <td class="align-left">
                                    <div class="d-flex flex-column">
                                        <span>2020/2021</span>
                                        <span>20211[Ganjil]</span>
                                    </div>
                                </td>
                                <td class="align-center">Cuti</td>
                                <td>Tidak Ada Biaya</td>
                                <td>Pending</td>
                                <td class="align-center">
                                    <a href="#" class="text-primary"><i class="fa fa-download"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer-datatable.php') ?>