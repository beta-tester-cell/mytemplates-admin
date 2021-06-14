<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1 grid-custom-view grid-gap-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Filter Data</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="my-1">
                            <label><b>Tahun Akademik</b></label>
                            <select class="my-0 width-100" name="tahun_akd" id="tahun_akd">
                                <option value="">Pilih Tahun Akademik</option>
                                <option value="1">2018/2019</option>
                                <option value="2">2019/2020</option>
                                <option value="3" selected>2020/2021</option>
                                <option value="4">2021/2022</option>
                            </select>
                        </div>

            <!-- == Data yang tampil pada combo box PERIODE, menyesuaikan dengan pilihan pada combo box THN AKD -->
                        <div class="my-1">
                            <label><b>Periode</b></label>
                            <select class="my-0 width-100" name="periode" id="periode">
                                <option value="">Pilih Periode</option>
                                <option value="1" selected>2021 [Ganjil]</option>
                                <option value="2">2021 [Genap]</option>
                            </select>
                        </div>

            <!-- == Data yang tampil pada combo box SEMESTER, menyesuaikan dengan pilihan pada combo box PERIODE -->
                        <div class="my-1">
                            <label><b>Semester</b></label>
                            <select class="my-0 width-100" name="semester" id="semester">
                                <option value="">Pilih Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="3">Semester 3</option>
                                <option value="5">Semester 5</option>
                                <option value="7">Semester 7</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>Kampus</b></label>
                            <select class="my-0 width-100" name="kampus" id="kampus">
                                <option value="">Pilih Kampus</option>
                                <option value="unit_id">Politeknik LP3I Jakarta</option>
                                <option value="3">Politeknik LP3I Bandung</option>
                                <option value="5">Politeknik LP3I Medan</option>
                                <option value="7">Politeknik LP3I Makasar</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Ploating Dosen</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="card-header form-inputs">
                    <div class="form grid-2 grid-gap-2 py-1">
                        <div class="input-group mx-1">
                            <label class="checkbox">
                                <input type="checkbox" class="checked-all"> Check All<br>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="d-flex flex-center">
                            <button type="button" class="btn btn-secondary btn-submit mx-1" style="width: 90px;" data-toggle="modal" data-target="#approve">Approve</button>
                        </div>

                        <!-- Modal Approve -->
                        <div class="modal fade" id="approve" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"></div>
                                    <div class="modal-body text-center">
                                        <h6 style="font-size: 20px;">
                                            Apakah anda yakin akan memvalidasi data ploating dosen ini?
                                        </h6>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger">Yakin</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tinjau Ulang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end modal -->
                    </div>  
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-list">
                            <thead>
                                <tr>
                                    <th colspan="2" class="dt-left">Nama Dosen</th>
                                    <th>Type</th>
                                    <th class="dt-left">Homebase</th>
                                    <th>Total SKS</th>
                                    <th>SKS Approved</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="dt-center"></td>
                                    <td><a href="detail-ploating-dosen.php?id=0290091"><strong>[0290091] - Masria, M.Kom</strong></a></td>
                                    <td class="dt-center">A</td>
                                    <td>Kramat Raya</td>
                                    <td class="dt-center">16</td>
                                    <td class="dt-center">10</td>
                                    <td class="dt-center"><span class="btn-status btn-success">Done</span></td>
                                </tr>
                                <tr>
                                    <td class="dt-center"><input type="checkbox" name="pilih-ploating" value="1"></td>
                                    <td><a href="detail-ploating-dosen.php?id=0290091"><strong>[0290071] - Dedi Mizwar</strong></a></td>
                                    <td class="dt-center">A</td>
                                    <td>Kramat Raya</td>
                                    <td class="dt-center">14</td>
                                    <td class="dt-center">0</td>
                                    <td class="dt-center"><span class="btn-status btn-secondary">Approve</span></td>
                                </tr>
                                <tr>
                                    <td class="dt-center"><input type="checkbox" name="pilih-ploating" value="1"></td>
                                    <td><a href="detail-ploating-dosen.php?id=0290091"><strong>[0330773] - Nasril, M.Kom</strong></a></td>
                                    <td class="dt-center">A</td>
                                    <td>Medan Baru</td>
                                    <td class="dt-center">12</td>
                                    <td class="dt-center">0</td>
                                    <td class="dt-center"><span class="btn-status btn-secondary">Approve</span></td>
                                </tr>
                                <tr>
                                    <td class="dt-center"><input type="checkbox" name="pilih-ploating" value="1"></td>
                                    <td><a href="detail-ploating-dosen.php?id=0290091"><strong>[0290744] - Teddy Setiadi, M.Kom</strong></a></td>
                                    <td class="dt-center">A</td>
                                    <td>Kramat Raya</td>
                                    <td class="dt-center">10</td>
                                    <td class="dt-center">0</td>
                                    <td class="dt-center"><span class="btn-status btn-secondary">Approve</span></td>
                                </tr>
                                <tr>
                                    <td class="dt-center"><input type="checkbox" name="pilih-ploating" value="1"></td>
                                    <td><a href="detail-ploating-dosen.php?id=0290091"><strong>[0290733] - Karto</strong></a></td>
                                    <td class="dt-center">B</td>
                                    <td>Cimone-Tanggerang</td>
                                    <td class="dt-center">10</td>
                                    <td class="dt-center">0</td>
                                    <td class="dt-center"><span class="btn-status btn-secondary">Approve</span></td>
                                </tr>
                                <tr>
                                    <td class="dt-center"><input type="checkbox" name="pilih-ploating" value="1"></td>
                                    <td><a href="detail-ploating-dosen.php?id=0290091"><strong>[0290551] - Fadillah Nurfitrah</strong></a></td>
                                    <td class="dt-center">C</td>
                                    <td>Kramat Raya</td>
                                    <td class="dt-center">14</td>
                                    <td class="dt-center">0</td>
                                    <td class="dt-center"><span class="btn-status btn-secondary">Approve</span></td>
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