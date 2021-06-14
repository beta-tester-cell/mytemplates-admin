<?php include('header.php') ?>
<div class="content" style="height: 80vh;">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <button class="btn btn-link modal-button text-primary" data-toggle="modal" data-target="#formMediaPembayaran">
                        <span><i class="fa fa-plus"></i> ADD NEW </span>
                    </button>
                    <a href="master-pembiayaan.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST MEDIA PEMBAYARAN</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Master Pembiayaan</h6>
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
                                <th>No</th>
                                <th style="text-align: left;">Pembiayaan</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: left;">Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">1</td>
                                <td>Biaya Organisasi</td>
                                <td style="text-align: center;">Active</td>
                                <td>Seluruh Cabang</td>
                                <td style="text-align: center;">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">2</td>
                                <td>Biaya Markreting Nasional</td>
                                <td style="text-align: center;">Active</td>
                                <td>Seluruh Cabang</td>
                                <td style="text-align: center;">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">3 </td>
                                <td>Biaya GSuite</td>
                                <td style="text-align: center;">Active</td>
                                <td>Bagi Pemilik Akun GSuite</td>
                                <td style="text-align: center;">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                             <tr>
                                <td style="text-align: center;">4 </td>
                                <td>Biaya Managemen</td>
                                <td style="text-align: center;">Active</td>
                                <td>Cabang Tertentu</td>
                                <td style="text-align: center;">
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- form modal -->
                <div class="modal" id="formMediaPembayaran" tabindex="-1" aria-labelledby="formMediaPembayaranLabel" aria-hidden="true">
                    <div class="modal-dialog modal-fit-custom">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formMediaPembayaranLabel">Konfigurasi Master Pembiayaan Cabang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="form-inputs">
                                        <label>Pembiayaan</label>
                                        <input type="text" name="metode" id="metode" placeholder="Pembiayaan">
                                    </div>
                                    <div class="form-inputs">
                                        <label>Status</label>
                                        <div class="form-group">
                                            <label class="radio-button"> Aktif
                                                <input type="radio" value="aktif" name="status-aktif">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button">Tidak Aktif
                                                <input type="radio" value="tidak-aktif" name="status-tidak-aktif">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-inputs">
                                        <label>Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>