<?php include('header.php') ?>
<div class="content">
	<div class="container">

		<div class="py-1">
			<div class="card">
				<div class="card-header d-flex flex-space-between">
					<h6>Tagihan yang masih harus dibayar 6 Bulan Terakhir</h6>
				</div>
				<div class="chart-container" style="height:60vh; width:80vw">
					<canvas id="getTagihanPembayaran"></canvas>
				</div>
			</div>
		</div>

		<div class="py-1">
			<div class="card">
				<div class="card-header">
					<h6>Tagihan sesuai dengan tanggal</h6>
				</div>
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

				<div class="select-export" style="width: 110px; float: right; display: block;">
					<div type="button" class="btn btn-link btn-secondary dropdown-button"><i class="fas fa-file-export"></i> Export</div>
					<div class="type-export">
						<a href="#" id="pdf"><i class="far fa-file-pdf"></i> PDF</a>
						<a href="#" id="excel"><i class="far fa-file-excel"></i> EXCEL</a>
						<a href="#" id="print"><i class="fas fa-print"></i> PRINT</a>
					</div>
				</div>

				<h3><b>Collage</b></h3>
				<div class="table-responsive">
					<table class="basic-table display">
						<thead>
							<tr>
								<th>No</th>
								<th>Cabang</th>
								<th class="align-right">Outstanding</th>
								<th class="align-right">Tingkat 1</th>
								<th class="align-right">Tingkat 2</th>
								<th class="align-right">Tingkat 3</th>
								<th class="align-right">Tingkat 4</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Balikpapan</td>
								<td class="align-right">250.000.000</td>
								<td class="align-right">130.000.000</td>
								<td class="align-right">120.000.000</td>
								<td class="align-right">0</td>
								<td class="align-right">0</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Banda Aceh</td>
								<td class="align-right">350.000.000</td>
								<td class="align-right">250.000.000</td>
								<td class="align-right">100.000.000</td>
								<td class="align-right">0</td>
								<td class="align-right">0</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Bandar Lampung</td>
								<td class="align-right">150.000.000</td>
								<td class="align-right">80.000.000</td>
								<td class="align-right">70.000.000</td>
								<td class="align-right">0</td>
								<td class="align-right">0</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th></th>
								<th><b>Total</b></th>
								<th class="align-right">800.000.000</th>
								<th class="align-right">460.000.000</th>
								<th class="align-right">340.000.000</th>
								<th class="align-right">0</th>
								<th class="align-right">0</th>
							</tr>
						</tfoot>
					</table>
				</div>

				<h3 style="margin-top: 20px;"><b>PLJ</b></h3>
				<div class="table-responsive">
					<table class="basic-table display">
						<thead>
							<tr>
								<th>No</th>
								<th>Cabang</th>
								<th class="align-right">Outstanding</th>
								<th class="align-right">Tingkat 1</th>
								<th class="align-right">Tingkat 2</th>
								<th class="align-right">Tingkat 3</th>
								<th class="align-right">Tingkat 4</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>PLJ Kramat Raya</td>
								<td class="align-right">270.000.000</td>
								<td class="align-right">230.000.000</td>
								<td class="align-right">220.000.000</td>
								<td class="align-right">200.000.000</td>
								<td class="align-right">120.000.000</td>
							</tr>
							<tr>
								<td>2</td>
								<td>PLJ Pasar Minggu</td>
								<td class="align-right">430.000.000</td>
								<td class="align-right">250.000.000</td>
								<td class="align-right">100.000.000</td>
								<td class="align-right">80.000.000</td>
								<td class="align-right">0</td>
							</tr>
							<tr>
								<td>3</td>
								<td>PLJ Cilodong</td>
								<td class="align-right">500.000.000</td>
								<td class="align-right">180.000.000</td>
								<td class="align-right">170.000.000</td>
								<td class="align-right">150.000.000</td>
								<td class="align-right">0</td>
							</tr>
							<tr>
								<td>4</td>
								<td>PLB Bandung</td>
								<td class="align-right">740.000.000</td>
								<td class="align-right">240.000.000</td>
								<td class="align-right">300.000.000</td>
								<td class="align-right">200.000.000</td>
								<td class="align-right">0</td>
							</tr>
							<tr>
								<td>5</td>
								<td>PLB Cimahi</td>
								<td class="align-right">80.000.000</td>
								<td class="align-right">60.000.000</td>
								<td class="align-right">20.000.000</td>
								<td class="align-right">0</td>
								<td class="align-right">0</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th></th>
								<th><b>Total</b></th>
								<th class="align-right">2.020.000.000</th>
								<th class="align-right">960.000.000</th>
								<th class="align-right">810.000.000</th>
								<th class="align-right">3.780.000.000</th>
								<th class="align-right">120.000.000</th>
							</tr>
						</tfoot>
					</table>
				</div>

			</div>
		</div>

	</div>
