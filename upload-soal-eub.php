<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb">
		<a href="index.php">Dashboard</a>
		<a href="#">Akademik Pusat</a>
		<a href="eub-master-soal.php">Master Soal</a>
		<a href="upload-soal-eub.php">Upload Soal EUB</a>
	</div>
</div>
<div class="content">
	<div class="container">


		<div class="py-1">
			<div class="card">
				<a href='eub-master-soal.php' class="btn btn-link btn-danger px-20">Back</a>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>Upload Master Soal EUB</h6>
				</div>

				<div class="grid-custom-view grid-gap-1">
					<div class="form-upload">
						<form>
							<div class="form-mr-2">
								<div class="form-inputs">
									<label>Download Template</label>
									<button class="btn btn-link btn-secondary" style="width: 150px;"><span>Template</span></button>
								</div>
								<div class="form-inputs">
									<label>Upload File</label>
									<input type="file" name="upload-kalender">
								</div>
								<div class="form-inputs">
									<label>&nbsp;</label>
									<div class="grid-2 grid-gap-3">
										<button class="btn btn-link btn-secondary"><span>Upload</span></button>
										<button class="btn btn-link btn-secondary"><span>Preview</span></button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="list-soal">
						
						<div class="py-1">
							<div class="table-responsive">
								<table class="table-list" id="datatable2">
									<thead>
										<tr>
											<th class="align-center">No</th>
											<th class="align-center">ID Soal</th>
											<th class="align-left">Soal</th>
											<th class="align-center">Jenis Soal</th>
											<th class="align-center">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="align-center">1</td>
											<td class="align-center">01001</td>
											<td class="align-left">Semua Ruangan DI kampus dingin dan bersih</td>
											<td class="align-center">Manajemen</td>
											<td class="align-center">Active</td>
										</tr>
										<tr>
											<td class="align-center">2</td>
											<td class="align-center">01002</td>
											<td class="align-left">Memiliki Sarana Ibadah yang bersih</td>
											<td class="align-center">Manajemen</td>
											<td class="align-center">Active</td>
										</tr>
										<tr>
											<td class="align-center">3</td>
											<td class="align-center">01003</td>
											<td class="align-left">Memiliki Sarana Olahraga	</td>
											<td class="align-center">Manajemen</td>
											<td class="align-center">Active</td>
										</tr>
										<tr>
											<td class="align-center">4</td>
											<td class="align-center">01004</td>
											<td class="align-left">Kebersihan lingkungan kampus terjaga</td>
											<td class="align-center">Manajemen</td>
											<td class="align-center">Active</td>
										</tr>
										<tr>
											<td class="align-center">5</td>
											<td class="align-center">01005</td>
											<td class="align-left">Pelayanan Pendidikan baik dan ramah</td>
											<td class="align-center">Manajemen</td>
											<td class="align-center">Active</td>
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
</div>

<?php include('footer-datatable.php') ?>