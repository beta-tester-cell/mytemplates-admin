<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="dashboard-page.php">Akademik Cabang</a>
        <a href="#">Perkuliahan</a>
        <a href="jadwal-krs.php">Input Jadwal Pengisian KRS</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Form Jadwal Input KRS Online</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="my-1">
                            <label><b>Tahun Akademik</b></label>
                            <select name="tahunakademik" id="tahunakademik" class="my-0 width-100">
                                <option value="">-- Pilih Tahun Akademik --</option>
                                <option value="2017/2018">2017/2018</option>
                                <option value="2018/2019">2018/2019</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021" selected>2020/2021</option>
                            </select>
                        </div>
                        <div class="my-1">
                            <label><b>Periode</b></label>
                            <input class="my-0 width-100" type="text" name="Periode" id="Periode" autocomplete="off" placeholder="Periode..." value="20201" disabled>
                        </div>
                        <div class="my-1">
                            <label><b>Tanggal</b></label>
                            <div class="form grid-2 grid-gap-1 my-0 ">
                                <div class="input-group">
                                    <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_awal"></div>
                                    <div class="input-group-icon">TO</div>
                                    <div class="input-group-area"><input class="width-100" type="date" value="<?= date('Y-m-d') ?>" id="tanggal_akhir"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-center py-1">
                            <button type="submit" class="btn btn-secondary btn-submit mx-1 ">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Jadwal Input KRS Online</h6>
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
                    <div class="table-responsive">
                        <table id="datatable" class="table-list">
                            <thead>
                                <tr>
                                    <th class="align-center">No</th>
                                    <th class="align-left">TA</th>
                                    <th class="align-left">Periode</th>
                                    <th class="align-left">Tanggal Mulai</th>
                                    <th class="align-left">Tanggal Akhir</th>
                                    <th class="align-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-center">1</td>
                                    <td class="align-left">2020/2021</td>
                                    <td class="align-left">20201</td>
                                    <td class="align-left">2021-01-01</td>
                                    <td class="align-left">2021-01-31</td>
                                    <td class="align-center">
                                        <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
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