<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="d-flex flex-space-between align-center flex-change">
					<div class="form-inputs">
						<div class="form grid-2 grid-gap-1 py-1">
							<div class="input-group">
								<div class="input-group-area"><input class="width-100" type="date" id="tanggal_awal"></div>
								<div class="input-group-icon">TO</div>
								<div class="input-group-area"><input class="width-100" type="date" id="tanggal_akhir"></div>
							</div>
							<button class="btn btn-secondary btn-submit" style="width: 70px;" id="button-view">View</button>
						</div>
					</div>
					<div class="d-flex grid-gap-1">
						<div class="select-export">
							<div type="button" class="btn btn-link btn-secondary dropdown-button" style="width:120px;"><i class="fas fa-file-export"></i> Export</div>
							<div class="type-export">
								<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
								<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
								<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-1">
			<div class="card">		
				<div class="table-responsive">
					<div class="form grid-1 grid-gap-1 py-1" style="float: right;">
						<input type="text" value="75.000.000" style="width: 200px; background-color: #DFD43B; color:white;">
					</div>
					<table class="basic-table display">
						<thead>
							<tr>
								<th>No</th>
								<th class="align-left">Nim</th>
								<th class="align-left">Nama Mahasiswa</th>
								<th class="align-center">Jurusan</th>
								<th class="align-center">Tingkat</th>
								<th class="align-center">Jatuh Tempo</th>
								<th class="align-right">Besar</th>
								<th class="align-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td class="align-left">21001</td>
								<td class="align-left">Indah Susanti</td>
								<td class="align-center">MI</td>
								<td class="align-center">1</td>
								<td class="align-center">2020/07/05</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td class="align-left">19002</td>
								<td class="align-left">Budiman</td>
								<td class="align-center">KA</td>
								<td class="align-center">3</td>
								<td class="align-center">2020/07/07</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td class="align-left">20003</td>
								<td class="align-left">Indra</td>
								<td class="align-center">AB</td>
								<td class="align-center">2</td>
								<td class="align-center">2020/07/03</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td class="align-left">19004</td>
								<td class="align-left">Irfan</td>
								<td class="align-center">AB</td>
								<td class="align-center">3</td>
								<td class="align-center">2020/07/06</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td class="align-left">21001</td>
								<td class="align-left">Kurniawan</td>
								<td class="align-center">KA</td>
								<td class="align-center">1</td>
								<td class="align-center">2020/07/01</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
							<tr>
								<td>6</td>
								<td class="align-left">21001</td>
								<td class="align-left">Dewi</td>
								<td class="align-center">AB</td>
								<td class="align-center">2</td>
								<td class="align-center">2020/07/07</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
							<tr>
								<td>7</td>
								<td class="align-left">21001</td>
								<td class="align-left">Nusa</td>
								<td class="align-center">MI</td>
								<td class="align-center">1</td>
								<td class="align-center">2020/07/02</td>
								<td class="align-right">1.500.000</td>
								<td class="align-center">
									<button class="btn btn-link btn-danger" data-toggle="modal" data-target="#FormPembayaranKuliah">Bayar</button>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<td></td>
							<td class="align-left"><b>Total</b></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tfoot>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>


<div class="modal" id="FormPembayaranKuliah" tabindex="-1" aria-labelledby="FormPembayaranKuliahLabel" aria-hidden="true">
	<div class="modal-dialog modal-fit-custom">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="FormPembayaranKuliahLabel">Pembayaran Kuliah</h5>
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

					<div class="form-inputs">
						<label>Pembayaran Melalui</label>
						<select name="select" id="pembayaran_via">
							<option value="0">-- Pilih Pembayaran --</option>
							<option value="1" selected>Bank BNI</option>
							<option value="2">VA BNI</option>
							<option value="3">Tunai</option>
						</select>
					</div>

					<div class="form-inputs">
						<label>No Bukti</label>
						<input class="width-100" id="no_bukti" value="BNI-1-210613001" type="text" placeholder="No Bukti">
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