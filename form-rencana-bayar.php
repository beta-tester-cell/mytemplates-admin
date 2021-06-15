<?php include('header.php') ?>
<div class="content">
	<div class="container">
		<form>
			<div class="py-1">
				<div class="card">
					<div class="d-flex flex-space-between align-center flex-change">
						<div class="title-form">
							<h6>Form Input Rencana Pembayaran</h6>
						</div>
						<div class="d-flex grid-gap-1">
							<button type="submit" class="btn btn-link btn-primary  px-20">Save</button>
							<a href="rencana-bayar-kuliah.php" class="btn btn-link btn-danger px-20">Cancel</a>
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
								<input class="width-100" id="tahun_akademik" value="2021" disabled type="text" placeholder="Text Here...">
							</div>
							<div class="form-inputs">
								<label>Lama Studi</label>
								<input class="width-100" id="lama_studi" value="3 Tahun" disabled type="text" placeholder="Text Here...">
							</div>
							<div class="form-inputs">
								<label>Tanggal Mulai Angsuran</label>
								<input class="width-100" id="tggl_mlai_angsuran" value="<?= date('Y-m-d') ?>" type="date" placeholder="Text Here...">
							</div>
							<div class="form-inputs">
								<label>No Virtual Account</label>
								<input class="width-100" id="no_virtual" value="210616001" disabled type="text" placeholder="Text Here...">
							</div>
						</div>
						<div class="col-form-kanan">
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
								<label>Pembayaran Untuk</label>
								<select name="select" id="pembayaran_untuk">
									<option value="0">-- Pilih Pembayaran Via--</option>
									<option value="1">Virtual Account BNI</option>
									<option value="2" selected>Host to Host IDN</option>
									<option value="3">Bank Transfer / Cash</option>
								</select>
							</div>
							<div class="form-inputs">
								<label>Biaya Kuliah</label>
								<input class="width-100" id="biaya_kuliah" disabled  value="15.000.000" type="text" placeholder="Text Here...">
							</div>
							<div class="form-inputs">
								<label>Registrasi</label>
								<input class="width-100" id="registrasi" disabled value="4.500.000" type="text" placeholder="Text Here...">
							</div>
							<div class="form-inputs">
								<label>Sisa Harus Bayar</label>
								<input class="width-100" id="sisa_harus_bayar" disabled value="10.500.000" type="text" placeholder="Text Here...">
							</div>
							<button class="btn btn-link btn-primary" style="float:right;">Proses</button>
						</div>
					</form>
				</div>

				<div class="table-responsive">
					<table class="basic-table" id="datatable">
						<thead>
							<tr>
								<th>No</th>
								<th class="align-left">Tanggal</th>
								<th class="align-right">Besar</th>
								<th class="align-center">Status</th>
								<th class="align-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td class="align-left">5-Sep-2021</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn-status btn-success">Paid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td class="align-left">5-Okt-2021</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn-status btn-success">Paid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td class="align-left">5-Nov-2021</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td class="align-left">5-Des-2021</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td class="align-left">5-Jan-2022</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td class="align-left">5-Feb-2022</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td class="align-left">5-Mar-2022</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>8</td>
								<td class="align-left">5-Apr-2022</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>9</td>
								<td class="align-left">5-Mei-2022</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
							<tr>
								<td>10</td>
								<td class="align-left">5-Juni-2022</td>
								<td class="align-right">1.050.000</td>
								<td class="align-center"><span class="btn btn-status" style="background-color: #DFD43B;">Unpaid</span></td>
								<td class="align-center">
									<a href="#" class="btn btn-link btn-primary" data-toggle="modal" data-target="#EditRencanaPembayaran">Edit</a>
									<button class="btn btn-link btn-danger">Delete</button>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<td></td>
							<td><b>Total</b></td>
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

<div class="modal" id="EditRencanaPembayaran" tabindex="-1" aria-labelledby="formEditRencanaPembayaranLabel" aria-hidden="true">
	<div class="modal-dialog modal-fit-custom">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formEditRencanaPembayaranLabel">Edit Rencana Pembayaran Kuliah</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-inputs">
						<label>Nama</label>
						<input class="width-100" type="text" list="nama_rencana" value="123123 | Indah Susanti" >
					</div>

					<div class="form-inputs">
						<label>Jurusan</label>
						<input class="width-100" id="jurusan" value="Informatika Komputer" disabled type="text" placeholder="Jurusan">
					</div>

					<div class="form-inputs">
						<label>Tanggal Bayar</label>
						<input class="width-100" id="tggl_bayar" value="<?= date('Y-m-d') ?>" type="date">
					</div>

					<div class="form-inputs">
						<label>Besar</label>
						<input class="width-100" id="besar" value="1.050.000" type="text" placeholder="Besar Bayar">
					</div>

					<div class="button-action align-center">
						<button type="submit" class="btn btn-link btn-primary  px-20">Save</button>
						<button type="button" class="btn btn-link btn-danger px-20" data-dismiss="modal">Cancel</button> 
					</div>

				</form>

			</div>
		</div>
	</div>
</div>

<?php include('footer-datatable.php') ?>