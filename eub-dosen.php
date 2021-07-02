<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb">
		<a href="index.php">Dashboard</a>
		<?php if($_GET['bread'] == 'akademik-pusat'): ?>
			<a href="#">Akademik Pusat</a>
		<?php else: ?>
			<a href="#">Akademik Cabang</a>
		<?php endif; ?>
        <a href="eub-dosen.php">EUB Dosen</a>
	</div>
</div>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>List Hasil EUB Dosen</h6>
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
					<select name="kampus" id="kampus">
						<option value="0">-- Pilih Kampus/Cabang --</option>
						<option value="Kampus Kramat Raya">Kampus Kramat Raya</option>
						<option value="Kampus Blok M">Kampus Blok M</option>
					</select>
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
									<th class="align-left">Nama Dosen</th>
									<th class="align-center">Total SKS</th>
									<th class="align-left">Periode</th>
									<th class="align-center">Total Score</th>
									<th class="align-center">Grade</th>
									<th class="align-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-center">1</td>
									<td class="align-left">[09909] Masria, M.Kom</td>
									<td class="align-center">6</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-dosen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">2</td>
									<td class="align-left">[09909] Masria, M.Kom</td>
									<td class="align-center">6</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-dosen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">3</td>
									<td class="align-left">[09909] Masria, M.Kom</td>
									<td class="align-center">6</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-dosen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">4</td>
									<td class="align-left">[09909] Masria, M.Kom</td>
									<td class="align-center">6</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-dosen.php" class="align-center" title="Detail">Detail</a>
									</td>
								</tr>
								<tr>
									<td class="align-center">5</td>
									<td class="align-left">[09909] Masria, M.Kom</td>
									<td class="align-center">6</td>
									<td class="align-left">20211 (Ganjil)</td>
									<td class="align-center">1230</td>
									<td class="align-center">A</td>
									<td class="align-center">
										<a href="eub-detail-dosen.php" class="align-center" title="Detail">Detail</a>
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