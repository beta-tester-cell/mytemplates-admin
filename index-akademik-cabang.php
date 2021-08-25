<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index-akademik-cabang.php">Dashboard</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="flex-chart d-flex grid-gap-1 flex-change mb-1">
                <div class="card">
                    <div class="card-header">
                        <h6>STUDENT ATTENDANCE <span class="text-danger">EVEN SEMESTER 2021/2022</span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartKehadiran"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase">
                                <div class="chart-container">
                                    <canvas id="ChartSakit"></canvas>
                                    <span class="presentage">33%</span>
                                </div>
                                <div class="chart-container">
                                    <canvas id="ChartIjin"></canvas>
                                    <span class="presentage">38%</span>
                                </div>
                                <div class="chart-container">
                                    <canvas id="ChartAbsen"></canvas>
                                    <span class="presentage">29%</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>LEARNING PROGRESS <span class="text-danger">EVEN SEMESTER 2021/2022</span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartLearning"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase">
                                <div class="chart-container">
                                    <canvas id="Chartlearning"></canvas>
                                    <span class="presentage">79%</span>
                                </div>
                                <div class="wrapper-width d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Formatif</span>
                                    </div>
                                    <div class="bg-color-primary">
                                        <h6 class="chartInfo">79</h6>
                                    </div>
                                </div>
                                <div class="wrapper-width d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Tugas</span>
                                    </div>
                                    <div class="bg-color-secondary">
                                        <h6 class="chartInfo">78</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex-chart d-flex grid-gap-1 flex-change mb-1">
                <div class="d-flex flex-column grid-gap-1 child">
                    <div class="card">
                        <div class="card-header">
                            <h6>NUMBER OF <span class="text-danger">STUDENT (Q1)</span></h6>
                        </div>
                        <div class="table-responsive">
                            <table>
                                <thead class="bg-color-secondary">
                                    <tr>
                                        <th></th>
                                        <th>Tingkat 1</th>
                                        <th>Tingkat 2</th>
                                        <th>Tingkat 3</th>
                                        <th>Tingkat 4</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mahasiswa Aktif</td>
                                        <td>5.400</td>
                                        <td>4.700</td>
                                        <td>4.500</td>
                                        <td>1.200</td>
                                        <td>15.800</td>
                                    </tr>
                                    <tr>
                                        <td>Cuti</td>
                                        <td>120</td>
                                        <td>367</td>
                                        <td>245</td>
                                        <td>78</td>
                                        <td>810</td>
                                    </tr>
                                    <tr>
                                        <td>Drop Out</td>
                                        <td>78</td>
                                        <td>67</td>
                                        <td>87</td>
                                        <td>45</td>
                                        <td>277</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>5.598</td>
                                        <td>5.134</td>
                                        <td>4.832</td>
                                        <td>1.323</td>
                                        <td>16.887</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6>NUMBER OF MEETING <span class="text-danger">EVEN SEMESTER 2021</span></h6>
                        </div>
                        <div class="chart-box-newStudent">
                            <div class="chart-meet">
                                <div class="meet">
                                    <div class="chart-container">
                                        <canvas id="ChartMeet"></canvas>
                                    </div>

                                </div>
                            </div>
                            <div class="info-meet">
                                <div class="d-flex flex-change justify-end grid-gap-1 mb-1">
                                    <div class="free-text">Rata Pertemuan</div>
                                    <div class="box-secondary">9</div>
                                </div>
                                <div class="d-flex flex-change justify-end grid-gap-1 mb-1">
                                    <div class="free-text">Sisa Pertemuan</div>
                                    <div class="box-danger">5</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6>IPK ACADEMIC YEAR 2021/2022 <span class="text-danger">EVEN SEMESTER</span></h6>
                    </div>
                    <div class="chart-box-newStudent">
                        <div class="chart">
                            <div class="chart-container">
                                <canvas id="ChartIPK"></canvas>
                            </div>
                        </div>
                        <div class="info">
                            <div class="chart-presentase">
                                <div class="wrapper-width d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Baik</span>
                                    </div>
                                    <div class="bg-color-primary">
                                        <h6 class="chartInfo">37%</h6>
                                    </div>
                                </div>
                                <div class="wrapper-width d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Cukup</span>
                                    </div>
                                    <div class="bg-color-secondary">
                                        <h6 class="chartInfo">55%</h6>
                                    </div>
                                </div>
                                <div class="wrapper-width d-flex flex-column mb-1">
                                    <div class="bg-dark">
                                        <span>Kurang</span>
                                    </div>
                                    <div class="bg-color-danger">
                                        <h6 class="chartInfo">8%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>