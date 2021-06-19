<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>List Jadual Kuliah</h6>
				</div>

				<div class="d-flex flex-space-between">
					<div class="filter-jadual">
						<select name="tahunakademik" id="tahunakademik">
							<option value="">-- Pilih Tahun Akademik --</option>
							<option value="2017/2018">2017/2018</option>
							<option value="2018/2019">2018/2019</option>
							<option value="2019/2020">2019/2020</option>
							<option value="2020/2021" selected>2020/2021</option>
						</select>
						<select name="semester" id="semester">
							<option value=""-- >Pilih Semester --</option>
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
						<input type="date" id="date-monitoring">
						<select name="matakuliah" id="matakuliah">
							<option value="">-- Pilih Mata Kuliah --</option>
							<option value="Basis Data" selected>Basis Data</option>
							<option value=">Aplikasi Komputer">Aplikasi Komputer</option>
						</select>
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
									<th class="align-left">Kelas</th>
									<th class="align-left">Matakuliah</th>
									<th class="align-center">SKS</th>
									<th class="align-center">Smt</th>
									<th class="align-left">Dosen</th>
									<th class="align-left">Ruang</th>
									<th class="align-left">Hari</th>
									<th class="align-left">Tanggal</th>
									<th class="align-left">Waktu</th>
									<th class="align-center">Pert Ke</th>
									<th class="align-left">Status</th>
									<th class="align-left">Action</th>

								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-left">IK_Reguler_01</td>
									<td class="align-left">Basis Data</td>
									<td class="align-center">4</td>
									<td class="align-center">1</td>
									<td class="align-left">Masria, M.Kom</td>
									<td class="align-left">LMS Online</td>
									<td class="align-left">Selasa</td>
									<td class="align-left">2021-07-16</td>
									<td class="align-left">08.00 - 09.45</td>
									<td class="align-center">1</td>
									<td class="align-left">On Going</td>
									<td class="align-left"><a href="jadual-pertemuan-kuliah.php">Check-in</a></td>
								</tr>
								<tr>
									<td class="align-left">IK_Reguler_01</td>
									<td class="align-left">Aplikasi Komputer</td>
									<td class="align-center">4</td>
									<td class="align-center">1</td>
									<td class="align-left">Masria, M.Kom</td>
									<td class="align-left">LAB 2</td>
									<td class="align-left">Selasa</td>
									<td class="align-left">2021-07-16</td>
									<td class="align-left">08.00 - 09.45</td>
									<td class="align-center">1</td>
									<td class="align-left">To Do</td>
									<td class="align-left"><a href="#"></a></td>
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