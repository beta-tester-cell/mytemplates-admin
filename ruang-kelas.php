<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="dashboard-page.php">Akademik Cabang</a>
        <a href="ruang-kelas.php">Ruang Kelas</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <!-- grid 2 column width diferent start -->
        <div class="grid-custom-view grid-gap-1">
            <!-- card form tambah ruang kelas start -->
            <div class="card">
                <!-- card header title start -->
                <div class="card-header d-flex flex-space-between">
                    <h6>Form Tambah Ruang Kelas</h6>
                </div>
                <!-- card header title end -->
                <!-- card boy form start -->
                <div class="card-body">
                    <form>
                        <div class="my-1">
                            <label><b>Kode Ruangan</b></label>
                            <input class="my-0 width-100" type="text" name="kode_ruang" id="kode_ruang" autocomplete="off" placeholder="Kode Ruang...">
                        </div>
                        <div class="my-1">
                            <label><b>Nama Ruangan</b></label>
                            <input class="my-0 width-100" type="text" name="nama_ruang" id="nama_ruang" autocomplete="off" placeholder="Nama Ruang...">
                        </div>
                        <div class="my-1">
                            <label><b>Keterangan</b></label>
                            <textarea class="my-0 width-100" name="keterangan" id="keterangan" rows="3"></textarea>
                        </div>
                        <div class="d-flex flex-center py-1">
                            <button type="submit" class="btn btn-secondary btn-submit mx-1 width-100">Add New</button>
                            <button type="reset" class="btn btn-medium btn-cancel mx-1  width-100">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- card boy form end -->
            </div>
            <!-- card form tambah ruang kelas end -->
            <!-- card table list start -->
            <div class="card">
                <!-- card header title start -->
                <div class="card-header d-flex flex-space-between">
                    <h6>List Master Ruang Kelas</h6>
                    <!-- button export start -->
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                    <!-- button export end -->
                </div>
                <!-- card header title end -->
                <!-- card body table start -->
                <div class="card-body">

                    <div class="table-responsive">
                        <!-- make table responsive  -->
                        <table id="datatable" class="table-list">
                            <!-- add table into datatable -->
                            <thead>
                                <tr>
                                    <th class="dt-left">Kode</th>
                                    <th class="dt-left">Nama Ruangan</th>
                                    <th>Data Modified</th>
                                    <th>Data Modified</th>
                                    <th>Data Modified</th>
                                    <th>Data Modified</th>
                                    <th>Data Modified</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20LB01</td>
                                    <td>Ruangan Lab Multimedia</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20LB02</td>
                                    <td>Ruangan Lab AP</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20LB03</td>
                                    <td>Ruangan Lab Bahasa</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20AU01</td>
                                    <td>Audiotorium</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R301</td>
                                    <td>Ruangan Kelas 301</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R302</td>
                                    <td>Ruangan Kelas 302</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R303</td>
                                    <td>Ruangan Kelas 303</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R304</td>
                                    <td>Ruangan Kelas 304</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R305</td>
                                    <td>Ruangan Kelas 305</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R306</td>
                                    <td>Ruangan Kelas 306</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20R307</td>
                                    <td>Ruangan Kelas 307</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>2020-07-09 12:00</td>
                                    <td>
                                        <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- card body table end -->
            </div>
            <!-- card table list end -->
        </div>
        <!-- grid 2 column width diferent end -->

    </div>
</div>

<?php include('footer-datatable.php') ?>