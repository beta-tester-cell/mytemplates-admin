<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1 grid-custom-view grid-gap-2">
			<div class="card">
				<ul class="menu-widget">
					<?php
					if ($_SERVER['REQUEST_URI'] == '/mytemplates/rekap-data-mahasiswa-kampus.php') :
						?>
						<li class="active">
							<a href="rekap-data-mahasiswa-kampus.php">Politeknik LP3I Jakarta</a>
						</li>
						<?php else : ?>
							<li>
								<a href="rekap-data-mahasiswa-kampus.php">Politeknik LP3I Jakarta</a>
							</li>
						<?php endif; ?>
						<?php
						if ($_SERVER['REQUEST_URI'] == '/mytemplates/rekap-data-mahasiswa-prodi.php') :
							?>
							<li class="active">
								<a href="rekap-data-mahasiswa-prodi.php" class="">Politeknik LP3I Medan</a>
							</li>
							<?php else : ?>
								<li>
									<a href="rekap-data-mahasiswa-prodi.php" class="">Politeknik LP3I Medan</a>
								</li>
							<?php endif; ?>
							<li>
								<a href="#" class="">Politeknik LP3I Bandung</a>
							</li>
							<li>
								<a href="#" class="">Polinas</a>
							</li>
						</ul>
					</div>
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>Data Mahasiswa</h6>
				</div>

				<div class="d-flex flex-space-between">
					<div class="filter-mahasiswa">
						<input style="width: 250px;" type="text" list="kampus" value="Jakarta Pusat (Kramat Raya)" placeholder="Pilih Kampus" />
	                    <datalist id="kampus">
	                        <option value="Jakarta Pusat (Kramat Raya)">
	                        <option value="Blok M">
	                        <option value="Jakarta Timur">
	                        <option value="Harvest City">
	                        <option value="Pasar Minggu">
	                    </datalist>
	                    <select name="tahunakademik" id="tahunakademik">
	                    	<option value="">-- Pilih Tahun Akademik --</option>
	                    	<option value="2017/2018">2017/2018</option>
	                    	<option value="2018/2019">2018/2019</option>
	                    	<option value="2019/2020">2019/2020</option>
	                    	<option value="2020/2021" selected>2020/2021</option>
	                    </select>
	                    <select name="prodi" id="prodi">
							<option value="">-- Pilih Prodi --</option>
							<option value="Manajemen Informatika" selected>Manajemen Informatika</option>
							<option value="Administrasi Bisnis">Administrasi Bisnis</option>
							<option value="Akuntansi">Akuntansi</option>
							<option value="Hubungan Masyarakat ">Hubungan Masyarakat </option>
							<option value="Administrasi Bisnis Internasional">Administrasi Bisnis Internasional</option>
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
									<th class="align-left">No</th>
									<th class="align-left">Kampus</th>
									<th class="align-center">Tahun Angkatan</th>
									<th class="align-center">Total Mhs</th>
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
									<td  class="align-left">Jakarta Pusat (Kramat Raya)</td>
									<td  class="align-center">2020</td>
									<td  class="align-center">1000</td>
									<td  class="align-center">1000</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="rekap-data-mahasiswa-prodi.php">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">2</td>
									<td  class="align-left">Jakarta Pusat (Kramat Raya)</td>
									<td  class="align-center">2019</td>
									<td  class="align-center">1000</td>
									<td  class="align-center">1000</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">3</td>
									<td  class="align-left">Jakarta Pusat (Kramat Raya)</td>
									<td  class="align-center">2018</td>
									<td  class="align-center">800</td>
									<td  class="align-center">890</td>
									<td  class="align-center">-</td>
									<td  class="align-center">10</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">4</td>
									<td  class="align-left">Jakarta Pusat (Kramat Raya)</td>
									<td  class="align-center">2017</td>
									<td  class="align-center">600</td>
									<td  class="align-center">6990</td>
									<td  class="align-center">1</td>
									<td  class="align-center">-</td>
									<td  class="align-center">699</td>
									<td  class="align-center"><span class="btn-status btn-success">99%</span></td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">5</td>
									<td  class="align-left">Jakarta Pusat (Kramat Raya)</td>
									<td  class="align-center">2016</td>
									<td  class="align-center">1200</td>
									<td  class="align-center">1290</td>
									<td  class="align-center">1</td>
									<td  class="align-center">919</td>
									<td  class="align-center">-</td>
									<td  class="align-center"><span class="btn-status btn-success">99%</span></td>
									<td  class="align-center">
										<a href="#">Detail</a>
									</td>
								</tr>
								<tr>
									<td  class="align-left">6</td>
									<td  class="align-left">Jakarta Pusat (Kramat Raya)</td>
									<td  class="align-center">2015</td>
									<td  class="align-center">700</td>
									<td  class="align-center">700</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center">-</td>
									<td  class="align-center"><span class="btn-status btn-success">100%</span></td>
									<td  class="align-center">
										<a href="#">Detail</a>
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