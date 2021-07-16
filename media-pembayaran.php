<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Keuangan</a>
        <a href="#">Setting</a>
        <a href="media-pembayaran.php">Payment Gateway</a>
    </div>
</div>
<div class="content" style="height: 80vh;">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <button class="btn btn-link modal-button text-primary" data-toggle="modal" data-target="#formMediaPembayaran">
                        <span><i class="fa fa-plus"></i> ADD NEW MEDIA PEMBAYARAN</span>
                    </button>
                    <a href="media-pembayaran.php" class="btn btn-link">
                        <span><i class="far fa-list-alt"></i> LIST MEDIA PEMBAYARAN</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Media Pembayaran Management</h6>
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
                                <th>Metode Pembayaran</th>
                                <th class="text-center">Status</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Host to Host VA BNI</td>
                                <td class="text-center"> <span class="btn-status btn-secondary"> Active</span></td>
                                <td>Pembayaran melalui Virtual Account BNI</td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Host to Host IDN</td>
                                <td class="text-center"> <span class="btn-status btn-secondary"> Active</span></td>
                                <td>Pembayaran melalui Jaringan IDN</td>
                                <td>
                                    <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3 </td>
                                <td>Input System</td>
                                <td class="text-center"> <span class="btn-status btn-secondary"> Active</span></td>
                                <td>Pembayaran dicatat melalui system aplikasi</td>
                                <td>
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
                                <h5 class="modal-title" id="formMediaPembayaranLabel">Konfigurasi Media Input Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">

                                    <div class="form-inputs">
                                        <label>Metode</label>
                                        <input type="text" name="metode" id="metode" placeholder="Metode">
                                    </div>
                                    <div class="form-inputs">
                                        <label>Status</label>
                                        <div class="form-group">
                                            <label class="radio-button"> Aktif
                                                <input type="radio" value="aktif" name="status-aktif">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button">Tidak Aktif
                                                <input type="radio" value="tidak-aktif" name="status-aktif">
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