<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="menu.php">Manajemen Menu</a>
    </div>
</div>
<div class="content">
    <div class="container height-100">
        <div class="py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Manajemen Menu</h6>
                </div>
                <div class="grid-2 grid-gap-1">
                    <div>
                        <form>
                            <div class="form-inputs">
                                <label>Tipe Menu</label>
                                <input type="text" name="type_menu" placeholder="Tipe Menu">
                            </div>
                            <div class="form-inputs">
                                <label>Deskripsi</label>
                                <textarea name="desc" id="desc" rows="5"></textarea>
                            </div>
                            <div class="d-flex flex-center">
                                <button class="btn btn-secondary btn-submit" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="basic-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Menu</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    echo '<tr>
                                    <td>' . $i . '</td>
                                    <td>Menu</td>
                                    <td>Menu Utama Aplikasi Cortech</td>
                                    <td>
                                        <a href="list-menu.php" class="text-primary"><i class="fas fa-list"></i></a>
                                        <a href="#" class="text-secondary"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="text-danger"><i class="fas fa-eraser"></i></a>
                                    </td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php include('footer.php') ?>