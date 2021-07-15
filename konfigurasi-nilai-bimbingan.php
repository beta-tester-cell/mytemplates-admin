<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="#">Akademik Pusat</a>
        <a href="#">Konfigurasi Sidang</a>
        <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
    </div>
</div>
<div class="content">
    <div class="container">

        <div class="py-1 grid-custom-view grid-gap-2">
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Konfigurasi Kebutuhan Sidang</h6>
                </div>
                <ul class="menu-widget">
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-gelombang-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-gelombang-sidang.php">Gelombang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-gelombang-sidang.php">Gelombang</a>
                        </li>
                    <?php endif; ?>
                     <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-ploting-dospem.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-ploting-dospem.php">Ploting Dosen Pembimbing</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-ploting-dospem.php">Ploting Dosen Pembimbing</a>
                        </li>
                    <?php endif; ?>
                    <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-nilai-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-nilai-sidang.php">Nilai Komponen Sidang</a>
                        </li>
                    <?php endif; ?>
                     <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/konfigurasi-nilai-bimbingan.php') :
                    ?>
                        <li class="active">
                            <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="konfigurasi-nilai-bimbingan.php">Nilai Komponen Bimbingan</a>
                        </li>
                    <?php endif; ?>
                     <?php
                    if ($_SERVER['REQUEST_URI'] == '/mytemplates/validasi-pendaftaran-sidang.php') :
                    ?>
                        <li class="active">
                            <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="validasi-pendaftaran-sidang.php">Validasi Pendaftaran Sidang</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>List Nilai Komponen Bimbingan</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="py-1">
                    <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-link btn-secondary"> Add New </button>
                </div>
                <div class="table-responsive py-1">
                    <table id="datatable" class="table-list" border="1">
                        <thead>
                            <tr class="thead-color">
                                <th class="align-center">No</th>
                                <th class="align-left">Komponen</th>
                                <th class="align-center">Bobot</th>
                                <th class="align-center">Periode</th>
                                <th class="align-center">Jenis Sidang</th>
                                <th class="align-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-center">1</td>
                                <td class="align-left">KEDISIPLINAN</td>
                                <td class="align-center">5</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">2</td>
                                <td class="align-left">MOTIVASI</td>
                                <td class="align-center">5</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-center">3</td>
                                <td class="align-left">KREATIFITAS</td>
                                <td class="align-center">5</td>
                                <td class="align-center">21</td>
                                <td class="align-center">TA</td>
                                <td class="align-center">
                                	<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                                	<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                            	<td class="align-center">4</td>
                            	<td class="align-left">PENGUASAAN MATERI</td>
                            	<td class="align-center">10</td>
                            	<td class="align-center">21</td>
                            	<td class="align-center">TA</td>
                            	<td class="align-center">
                            		<a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
                            		<a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
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

<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel" class="align-center">Tambah Komponen Bimbingan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
                    <div class="grid-gap-2">
                        <div class="input-data">
                            <div class="my-1">
                                <label><b>Jenis Sidang</b></label>
                                <select name="jenis_sidang" class="width-100" id="jenis_sidang">
                                    <option value="0">-- Pilih Jenis Sidang --</option>
                                    <option value="1" selected>Tugas Akhir (TA)</option>
                                    <option value="2">Skripsi</option>
                                </select>
                            </div>

                            <div class="my-1">
                                <label><b>Periode</b></label>
                                <input class="width-100" id="periode" type="text" value="21" placeholder="Periode">
                            </div>

                            <div class="my-1">
                                <label><b>Komponen</b></label>
                                <textarea class="width-100" id="komponen" style="resize:none;height:100px;" type="text" placeholder="Komponen">Kepatuhan</textarea>
                            </div>


                            <div class="my-1">
                                <label><b>Bobot</b></label>
                                <input class="width-100" id="bobot" value="5" type="text" placeholder="Bobot">
                            </div>


                            <div class="d-flex py-1 ">
                                <button type="submit" style="width: 150px;" class="btn btn-secondary btn-submit mx-1">Simpan</button>
                               <button type="button"  style="width: 150px;" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>