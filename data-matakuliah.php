<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Matakuliah (Kurikulum)</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="grid-1 grid-gap-1">
                    <div class="form grid-4 grid-gap-1">
                        <div class="my-1">
                            <label><b>Tahun Akademik</b></label>
                            <input class="my-0 width-100" type="text" name="ta" id="ta" autocomplete="off" placeholder="xxxx/xxxx...">
                        </div>
                        <div class="my-1">
                            <label><b>Jurusan</b></label>
                            <select class="my-0 width-100" name="select" id="product">
                                <option value="0">Select This Input</option>
                                <option value="product_id">Administrasi Bisnis</option>
                                <option value="product_id">Akuntansi</option>
                                <option value="product_id">Teknologi Komputer</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                        <thead>
                            <tr>
                                <th class="text-center">Semester</th>
                                <th>Matakuliah</th>
                                <th class="text-center">SKS</th>
                                <th class="text-center">HDR</th>
                                <th class="text-center">TGS</th>
                                <th class="text-center">FRM</th>
                                <th class="text-center">UTS</th>
                                <th class="text-center">UAS</th>
                                <th class="text-center">RPS</th>
                                <th class="text-center">Ebook</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>[0290091] Dasar-Dasar Bisnis</td>
                                <td class="text-center">4</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">25</td>
                                <td class="text-center">35</td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>[0290091] General English</td>
                                <td class="text-center">4</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">25</td>
                                <td class="text-center">35</td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>[0290091] Typing Tutor</td>
                                <td class="text-center">4</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">25</td>
                                <td class="text-center">35</td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>[0290091] Akuntansi Komputer 1</td>
                                <td class="text-center">4</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">25</td>
                                <td class="text-center">35</td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>[0290091] Personality Development</td>
                                <td class="text-center">4</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">25</td>
                                <td class="text-center">35</td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td>
                                <td>[0290091] Pendidikan Agama</td>
                                <td class="text-center">2</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">10</td>
                                <td class="text-center">25</td>
                                <td class="text-center">35</td>
                                <td class="text-center">
                                    <span class="menu-icon"><i class="fa fa-check text-success" aria-hidden="true"></i></span>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>