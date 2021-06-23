<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="d-flex flex-start">
					<a href="pengelolaan-kalender-akedemik.php" class="btn btn-link btn-danger px-20">
						Back
					</a>
				</div>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>Buat Kalender Akademik</h6>
				</div>
				<div class="grid-2 grid-gap-3">
					<div class="form-mr-2">
						<div class="form-inputs">
							<label>Tahun Akademik</label>
							<select name="tahunakademik" id="tahunakademik">
								<option value="">-- Pilih Tahun Akademik --</option>
								<option value="2017/2018">2017/2018</option>
								<option value="2018/2019">2018/2019</option>
								<option value="2019/2020">2019/2020</option>
								<option value="2020/2021" selected>2020/2021</option>
							</select>
						</div>
						<div class="form-inputs">
							<label>Periode</label>
							<select name="Periode" id="Periode">
								<option value="">-- Pilih Periode --</option>
								<option value="Ganjil" selected>Ganjil</option>
								<option value="Genap">Genap</option>
							</select>
						</div>
					</div>
				</div>
				<div class="filter-mahasiswa py-1">
					<input type="date" id="tanggal_start" name="tanggal_start" placeholder="Start Date">
					<input type="date" id="tanggal_akhir" name="tanggal_akhir" placeholder="Start End">
					<input type="text" id="nama_event" name="nama_event" placeholder="Name Event">
					<select name="kategori" id="kategori">
						<option value="">-- Pilih Kategori --</option>
						<option value="Kategori 1">Kategori 1</option>
						<option value="Kategori 2">Kategori 2</option>
						<option value="Kategori 3">Kategori 3</option>
						<option value="Kategori 4" selected>Kategori 4</option>
					</select>
					<select name="pelaksana" id="pelaksana">
						<option value="">-- Pilih Pelaksana --</option>
						<option value="Pelaksana 1" selected>Pelaksana 1</option>
						<option value="Pelaksana 2">Pelaksana 2</option>
						<option value="Pelaksana 3">Pelaksana 3</option>
						<option value="Pelaksana 4">Pelaksana 4</option>
						<option value="Pelaksana 5">Pelaksana 5</option>
					</select>
					<button class="btn btn-link btn-primary"><i class="fa fa-plus"></i></button>
				</div>
				<div class="table-responsive">
					<table class="basic-table" id="datatable">
						<thead style="background-color: rgb(30, 66, 105); color: white;">
							<tr>
								<th>No</th>
								<th>Kegiatan</th>
								<th>Tanggal Mulai</th>
								<th>Tanggal Selesai</th>
								<th>Pelaksana</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>
				

			</div>
		</div>
	</div>
</div>

<?php include('footer-datatable.php') ?>