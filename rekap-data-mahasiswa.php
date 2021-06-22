<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="d-flex flex-start">
					<a href="rekap-data-mahasiswa-prodi.php" class="btn btn-link btn-danger px-20">
						Back
					</a>
				</div>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>Detail Mahasiswa</h6>
				</div>

				<div class="d-flex flex-space-between">
					<div class="text-kampus">
						<font><span style="font-size:18px;"><b>Jakarta Pusat (Kramat Raya)</b></span></font><br>
						<font><span style="font-size:16px;">Tahun Angkatan : 2020</span></font><br>
						<font><span style="font-size:16px;">[00990] Manajemen Informatika</span></font>
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
									<th class="align-left">NIM</th>
									<th class="align-left">Nama Mahasiswa</th>
									<th class="align-left">Alamat</th>
									<th class="align-left">Telp</th>
									<th class="align-left">Email</th>
									<th class="align-center">Status</th>
									<th class="align-center">Total SKS</th>
									<th class="align-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td  class="align-left">1</td>
									<td  class="align-left">201992001</td>
									<td  class="align-left">IRfan Zaadin</td>
									<td  class="align-left">Sunter</td>
									<td  class="align-left">08199887889</td>
									<td  class="align-left">Irfan@gmail.com</td>
									<td  class="align-center">Aktif</td>
									<td  class="align-center">48 SKS</td>
									<td  class="align-center">
										<a href="rekap-detail-mahasiswa.php">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">2</td>
									<td  class="align-left">201992001</td>
									<td  class="align-left">Khaerul IStafa</td>
									<td  class="align-left">Sunter</td>
									<td  class="align-left">08199887889</td>
									<td  class="align-left">Irfan@gmail.com</td>
									<td  class="align-center">Aktif</td>
									<td  class="align-center">48 SKS</td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">3</td>
									<td  class="align-left">201992001</td>
									<td  class="align-left">Rosihan Arbisaid</td>
									<td  class="align-left">Sunter</td>
									<td  class="align-left">08199887889</td>
									<td  class="align-left">Irfan@gmail.com</td>
									<td  class="align-center">Aktif</td>
									<td  class="align-center">48 SKS</td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">4</td>
									<td  class="align-left">201992001</td>
									<td  class="align-left">Fadillah Nurfitrah</td>
									<td  class="align-left">Sunter</td>
									<td  class="align-left">08199887889</td>
									<td  class="align-left">Irfan@gmail.com</td>
									<td  class="align-center">Aktif</td>
									<td  class="align-center">48 SKS</td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td></td>
									<td></td>
									<th class="align-right">Total Mahasiswa</th>
									<th class="align-left">3400</th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
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