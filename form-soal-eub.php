<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb">
		<a href="index.php">Dashboard</a>
		<a href="#">Akademik Pusat</a>
		<a href="eub-master-soal.php">Master Soal</a>
		<a href="form-soal-eub.php">Input Soal EUB</a>
	</div>
</div>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="d-flex grid-gap-2">
					<a href="eub-master-soal.php" class="btn btn-link btn-danger px-20"> Back </a>
					<a href="upload-soal-eub.php"  style="width: 130px;" class="btn btn-primary"> UPLOAD SOAL</a>
				</div>
			</div>
		</div>

		<div class="py-1 grid-custom-view grid-gap-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6 style="font-size: 20px;">Input Master Soal EUB</h6>
				</div>
				<div class="form grid-1">
					<form>
						<div class="my-1">
							<label><b>ID Soal</b></label>
							<input class="width-100" name="id_soal" type="text" value='Auto Counter'>
						</div>

						<div class="my-1">
							<label><b>Jenis EUB</b></label>
							<select name="jenis_eub" class="width-100" id="jenis_eub">
								<option value="0">-- Pilih Jenis EUB --</option>
								<option selected value="Manajemen">Manajemen</option>
								<option value="Akademik">Akademik</option>
							</select>
						</div>

						<div class="my-1">
							<label><b>Kategori</b></label>
							<select name="kategori" class="width-100" id="kategori">
								<option value="0">-- Pilih Kategori --</option>
								<option selected value="Pelayanan">Pelayanan</option>
								<option value="Service">Service</option>
							</select>
						</div>

						<div class="my-1">
							<label><b>Pertanyaan</b></label>
							<textarea class="width-100" style="resize: none;" name="pertanyaan"></textarea>
						</div>

						<div class="my-1">
							<label><b>Status</b></label>
							<select name="status" class="width-100" id="status">
								<option value="0">-- Pilih Status --</option>
								<option selected value="Pelayanan">In-Active</option>
								<option value="Service">Not Active</option>
							</select>
						</div>

						<button type='submit' class="btn btn-link btn-secondary  px-20">Simpan</button>
					</form>
				</div>
			</div>
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6 style="font-size: 20px;">Preview Master List Soal EUB</h6>
				</div>
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

<?php include('footer-datatable.php') ?>