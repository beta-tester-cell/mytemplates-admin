<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb">
		<a href="index.php">Dashboard</a>
		<a href="dashboard-page.php">Akademik Direktorat</a>
		<a href="#">Tools</a>
		<a href="update-status-mahasiswa.php">Update Status Mahasiswa</a>
	</div>
</div>
<div class="content">

	<div class="container height-100">

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>List Pengajuan Update Status Mahasiswa</h6>
					<div class="select-export">
						<div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>
						<div class="type-export">
							<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
							<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
							<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
						</div>
					</div>
				</div>

				<div class="d-flex grid-gap-1 py-1 flex-change">
					<div class="form-inputs">
						<div class="form-group">
							<label class="checkbox">
								<input type="checkbox" value="checkbox 1"> Check All<br>
								<span class="checkmark"></span>
							</label>
						</div>
						<button class="btn btn-submit btn-primary" style="width: 150px; padding:0.5rem; margin-left: 10px;" id="button-view">Approve</button>
					</div>
				</div>

				<div class="py-1">
					<div class="table-responsive">
						<table class="table-list" id="datatable">
							<thead>
								<tr>
									<th class="align-center">No</th>
									<th class="align-left">Nim</th>
									<th class="align-left">Nama Mahasiswa</th>
									<th class="align-left">Prodi</th>
									<th class="align-left">Kampus</th>
									<th class="align-left">TA Pengajuan</th>
									<th class="align-center">Periode</th>
									<th class="align-left">Ket. Perubahan</th>
									<th class="align-center">File</th>
									<th class="align-left">Status</th>
									<th class="align-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-center"><input type="checkbox" value="checkbox 1"> 1 <br></td>
									<td class="align-left">180123000</td>
									<td class="align-left">Rakhmat SH</td>
									<td class="align-left">Manajemen Informatika</td>
									<td class="align-left">Jakarta Pusat</td>
									<td class="align-left">2020/2021</td>
									<td class="align-center">20201</td>
									<td class="align-left">Aktif -> Cuti</td>
									<td class="align-center"><a href="#"><i class="fas fa-download"></i></a></td>
									<td class="align-left">Pending</td>
									<td class="align-center"><button class="btn btn-submit btn-primary" style="width: 150px; margin-left: 10px;" id="button-approve">Approve</button></td>
								</tr>
								<tr>
									<td class="align-center"><input type="checkbox" value="checkbox 1"> 2 <br></td>
									<td class="align-left">190123000</td>
									<td class="align-left">Rohman</td>
									<td class="align-left">Manajemen Informatika</td>
									<td class="align-left">Cilodong</td>
									<td class="align-left">2020/2021</td>
									<td class="align-center">20201</td>
									<td class="align-left">Aktif -> Cuti</td>
									<td class="align-center"><a href="#"><i class="fas fa-download"></i></a></td>
									<td class="align-left">Pending</td>
									<td class="align-center"><button class="btn btn-submit btn-primary" style="width: 150px; margin-left: 10px;" id="button-approve">Approve</button></td>
								</tr>
								<tr>
									<td class="align-center"><input type="checkbox" value="checkbox 1"> 3 <br></td>
									<td class="align-left">209988787</td>
									<td class="align-left">Rogim</td>
									<td class="align-left">Manajemen Informatika</td>
									<td class="align-left">Jakarta Utara</td>
									<td class="align-left">2020/2021</td>
									<td class="align-center">20201</td>
									<td class="align-left">Aktif -> Cuti</td>
									<td class="align-center"><a href="#"><i class="fas fa-download"></i></a></td>
									<td class="align-left">Pending</td>
									<td class="align-center"><button class="btn btn-submit btn-primary" style="width: 150px; margin-left: 10px;" id="button-approve">Approve</button></td>
								</tr>
								<tr>
									<td class="align-center"><input type="checkbox" value="checkbox 1"> 4 <br></td>
									<td class="align-left">187699901</td>
									<td class="align-left">Rosihan</td>
									<td class="align-left">Manajemen Informatika</td>
									<td class="align-left">Jakarta Pusat</td>
									<td class="align-left">2020/2021</td>
									<td class="align-center">20201</td>
									<td class="align-left">Aktif -> Cuti</td>
									<td class="align-center"><a href="#"><i class="fas fa-download"></i></a></td>
									<td class="align-left">Pending</td>
									<td class="align-center"><button class="btn btn-submit btn-primary" style="width: 150px; margin-left: 10px;" id="button-approve">Approve</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php include('footer-datatable.php') ?>