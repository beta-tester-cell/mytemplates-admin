<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="content-tabs ">
                <!-- Nav pills -->
                <ul class="nav nav-pills" id="tabs">
                    <li class="nav-item">
                        <a class="nav-link" id="tab1">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">1</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Master</span>
                                    <span class="wizard-desc">Matakuliah</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab2">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">2</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Master</span>
                                    <span class="wizard-desc">Kurikulum</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab3">
                            <div class="wizard-wrapper">
                                <div class="wizard-number">3</div>
                                <div class="wizard-label">
                                    <span class="wizard-title">Dokumen</span>
                                    <span class="wizard-desc">E-book</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- tab 1 start-->

                    <div class="tab-pane active" id="tab1C">
                        <div class="card-header d-flex flex-space-between">
                            <span class="total">Matakuliah | 120 Total</span>

                            <div>
                                <div class="select-export export-matakuliah">
                                    <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                                    <div class="type-export">
                                        <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                                        <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                                        <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                                    </div>
                                </div>
                                <a href="form-matakuliah.php" class="btn btn-link">
                                    <span><i class="fa fa-plus"></i> ADD A NEW</span>
                                </a>
                            </div>
                        </div>

                        <div class="table-resposive">
                            <table id="datatable" class="table-list">
                                <thead>
                                    <th>No</th>
                                    <th>Kode Matakuliah</th>
                                    <th>Matakuliah</th>
                                    <th>Jurusan</th>
                                    <th>Kampus</th>
                                    <th>Date Created</th>
                                    <th>Created By</th>
                                    <th>Updated Date</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                    <?php for ($i = 1; $i <= 5; $i++) {
                                        echo ' <tr>
                                                <td>' . $i . '</td>
                                                <td>2001002</td>
                                                <td>Business English</td>
                                                <td>All</td>
                                                <td>Politeknik LP3I Jakarta</td>
                                                <td>2021-02-09 16:27:53</td>
                                                <td>Tabah</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>
                                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                                </td>
                                            </tr>';
                                    } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- tab 1 end -->

                    <!-- tab 2 start -->

                    <div class="container tab-pane" id="tab2C">

                    </div>

                    <!-- tab 2 end -->

                    <!-- tab 3 start -->

                    <div class="container tab-pane" id="tab3C">

                    </div>
                    <!-- tab 3 end -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-datatable.php') ?>