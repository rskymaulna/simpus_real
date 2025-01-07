<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark nav-bar-color">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../admin umum/index.html">SIMPUS</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Akses
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="../login/login-ds.html">Admin Umum</a>
                                    <a class="nav-link" href="../login/login-pg.html">Poli Gigi</a>
                                    <a class="nav-link" href="../login/login-pk.html">Poli KIA</a>
                                    <a class="nav-link" href="../login/login-lb.html">Laboratorium</a>
                                    <a class="nav-link" href="../login/login-ks.html">Kasir</a>
                                    <a class="nav-link" href="../login/login-ap.html">Apotek</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="antrian.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-sort"></i></div>
                                Antrian
                            </a>
                            <a class="nav-link nl-selected" href="data-pasien.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-injured"></i></div>
                                Data Pasien
                            </a>
                            <a class="nav-link" href="data-dokter.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-stethoscope"></i></div>
                                Data Dokter
                            </a>
                            <a class="nav-link" href="jadwal-dokter.html">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar"></i></div>
                                Jadwal Dokter
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
                        <h1 class="mt-4">Poli</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Umum</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Edit Data Pasien
                            </div>
                            <div class="card-body">
                                <table style="font-size: 15px;">
                                    <tr>
                                        <td class="daftar1"><label for="nama">Nama</label></td>
                                        <td class="daftar"><input type="text" id="nama" class="w-100 p-3" value="kevin"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama1">No ktp</label></td>
                                        <td class="daftar"><input type="text" id="nama1" class="w-100 p-3" value="935620195621"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Status Bpjs</td>
                                        <td class="daftar">
                                            <select name="" id="" class="w-100 p-3 h-auto d-inline-block">
                                                <option value="">--Pilih Status Bpjs--</option>
                                                <option value="">BPJS</option>
                                                <option value=""selected>Non-Bpjs</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama4">Nomor Bpjs</label></td>
                                        <td class="daftar"><input type="text" id="nama4" class="w-100 p-3" value="213056912093"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1">Jenis kelamin</td>
                                        <td class="daftar">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" checked>
                                            <label class="form-check-label" for="gridRadios2">Laki-Laki</label>
                                            <label for=""></label>
                                            <label for=""></label>
                                            <label for=""></label>
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
                                            <label class="form-check-label" for="gridRadios1">Perempuan</label> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama2">Tempat Lahir</label></td>
                                        <td class="daftar"><input type="text" id="nama2" class="w-100 p-3" value="fakfak"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama3">Tanggal Lahir</label></td>
                                        <td class="daftar"><input type="date" id="nama3" class="w-100 p-3" value="2005-02-25"></td>
                                    </tr>
                                    <tr>
                                        <td class="daftar1"><label for="nama5">Alamat</label></td>
                                        <td class="daftar"><textarea class="form-control" aria-label="With textarea">Depnaker</textarea><td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="daftar">
                                            <a href="data-pasien.html" style="text-decoration: none;">
                                                <div class="btn-daftar" >
                                                    <i class="fas fa-save"></i>
                                                    simpan
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">&copy; Puskesmas Kelompok Satu 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
