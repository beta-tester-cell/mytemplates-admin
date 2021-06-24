<?php include('header.php') ?>

<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <h6 style="font-size:22px;">Basis Data &rarr; IK_REGULER_01 [Reguler]</h6>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Mahasiswa </h6>
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
                                <th class="dt-center">NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Prodi</th>
                                <th>Telp/Hp</th>
                                <th>Email</th>
                                <th class="dt-center">Direct Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="dt-center">122009</td>
                                <td>Rosihan Arbi Said</td>
                                <td>Manajemen Informatika</td>
                                <td>081318784466</td>
                                <td>rosihan@gmail.com</td>
                                <td class="dt-center">
                                    <a href="#" title="Klik untuk saling terhubung">
                                        <i class="fa fa-whatsapp text-success" style="font-size:30px;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="dt-center">122009</td>
                                <td>Irfan Zadin</td>
                                <td>Manajemen Informatika</td>
                                <td>081318766682</td>
                                <td>irfan@gmail.com</td>
                                <td class="dt-center">
                                    <a href="#" title="Klik untuk saling terhubung">
                                        <i class="fa fa-whatsapp text-success" style="font-size:30px;"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="dt-center">122009</td>
                                <td>Khaerul Istafa</td>
                                <td>Manajemen Informatika</td>
                                <td>081345667700</td>
                                <td>khaerul@gmail.com</td>
                                <td class="dt-center">
                                    <a href="#" title="Klik untuk saling terhubung">
                                        <i class="fa fa-whatsapp text-success" style="font-size:30px;"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>