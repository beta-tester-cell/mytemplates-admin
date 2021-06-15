<?php include('header.php') ?>
<div class="content">
	<div class="container">
		<div class="py-1">
			<div class="card">
				<div class="d-flex flex-start">
					<a href="#" class="btn btn-link">
						<span><i class="fa fa-print"></i> Cetak Komponen </span>
					</a>
					<a href="#" class="btn btn-link">
						<span><i class="fa fa-print"></i> Cetak KHS </span>
					</a>
				</div>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="form grid-custom-onecard grid-gap-1 py-1">
					<div class="card-header d-flex flex-space-between">
						<h6>Report Nilai Komponen</h6>
					</div>
					<div class="card-header d-flex flex-space-between">
						<h6>List Nilai Komponen Mahasiswa</h6>
					</div>
				</div>
				<div class="form grid-custom-onecard grid-gap-1 py-1">
					<div class="filtering-list">
						<div class="my-1">
							<label><b>Tahun Akademik</b></label>
							<select name="tahunakademik" class="width-100" id="tahunakademik">
								<option value="0">-- Pilih Tahun Akademik --</option>
								<option value="2020/2021">2020/2021</option>
								<option value="2019/2020">2019/2020</option>
								<option value="2018/2019">2018/2019</option>
							</select>
						</div>
						<div class="my-1">
							<label><b>Semester</b></label>
							<select name="semester" class="width-100" id="semester">
								<option value="0">-- Pilih Semester --</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
						</div>
						<div class="my-1">
							<label><b>Jurusan</b></label>
							<select name="tahunakademik" class="width-100" id="tahunakademik">
								<option value="0">-- Pilih Jurusan --</option>
								<option value="MI">Manajemen Informatika</option>
								<option value="AB">Administrasi Bisnis</option>
								<option value="AK">Akuntansi</option>
								<option value="HM">Hubugan Masyarakat</option>
							</select>
						</div>
					</div>

					<div class="list-nilai">
						<div class="select-export export-list">
							<div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

							<div class="type-export">
								<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
								<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
								<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
							</div>
						</div>
						<div class="table-responsive  list-table-nilai">
							<table id="datatable" class="table-list">
								<thead>
									<tr>
										<th class="align-left">Nama Mahasiswa</th>
										<th class="align-left">Jurusan</th>
										<th class="align-center">Total SKS</th>
										<th class="align-center">Realisasi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> 
                                        <input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-33"></span>
                                   		[0290091] Fadilah Nurfitrah</td>
										<td class="align-left">Manajemen Informatika</td>
										<td class="align-center">20</td>
										<td class="align-center">20</td>
									</tr>
									<tr>
										<td>
										<input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-33"></span>
										[0290001] Irfan Zadin</td>
										<td class="align-left">Manajemen Informatika</td>
										<td class="align-center">20</td>
										<td class="align-center">20</td>
									<tr>
										<td>
										<input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-33"></span>
                                    	[0330000] Khaerul Istafa</td>
										<td class="align-left">Manajemen Informatika</td>
										<td class="align-center">20</td>
										<td class="align-center">20</td>
									</tr>
									<tr>
										<td>
										<input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-33"></span>
										[0290004] Rosihan Arbisaid</td>
										<td class="align-left">Manajemen Informatika</td>
										<td class="align-center">20</td>
										<td class="align-center">20</td>
									</tr>
									<tr>
										<td>
										<input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-33"></span>
										[0290007] Muhammad Rizal</td>
										<td class="align-left">Manajemen Informatika</td>
										<td class="align-center">20</td>
										<td class="align-center">20</td>
									</tr>
									<tr>
										<td>
										<input type="checkbox" value="1">
                                        <span class="checkmark checkmark-left-33"></span>
										[0290009] Elawati</td>
										<td class="align-left">Manajemen Informatika</td>
										<td class="align-center">20</td>
										<td class="align-center">20</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="ValidasiUpdate" tabindex="-1" aria-labelledby="ValidasiUpdateLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-fit-custom">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title" id="ValidasiUpdateLabel">Tambah Mahasiswa Ploting PA</h5> -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button> 
			</div>
			<form>
				<div class="modal-body" style="height: 150px;">
					<h6 style="text-align: 	center; ">Anda Butuh Otorisasi Untuk Melakukan Update Nilai !!</h6>
				</div>
				<div class="modal-footer" style="align-items: center; justify-content: center;">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include('footer-datatable.php') ?>