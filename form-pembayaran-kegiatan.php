<?php include('header.php') ?>
<div class="content">
	<div class="container">
		<form>
			<div class="py-1">
				<div class="card">
					<div class="d-flex flex-space-between align-center flex-change">
						<div class="title-form">
							<h6>Pembayaran Kegiatan Mahasiswa</h6>
						</div>
						<div class="d-flex grid-gap-1">
							<button type="submit" class="btn btn-link btn-primary  px-20">Save</button>
							<a href="rencana-bayar-kuliah.php" class="btn btn-link btn-danger px-20">New</a>
						</div>
					</div>
				</div>
			</div>

			<div class="py-1">
				<div class="card">		
					<div class="form grid-2 grid-gap-1 py-1">

						<div class="col-form-kiri">

							<div class="form-inputs">
								<label>Nama</label>
								<input class="width-100" type="text" list="nama_rencana" value="123123 | Indah Susanti" placeholder="Select or type for suggest" />
								<datalist id="nama_rencana">
									<option value="123123 | Indah Susanti"></option>
									<option value="123312 | Khaerul Istafa"></option>
									<option value="124123 | Dimas Ferdana"></option>
									<option value="641231 | Fikri Noviansyah"></option>
									<option value="153643 | Rizal Liyansyah"></option>
								</datalist>
							</div>

							<div class="form-inputs">
								<label>Jurusan</label>
								<input class="width-100" id="jurusan" value="Informatika Komputer" disabled type="text" placeholder="Jurusan">
							</div>

							<div class="form-inputs">
								<label>Tahun Akademik</label>
								<input class="width-100" id="tahun_akademik" value="2021" disabled type="text">
							</div>
							<div class="form-inputs">
								<label>Semester</label>
								<input class="width-100" id="semester" value="4" disabled type="text" >
							</div>
							<div class="form-inputs">
								<label>Pembimbing Akademik</label>
								<input class="width-100" id="pembimbing_pa" value="Dra. Lindayanti" disabled type="text">
							</div>
						</div>
						<div class="col-form-kanan">
							<div class="form-inputs">
								<label>Tanggal</label>
								<input class="width-100" id="tanggal" value="<?= date('Y-m-d') ?>" type="date">
							</div>
							<div class="form-inputs">
								<label>Pembayaran Via</label>
								<select name="select" id="pembayaran_via">
									<option value="0">-- Pilih Pembayaran Via--</option>
									<option value="1" selected>Virtual Account BNI</option>
									<option value="2">Host to Host IDN</option>
									<option value="3">Bank Transfer / Cash</option>
								</select>
							</div>
							<div class="form-inputs">
								<label>Pembayaran</label>
								<select name="select" id="pembayarank">
									<option value="0">-- Pilih Pembayaran--</option>
									<option value="1" selected>Uji Kompetensi</option>
									<option value="2">Seminar</option>
									<option value="3">Sidang</option>
									<option value="3">Wisuda</option>
									<option value="3">Company</option>
								</select>
							</div>
							<div class="form-inputs">
								<label>Besar Pembayaran</label>
								<input class="width-100" id="besar_pembayaran" value="150.000" type="text">
							</div>
							<div class="form-inputs">
								<label>Bukti Pembayaran</label>
								<input class="width-100" id="registrasi" disabled value="BNI-1-210613001" type="text">
							</div>
						</div>
					</form>
				</div>

				<div class="table-responsive">
					<table class="basic-table" id="datatable">
						<thead>
							<tr>
								<th>No</th>
								<th class="align-left">Tanggal</th>
								<th class="align-left">Pembayaran</th>
								<th class="align-right">Besar</th>
								<th class="align-center">No. Bukti</th>
								<th class="align-left">Melalui</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td class="align-left">12-Feb-21</td>
								<td class="align-left">Uji Kompetensi</td>
								<td class="align-right">450.000</td>
								<td class="align-center">BNI-1-2102001</td>
								<td class="align-left">Bank BNI</td>
							</tr>
							<tr>
								<td>2</td>
								<td class="align-left">12-Feb-21</td>
								<td class="align-left">Seminar</td>
								<td class="align-right">150.000</td>
								<td class="align-center">BNI-1-2102002</td>
								<td class="align-left">Bank BNI</td>
							</tr>
							<tr>
								<td>3</td>
								<td class="align-left">12-Feb-21</td>
								<td class="align-left">Company Visit</td>
								<td class="align-right">250.000</td>
								<td class="align-center">BNI-1-2102003</td>
								<td class="align-left">Bank BNI</td>
							</tr>
							<tr>
								<td>4</td>
								<td class="align-left">12-Feb-21</td>
								<td class="align-left">Seminar</td>
								<td class="align-right">250.000</td>
								<td class="align-center">BNI-1-2102004</td>
								<td class="align-left">Bank BNI</td>
							</tr>
						</tbody>
						<tfoot>
							<td></td>
							<td><b>Total</b></td>
							<td></td>
							<td class="align-right"><b>10.500.000</b></td>
							<td></td>
							<td></td>
						</tfoot>
					</table>
				</div>


			</div>
		</div>
	</div>
</div>

<?php include('footer-datatable.php') ?>