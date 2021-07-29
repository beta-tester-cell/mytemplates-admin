<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Dosen</a>

        <a href="pengelolaan-nilai.php">Input Nilai Komponen</a>

    </div>

</div>

<div class="content">

    <div class="container">



        <div class="py-1">

            <div class="card">

                <div class="form grid-custom-onecard grid-gap-1 py-1">

                    <div class="filtering-list">

                        <div class="card-header d-flex flex-space-between">

                            <h6>Form Input Nilai</h6>

                        </div>

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

                        <div class="card-header d-flex flex-space-between">

                            <h6>Input Nilai Komponen Mahasiswa</h6>



                            <div class="select-export">

                                <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>



                                <div class="type-export">

                                    <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                                    <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                                    <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                                </div>

                            </div>

                        </div>



                        <div class="table-responsive">

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

                                        <td class="align-center"><input type="text" style="width: 60px;" value="28" name="nilai_h[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_t[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_f[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="70" name="nilai_uts[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="67" name="nilai_uas[]"></td>

                                        <td class="align-center">0</td>

                                        <td class="align-center">72.8</td>

                                        <td class="align-center">B</td>

                                    </tr>

                                    <tr>

                                        <td>[0290001] Irfan Zadin</td>

                                        <td class="align-center">MI</td>

                                        <td class="align-center"><input type="text" style="width: 60px;" value="28" name="nilai_h[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_t[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_f[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="70" name="nilai_uts[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="67" name="nilai_uas[]"></td>
                                        <td class="align-center">0</td>

                                        <td class="align-center">72.8</td>

                                        <td class="align-center">B</td>

                                    </tr>

                                    <tr>

                                        <td>[0330000] Khaerul Istafa</td>

                                        <td class="align-center">MI</td>

                                        <td class="align-center"><input type="text" style="width: 60px;" value="28" name="nilai_h[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_t[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_f[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="70" name="nilai_uts[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="67" name="nilai_uas[]"></td>

                                        <td class="align-center">0</td>

                                        <td class="align-center">72.8</td>

                                        <td class="align-center">B</td>

                                    </tr>

                                    <tr>

                                        <td>[0290004] Rosihan Arbisaid</td>

                                        <td class="align-center">MI</td>

                                        <td class="align-center"><input type="text" style="width: 60px;" value="28" name="nilai_h[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_t[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_f[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="70" name="nilai_uts[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="67" name="nilai_uas[]"></td>

                                        <td class="align-center">0</td>

                                        <td class="align-center">72.8</td>

                                        <td class="align-center">B</td>

                                    </tr>

                                    <tr>

                                        <td>[0290007] Muhammad Rizal</td>

                                        <td class="align-center">MI</td>

                                        <td class="align-center"><input type="text" style="width: 60px;" value="28" name="nilai_h[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_t[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_f[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="70" name="nilai_uts[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="67" name="nilai_uas[]"></td>

                                        <td class="align-center">0</td>

                                        <td class="align-center">72.8</td>

                                        <td class="align-center">B</td>

                                    </tr>

                                    <tr>

                                        <td>[0290009] Elawati</td>

                                        <td class="align-center">MI</td>

                                        <td class="align-center"><input type="text" style="width: 60px;" value="28" name="nilai_h[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_t[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="100" name="nilai_f[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="70" name="nilai_uts[]"></td>
                                        <td class="align-center"><input type="text" style="width: 60px;" value="90" name="nilai_uas[]"></td>

                                        <td class="align-center">0</td>

                                        <td class="align-center">77</td>

                                        <td class="align-center">B+</td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <div class="form grid-2 grid-gap-1 py-1">

                            <span class="text-danger"><b>Batas entri nilai, 2021-08-30</b></span>
                            <button class="btn btn-sm btn-primary" id="button-simpan-nilai" disabled>Simpan</butto>

                        </div>



                    </div>



                </div>

            </div>

        </div>

    </div>

</div>



<?php include('footer-datatable.php') ?>