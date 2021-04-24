<?php include('header.php') ?>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Basic Table</h6>
                </div>
                <div class="table-responsive">
                    <table class="basic-table">
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

                            <?php for ($i = 0; $i < 10; $i++) {
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
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Basic Table - Table List</h6>
                </div>
                <div class="table-responsive">
                    <table class="table-list">
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

                            <?php for ($i = 0; $i < 10; $i++) {
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
<?php include('footer.php') ?>