<?php include('header.php') ?>

<div class="breadcrumb-wrapper">

	<div class="breadcrumb">

		<a href="index.php">Dashboard</a>

		<a href="#">Keuangan Cabang</a>

		<a href="#">Transaksi</a>

		<a href="monitor-tagihan-mhs.php">Monitoring Tagihan Mahasiswa</a>

		<a href="add-monitoring-tagihan.php">Add Rekapitulasi Piutang</a>

	</div>

</div>

<div class="content">

	<div class="container">



		<div class="py-1">

			<div class="card">

				<div class="card-header d-flex flex-space-between">

					<h6>Add Collecting Progress</h6>

					<div class="select-export">

						<button class="btn btn-secondary btn-submit dropdown-button" style="width: 105px;"><i class="fas fa-file-export"></i> Export</button>

						<div class="type-export">

							<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>

							<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>

							<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>

						</div>

					</div>

				</div>



				<div class="py-1 grid-detail-list grid-gap-1">

					<div style="width: 150px;height:auto;">

						<img src="theme/img/default-user.jpg" alt="Foto Mahasiswa">

					</div>

					<div class="detail-list">

						<div class="grid-4 grid-gap-2">

							<div class="list-1">

								<div class="detail-list">

									<label><b>Nama Mahasiswa</b></label><br>

									<span>[180099298] Rohmana</span>

								</div>



								<label><b>VA Number</b></label><br>

								<span>9882304200700011</span>

							</div>

							<div class="list-1">

								<div class="detail-list">

									<label><b>Prodi</b></label><br>

									<span>[022] Bisnis Administrasi</span>

								</div>

								<label><b>Kampus</b></label><br>

								<span>Jakarta Pusat ( Kramat Raya)</span>

							</div>

							<div class="list-1">

								<div class="detail-list">

									<label><b>Due Date</b></label><br>

									<span>2021-07-10</span>

								</div>

								<label><b>Amount</b></label><br>

								<span>IDR 1.200.000</span>

							</div>

						</div>

					</div>

					<div class="list-nilai">

						<a href="monitor-tagihan-mhs.php" class="btn btn-link btn-danger text-center" style="width: 65px;">Back</a>
						<button class="btn-status btn-primary"><i class="fa fa-plus" aria-hidden="true"></i></button>
					</div>

				</div>



				<div class="py-1">

					<div class="form-collection">

						<form>

							<div class="grid-4 grid-gap-1">

								<div class="list-form-collection">

									<div class="my-1">

										<label>Activity Date</label>

										<input class="width-100" type="date" value="<?= date('Y-m-d') ?>">

									</div>

								</div>

								<div class="list-form-collection">

									<div class="my-1">

										<label>Activity Detail</label>

										<input class="width-100" type="text" value="Direct Mail">

									</div>

								</div>

								<div class="list-form-collection">

									<div class="my-1">

										<label>Activity Result</label>

										<input class="width-100" type="text">

									</div>

								</div>

								<div class="list-form-collection">

									<div class="my-1">

										<label>Collection Officer</label>

										<input class="width-100" type="text" disabled value="Midayanti">

									</div>



								</div>

							</div>

							<div class="grid-4 grid-gap-1">

								<div class="list-form-collection">

									<div class="my-1">

										<input class="width-100" type="date" value="<?= date('Y-m-d') ?>">

									</div>

								</div>

								<div class="list-form-collection">

									<div class="my-1">

										<input class="width-100" type="text">

									</div>

								</div>

								<div class="list-form-collection">

									<div class="my-1">

										<input class="width-100" type="text">

									</div>

								</div>

								<div class="list-form-collection">

									<div class="my-1">

										<input class="width-100" type="text" value="Midayanti">

									</div>



								</div>

							</div>

						</form>

						 <button type="submit" class="btn btn-link btn-primary">Submit</button>

					</div>

				</div>



			</div>

		</div>

	</div>

</div>



<?php include('footer-datatable.php') ?>