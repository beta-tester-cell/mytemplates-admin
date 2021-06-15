<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>My New Template Admin</title>
    <!-- cdn -->
    <script src="https://kit.fontawesome.com/b4bb8e09b6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <!-- css -->
    <link rel="stylesheet" href="theme/css/style.css">
    <link rel="stylesheet" href="theme/css/content.css">
    <link rel="stylesheet" href="theme/css/mobile.css">
</head>

<body>
    <div class="wrapper">
        <!-- header menu start -->
        <header>
            <div class="page-header">
                <div class="container">
                    <div class="d-flex flex-space-between">
                        <div id="Menumobile">
                            <i class="fa fa-bars"></i>
                        </div>
                        <ul class="nav-menu d-flex flex-start">
                            <li class="menu-items">
                                <a href="#">Menu 1</a>
                            </li>
                            <li class="menu-items">
                                <a href="#">Menu 2</a>
                            </li>
                            <li class="menu-items">
                                <a href="#">Menu 3</a>
                            </li>
                        </ul>

                        <div class="MenuAccount d-flex">
                            <div class="search">
                                <button class="btn-search"><i class="fa fa-search"></i></button>
                                <div class="dropdownSearch">
                                    <form>
                                        <div class="grid-search">
                                            <input type="text" placeholder="Search...">
                                            <button class="btn btn-secondary"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="Accounts">
                                <button><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Admin</button>
                                <div class="dropdownAccount">
                                    <a href="#"><i class="fa fa-cogs"></i> Setting</a>
                                    <a href="lock-user.html"><i class="fa fa-user-lock"></i> Lock</a>
                                    <a href="login.html"><i class="fa fa-key"></i> Logout</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- header menu end -->

        <!-- side-bar menu start -->
        <div class="aside aside-menu-header">
            <div class="logo">
                <a href="#">
                    <img src="theme/img/LOGO-POLITEKNIK.png" alt="">
                </a>

                <div class="logo-toggle">
                    <i class="fa fa-angle-double-right"></i>
                </div>

                <div class="icon-toggle-mobile">
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="aside-menu-wrapper">
                <div class="side-menu scroll-menu my-1">
                    <ul class="menu-nav">
                        <li class="side-menu-item menu-active">
                            <a href="index.php">
                                <span class="menu-icon"><i class="fa fa-tachometer-alt"></i></span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-section">
                            <h4>Menu Section Title</h4>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fas fa-school"></i></span>
                                <span class="menu-title">Kampus</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="pengelolaan-kampus.php">
                                        <span>Pengelolaan Kampus</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="pengelolaan-dosen.php">
                                        <span>Pengelolaan Dosen</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="pengelolaan-jurusan.php">
                                        <span>Pengelolaan Jurusan</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="konfig-jurusan.php" class="d-flex">
                                        <span>Konfigurasi Jurusan Cabang</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="pengelolaan-siswa.php">
                                        <span>Pengelolaan Siswa</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fa fa-donate"></i></span>
                                <span class="menu-title">Keuangan</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="penguncian-mahasiswa.php">
                                        <span>Penguncian Mahasiswa</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="penguncian-cabang.php">
                                        <span>Penguncian Cabang</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="media-pembayaran.php">
                                        <span>Media Pembayaran</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="tagihan-pembayaran.php">
                                        <span>Tagihan Pembayaran</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="realisasi-pembayaran.php">
                                        <span>Realisasi Pembayaran</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="master-pembiayaan.php.php">
                                        <span>Master Pembiayaan</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="tagihan-pembiayaan.php">
                                        <span>Tagihan Kewajiban Cabang</span>
                                    </a>
                                </li>
                                 <li class="side-menu-item">
                                    <a href="realisasi-pembiayaan.php">
                                        <span>Realisasi Kewajiban Cabang</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fas fa-money-check-alt"></i></span>
                                <span class="menu-title">Keuangan Cabang</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="rencana-bayar-kuliah.php">
                                        <span>Rencana Bayar Kuliah</span>
                                    </a>
                                </li> <li class="side-menu-item">
                                    <a href="list-rencana-bayar.php">
                                        <span>List Rencana Bayar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                    <span class="menu-icon"><i class="fa fa-university"></i></span>
                                    <span class="menu-title">Akademik Cabang</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="kelas-group.php">
                                        <span>Kelas Group</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="pengelolaan-pembimbingakad.php">
                                        <span>Pengelolaan PA</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="pengelolaan-nilai.php">
                                        <span>Kelola Nilai Mahasiswa</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="monitoring-perkuliahaan.php">
                                        <span>Report Absensi</span>
                                    </a>
                                </li>
                                 <li class="side-menu-item">
                                    <a href="laporan-lkm.php">
                                        <span>Report LKM</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="menu.php">
                                <span class="menu-icon"><i class="fab fa-elementor"></i></span>
                                <span class="menu-title">Manajemen Menu</span>
                            </a>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fa fa-wpforms"></i></span>
                                <span class="menu-title">Form</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="form.php">
                                        <span>Form Input</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="form_tabs.php">
                                        <span>Form Tabs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fa fa-table"></i></span>
                                <span class="menu-title">Table</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="table.php">
                                        <span>Basic Table</span>
                                    </a>
                                </li>
                                <li class="side-menu-item">
                                    <a href="datatable.php">
                                        <span>Datatable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="card.php">
                                <span class="menu-icon"><i class="far fa-address-card"></i></span>
                                <span class="menu-title">Card</span>
                            </a>
                        </li>
                        <li class="side-menu-item">
                            <a href="modal.php">
                                <span class="menu-icon"><i class="far fa-sticky-note"></i></span>
                                <span class="menu-title">Modal</span>
                            </a>
                        </li>
                        <li class="side-menu-item">
                            <a href="#" class="menu-collaps">
                                <span class="menu-icon"><i class="fa fa-folder-minus"></i></span>
                                <span class="menu-title">Menu levelist</span>
                            </a>
                            <ul class="submenu-menu-item">
                                <li class="side-menu-item">
                                    <a href="#" class="menu-collaps">
                                        <span>menu level 2</span>
                                    </a>
                                    <ul class="submenu-menu-item">
                                        <li class="side-menu-item">
                                            <a href="#">
                                                <span>menu level 3</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-menu-item">
                                    <a href="#">
                                        <span>menu level 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-menu-item">
                            <a href="error-page.html">
                                <span class="menu-icon"><i class="fa fa-file"></i></span>
                                <span class="menu-title">Page Error</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- side-bar menu end -->