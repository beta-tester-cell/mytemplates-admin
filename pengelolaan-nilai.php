<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="form-jadual-nilai.php" class="btn btn-link">
                        <span><i class="fa fa-plus"></i> Jadwal Input Nilai UTS/UAS</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="form grid-custom-onecard grid-gap-1 py-1">
                    <div class="card-header d-flex flex-space-between">
                        <h6>Filter Data Nilai</h6>
                    </div>
                    <div class="card-header d-flex flex-space-between">
                        <h6>List Nilai Komponen Mahasiswa</h6>
                    </div>
                </div>
                <div class="form grid-custom-onecard grid-gap-1 py-1">
                    <div class="filtering-list">
                        <div class="my-1">
                            <label><b>Tahun Akademik</b></label>
                            <select name="tahunakademik" class="width-100" id="tahunakademik">
                                <option value="0">-- Pilih Tahun Akademik --</option>
                                <option value="2020/2021">2020/2021</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2018/2019">2018/2019</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>Semester</b></label>
                            <select name="semester" class="width-100" id="semester">
                                <option value="0">-- Pilih Semester --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>Nama Dosen</b></label>
                            <select name="tahunakademik" class="width-100" id="tahunakademik">
                                <option value="0">-- Pilih Nama Dosen --</option>
                                <option value="0000234">[0000234] Masria M.Kom</option>
                                <option value="0000124">[0000124] Khaerul Istafa</option>
                                <option value="1231313">[1231313] Irfan Zadin</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>Mata Kuliah</b></label>
                            <select name="tahunakademik" class="width-100" id="tahunakademik">
                                <option value="0">-- Pilih Mata Kuliah --</option>
                                <option value="2331">[2331] Basis Data [4SKS]</option>
                                <option value="1233">[1233] MySql [4SKS]</option>
                                <option value="5551">[5551] Visual Basic [4SKS]</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>Kelas</b></label>
                            <select name="tahunakademik" class="width-100" id="tahunakademik">
                                <option value="0">-- Pilih Kelas --</option>
                                <option value="22">IK 18-3-1</option>
                                <option value="40">MI-21</option>
                                <option value="31">ABI-20</option>
                            </select>
                        </div>
                    </div>

                    <div class="list-nilai">
                        <div class="select-export export-list">
                            <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                            <div class="type-export">
                                <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                            </div>
                        </div>
                        <div class="table-responsive  list-table-nilai">
                            <table id="datatable" class="table-list">
                                <thead>
                                    <tr>
                                        <th class="align-left">Nama Mahasiswa</th>
                                        <th class="align-center">Jurusan</th>
                                        <th class="align-center">H</th>
                                        <th class="align-center">T</th>
                                        <th class="align-center">F</th>
                                        <th class="align-center">UTS</th>
                                        <th class="align-center">UAS</th>
                                        <th class="align-center">SP</th>
                                        <th class="align-center">Akhir</th>
                                        <th class="align-center">HM</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[0290091] Fadilah Nurfitrah</td>
                                        <td class="align-center">MI</td>
                                        <td class="align-center">28</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">70</td>
                                        <td class="align-center">67</td>
                                        <td class="align-center">0</td>
                                        <td class="align-center">72.8</td>
                                        <td class="align-center">B</td>
                                    </tr>
                                    <tr>
                                        <td>[0290001] Irfan Zadin</td>
                                        <td class="align-center">MI</td>
                                        <td class="align-center">28</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">70</td>
                                        <td class="align-center">67</td>
                                        <td class="align-center">0</td>
                                        <td class="align-center">72.8</td>
                                        <td class="align-center">B</td>
                                    </tr>
                                    <tr>
                                        <td>[0330000] Khaerul Istafa</td>
                                        <td class="align-center">MI</td>
                                        <td class="align-center">28</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">70</td>
                                        <td class="align-center">67</td>
                                        <td class="align-center">0</td>
                                        <td class="align-center">72.8</td>
                                        <td class="align-center">B</td>
                                    </tr>
                                    <tr>
                                        <td>[0290004] Rosihan Arbisaid</td>
                                        <td class="align-center">MI</td>
                                        <td class="align-center">28</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">70</td>
                                        <td class="align-center">67</td>
                                        <td class="align-center">0</td>
                                        <td class="align-center">72.8</td>
                                        <td class="align-center">B</td>
                                    </tr>
                                    <tr>
                                        <td>[0290007] Muhammad Rizal</td>
                                        <td class="align-center">MI</td>
                                        <td class="align-center">28</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">70</td>
                                        <td class="align-center">67</td>
                                        <td class="align-center">0</td>
                                        <td class="align-center">72.8</td>
                                        <td class="align-center">B</td>
                                    </tr>
                                    <tr>
                                        <td>[0290009] Elawati</td>
                                        <td class="align-center">MI</td>
                                        <td class="align-center">28</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">100</td>
                                        <td class="align-center">70</td>
                                        <td class="align-center">90</td>
                                        <td class="align-center">0</td>
                                        <td class="align-center">77</td>
                                        <td class="align-center">B+</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form grid-2 grid-gap-1 py-1">
                            <span>Last Update : Thursday , 10 June 2021 09:00 (UTC +7)</span>
                            <button class="btn btn-medium" data-toggle="modal" data-target="#ValidasiUpdate" id="button-update-nilai">Update Nilai</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="ValidasiUpdate" tabindex="-1" aria-labelledby="ValidasiUpdateLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fit-custom">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="ValidasiUpdateLabel">Tambah Mahasiswa Ploting PA</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="height: 150px;">
                    <h6 style="text-align: 	center; ">Anda Butuh Otorisasi Untuk Melakukan Update Nilai !!</h6>
                </div>
                <div class="modal-footer" style="align-items: center; justify-content: center;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>