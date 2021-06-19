<?php include('header.php') ?>

<div class="content">
    <div class="container">
        
        <div class="py-1 grid-1">
        	<div class="card">
                <div class="card-header d-flex flex-space-between">
                    <h6>Daftar Jadwal Mengajar	</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>

                <div class="card-header form-inputs">
                    <div class="form d-flex grid-2 grid-gap-1 py-1">
                        <div class="input-group">
                            <select name="tahun_akd" id="tahun_akd">
                                <option value="">Filter Tahun Akademik</option>
                                <option value="1">2019/2020</option>
                                <option value="2">2020/2021</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="semester" id="semester">
                                <option value="">Filter Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table-list">
                    	<thead>
                    		<tr>
                    			<th class="dt-center">No</th>
                    			<th>Mata Kuliah</th>
                    			<th class="dt-center">SKS</th>
                    			<th class="dt-center">Smt</th>
                    			<th>Kelas</th>
                    			<th>Ruang</th>
                    			<th>Hari</th>
                    			<th class="dt-center">Waktu</th>
                    			<th class="dt-center">RPS</th>
                    			<th class="dt-center">Mhs</th>
                    			<th class="dt-center">Action</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td class="dt-center">1</td>
                    			<td>Basis Data</td>
                    			<td class="dt-center">4</td>
                    			<td class="dt-center">1</td>
                    			<td>IK_REGuler 01</td>
                    			<td>LMS-Online</td>
                    			<td>Selasa</td>
                    			<td class="dt-center">08.00-09.45</td>
                    			<td class="dt-center"><a href="#"><b>Download</b></a></td>
                    			<td class="dt-center">27</td>
                    			<td class="dt-center">
                    				<a href="kegiatan-perkuliahan.php" class="btn btn-link text-secondary" title="View"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-link text-danger" title="Absensi"><i class="fa fa-check-square-o"></i></a>
                    			</td>
                    		</tr>
                    		<tr>
                    			<td class="dt-center">2</td>
                    			<td>Basis Data</td>
                    			<td class="dt-center">4</td>
                    			<td class="dt-center">1</td>
                    			<td>IK_REGuler 01</td>
                    			<td>R.201</td>
                    			<td>Selasa</td>
                    			<td class="dt-center">18.00-20.45</td>
                    			<td class="dt-center"><a href="#"><b>Download</b></a></td>
                    			<td class="dt-center">27</td>
                    			<td class="dt-center">
                    				<a href="kegiatan-perkuliahan.php" class="btn btn-link text-secondary" title="View"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-link text-danger" title="Absensi"><i class="fa fa-check-square-o"></i></a>
                    			</td>
                    		</tr>
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('footer-datatable.php') ?>