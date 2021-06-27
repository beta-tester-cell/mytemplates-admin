<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-matakuliah.php">Pengelolaan Matakuliah</a>
        <a href="form-kurikulum.php">Tambah Kurikulum</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-change grid-gap-2">
                    <div class="kurikulum-left-side">
                        <form>
                            <div class="form-inputs">
                                <label>Tahun Akademik</label>
                                <input type="text" name="tahunakademik" placeholder="Tahun Akademik">
                            </div>
                            <div class="form-inputs">
                                <label>Jurusan</label>
                                <select name="jurusan" id="jurusan">
                                    <option value="0">-- Pilih Jurusan --</option>
                                    <option value="1">Bisnis Administrasi</option>
                                    <option value="2">Manajemen Informatika</option>
                                    <option value="3">Komputer Akuntansi</option>
                                    <option value="4">Hubungan Masyarakat</option>
                                </select>
                            </div>
                            <div class="form-inputs">
                                <label>Semester</label>
                                <select name="semester" id="semester">
                                    <option value="0">-- Pilih Semester --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-inputs">
                                <label>Periode</label>
                                <input type="text" name="periode" placeholder="Periode">
                            </div>

                            <hr class="my-1">

                            <div class="form-inputs">
                                <label>Matakuliah</label>
                                <input list="matakuliahlist" id="matakuliah" placeholder="Select or Type of matakuliah">
                                <datalist id="matakuliahlist">
                                    <option data-value="201001">[201001] Bisnis Jaman Now</option>
                                    <option data-value="204001">[204001] Aplikasi Komputer 1</option>
                                    <option data-value="203001">[203001] General English</option>
                                    <option data-value="203004">[203004] Personality Development</option>
                                    <option data-value="203005">[203005] Pendidikan Agama</option>
                                    <option data-value="203005">[203005] English Confersation</option>
                                </datalist>
                                <input type="hidden" name="matakuliah" id="matakuliah-id">
                            </div>
                            <div class="form-inputs">
                                <label>SAP</label>
                                <div class="form-group">
                                    <label class="radio-button"> List
                                        <input type="radio" name="sap_list" value="list">
                                        <span class="checkmark"></span>
                                    </label>

                                    <label class="radio-button"> New file
                                        <input type="radio" name="sap_list" value="newfile">
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>
                            <div class="form-inputs">
                                <label>Ebook</label>
                                <input list="ebooklist" id="Ebook" placeholder="Select or Type of E-book">
                                <datalist id="ebooklist">
                                    <option data-value="201001">[201001] SAP_BA.pdf</option>
                                    <option data-value="204001">[204001] Basisdata.pdf</option>
                                    <option data-value="203001">[203001] Html.pdf</option>
                                    <option data-value="203004">[203004] VB.net.pdf</option>
                                    <option data-value="203005">[203005] Pendidikan Agama</option>
                                    <option data-value="203005">[203005] English Confersation</option>
                                </datalist>
                                <input type="hidden" name="ebook" id="ebook-id">
                            </div>
                            <div class="form-inputs">
                                <label>Bobot Nilai</label>
                                <div class="d-flex grid-gap-1">
                                    <input class="width-50" type="text" name="HDR" placeholder="HDR">
                                    <input class="width-50" type="text" name="FRM" placeholder="FRM">
                                    <input class="width-50" type="text" name="TGS" placeholder="TGS">
                                    <input class="width-50" type="text" name="UTS" placeholder="UTS">
                                    <input class="width-50" type="text" name="UAS" placeholder="UAS">
                                </div>
                            </div>
                            <div class="d-flex flex-center">
                                <button class="btn btn-secondary btn-submit">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="kurikulum-right-side">
                        <div class="table-responsive">
                            <table class="basic-table">
                                <thead>
                                    <th>Matakuliah</th>
                                    <th>SKS</th>
                                    <th>H</th>
                                    <th>F</th>
                                    <th>T</th>
                                    <th>UTS</th>
                                    <th>UAS</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>[201001] Bisnis Jaman Now</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>[201001] Aplikasi Komputer 1</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>[203001] General English</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>[203004] Personality Development</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>[203005] Pendidikan Agama</td>
                                        <td>2</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>[203005] English conversation</td>
                                        <td>4</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td>25</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><b>Total</b></td>
                                        <td colspan="4"><b>22 SKS</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include('footer.php') ?>