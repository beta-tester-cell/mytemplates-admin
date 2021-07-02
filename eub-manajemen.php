<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb">
		<a href="index.php">Dashboard</a>
		<?php if($_GET['bread'] == 'akademik-pusat'): ?>
			<a href="#">Akademik Pusat</a>
		<?php else: ?>
			<a href="#">Akademik Cabang</a>
		<?php endif; ?>
        <a href="eub-manajemen.php">EUB Manajemen</a>
	</div>
</div>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>List Hasil EUB Manajemen</h6>
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
					<select name="Tahun Akademik" id="Tahun Akademik">
						<option value="0">-- Pilih Tahun Akademik --</option>
						<option value="2020/2021">2020/2021</option>
						<option value="2020/2021">2020/2021</option>
						<option value="2020/2021">2020/2021</option>
					</select>
					<select name="Periode" id="Periode">
						<option value="0">-- Pilih Periode --</option>
						<option value="20211">20211 (Ganjil)</option>
						<option value="20211">20211 (Ganjil)</option>
					</select>
				</div>

				<div class="py-1">
					<div class="table-responsive">
						<table class="table-list" id="datatable">
							<thead>
								<tr>
									<th class="align-center">No</th>
									<th class="align-left">Nama Kampus/Cabang</th>
									<th class="align-left">Periode</th>
									<th class="align-center">Total MHS</th>
									<th class="align-center">MHS EUB</th>
									<th class="align-center">Total Score</th>
									<th class="align-center">Grade</th>
									<th class="align-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-center">1</td>
									<td class="align-left">[004] Kampus Kramay Raya	</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">120</td>
									<td class="align-center">100</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-manajemen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">2</td>
									<td class="align-left">[004] Kampus Cilodong	</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">120</td>
									<td class="align-center">100</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-manajemen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">3</td>
									<td class="align-left">[004] Kampus Jakarta Utara	</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">120</td>
									<td class="align-center">90</td>
									<td class="align-center">300</td>
									<td class="align-center">C</td>
									<td class="align-center">
										<a href="eub-detail-manajemen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">1</td>
									<td class="align-left">[004] Kampus Cimone	</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">120</td>
									<td class="align-center">80</td>
									<td class="align-center">800</td>
									<td class="align-center">B</td>
									<td class="align-center">
										<a href="eub-detail-manajemen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">1</td>
									<td class="align-left">[004] Kampus Cikarang	</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">120</td>
									<td class="align-center">120</td>
									<td class="align-center">500</td>
									<td class="align-center">C+</td>
									<td class="align-center">
										<a href="eub-detail-manajemen.php" class="align-center" title="Detail">Detail</a>
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