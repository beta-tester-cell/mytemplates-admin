<?php include('header.php') ?>
<div class="breadcrumb-wrapper">
    <div class="breadcrumb">
        <a href="index.php">Dashboard</a>
        <a href="progress-bar.php">Progress Bar</a>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="form grid-3 grid-gap-1 py-1">
            <div class="card">
                <div class="my-2">
                    <a href="#" class="text-primary card-title">
                        Progress Bar 1
                    </a>
                    <div class="presentage-wrapper text-primary">
                        <span class="persentage-text">
                            67%
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-primary">
                        <progress id="progress1" value="67" max="100"></progress>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <a href="#" class="text-secondary card-title">
                        Progress Bar 2
                    </a>
                    <div class="presentage-wrapper text-secondary">
                        <span class="persentage-text">
                            89%
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-secondary">
                        <progress id="progress2" value="89" max="100"></progress>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <a href="#" class="text-danger card-title">
                        Progress Bar 3
                    </a>
                    <div class="presentage-wrapper text-danger">
                        <span class="persentage-text">
                            567
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-danger">
                        <progress id="progress3" value="567" max="1000"></progress>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <div class="d-flex flex-space-between text-primary">
                        <a href="#" class="text-primary card-title">
                            Progress Bar 1 with icon
                        </a>
                        <span class="fa fa-chart-bar"></span>
                    </div>

                    <div class="presentage-wrapper text-primary">
                        <span class="persentage-text">
                            67%
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-primary">
                        <progress id="progress1" value="67" max="100"></progress>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <div class="d-flex flex-space-between text-secondary">
                        <a href="#" class="text-secondary card-title">
                            Progress Bar 2 with icon
                        </a>
                        <span class="fa fa-chart-pie"></span>
                    </div>
                    <div class="presentage-wrapper text-secondary">
                        <span class="persentage-text">
                            89%
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-secondary">
                        <progress id="progress2" value="89" max="100"></progress>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <div class="d-flex flex-space-between text-danger">
                        <a href="#" class="text-danger card-title">
                            Progress Bar 3 with icon
                        </a>
                        <span class="fa fa-chart-line"></span>
                    </div>
                    <div class="presentage-wrapper text-danger">
                        <span class="persentage-text">
                            567
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-danger">
                        <progress id="progress3" value="567" max="1000"></progress>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <div class="d-flex flex-space-between text-primary">
                        <a href="#" class="text-primary card-title">
                            Progress Bar 1
                        </a>
                        <span class="fa fa-chart-bar"></span>
                    </div>

                    <div class="presentage-wrapper text-primary">
                        <span class="persentage-text">
                            67%
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-primary">
                        <progress id="progress1" value="67" max="100"></progress>
                    </div>
                    <div class="desc d-flex flex-space-between text-primary">
                        <span>0%</span>
                        <span>100%</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <div class="d-flex flex-space-between text-secondary">
                        <a href="#" class="text-secondary card-title">
                            Progress Bar 2
                        </a>
                        <span class="fa fa-chart-pie"></span>
                    </div>
                    <div class="presentage-wrapper text-secondary">
                        <span class="persentage-text">
                            89%
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-secondary">
                        <progress id="progress2" value="89" max="100"></progress>
                    </div>
                    <div class="desc d-flex flex-space-between text-secondary">
                        <span>0%</span>
                        <span>100%</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="my-2">
                    <div class="d-flex flex-space-between text-danger">
                        <a href="#" class="text-danger card-title">
                            Progress Bar 3
                        </a>
                        <span class="fa fa-chart-line"></span>
                    </div>
                    <div class="presentage-wrapper text-danger">
                        <span class="persentage-text">
                            567
                        </span>
                        Presentation
                    </div>
                    <div class="progress-bar-danger">
                        <progress id="progress3" value="567" max="1000"></progress>
                    </div>
                    <div class="desc d-flex flex-space-between text-danger">
                        <span>0</span>
                        <span>1000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>