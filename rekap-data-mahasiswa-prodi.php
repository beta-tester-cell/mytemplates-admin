<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="d-flex flex-start">
					<a href="rekap-data-mahasiswa-kampus.php" class="btn btn-link btn-danger px-20">
						Back
					</a>
				</div>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>Data Mahasiswa Per-Prodi</h6>
				</div>

				<div class="d-flex flex-space-between">
					<div class="text-kampus">
						<font><span style="font-size:18px;"><b>Jakarta Pusat (Kramat Raya)</b></span></font><br>
						<font><span style="font-size:16px;">Tahun Angkatan : 2020</span></font>
					</div>
					<div class="select-export">
						<button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>
						<div class="type-export">
							<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
							<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
							<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
						</div>
					</div>
				</div>


				<div class="list-nilai py-1">

					<div class="table-responsive list-table-nilai">
						<table class="basic-table" id="datatable">
							<thead>
								<tr>
									<th class="align-left">No</th>
									<th class="align-left">Prodi</th>
									<th class="align-center">Total Mhs</th>
									<th class="align-center">Jenjang</th>
									<th class="align-center">Aktif</th>
									<th class="align-center">Cuti</th>
									<th class="align-center">Non Aktif</th>
									<th class="align-center">Lulus</th>
									<th class="align-center">Rasio Kelulusan</th>
									<th class="align-center">Action</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td  class="align-left">1</td>
									<td  class="align-left">Manajemen Informatika</td>
									<td  class="align-center">200</td>
									<td  class="align-center">D3</td>
									<td  class="align-center">190</td>
									<td  class="align-center">1</td>
									<td  class="align-center">9</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="rekap-data-mahasiswa.php">View</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">2</td>
									<td  class="align-left">Administrasi Bisnis</td>
									<td  class="align-center">700</td>
									<td  class="align-center">D3</td>
									<td  class="align-center">700</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="#">View</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">3</td>
									<td  class="align-left">Akuntansi</td>
									<td  class="align-center">100</td>
									<td  class="align-center">D3</td>
									<td  class="align-center">100</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="#">View</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">4</td>
									<td  class="align-left">Hubungan Masyarakat</td>
									<td  class="align-center">100</td>
									<td  class="align-center">D3</td>
									<td  class="align-center">100</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="#">View</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">5</td>
									<td  class="align-left">Administrasi Bisnis Internasional </td>
									<td  class="align-center">100</td>
									<td  class="align-center">D3</td>
									<td  class="align-center">100</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="#">View</a>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th></th>
									<th class="align-right">Total Mahasiswa</th>
									<th class="align-center">1200</th>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
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
</div>

<?php include('footer-datatable.php') ?>