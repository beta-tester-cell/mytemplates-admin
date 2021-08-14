<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="chart.php">Chart</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="form grid-2 grid-gap-1 py-1">
            <div class="card">
                <div class="card-header">
                    <h6>Chart Line</h6>
                </div>
                <div class="chart-container">
                    <canvas id="ChartLine"></canvas>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Chart Line Negative</h6>
                </div>
                <div class="chart-container">
                    <canvas id="ChartLineNegative"></canvas>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Chart Bar</h6>
                </div>
                <div class="chart-container">
                    <canvas id="ChartBar"></canvas>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Chart Pie</h6>
                </div>
                <div class="chart-container">
                    <canvas id="ChartPie"></canvas>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h6>Chart Doughnut
                </div>
                <div class="chart-container">
                    <canvas id="ChartDoughnut"></canvas>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>