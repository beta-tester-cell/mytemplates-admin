<?php include('header.php') ?>
<div class="content">
    <div class="container">
       <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="pengelolaan-nilai.php" class="btn btn-link btn-danger px-20">
                        Back
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">

                <div class="form grid-custom-onecard grid-gap-1  py-1">

                    <div class="form-input-nilai">
                        <div class="card-header d-flex flex-space-between">
                            <h6>Form Jadual Nilai</h6>
                        </div>
                        <form>
                            <div class="my-1">
                                <label><b>Tahun Akademik</b></label>
                                <select name="tahunakademik" class="width-100" id="tahunakademik">
                                    <option value="0">-- Pilih Tahun Akademik --</option>
                                    <option value="2020/2021">2020/2021</option>
                                    <option value="2020/2021">2019/2020</option>
                                    <option value="2020/2021">2018/2019</option>
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
                                <label><b>Tanggal Batas Waktu</b></label>
                                <input class="width-100" type="date">
                            </div>
                            <div class="d-flex flex-center py-1">
                                <button type="submit" class="btn btn-secondary btn-submit mx-3">Save</button>
                            </div>
                        </form>
                    </div>

                    <div class="list-nilai">
                        <div class="card-header d-flex flex-space-between">
                            <h6>List Input Jadual Nilai</h6>
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
                                        <th class="align-left">Tahun Akademik</th>
                                        <th class="align-center">Semester</th>
                                        <th class="align-center">Tanggal Berakhir</th>
                                        <th class="align-center">Status</th>
                                        <th class="align-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2020/2021</td>
                                        <td class="align-center">1</td>
                                        <td class="align-center">2020-06-09 08:00</td>
                                        <td class="align-center">Active</td>
                                        <td>
                                            <a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2020/2021</td>
                                        <td class="align-center">3</td>
                                        <td class="align-center">2020-06-09 08:00</td>
                                        <td class="align-center">Active</td>
                                        <td>
                                            <a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2020/2021</td>
                                        <td class="align-center">5</td>
                                        <td class="align-center">2020-06-09 08:00</td>
                                        <td class="align-center">Active</td>
                                        <td>
                                            <a href="edit-pembimbing.php" class="text-secondary"><i class="fa fa-edit"></i></a>
                                            <a href="#" class="text-primary"><i class="far fa-eye"></i></a>
                                            <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
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
</div>

<?php include('footer-datatable.php') ?>