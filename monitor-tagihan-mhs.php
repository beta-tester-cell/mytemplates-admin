<?php include('header.php') ?>
<div class="breadcrumb-wrapper">

    <div class="breadcrumb">

        <a href="index.php">Dashboard</a>

        <a href="#">Keuangan Cabang</a>

        <a href="#">Transaksi</a>

        <a href="monitor-tagihan-mhs.php">Monitoring Tagihan Mahasiswa</a>

    </div>

</div>
<div class="content">
    
    <div class="container">

        <div class="py-1">

            <div class="card">

                <div class="d-flex flex-start">

                    <a href="rekapitulasi-piutang.php" class="btn-status btn-primary">Rekapitulasi Piutang</a>
                   
                </div>

            </div>

        </div>

        <div class="py-1">

            <div class="card">

                <div class="card-header d-flex flex-space-between">

                    <h6>Monitoring Tagihan Mahasiswa (Sesuai Rencana Pembayaran)</h6>

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

                    <select name="prodi" id="prodi">

                        <option value="0">-- Pilih Prodi --</option>

                        <option value="1" selected>Manajemen Informatika</option>

                        <option value="2">Administrasi Perkantoran</option>

                        <option value="3">Multimedia</option>

                    </select>

                    <select name="tahunakademik" id="tahunakademik">

                        <option value="0">-- Pilih Tahun Akademik --</option>

                        <option value="2020/2021">2020/2021</option>

                        <option value="2019/2020">2019/2020</option>

                        <option value="2018/2019">2018/2019</option>

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

                                <th class="align-left" width="120">Due Date</th>

                                <th class="align-left" width="120">Amount</th>

                                <th class="align-left" width="230">Collection Detail</th>

                                <th class="align-left">Collection Result</th>

                                <th class="align-center">Action</th>


                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                 <th class="align-center">1</th>

                                 <th class="align-center">2022121</th>

                                 <th class="align-left">Susiana</th>

                                 <th class="align-center">BA</th>

                                 <th class="align-left">2021-07-10</th>

                                 <th class="align-left">IDR 1.200.000</th>

                                 <th class="align-left">

                                     <ul style="list-style-type:disc">

                                         <li>[0012] Mengirimkan kembali surat tagihan</li>

                                         <li>[0013] Memanggil Orang Tua</li>

                                     </ul>

                                 </th>

                                 <th class="align-left text-success">Akan Dibayarkan di Tanggal 03 Agustus 2021</th>

                                 <th class="align-center">

                                     <a href="add-monitoring-tagihan.php" class="text-secondary"><i class="fa fa-plus" aria-hidden="true"></i></a> &nbsp;

                                     <a href="detail-monitoring-tagihan.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                                 </th>

                            </tr>

                                <tr>

                                   <th class="align-center">2</th>

                                   <th class="align-center">2022121</th>

                                   <th class="align-left">Susiwati</th>

                                   <th class="align-center">BA</th>

                                   <th class="align-left">2021-07-10</th>

                                   <th class="align-left">IDR 2.000.000</th>

                                   <th class="align-left">

                                       <ul style="list-style-type:disc">

                                           <li>[0013] Direct Call Mahasiswa</li>

                                       </ul>

                                   </th>

                                   <th class="align-left text-success">Permintaan Keringanan 50%</th>

                                   <th class="align-center">

                                       <a href="add-monitoring-tagihan.php" class="text-secondary"><i class="fa fa-plus" aria-hidden="true"></i></a> &nbsp;

                                       <a href="detail-monitoring-tagihan.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                                   </th>

                               </tr>


                                <tr>

                                   <th class="align-center">3</th>

                                   <th class="align-center">2022121</th>

                                   <th class="align-left">Susiani</th>

                                   <th class="align-center">BA</th>

                                   <th class="align-left">2021-07-10</th>

                                   <th class="align-left">IDR 500.000</th>

                                   <th class="align-left">

                                       <ul style="list-style-type:disc">

                                           <li>Direct Mail</li>
                                           <li>Direct Message</li>
                                           <li>Direct Call</li>

                                       </ul>

                                   </th>

                                   <th class="align-left text-success">Tidak ada Jawaban</th>

                                   <th class="align-center">

                                       <a href="add-monitoring-tagihan.php" class="text-secondary"><i class="fa fa-plus" aria-hidden="true"></i></a> &nbsp;

                                       <a href="detail-monitoring-tagihan.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                                   </th>

                               </tr>

                                <tr>

                                   <th class="align-center">4</th>

                                   <th class="align-center">2022121</th>

                                   <th class="align-left">Susilawanty</th>

                                   <th class="align-center">BA</th>

                                   <th class="align-left">2021-07-10</th>

                                   <th class="align-left">IDR 1.000.000</th>

                                   <th class="align-left">

                                      -

                                   </th>

                                   <th class="align-left text-success">-</th>

                                   <th class="align-center">

                                       <a href="add-monitoring-tagihan.php" class="text-secondary"><i class="fa fa-plus" aria-hidden="true"></i></a> &nbsp;

                                       <a href="detail-monitoring-tagihan.php" class="text-primary"><i class="fas fa-eye" aria-hidden="true"></i></a>

                                   </th>

                               </tr>

                        </tbody>

                       <tfoot class="bg-color-primary">

                            <tr>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th class="align-left"><b>Grand Total</b></th>

                                <th class="align-left">IDR 4.700.000</th>

                                <th></th>

                                <th></th>

                                <th></th>
                            </tr>


                            <tr>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th></th>

                                <th class="align-left"><b>Collection Rasio</b></th>

                                <th class="align-left">75 %</th>

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