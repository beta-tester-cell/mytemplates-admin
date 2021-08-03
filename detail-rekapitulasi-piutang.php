<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Transaksi</a>

        <a href="monitor-tagihan-mhs.php">Monitoring Tagihan Mahasiswa</a>

        <a href="rekapitulasi-piutang.php">Rekapitulasi Piutang</a>
       
        <a href="detail-rekapitulasi-piutang.php">Detail Rekapitulasi Piutang</a>

    </div>

</div>
<div class="content">
    
    <div class="container">

        <div class="py-1">

            <div class="card">

                <div class="d-flex flex-start">

                   <a href="rekapitulasi-piutang.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
                   
                </div>

            </div>

        </div>

        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Detail Tagihan Mahasiswa (Sesuai Rencana Pembayaran)</h6>

                    <div class="select-export" style="width: 100px; float: right; display: block;">

                        <button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

                        <div class="type-export">

                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

                        </div>

                    </div>

                </div>

                <div class="filter-jadual">

                    <input type="text" id="nim_nama_dosen" value="NIM/Nama">

                    <select name="kelas" id="kelas">

                        <option value="0">-- Pilih Kelas --</option>

                        <option value="1" selected>BA-312</option>

                        <option value="2">BA-222</option>

                        <option value="3">BA-111</option>

                    </select>

                    <button class="btn btn-primary btn-submit" style="width: 90px;" id="button-view">Tampilkan</button>

                </div>

                <div class="table-responsive py-1">

                    <table id="datatable">

                        <thead class="bg-color-primary">

                            <tr>

                                <th class="align-center">No</th>

                                <th class="align-center">NIM</th>

                                <th class="align-left">Nama Mahasiswa</th>

                                <th class="align-center">Prodi</th>

                                <th class="align-left">Jatuh Tempo</th>

                                <th class="align-left">Tagihan</th>

                                <th class="align-left">Tanggal Bayar</th>

                                <th class="align-left">Sebesar</th>

                                <th class="align-center">Status</th>


                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                              <th class="align-center">1</th>

                              <th class="align-center">2022121</th>

                              <th class="align-left">Robi</th>

                              <th class="align-center">BA</th>

                              <th class="align-left">2021-08-10</th>

                              <th class="align-left">IDR 1.600.000</th>

                              <th class="align-left">2021-08-1</th>

                              <th class="align-left">IDR 1.600.000</th>

                              <th class="align-center">Lunas</th>


                            </tr>

                            <tr>

                              <th class="align-center">2</th>

                              <th class="align-center">2022122</th>

                              <th class="align-left">Robianto</th>

                              <th class="align-center">BA</th>

                              <th class="align-left">2021-08-10</th>

                              <th class="align-left">IDR 2.000.000</th>

                              <th class="align-left">2021-08-1</th>

                              <th class="align-left">IDR 2.000.000</th>

                              <th class="align-center">Lunas</th>

                            </tr>

                             <tr>

                              <th class="align-center">3</th>

                              <th class="align-center">2022123</th>

                              <th class="align-left">Robial</th>

                              <th class="align-center">BA</th>

                              <th class="align-left">2021-08-10</th>

                              <th class="align-left">IDR 1.500.000</th>

                              <th class="align-left">2021-08-1</th>

                              <th class="align-left">IDR 1.500.000</th>

                              <th class="align-center">Lunas</th>

                            </tr>

                            <tr>

                              <th class="align-center">4</th>

                              <th class="align-center">2022124</th>

                              <th class="align-left">Roberto</th>

                              <th class="align-center">BA</th>

                              <th class="align-left">2021-08-10</th>

                              <th class="align-left">IDR 1.000.000</th>

                              <th class="align-left">2021-08-1</th>

                              <th class="align-left">IDR 1.000.000</th>

                              <th class="align-center">Lunas</th>

                            </tr>

                           
                        </tbody>

                       <tfoot class="bg-color-primary">

                            <tr>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th class="align-left"><b>Grand Total</b></th>

                                <th class="align-left">IDR 5.100.000</th>

                                <th></th>

                                <th class="align-left">IDR 5.100.000</th>

                                <th></th>
                            </tr>


                            <tr>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th class="align-left"><b>Rasio</b></th>

                                <th class="align-left">100 % Paid</th>

                                <th></th>

                                <th></th>

                                <th></th>

                            </tr>

                         </tfoot>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include('footer-datatable.php') ?>