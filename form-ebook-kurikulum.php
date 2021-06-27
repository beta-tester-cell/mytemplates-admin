<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Mahasiswa</a>
        <a href="#">Perkuliahan</a>
        <a href="form-ebook-kurikulum.php">E-book</a>
    </div>
</div>
<div class="content">

    <div class="container height-100">

        <div class="form grid-2 grid-gap-1 py-1">

            <div class="card">
                <div class="card-header">
                    <h6>List Kurikulum</h6>
                </div>

                <div class="my-1">
                    <label><b>Tahun Akademik</b></label>
                    <select class="width-100" name="tahunakademik" id="tahunakademik">
                        <option value="">-- Pilih Tahun Akademik --</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2020/2021" selected>2020/2021</option>
                        <option value="2021/2022">2021/2022</option>
                    </select>
                </div>

                <div class="my-1">
                    <label><b>Pilih Semester</b></label>
                    <select class="width-100" name="semester" id="semester">
                        <option value="">-- Pilih Semester --</option>
                        <option value="1" selected>Semester 1</option>
                        <option value="2">Semester 2</option>
                        <option value="3">Semester 3</option>
                        <option value="4">Semester 4</option>
                        <option value="5">Semester 5</option>
                        <option value="6">Semester 6</option>
                        <option value="7">Semester 7</option>
                        <option value="8">Semester 8</option>
                    </select>
                </div>

                <button type='submit' class="btn btn-link btn-secondary px-20">Submit</button>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List E-book </h6>
                </div>


                <div class="table-responsive">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th class="dt-center">No</th>
                                <th>Mata Kuliah</th>
                                <th class="dt-center">SKS</th>
                                <th class="dt-center">Smt</th>
                                <th class="dt-center">E-Book</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td class="dt-center">1</td>
                                <td>[9892201] Basis Data</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="dt-center">2</td>
                                <td>[9892202] Bahasa Inggris</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="dt-center">3</td>
                                <td>[9892203] Aplikasi Komputer 1</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="dt-center">4</td>
                                <td>[9892204] Pendidikan Agama</td>
                                <td class="dt-center">2</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="dt-center">5</td>
                                <td>[9892205] Dasar-dasar Komputer</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                            <tr>
                                <td class="dt-center">6</td>
                                <td>[9892206] Algoritma</td>
                                <td class="dt-center">4</td>
                                <td class="dt-center">1</td>
                                <td class="dt-center"><a href="#"><i class="far fa-download"></i></a></td>
                            </tr>

                        </tbody>
                    </table>

                    <div style="margin-top:8px">
                        <label><b>Total SKS : </b></label>
                        <label><b>22 SKS</b></label>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php'); ?>