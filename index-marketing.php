<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index-marketing.php">Dashboard</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="py-1">
            <div class="card">
                <div class="flex-data d-flex">
                    <div class="data-wrapper">
                        <div class="data-title"><i class="fa fa-user"></i> Total Aplikan</div>
                        <div class="data-subtitle">
                            <h1 class="text-primary">2500</h1>
                        </div>
                        <div class="data-desc">
                            <i class="fa fa-caret-up text-primary"></i>
                            <span class="text-success">5%</span>
                            From last Week
                        </div>
                    </div>
                    <div class="data-wrapper">
                        <div class="data-title">
                            <i class="fa fa-user"></i> Total Daftar
                        </div>
                        <div class="data-subtitle">
                            <h1 class="text-primary">1789</h1>
                        </div>
                        <div class="data-desc">
                            <i class="fa fa-caret-up text-primary"></i>
                            <span class="text-secondary">3%</span>
                            From last Week
                        </div>
                    </div>
                    <div class="data-wrapper">
                        <div class="data-title">
                            <i class="fa fa-user"></i> Total Registrasi
                        </div>
                        <div class="data-subtitle">
                            <h1 class="text-secondary">1254</h1>
                        </div>
                        <div class="data-desc">
                            <i class="fa fa-caret-down text-danger"></i>
                            <span class="text-danger">3%</span>
                            From last Week
                        </div>
                    </div>
                    <div class="data-wrapper">
                        <div class="data-title">
                            <i class="fa fa-user"></i> Jumlah Presenter
                        </div>
                        <div class="data-subtitle">
                            <h1 class="text-primary">360</h1>
                        </div>
                        <div class="data-desc"></div>
                    </div>
                    <div class="data-wrapper">
                        <div class="data-title">
                            <i class="fa fa-university"></i> Kampus PTS
                        </div>
                        <div class="data-subtitle">
                            <h1 class="text-primary">21</h1>
                        </div>
                        <div class="data-desc"></div>
                    </div>
                    <div class="data-wrapper">
                        <div class="data-title">
                            <i class="fa fa-university"></i> Kampus College
                        </div>
                        <div class="data-subtitle">
                            <h1 class="text-success">23</h1>
                        </div>
                        <div class="data-desc"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-1">
            <div class="tabpane">
                <button class="tablinks" onclick="openChart(event, 'Registrasi')" id="defaultOpen">Aplikasi Registrasi</button>
                <button class="tablinks">Aplikan Jenis Kelamin</button>
                <button class="tablinks">Aplikan berdasrkan Asal Sekolah</button>
            </div>
        </div>
        <div class="py-1">
            <div class="tabsContent" id="Registrasi">
                <div class="d-flex flex-second-three flex-change grid-gap-1 mb-1">
                    <div class="card card-1">
                        <div class="chart-container">
                            <canvas id="ChartRegistrasi"></canvas>
                        </div>
                    </div>
                    <div class="card card-2">
                        <div class="card-header">
                            <h6><i class="fa fa-chart-bar text-success"></i> Registran</h6>
                        </div>
                        <div class="chart-container">
                            <canvas id="ChartRegistran"></canvas>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-three-column flex-change grid-gap-1">
                    <div class="card">
                        <div class="card-header">
                            <h6><i class="fa fa-chart-bar text-success"></i> Jumlah Aplikan Berdasarkan Media</h6>
                        </div>
                        <div class="chart-container">
                            <canvas id="ChartJumlah"></canvas>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6><i class="fa fa-chart-pie text-danger"></i> Rasio Aplikan Berdasarkan Media</h6>
                        </div>
                        <div class="chart-container">
                            <canvas id="Chartmedia"></canvas>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6><i class="fas fa-bullseye text-secondary"></i> Top Presenter</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table-presenter">
                                <thead class="bg-color-secondary">
                                    <tr>
                                        <th>No</th>
                                        <th>Presenter</th>
                                        <th>Cabang</th>
                                        <th>Aplikan</th>
                                        <th>Daftar</th>
                                        <th>Registrasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Herman</td>
                                        <td>Kramat</td>
                                        <td>134</td>
                                        <td>87</td>
                                        <td>78</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Vera rahmawati</td>
                                        <td>Purwakarta</td>
                                        <td>123</td>
                                        <td>65</td>
                                        <td>52</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Budiman</td>
                                        <td>Yogyakarta</td>
                                        <td>154</td>
                                        <td>70</td>
                                        <td>51</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Maulana</td>
                                        <td>Tasikmalaya</td>
                                        <td>165</td>
                                        <td>69</td>
                                        <td>48</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Lindayanti</td>
                                        <td>Banda Aceh</td>
                                        <td>143</td>
                                        <td>52</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Dwi Cahyo</td>
                                        <td>Bengkulu</td>
                                        <td>144</td>
                                        <td>53</td>
                                        <td>36</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Endang</td>
                                        <td>Sidoarjo</td>
                                        <td>145</td>
                                        <td>53</td>
                                        <td>36</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Susi Susanti</td>
                                        <td>Karawang</td>
                                        <td>146</td>
                                        <td>54</td>
                                        <td>37</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Siti Muniroh</td>
                                        <td>Cikarang</td>
                                        <td>147</td>
                                        <td>54</td>
                                        <td>37</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Nina Kusuma</td>
                                        <td>Cimone</td>
                                        <td>148</td>
                                        <td>54</td>
                                        <td>37</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>