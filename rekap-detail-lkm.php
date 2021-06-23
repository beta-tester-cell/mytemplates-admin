<?php include('header.php') ?>
<div class="content">
    <div class="container">

        <div class="py-1">
            <div class="card">
                <a href='rekap-lkm.php'class="btn btn-link btn-danger px-20">Back</a>
            </div>
        </div>

        <div class="py-1">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Detail Rekap LKM</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="grid-3 grid-gap-1">
                   <div class="my-1">
                       <label><b>Matakuliah :</b></label><br>
                       <span>[009000] Basis Data</span><br>
                       <label><b>Kelas :</b></label><br>
                       <span>IK_REGuler 01</span><br>
                   </div>
                    <div class="my-1">
                      <label><b>Tahun Akademik :</b></label><br>
                      <span>2020/2021</span><br>
                      <label><b>Semester:</b></label><br>
                      <span>1 ( Ganjil )</span>
                   </div>
                    <div class="my-1">
                       <label><b>SKS :</b></label><br>
                       <span>4</span><br>
                       <label><b>Target Pertemuan</b></label><br>
                       <span>28</span><br>
                   </div>
               </div>

               <div class="table-responsive">
                <table class="basic-table" id="datatable">
                    <thead>
                        <tr>
                            <th class="align-left">Pert.Ke</th>
                            <th class="align-left">Tanggal</th>
                            <th class="align-left">Ruang</th>
                            <th class="align-left">Pokok Bahasan</th>
                            <th class="align-left">Sub Pokok Bahasan</th>
                            <th class="align-left">Tugas / Formatif</th>
                            <th class="align-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td class="align-left">1</td>
                           <td class="align-left">2021-07-09</td>
                           <td class="align-left">LMS-Online</td>
                           <td class="align-left">Pengertian bAsis data</td>
                           <td class="align-left">Sejarah Basisdata</td>
                           <td class="align-left">Membuat Rangkuman</td>
                           <td class="align-center">
                             <a href="rekap-detail-lkm-dosen.php">View</a>
                          </td>
                       </tr>
                        <tr>
                           <td class="align-left">2</td>
                           <td class="align-left">2021-07-16</td>
                           <td class="align-left">LMS-Online</td>
                           <td class="align-left">Struktur Data</td>
                           <td class="align-left">Memahami struktur data</td>
                           <td class="align-left">membuat struktur data</td>
                           <td class="align-center">
                             <a href="rekap-detail-lkm-dosen.php">View</a>
                          </td>
                       </tr>
                 </tbody>
             </table>
         </div>

     </div>
 </div>


</div>
</div>
<?php include('footer-datatable.php') ?>