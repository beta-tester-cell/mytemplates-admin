<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Table</a>
        <a href="table.php">Basic Table</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="form grid-2 grid-gap-1">

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
            <div class="py-1">
                <div class="card">
                    <div class="card-header">
                        <h6> Basic table with color primary header </h6>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead class="bg-color-primary">
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
                        <h6> Basic table with color secondary header </h6>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead class="bg-color-secondary">
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
                        <h6> Basic table with color danger header </h6>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead class="bg-color-danger">
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
</div>
<?php include('footer.php') ?>