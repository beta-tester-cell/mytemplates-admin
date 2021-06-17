<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List KRS Mahasiswa</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="my-2 d-flex flex-change grid-gap-1">
                    <span class="fa fa-filter"></span>
                    <select name="TA" id="TA">
                        <option value="0">-- Pilih Tahun Akademik --</option>
                        <option value="1">2018/2019</option>
                        <option value="2">2019/2020</option>
                        <option value="3">2020/2021</option>
                    </select>
                    <select name="kelas" id="kelas">
                        <option value="0">-- Pilih Kelas --</option>
                        <option value="1">Reguler</option>
                        <option value="2">Karyawan</option>
                    </select>
                    <select name="semester" id="semester">
                        <option value="0">-- Pilih Semester --</option>
                        <option value="1">Genap</option>
                        <option value="2">Ganjil</option>
                    </select>
                </div>

                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <th>TA</th>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Matakuliah</th>
                            <th>Dosen</th>
                            <th>Mahasiswa</th>
                            <th>Isi KRS</th>
                            <th>BLM KRS</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>IK-Reguler-01</td>
                                <td>
                                    <a href="detail-report-krs.php">[989909] Basis Data</a>
                                </td>
                                <td>Masria, M.Kom</td>
                                <td>27</td>
                                <td>26</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>5</td>
                                <td>IK-Reguler-05</td>
                                <td>
                                    <a href="detail-report-krs.php">[989909] Pendidikan Pancasila</a>
                                </td>
                                <td>Septian,M.M</td>
                                <td>25</td>
                                <td>25</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>IK-Reguler-01</td>
                                <td>
                                    <a href="detail-report-krs.php">[989909] Aplikom 1</a>
                                </td>
                                <td>Masria, M.Kom</td>
                                <td>27</td>
                                <td>26</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>IK-Reguler-01</td>
                                <td>
                                    <a href="detail-report-krs.php">[989909] Bahasa Inggris</a>
                                </td>
                                <td>Harris Efendy</td>
                                <td>27</td>
                                <td>26</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>IK-Reguler-01</td>
                                <td>
                                    <a href="detail-report-krs.php">[989909] Pendidikan Agama</a>
                                </td>
                                <td>Masria, M.Kom</td>
                                <td>27</td>
                                <td>26</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2020/2021</td>
                                <td>1</td>
                                <td>IK-Reguler-02</td>
                                <td>
                                    <a href="detail-report-krs.php">[989909] Basis Data</a>
                                </td>
                                <td>Masria, M.Kom</td>
                                <td>27</td>
                                <td>27</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>