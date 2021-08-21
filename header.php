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

    <script src="theme/js/tes.js" defer></script>

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

                <div class="side-menu scroll-menu">

                    <ul class="menu-nav">

                        <li class="side-menu-item">

                            <a href="index.php">

                                <span class="menu-icon"><i class="fa fa-tachometer-alt"></i></span>

                                <span class="menu-title">Dashboard</span>

                            </a>

                        </li>



                        <li class="menu-section">

                            <h4>Menu Section Title</h4>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fas fa-school"></i></span>

                                <span class="menu-title">Akademik Direktorat</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item ">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-tachometer-alt"></i></span>

                                        <span class="menu-title">Dashboard</span>

                                    </a>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                        <span>Data Master</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-kampus.php">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Pengelolaan Kampus</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-dosen.php">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Pengelolaan Dosen</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-jurusan.php">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Pengelolaan Jurusan</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="konfig-jurusan.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Konfigurasi Jurusan Cabang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-siswa.php">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Pengelolaan Siswa</span>

                                            </a>

                                        </li>



                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                        <span>Perkuliahan</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-matakuliah.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Pengelolaan Matakuliah</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="kelola-ploating-dosen.php">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Kelola Ploating Dosen</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-kalender-akedemik.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Kelola Kalender Akademik</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                        <span>Sidang</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="konfigurasi-gelombang-sidang.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Konfigurasi Sidang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="dokumen-sidang.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Dokumen Sidang</span>

                                            </a>



                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                        <span>Tools</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-manajemen-akun.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Pengelolaan Manajemen Akun</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="update-status-mahasiswa.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Update Status Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Report Forlap</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                        <span>Report</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="laporan-dosen.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Dosen</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="rekap-data-mahasiswa-kampus.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-school"></i></span>

                                                <span>Mahasiswa</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-school"></i></span>

                                        <span>EUB</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="eub-master-soal.php?bread=akademik-pusat">

                                                <span class="menu-icon-child"><i class="fa fa-school"></i></span>

                                                <span>Master Soal</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="eub-dosen.php?bread=akademik-pusat">

                                                <span class="menu-icon-child"><i class="fa fa-school"></i></span>

                                                <span class="menu-title">EUB Dosen</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="eub-manajemen.php?bread=akademik-pusat">

                                                <span class="menu-icon-child"><i class="fa fa-school"></i></span>

                                                <span>EUB Manajemen</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-donate"></i></span>

                                <span class="menu-title">Keuangan Pusat</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-tachometer-alt"></i></span>

                                        <span class="menu-title">Dashboard</span>

                                    </a>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                        <span>Setting</span>

                                    </a>



                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="penguncian-mahasiswa.php">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Master Lock Student</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="penguncian-cabang.php">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Master Lock Branch</span>

                                            </a>

                                        </li>



                                        <li class="side-menu-item">

                                            <a href="media-pembayaran.php">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Payment Gateway</span>

                                            </a>

                                        </li>

                                    </ul>



                                </li>



                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                        <span>Kewajiban Cabang</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="master-pembiayaan.php">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Master Akun Kewajiban</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="tagihan-pembiayaan.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>List Tagihan Cabang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="realisasi-pembiayaan.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Realisasi Kewajiban Cabang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">
                                            <a href="list-create-invoice.php" class="d-flex">
                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>
                                                <span>Create Invoice</span>
                                            </a>
                                        </li>

                                    </ul>

                                </li>



                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                        <span>Report</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="tagihan-pembayaran.php">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Tagihan Mahasiswa</span>

                                            </a>

                                        </li>



                                        <li class="side-menu-item">

                                            <a href="realisasi-pembayaran.php">

                                                <span class="menu-icon-child"><i class="fa fa-donate"></i></span>

                                                <span>Realisasi Pembayaran</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fas fa-money-check-alt"></i></span>

                                <span class="menu-title">Keuangan Cabang</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item ">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-tachometer-alt"></i></span>

                                        <span class="menu-title">Dashboard</span>

                                    </a>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Data Master</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Input Akun Perkiraan Bank</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Transaksi</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="rencana-bayar-kuliah.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Rencana Bayar</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="list-rencana-bayar.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Pembayaran Kuliah</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="form-pembayaran-kegiatan.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Non Biaya Kuliah</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="monitor-tagihan-mhs.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Monitoring Tagihan Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Registrasi Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Pembayaran Honor Dosen</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">
                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Tagihan Cabang</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="pembayaran-kewajiban-cabang.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Pembayaran Kewajiban Cabang</span>

                                            </a>

                                        </li>
                                    </ul>
                                </li>

                                <li class="side-menu-item coll-level-2">
                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Tools</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="pindah-prodi.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Pindah Prodi</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pindah-kampus.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Terima/Pindah Kampus</span>

                                            </a>

                                        </li>
                                    </ul>
                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Sidang</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="daftar-sidang-wisuda.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Registrasi Sidang dan Wisuda</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="transaksi-pembayara.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Transaksi Pembayaran</span>

                                            </a>

                                        </li>


                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Validasi Pelunasan</span>

                                            </a>

                                        </li>




                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Posting Peserta Sidang</span>

                                            </a>

                                        </li>


                                    </ul>
                                </li>
                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Virtual Account</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="billing-data.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Billing Data</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="list-history-paymentVA.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Payment History</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                        <span>Report</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Tagihan Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Realisasi Pembayaran Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Tagihan Kewajiban Cabang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Realisasi Kewajiban Cabang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="potensi-realisasi-revenue.php">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Potensi/Realisasi Revenue</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Cetak Kartu Rencana Pembayaran</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Registrasi Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Surat Tagihan Pembayaran</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Surat Tagihan Kewajiban Cabang</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Surat Tagihan Pembayaran Kirim Email</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-money-check-alt"></i></span>

                                                <span>Cetak Kwintasi Pembayaran</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>



                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-university"></i></span>

                                <span class="menu-title">Akademik Cabang</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="dashboard-page.php">

                                        <span class="menu-icon-child"><i class="fa fa-tachometer-alt"></i></span>

                                        <span class="menu-title">Dashboard</span>

                                    </a>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                        <span class="menu-title">Data Master</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="ruang-kelas.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Ruang Kelas</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-pembimbingakad.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Pengelolaan PA</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="kelas-group.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Kelas Group</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="data-matakuliah.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Data Matakuliah</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                        <span class="menu-title">Perkuliahan</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="jadwal-perkuliahan-list.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Pengelolaan Jadwal</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="jadwal-krs.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span> Input Jadwal Pengisian KRS</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="monitoring-perkuliahaan.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Monitoring Perkuliahan</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="jadwal-ujian.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Input Jadwal Ujian</span>

                                            </a>

                                        </li>



                                        <li class="side-menu-item">

                                            <a href="verifikasi-soal-ujian.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Verifikasi Soal Ujian</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="pengelolaan-nilai.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Nilai Mahasiswa</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                        <span class="menu-title">Konfigurasi Sidang</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="list-dospem.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Pengajuan Dosen Pembimbing</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                        <span>EUB</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="eub-jadwal.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>Jadwal EUB</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="eub-dosen.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span class="menu-title">EUB Dosen</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="eub-manajemen-cabang.php">

                                                <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                                <span>EUB Manajemen</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fas fa-university"></i></span>

                                        <span>Tools</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="pengajuan-status-mahasiswa.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fas fa-university"></i></span>

                                                <span>Pengajuan Status Mahasiswa </span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-university"></i></span>

                                        <span class="menu-title">Report</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="laporan-lkm.php">

                                                <span class="menu-icon-child"><i class="fa fa-files-o"></i></span>

                                                <span>Report LKM</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="report-absensi-mhs.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-files-o"></i></span>

                                                <span>Report Kehadiran Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="report-nilai.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-files-o"></i></span>

                                                <span>Report Nilai Mahasiswa</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="report-khs.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-files-o"></i></span>

                                                <span>Report KHS</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="report-krs.php" class="d-flex">

                                                <span class="menu-icon-child"><i class="fa fa-files-o"></i></span>

                                                <span>Report KRS Mahasiswa</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-user"></i></span>

                                <span class="menu-title">Dosen</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-tachometer-alt"></i></span>

                                        <span>Dashboard</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="jadwal-perkuliahan-dosen.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Jadwal Perkuliahan</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>User Profile</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="message.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Chat Message</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Link VC</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Sidang</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Berita & Informasi</span>

                                    </a>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span class="menu-title">Report</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="rekap-lkm.php">

                                                <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                                <span>Rekap LKM</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="report-honor.php">

                                                <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                                <span>Honor</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <hr>

                                <li class="menu-section" style="margin: 0;">

                                    <h4 style="font-size: 10px;">Basis Data</h4>

                                </li>

                                <li class="side-menu-item">

                                    <a href="rkk.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Rencana Kegiatan Kuliah</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="kegiatan-perkuliahan.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Kegiatan Perkuliahan</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="kehadiran-mhs.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Kehadiran Mahasiswa</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="nilai-mhs.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Aktifitas Mahasiswa</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="daftar-mhs.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Daftar Mahasiswa</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="ujian-semester.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Ujian Semester</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="form-nilai-komponen.php">

                                        <span class="menu-icon-child"><i class="fa fa-user"></i></span>

                                        <span>Input Nilai Komponen</span>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-users"></i></span>

                                <span class="menu-title">Mahasiswa</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-tachometer-alt"></i></span>

                                        <span>Dashboard</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="form-tambah-mhs.php">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Kelengkapan Biodata</span>

                                    </a>

                                </li>

                                <li class="side-menu-item coll-level-2">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Perkuliahan</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="form-krs-online.php">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span>KRS Online</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="jadual-kuliah.php">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span class="menu-title">Jadwal Kuliah</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="rekap-kehadiran.php">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span>Rekap Kehadiran</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="form-perbaikan-nilai.php">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span>Nilai</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="jadwal-ujian-semester.php">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span>Ujian Semester</span>

                                            </a>

                                        </li>



                                        <li class="side-menu-item">

                                            <a href="form-ebook-kurikulum.php">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span>E-Book</span>

                                            </a>

                                        </li>

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)">

                                                <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                                <span>EUB</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item">

                                    <a href="transaksi-va.php">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Tagihan</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Sidang</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Screening Test</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Vocabulary Online</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Umpan Balik</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span class="menu-icon-child"><i class="fa fa-users"></i></span>

                                        <span>Informasi Akademik</span>

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

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-wpforms"></i></span>

                                <span class="menu-title">Form</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="form.php">

                                        <span class="menu-icon-child"><i class="fa fa-wpforms"></i></span>

                                        <span>Form Input</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="form_tabs.php">

                                        <span class="menu-icon-child"><i class="fa fa-wpforms"></i></span>

                                        <span>Form Tabs</span>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-table"></i></span>

                                <span class="menu-title">Table</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="table.php">

                                        <span class="menu-icon-child"><i class="fa fa-table"></i></span>

                                        <span>Basic Table</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="datatable.php">

                                        <span class="menu-icon-child"><i class="fa fa-table"></i></span>

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

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-folder-minus"></i></span>

                                <span class="menu-title">Menu levelist</span>

                            </a>

                            <ul class="submenu-menu-item coll-level-2">

                                <li class="side-menu-item">

                                    <a href="#" class="menu-collaps">

                                        <span class="menu-icon-child"><i class="fa fa-folder-minus"></i></span>

                                        <span>menu level 2</span>

                                    </a>

                                    <ul class="submenu-menu-item">

                                        <li class="side-menu-item">

                                            <a href="javascript:void(0)">

                                                <span class="menu-icon-child"><i class="fa fa-folder-minus"></i></span>

                                                <span>menu level 3</span>

                                            </a>

                                        </li>

                                    </ul>

                                </li>

                                <li class="side-menu-item">

                                    <a href="javascript:void(0)">

                                        <span>menu level 2</span>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item coll-level-1">

                            <a href="#" class="menu-collaps">

                                <span class="menu-icon"><i class="fa fa-file"></i></span>

                                <span class="menu-title">Pages</span>

                            </a>

                            <ul class="submenu-menu-item">

                                <li class="side-menu-item">

                                    <a href="error-page.html">

                                        <span class="menu-icon-child"><i class="fa fa-file"></i></span>

                                        <span>Page Error</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="form-krs-online-close.php">

                                        <span class="menu-icon-child"><i class="fa fa-file"></i></span>

                                        <span>Page Close</span>

                                    </a>

                                </li>

                                <li class="side-menu-item">

                                    <a href="form-perbaikan-nilai-close.php">

                                        <span class="menu-icon-child"><i class="fa fa-file"></i></span>

                                        <span>Page Close with icon</span>

                                    </a>

                                </li>

                            </ul>

                        </li>

                        <li class="side-menu-item">

                            <a href="chart.php">

                                <span class="menu-icon"><i class="fa fa-chart-bar"></i></span>

                                <span class="menu-title">Chart</span>

                            </a>

                        </li>

                        <li class="side-menu-item">

                            <a href="progress-bar.php">

                                <span class="menu-icon"><i class="fas fa-spinner"></i></span>

                                <span class="menu-title">Progress Bar</span>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>

        </div>

        <!-- side-bar menu end -->