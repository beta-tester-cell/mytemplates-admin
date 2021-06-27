<?php include("header.php") ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Dosen</a>
        <a href="jadwal-perkuliahan-dosen.php">Jadwal Perkuliahan</a>
        <a href="rkk.php">Rencana Kegiatan Kuliah</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="d-flex flex-start grid-2">
                    <h6 class="rkk-page-tittle"><i class="fas fa-campground px-1"></i> Kelas : MI-00-XX</h6>
                    <h6 class="rkk-page-tittle"> Pengantar Database Administrasi</h6>
                </div>
            </div>
        </div>
        <div class="py-1 grid-2 grid-gap-1">
            <div class="card">
                <div class="card-header text-center">
                    <h6>Form Rencana Kegiatan Kuliah</h6>
                </div>
                <form action="">
                    <div class="my-1 rkk-bold">
                        <label for="Tanggal">Tanggal dan Waktu Perkuliahan</label>
                        <input class="width-100" name="tanggal" id="tanggal" type="datetime-local" />
                    </div>
                    <div class="my-1 rkk-bold">
                        <label>Pencapaian Pembelajaran</label>
                        <textarea class="width-100" name="capaian" id="capaian" rows="2"></textarea>
                    </div>
                    <div class="my-1 rkk-bold">
                        <label>Pokok Pembahasan</label>
                        <textarea class="width-100" name="pokok" id="pokok" rows="2"></textarea>
                    </div>
                    <div class="my-1 rkk-bold">
                        <label>Sub Pokok Pembahasan</label>
                        <textarea class="width-100" name="subpokok" id="sunpokok" rows="2"></textarea>
                    </div>
                    <div class="rkk-hor-form">
                        <label>Sesi Pertemuan Ke</label>
                        <select name="sesi" id="sesi">
                            <option value="null">-- Pilih Pertemuan --</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                        </select>
                    </div>
                    <div class="rkk-hor-form">
                        <label>Ruang</label>
                        <select name="ruang" id="ruang">
                            <option value="null">-- Pilih Ruang --</option>
                            <option value="1">Ruang 1</option>
                            <option value="2">Ruang 2</option>
                            <option value="3">Ruang 3</option>
                            <option value="4">Ruang 4</option>
                            <option value="5">Online</option>
                        </select>
                    </div>
                    <div class="rkk-hor-form">
                        <label>Status</label>
                        <select name="status" id="satus">
                            <option value="null">-- Pilih Status --</option>
                            <option value="1">Non-active</option>
                            <option value="2">Active</option>
                            <option value="3">Finish</option>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-secondary btn-submit rkk-distancing"><i class="fa fa-save rkk-distancing"></i> Submit</button>
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="card-header text-center">
                    <h6>List Rencana Kegiatan Kuliah</h6>
                </div>
                <div class="rkk-list-panel">
                    <div class="width-100 rkk-list-finish grid-3-rkk">
                        <div class="text-white">Pertemuan ke-1</div>
                        <div class="text-center text-white">08-06-2021</div>
                        <div class="text-right">
                            <a data-toggle="modal" data-target="#pertemuan1" class="rkk-distancing text-white"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="modal" id="pertemuan1" tabindex="-1" aria-labelledby="test" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="test">Pengantar Database Administrasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="height: 300px;">
                                        <div class="rkk-hor-form">
                                            <label>Kelas</label>
                                            <label>: MI-00-XX</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Pertemuan Ke</label>
                                            <label>: 1</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Tanggal</label>
                                            <label>: 08-06-2021</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Ruang</label>
                                            <label>: Lab 007</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Status</label>
                                            <label class="text-danger">: Finish</label>
                                        </div>
                                        <div class="my-1">
                                            <label>Deskripsi Pencapaian Pembelajaran :</label>
                                            <div class="rkk-p-modal">Berisikan capaian yang ditargetkan pada pertemuan ke 1</div>
                                        </div>
                                        <div class="my-1">
                                            <label>Pokok Pembahasan :</label>
                                            <div class="rkk-p-modal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, error. Ipsa alias consequatur similique porro omnis libero? Impedit dicta architecto, corrupti corporis molestias earum iure laboriosam excepturi itaque ullam harum.</div>
                                        </div>
                                        <div class="my-1">
                                            <label>Sub Pokok Pembahasan :</label>
                                            <div class="rkk-p-modal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, error. Ipsa alias consequatur similique porro omnis libero? Impedit dicta architecto, corrupti corporis molestias earum iure laboriosam excepturi itaque ullam harum.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary width-100" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="width-100 rkk-list-active grid-3-rkk">
                        <div class="text-white">Pertemuan ke-2</div>
                        <div class="text-center text-white">15-06-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-white"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-white"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan2" class="rkk-distancing text-white"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="modal" id="pertemuan2" tabindex="-1" aria-labelledby="test2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="test2">Pengantar Database Administrasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="height: 300px;">
                                        <div class="rkk-hor-form">
                                            <label>Kelas</label>
                                            <label>: MI-00-XX</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Pertemuan Ke</label>
                                            <label>: 2</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Tanggal</label>
                                            <label>: 15-06-2021</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Ruang</label>
                                            <label>: Lab 007</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Status</label>
                                            <label class="text-secondary">: Active</label>
                                        </div>
                                        <div class="my-1">
                                            <label>Deskripsi Pencapaian Pembelajaran :</label>
                                            <div class="rkk-p-modal">Berisikan capaian yang ditargetkan pada pertemuan ke 2</div>
                                        </div>
                                        <div class="my-1">
                                            <label>Pokok Pembahasan :</label>
                                            <div class="rkk-p-modal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, error. Ipsa alias consequatur similique porro omnis libero? Impedit dicta architecto, corrupti corporis molestias earum iure laboriosam excepturi itaque ullam harum.</div>
                                        </div>
                                        <div class="my-1">
                                            <label>Sub Pokok Pembahasan :</label>
                                            <div class="rkk-p-modal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, error. Ipsa alias consequatur similique porro omnis libero? Impedit dicta architecto, corrupti corporis molestias earum iure laboriosam excepturi itaque ullam harum.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary width-100" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-3</div>
                        <div class="text-center">22-06-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="modal" id="pertemuan3" tabindex="-1" aria-labelledby="test3" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="test3">Pengantar Database Administrasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="height: 300px;">
                                        <div class="rkk-hor-form">
                                            <label>Kelas</label>
                                            <label>: MI-00-XX</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Pertemuan Ke</label>
                                            <label>: 2</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Tanggal</label>
                                            <label>: 22-06-2021</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Ruang</label>
                                            <label>: Lab 007</label>
                                        </div>
                                        <div class="rkk-hor-form">
                                            <label>Status</label>
                                            <label class="text-primary">: Non-Active</label>
                                        </div>
                                        <div class="my-1">
                                            <label>Deskripsi Pencapaian Pembelajaran :</label>
                                            <div class="rkk-p-modal">Berisikan capaian yang ditargetkan pada pertemuan ke </div>
                                        </div>
                                        <div class="my-1">
                                            <label>Pokok Pembahasan :</label>
                                            <div class="rkk-p-modal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, error. Ipsa alias consequatur similique porro omnis libero? Impedit dicta architecto, corrupti corporis molestias earum iure laboriosam excepturi itaque ullam harum.</div>
                                        </div>
                                        <div class="my-1">
                                            <label>Sub Pokok Pembahasan :</label>
                                            <div class="rkk-p-modal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, error. Ipsa alias consequatur similique porro omnis libero? Impedit dicta architecto, corrupti corporis molestias earum iure laboriosam excepturi itaque ullam harum.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary width-100" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-4</div>
                        <div class="text-center">29-06-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-5</div>
                        <div class="text-center">06-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-6</div>
                        <div class="text-center">13-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-7</div>
                        <div class="text-center">20-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-8</div>
                        <div class="text-center">27-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-9</div>
                        <div class="text-center">03-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-10</div>
                        <div class="text-center">10-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-11</div>
                        <div class="text-center">17-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-12</div>
                        <div class="text-center">24-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-13</div>
                        <div class="text-center">31-07-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="width-100 rkk-list grid-3-rkk">
                        <div>Pertemuan ke-14</div>
                        <div class="text-center">07-08-2021</div>
                        <div class="text-right">
                            <a href="#" class="rkk-distancing text-secondary"><i class="fa fa-edit"></i></a>
                            <a href="#" class="rkk-distancing text-danger"><i class="fas fa-eraser"></i></a>
                            <a data-toggle="modal" data-target="#pertemuan3" class="rkk-distancing text-primary"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
<script>
    $(document).ready(function() {

    })
</script>
</body>

</html>