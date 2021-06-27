<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="pengelolaan-manajemen-akun.php">Pengelolaan Manajemen Akun</a>
    </div>
</div>

<div class="content">

    <div class="container">

        <div class="form grid-2 grid-gap-1 py-1">

            <div class="card">
                <div class="card-header">
                    <h6>Form Tambah Akun</h6>
                </div>

                <div class="form-inputs">
                    <label><b>User Type</b></label>
                    <select class="width-100" name="user-level-gen" id="user-level-gen">
                        <option value="">-- Pilih Type --</option>
                        <option value="1">Level 1 [Administrator]</option>
                        <option value="2" selected>Level 2 [Entry Data]</option>
                        <option value="3">Level 3 [Supervisor]</option>
                    </select>
                </div>

                <div class="form-inputs">
                    <label><b>Username</b></label>
                    <input class="width-100" type="text" name="username" value="Dadang">
                </div>

                <div class="form-inputs">
                    <label><b>Password</b></label>
                    <input class="width-100" type="password" name="password" value="Dadang123">
                </div>

                <div class="form-inputs">
                    <label><b>Password Re-type</b></label>
                    <input class="width-100" type="password" name="password-re" value="Dadang123">
                </div>

                <div class="form-inputs">
                    <label><b>Cabang/Kampus</b></label>
                    <select class="width-100" name="cabang" id="cabang">
                        <option value="">-- Pilih Cabang --</option>
                        <option value="003">Cilodong</option>
                        <option value="003">Kramat Raya</option>
                        <option value="002">Jakarta Timur</option>
                        <option value="001" selected>Jakarta Utara</option>
                    </select>
                </div>

                <button type='submit' class="btn btn-link btn-secondary px-20">Add New</button>
                <button type="button" class="btn btn-link btn-secondary px-20" data-toggle="modal" data-target="#Modal-Generate">
                    Generate User
                </button>
            </div>

            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Akun </h6>

                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button">Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex grid-gap-1 py-1 flex-change">

                    <div class="filtering-suspend">
                        <label><b>Suspend</b></label>
                        <label><i class="far fa-square" style="color:red;background-color: red"></i></label>
                    </div>

                    <div class="filtering-suspend" style="position:absolute; right:80px;">
                        <select name="act-suspend" id="act-suspend">
                            <option value="">-- Pilih Tipe --</option>
                            <option value="activate" selected>Activate</option>
                            <option value="suspend">Suspend</option>
                        </select>
                    </div>

                </div>

                <div class="table-responsive pt-2">
                    <table class="table-list" id="datatable">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Cabang/Kampus</th>
                                <th>Date Modified</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>Rusma</td>
                                <td>**********</td>
                                <td>2</td>
                                <td>Kramat Raya</td>
                                <td>2021-07-03 16:00</td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#Modal-Reset" class="text-secondary"><i class="fas fa-edit"></i></button>
                                        <a href="#javascript:;" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>Dmizwar</td>
                                <td>**********</td>
                                <td>1</td>
                                <td>Kramat Raya</td>
                                <td>2021-07-03 16:00</td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#Modal-Reset" class="text-secondary"><i class="fas fa-edit"></i></button>
                                        <a href="#javascript:;" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>Omar</td>
                                <td class="text-danger">
                                    **********
                                </td>
                                <td class="text-danger">
                                    1
                                </td>
                                <td class="text-danger">
                                    Cilodong
                                </td>
                                <td class="text-danger">
                                    2021-07-03 16:00 </td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#Modal-Reset" class="text-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="#javascript:;" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>Omar</td>
                                <td class="text-danger">
                                    **********
                                </td>
                                <td class="text-danger">
                                    1
                                </td>
                                <td class="text-danger">
                                    Cilodong
                                </td>
                                <td class="text-danger">
                                    2021-07-03 16:00
                                </td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#Modal-Reset" class="text-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="#javascript:;" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>Omar</td>
                                <td class="text-danger">
                                    **********
                                </td>
                                <td class="text-danger">
                                    1
                                </td>
                                <td class="text-danger">
                                    Cilodong
                                </td>
                                <td class="text-danger">
                                    2021-07-03 16:00
                                </td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#Modal-Reset" class="text-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="#javascript:;" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox" name="id[]" id="id[]"></td>
                                <td>Omar</td>
                                <td class="text-danger">
                                    **********
                                </td>
                                <td class="text-danger">
                                    1
                                </td>
                                <td class="text-danger">
                                    Cilodong
                                </td>
                                <td class="text-danger">
                                    2021-07-03 16:00
                                </td>
                                <td>
                                    <a href="javascript:;" data-toggle="modal" data-target="#Modal-Reset" class="text-secondary"><i class="fas fa-edit"></i></a>
                                    <a href="#javascript:;" class="text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </div>
</div>

<!-- MODAL GENERATE -->
<div class="modal fade" id="Modal-Generate" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LongModalLabel">Generate Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-inputs">
                    <label><b>Level User</b></label>
                    <select class="width-100" name="user-level" id="user-level">
                        <option value="">-- Pilih Level --</option>
                        <option value="1" selected>Level 1 [Kabid Akademik]</option>
                        <option value="2">Level 2 [Kabid Keuangan]</option>
                        <option value="3">Level 3 [Kabid Marketing]</option>
                    </select>
                </div>

                <div class="form-inputs">
                    <label></label>
                    <button type="submit" class="btn btn-link btn-primary" style="width:160px">Generate User</button>
                </div>

                <div class="progress-bar-primary">
                    <progress id="progress1" value="7" max="10"></progress>
                </div>
                <div class="desc d-flex flex-space-between text-primary">
                    <span>1</span>
                    <span>10</span>
                </div>
                <label class="py-1">
                    Total 7 dari 10 Cabang
                </label>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL GENERATE -->

<!-- MODAL RESET -->
<div class="modal fade" id="Modal-Reset" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LongModalLabel">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-inputs">
                    <label><b>Username</b></label>
                    <input type="text" name="username" value="Rusma" class="width-100" readonly>
                </div>

                <div class="form-inputs">
                    <label><b>Password Baru</b></label>
                    <input type="password" name="password" value="Rusma123" class="width-100">
                </div>

                <div class="form-inputs">
                    <label><b>Re-type Password Baru</b></label>
                    <input type="password" name="password-retype" value="Rusma123" class="width-100">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width:100px">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL RESET -->

<?php include('footer-datatable.php'); ?>