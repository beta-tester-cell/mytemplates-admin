<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="dashboard-page.php">Akademik Cabang</a>
        <a href="verifikasi-soal-ujian.php">Verifikasi Soal Ujian</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Verifikasi Soal Ujian Periode Ganjil 2020/2021</h6>
                </div>

                <div class="form grid-1 py-1">
                    <form>
                        <embed src="#" type="application / pdf" width="100%" height="600px" />

                        <div class="d-flex flex-center py-1">
                            <button type="submit" class="btn btn-primary btn-submit mx-1" id="btn-verifkasi">Verifikasi</button>
                            <button type="button" class="btn btn-danger btn-cancel mx-1" id="btn-back">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>