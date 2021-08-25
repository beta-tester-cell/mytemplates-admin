<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="#">Dashboard</a>
        <a href="index.php">Dashboard C - Level</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="flex-chart d-flex grid-gap-1 flex-change mb-1">
                <div class="card">
                    <div class="card-header">
                        <h6>NEW STUDENT <span class="text-danger">PROGRESS(Q1)</span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartBarAngka"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase">
                                <div class="chart-container">
                                    <canvas id="ChartDoughnutAplikan"></canvas>
                                    <span class="presentage">39%</span>
                                </div>
                                <div class="chart-container">
                                    <canvas id="ChartDoughnutDaftar"></canvas>
                                    <span class="presentage">30%</span>
                                </div>
                                <div class="chart-container">
                                    <canvas id="ChartDoughnutRegistrasi"></canvas>
                                    <span class="presentage">20%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6>PROFIT & LOST <span class="text-danger"> QUARTER 1</span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartProfitLost"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase grid-gap-1">
                                <div class="d-flex flex-column ">
                                    <div class="bg-dark">
                                        <span>Income</span>
                                    </div>
                                    <div class="bg-color-primary">
                                        <h6 class="chartInfo">36.700</h6>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="bg-dark">
                                        <span>Expenses</span>
                                    </div>
                                    <div class="bg-color-secondary">
                                        <h6 class="chartInfo">37.300</h6>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="bg-dark">
                                        <span>Profit/Lost</span>
                                    </div>
                                    <div class="bg-color-danger">
                                        <h6 class="chartInfo">-600</h6>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="flex-chart d-flex grid-gap-1 flex-change mb-1">
                <div class="card">
                    <div class="card-header">
                        <h6>STUDY <span class="text-danger"> PAYMENT (Q1) </span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartStudy"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase grid-gap-1">
                                <div class="d-flex flex-column ">
                                    <div class="bg-dark">
                                        <span>Potential Income</span>
                                    </div>
                                    <div class="bg-color-primary">
                                        <h6 class="chartInfo">143.000</h6>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="bg-dark">
                                        <span>Receivable</span>
                                    </div>
                                    <div class="bg-color-secondary">
                                        <h6 class="chartInfo">97.680</h6>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="bg-dark">
                                        <span>Revenue</span>
                                    </div>
                                    <div class="bg-color-danger">
                                        <h6 class="chartInfo">97.680</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>STUDENT JOB <span class="text-danger"> PLACEMENT 2021 </span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartLineStudent"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase">
                                <div class="chart-container">
                                    <canvas id="ChartDoughnutStudent"></canvas>
                                    <span class="presentage">92%</span>
                                </div>
                                <div class="d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Target</span>
                                    </div>
                                    <div class="bg-color-primary">
                                        <h6 class="chartInfo">143.000</h6>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Realisasi</span>
                                    </div>
                                    <div class="bg-color-secondary">
                                        <h6 class="chartInfo">97.680</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex-chart d-flex grid-gap-1 flex-change mb-1">
                <div class="card">
                    <div class="card-header">
                        <h6>NUMBER OF <span class="text-danger"> STUDENT (Q1) </span></h6>
                    </div>
                    <div class="table-responsive">
                        <table>
                            <thead class="bg-color-primary">
                                <tr>
                                    <th></th>
                                    <th>Tingkat 1</th>
                                    <th>Tingkat 2</th>
                                    <th>Tingkat 3</th>
                                    <th>Tingkat 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mahasiswa Aktif</td>
                                    <td>5.400</td>
                                    <td>4.700</td>
                                    <td>4.500</td>
                                    <td>1.200</td>
                                </tr>
                                <tr>
                                    <td>Cuti</td>
                                    <td>120</td>
                                    <td>367</td>
                                    <td>245</td>
                                    <td>78</td>
                                </tr>
                                <tr>
                                    <td>Drop Out</td>
                                    <td>78</td>
                                    <td>67</td>
                                    <td>87</td>
                                    <td>45</td>
                                </tr>
                                <tr>
                                    <td><b>Total</b></td>
                                    <td>5.598</td>
                                    <td>5.134</td>
                                    <td>4.832</td>
                                    <td>1.323</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>NUMBER OF <span class="text-danger"> EMPLOYESS 2021 </span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart-meet">
                            <div class="employee">
                                <div class="chart-container">
                                    <canvas id="ChartEmployee"></canvas>
                                </div>

                            </div>
                        </div>
                        <div class="info-meet">
                            <div class="d-flex flex-change justify-end grid-gap-1 mb-1">
                                <div class="free-text">Permanent</div>
                                <div class="box-primary">750</div>
                            </div>
                            <div class="d-flex flex-change justify-end grid-gap-1 mb-1">
                                <div class="free-text">Contract</div>
                                <div class="box-secondary">450</div>
                            </div>
                            <div class="d-flex flex-change justify-end grid-gap-1 mb-1">
                                <div class="free-text">Total</div>
                                <div class="box-danger">1200</div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>