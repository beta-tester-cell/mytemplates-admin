<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb">
		<a href="index.php">Dashboard</a>
		<?php if($_GET['bread'] == 'akademik-pusat'): ?>
			<a href="#">Akademik Pusat</a>
		<?php else: ?>
			<a href="#">Akademik Cabang</a>
		<?php endif; ?>
		<a href="eub-master-soal.php">Master Soal</a>
	</div>
</div>
<div class="content">
	<div class="container">


		<div class="py-1">
			<div class="card">
				<div class="d-flex grid-gap-2">
					<a href="form-soal-eub.php" class="btn btn-link"><i class="fa fa-plus"></i> ADD SOAL </a>
					<a href="upload-soal-eub.php"  style="width: 130px;" class="btn btn-primary"> UPLOAD SOAL</a>
				</div>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>List Master Soal EUB</h6>
					<div class="select-export">
						<button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
						<div class="type-export">
							<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
							<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
							<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
						</div>
					</div>
				</div>

				<div class="filter-eub">
					<select name="jenis_soal" id="jenis_soal">
						<option value="0">-- Pilih Jenis Soal --</option>
						<option value="Dosen">Dosen</option>
						<option value="Manajemen">Manajemen</option>
					</select>
					<select name="status" id="status">
						<option value="0">-- Pilih Status --</option>
						<option value="Active">Active</option>
						<option value="Not Active">Not Active</option>
					</select>
				</div>

				<div class="py-1">


					<div class="table-responsive">
						<table class="table-list" id="datatable">
							<thead>
								<tr>
									<th class="align-center">No</th>
									<th class="align-left">Soal</th>
									<th class="align-left">Jenis Soal</th>
									<th class="align-center">Active</th>
									<th class="align-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-center">1</td>
									<td class="align-left">Dosen Menggunakan Pakaian Yang rapih</td>
									<td class="align-left">Dosen</td>
									<td class="align-center">Active</td>
									<td class="align-center">
										<a href="form-soal-eub.php" title="Edit"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								<tr>
									<td class="align-center">2</td>
									<td class="align-left">Dosen Masuk Ruang kelas Tepat waktu atau sebelum perkuliahan dimulai</td>
									<td class="align-left">Dosen</td>
									<td class="align-center">Active</td>
									<td class="align-center">
										<a href="form-soal-eub.php" title="Edit"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								<tr>
									<td class="align-center">3</td>
									<td class="align-left">Dosen Bersikap ramah dan sopan</td>
									<td class="align-left">Dosen</td>
									<td class="align-center">Active</td>
									<td class="align-center">
										<a href="form-soal-eub.php" title="Edit"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								<tr>
									<td class="align-center">4</td>
									<td class="align-left">Dosen Menggunakan B.Ingris Diawal Pertemuan</td>
									<td class="align-left">Dosen</td>
									<td class="align-center">Active</td>
									<td class="align-center">
										<a href="form-soal-eub.php" title="Edit"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								<tr>
									<td class="align-center">5</td>
									<td class="align-left">Dosen selalu memberikan materi sebelum perkuliahan</td>
									<td class="align-left">Dosen</td>
									<td class="align-center">Active</td>
									<td class="align-center">
										<a href="form-soal-eub.php" title="Edit"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include('footer-datatable.php') ?>