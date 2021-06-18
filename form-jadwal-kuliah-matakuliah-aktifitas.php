<?php include('header.php') ?>

<style type="text/css">
    .ket-log{
        font-size: 23px;
        margin-top: 55px;
        color:blue;
    }

    .ket-loc{
        font-size: 18px;
        margin-top: 55px;
    }

    .ket-mtr{
        font-size: 18px;
    }
</style>

<div class="content">

    <div class="container">

        <div class="grid-2 grid-gap-1 py-1">

            <div class="card">
                <div class="card-header">
                    <h6>Info Pertemuan</h6>
                </div>

                <div class="my-1">
                    <input class="width-100" name="title" type="text" value='Pertemuan Ke 1 - 16-Juni-2021' readonly="">
                </div>

                <div class="my-1">
                    <label><b>Kehadiran : </b></label>
                    <label><font color="blue">Hadir</font> [08:01]</label>
                </div>

                <div class="my-1">
                    <label><b>Aktifitas : </b></label><br>
                    <label><i class="far fa-file-pdf"></i></label>
                    <label>Tugas 1#Rosihan</label> <br> <i class="far fa-calendar"></i> <label style="color:gray">2021-07-16 11:59</label>
                </div>

                <div class="my-1">
                    <label><b>Group Discussion : </b></label><br>
                    <label><i class="far fa-comment"></i></label>
                    <label>None</label>
                </div>

            </div>

            <div class="card" style="width:100%">
                <div class="card-header d-flex flex-space-between">
                    <h6>Pertemuan Ke 1 <font style="font-size:21px"><br>[Online] durasi  08:00 - 09:45</font></h6>
                </div>

                <div class="py-1">
                    <div class="form-inputs">
                        <label class="ket-mtr"><b>Nama Dosen </b></label>
                        <label class="ket-mtr">Masria M.Kom</label>
                    </div>
                    <div class="form-inputs">
                        <label class="ket-mtr"><b>Pokok Bahasan</b></label>
                        <label class="ket-mtr">Pengenalan Dasar</label>
                    </div>
                    <div class="form-inputs">
                        <label class="ket-mtr"><b>Sub Pokok Bahasan</b></label>
                        <label class="ket-mtr">Mengenal Struktur Tabel</label>
                    </div>
                    <div class="form-inputs">
                        <label class="ket-mtr"><b>Ruang</b></label>
                        <label class="ket-mtr">LMS Online</label>
                    </div>

                    <div class="form-inputs" style="margin-top:20px">
                        <label class="ket-mtr"><b>Materi Ajar :</b></label>
                    </div>

                    <div style="margin-top:-10px">
                        <label style="color:red">#Link Pembelajaran secara Online dengan Video Conference</label><br>
                        <label >Link ini digunakan untuk mengikuti pembelajaran online dengan menggunakan Google Meet</label>
                    </div>

                </div>

                <div style="margin-top:10px">
                    <label><i class="far fa-file-pdf"></i></label>
                    <label><b>Pertemuan Ke 1</b></label>
                </div>

                <div style="margin-top:20px">
                    <label><b>Tugas & Formatif :</b></label>
                </div>

                 <div style="margin-top:10px">
                    <label><i class="far fa-file-pdf"></i></label>
                    <label>Latihan 1</label><br>
                    <label>Batas Upload Tugas : <font style="color:blue">2021-07-16 23:59</font></label>
                </div>

                <div style="margin-top:10px">
                <button type='submit' class="btn btn-link btn-primary px-20">Upload Tugas</button>
                </div>

            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php'); ?>