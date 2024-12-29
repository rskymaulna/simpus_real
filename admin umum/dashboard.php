<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark nav-bar-color">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">SIMPUS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link  nl-selected" href="dashboard.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Akses
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="../login/login-pu.html">Poli Umum</a>
                                    <a class="nav-link" href="../login/login-pg.html">Poli Gigi</a>
                                    <a class="nav-link" href="../login/login-pk.html">Poli KIA</a>
                                    <a class="nav-link" href="../login/login-lb.html">Laboratorium</a>
                                    <a class="nav-link" href="../login/login-ks.html">Kasir</a>
                                    <a class="nav-link" href="../login/login-ap.html">Apotek</a>
                                </nav>  
                            </div>
                            <a class="nav-link" href="data-pendaftaran.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-in"></i></div>
                                Pendaftaran
                            </a>
                            <a class="nav-link" href="data-pasien.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-injured"></i></div>
                                Data Pasien
                            </a>
                            <a class="nav-link" href="data-kunjungan.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-location-arrow"></i></div>
                                Kunjungan
                            </a>
                            <a class="nav-link" href="data-dokter.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-stethoscope"></i></div>
                                Data Dokter
                            </a>
                            <a class="nav-link" href="jadwal-dokter.html">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar"></i></div>
                                Jadwal Dokter
                            </a>
                            <a class="nav-link" href="data-pegawai.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                                Data Pegawai
                            </a>
                            <a class="nav-link" id="openPopup" href="../html/index.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                                Keluar
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="popup" class="hidden">
                <div class="popup-content">
                  <p>Apakah anda yakin ingin keluar dari halaman ini?</p>
                  <a href="../html/index.html">Ya</a>
                  <a href="#" id="closePopup">Tidak</a>
                </div>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4" style="margin-left: 12%; height: 450px; width: 900px;">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Grafik Pasien Terdaftar di Bulan Agustus
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Puskesmas Kelompok Satu 2024</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
        <script src="https://kit.fontawesome.com/2598ce4aff.js" crossorigin="anonymous"></script>
    </body>
</html>