</div>

<?php include('footer-datatable.php') ?>

<script type="text/javascript">

	$(document).ready(function() {
		$('table.display').DataTable();
	} );

	var TagihanPembayaran = document.getElementById("getTagihanPembayaran");

	Chart.defaults.global.defaultFontFamily = "Lato";
	Chart.defaults.global.defaultFontSize = 18;

	// Start Collection Data


	var dataFirst = {
		type:'line',
		label: "Total Value (IDR)", // Penamanaan Data Tersebut
		data: [3250, 2900, 2150, 2250, 1700, 800], // Data yang berasal dari database
		lineTension: 0,
		fill: false,
		borderColor: 'blue',
		yAxisID: 'left-axis'
	};

	var dataSecond = {
		type:'line',
		label: "Total Trx", // Penamanaan Data Tersebut
		data: [2850, 2750, 2400, 2300, 1800, 900], // Data yang berasal dari database
		lineTension: 0,
		fill: true, 
		borderColor: 'rgba(75, 192, 192, 1)',
		backgroundColor: 'rgba(75, 192, 192, 0.2)',
		yAxisID: 'right-axis'
	};

	var MergeData = {
		labels: ["Q1 2021", "Q2 2021", "Q3 2021", "Q4 2021", "Q5 2021", "Q6 2021"], // Label horizontal
		datasets: [dataFirst, dataSecond]
	};

	// End Collection Data

	// Start Option Line Chart

	var chartOptions = {
		legend: {
			display: true,
			position: 'top',
			labels: {
				boxWidth: 50,
				fontColor: 'black',
				fontSize: 12
			}
		},
		title: {display: true},
		responsive: true,
		maintainAspectRatio: false,
		scales: {
		xAxes: [{
			display: true, 
			scaleFontSize: 12 , 
			ticks: {
               	fontSize: 14 // Mengubah Font X axis (Vertical)
           	}, 
			stacked:true
       	}],
        yAxes: [{
           ticks: {
               fontSize: 14, // Mengubah Font Y axis (Vertical)
               fontColor : 'blue'
           },
           type:'linear',
           id:'left-axis',
           display: true,
           position: 'left',
           scaleLabel: {display: true, labelString: 'Value (IDR)',fontColor : 'blue' }
       },{
       	   ticks: {
               fontSize: 14, // Mengubah Font Y axis (Vertical)
               fontColor : 'rgba(75, 192, 192, 1)'
           },
           type:'linear',
       	   id:'right-axis',
       	   display: true,
       	   position: 'right',
       	   stacked:false,
       	   scaleLabel: {display: true, labelString: 'Trx',fontColor : 'rgba(75, 192, 192, 1)' },
       	  gridLines: {drawOnChartArea:false}
       }]
   }
};

    // End Option Line Chart

    // Action Line Chart
    var lineChart = new Chart(TagihanPembayaran, {
    	type: 'bar',
    	data: MergeData,
    	options: chartOptions
    });


// batas

</script>