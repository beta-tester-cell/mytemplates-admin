<?php include('header.php') ?>

<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<h6>Basis Data &rarr; IK_REGuler_01</h6>
			</div>
		</div>

		<div class="py-1 grid-custom-view grid-gap-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6 style="font-size: 20px;">Info Pertemuan</h6>
				</div>
				<div class="form grid-1">
					<div class="my-1 border-text">
						<span>Pertemuan Ke1 - 16 Juni 2021</span>
					</div>				
					<div class="align-center">
						<p style="font-weight: bold;">Pukul</p>
						<p style="line-height:0;font-weight: bold;">08:00 AM - 17:00 PM</p>
					</div>
					<div class="align-center">
						<form>
							<div class="my-1">
								<select name="status-kehadiran" id="status-kehadiran">
									<option value="0">-- Pilih Status Kehadiran --</option>
									<option value="Izin">Izin</option>
									<option value="Sakit">Sakit</option>
								</select>	
							</div>
							<!-- <div class="my-1">	 -->		
								<textarea class="width-100" name="keterangan" id="keterangan" placeholder="Keterangan izin/Sakit" rows="5"></textarea>
							<!-- </div> -->
							<button class="btn btn-link btn-secondary  px-20">Check In</button>
						</form>
					</div>

					<div class="my-1 align-center">
						<span class="text-mature"><i>Jl. Kp Muara Bahari Gang 2 Tnjng PRiok</i></span>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.698057091853!2d106.84754411542649!3d-6.171168462195049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5b3cdca5e71%3A0xde19185e92dc6850!2sGg.%20Kiara%2C%20RW.8%2C%20Bungur%2C%20Kec.%20Senen%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010460!5e0!3m2!1sid!2sid!4v1624092611816!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<font><span style="font-size: 18px;"><b>Pertemuan Ke 1</b></span> [Online] durasi <span style="font-size: 18px;" class="text-danger">08.00-09.45</span></font>
				</div>

				<div class="form">
					<div class="card-body">
						<div class="grid-1 grid-text">
							<h6 style="font-size: 18px;">Nama Dosen :</h6>
							<p>Masria, M.Kom</p>               
						</div>
						<div class="my-1 grid-1 grid-text">
							<h6 style="font-size: 18px;">Pokok Bahasan :</h6>
							<p>Pengenalan Dasar</p>
						</div>
						<div class="my-1 grid-1 grid-text">
							<h6 style="font-size: 18px;">Sub Pokok Bahasan :</h6>
							<p>Mengenai Struktur Database</p>
						</div>
						<div class="my-1 grid-1 grid-text">
							<h6 style="font-size: 18px;">Ruang :</h6>
							<p>LMS-Online</p>
						</div>
						<div class="my-1 grid-1 ">
							<h6 style="font-size: 18px;">Materi Ajar :</h6>
							<a href="#">
								<span class="menu-icon"><i class="fa fa-link"></i></span>
								<b>&nbsp;link Pembelajaran secara Online dengan Video Conferance</b>
							</a>
							<span class="text-mature"><i>Link ini digunakan untuk mengikuti pembelajaran online dengan menggunakan Aplikasi Google Meet</i></span>
							<hr>
							<a href="#" class="text-danger my-0">
								<span class="menu-icon"><i class="fa fa-book"></i></span>
								<b>&nbsp; Pertemuan 1</b>
							</a>
						</div>
						<div class="my-1 grid-1">
							<h6 style="font-size: 18px;">Tugas & Formatif :</h6>
							<div class="grid-2 grid-gap-1 py-1">
								<a href="#" class="text-danger">
									<span class="menu-icon"><i class="fa fa-file-text"></i></span>
									<b>&nbsp;Latihan-1</b>
								</a>
								<font>Batas Upload Tugas :<span class="text-success"> 2021-07-16 23:59 </span></font>
							</div>
						</div>

						<div class="form-inputs">
							<button href="#" class="btn btn-secondary mx-1 ">Upload Tugas</button>
						</div>
					</div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer.php') ?> 