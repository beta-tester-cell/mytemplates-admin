<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-kalender-akademik.php">Pengelolaan Kalender Akademik</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start">
                    <a href="pengelolaan-kalender-akedemik.php" class="btn btn-link btn-danger px-20">
                        Back
                    </a>
                </div>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Upload Kalender Akademik</h6>
                </div>
                <form>
                    <div class="grid-2 grid-gap-3">
                        <div class="form-mr-2">
                            <div class="form-inputs">
                                <label>Download Template</label>
                                <button class="btn btn-link btn-secondary" style="width: 150px;"><span>Template</span></button>
                            </div>
                            <div class="form-inputs">
                                <label>Upload File</label>
                                <input type="file" name="upload-kalender">
                            </div>
                            <div class="form-inputs">
                                <label>&nbsp;</label>
                                <div class="grid-2 grid-gap-3">
                                    <button class="btn btn-link btn-secondary"><span>Upload</span></button>
                                    <button class="btn btn-link btn-secondary"><span>Preview</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="table-responsive py-1">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kegiatan</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Pelaksana</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
</div>

<?php include('footer-datatable.php') ?>