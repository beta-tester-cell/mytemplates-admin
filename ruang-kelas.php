<?php include('header.php') ?>

<div class="content">
    <div class="container">
    	<div class="py-1 grid-custom-view2 grid-gap-2">
            <div class="card">
            	<div class="card-header d-flex flex-space-between">
                    <h6>Form <br>Tambah Ruang Kelas</h6>
                </div>
                <div class="card-body">
                	<form>
                		<div class="my-1">
                        	<label><b>Kode Ruangan</b></label>
                        	<input class="my-0 width-100" type="text" name="kode_ruang" id="kode_ruang" autocomplete="off" placeholder="Kode Ruang...">
                    	</div>
                    	<div class="my-1">
                        	<label><b>Nama Ruangan</b></label>
                        	<input class="my-0 width-100" type="text" name="nama_ruang" id="nama_ruang" autocomplete="off" placeholder="Nama Ruang...">
                    	</div>
                    	<div class="my-1">
                        	<label><b>Keterangan</b></label>
                        	<textarea class="my-0 width-100" name="keterangan" id="keterangan" rows="3"></textarea>
                    	</div>
                    	<div class="d-flex flex-center py-1">
                        	<button type="submit" class="btn btn-secondary btn-submit mx-1">Add New</button>
                        	<button type="reset" class="btn btn-medium btn-cancel mx-1">Cancel</button>
                    	</div>
                	</form>
                </div>
            </div>
            <div class="card">
            	<div class="card-header d-flex flex-space-between">
                    <h6>List <br> Master Ruang Kelas</h6>
                    <div class="select-export">
                        <div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>

                        <div class="type-export">
                            <a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
                            <a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
                            <a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                	<div class="table-responsive">
	                    <table id="datatable" class="table-list">
	                        <thead>
	                            <tr>
	                                <th class="dt-left">Kode</th>
	                                <th class="dt-left">Nama Ruangan</th>
	                                <th>Data Modified</th>
	                                <th>Aksi</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	<tr>
	                                <td>20LB01</td>
	                                <td>Ruangan Lab Multimedia</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20LB02</td>
	                                <td>Ruangan Lab AP</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20LB03</td>
	                                <td>Ruangan Lab Bahasa</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20AU01</td>
	                                <td>Audiotorium</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R301</td>
	                                <td>Ruangan Kelas 301</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R302</td>
	                                <td>Ruangan Kelas 302</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R303</td>
	                                <td>Ruangan Kelas 303</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R304</td>
	                                <td>Ruangan Kelas 304</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R305</td>
	                                <td>Ruangan Kelas 305</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R306</td>
	                                <td>Ruangan Kelas 306</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
	                                </td>
                            	</tr>
                            	<tr>
	                                <td>20R307</td>
	                                <td>Ruangan Kelas 307</td>
	                                <td>2020-07-09 12:00</td>
	                                <td>
	                                    <a href="#" class="btn btn-link text-secondary"><i class="far fa-edit"></i></a>
	                                    <a href="#" class="btn btn-link text-danger"><i class="fas fa-eraser"></i></a>
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
