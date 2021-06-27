<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Table</a>
        <a href="table.php">Data Table</a>
    </div>
</div>
<div class="content">

    <div class="container">

        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Data Table</h6>
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

                                <th>Table header 1</th>

                                <th>Table header 2</th>

                                <th>Table header 3</th>

                                <th>Table header 4</th>

                                <th>Table header 5</th>

                                <th>Table header 6</th>

                                <th>Table header 7</th>

                            </tr>



                        </thead>

                        <tbody>



                            <?php for ($i = 0; $i < 100; $i++) {

                                echo "<tr>

                               <td>field 1</td>

                               <td>field 2</td>

                               <td>field 3</td>

                               <td>field 4</td>

                               <td>field 5</td>

                               <td>field 6</td>

                               <td>field 7</td>

                           </tr>";
                            } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('footer-datatable.php') ?>