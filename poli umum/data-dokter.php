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
                            <a class="nav-link" href="data-pasien.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-injured"></i></div>
                                Data Pasien
                            </a>
                            <a class="nav-link nl-selected" href="data-dokter.html">
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
                                <i class="fas fa-stethoscope"></i>
                                Data Dokter
                            </div>
                            <div class="card-body">
                                <a href="" style="text-decoration: none;">
                                    <div class="tambah">
                                        <i class="fas fa-plus"></i>
                                        Tambah Data
                                    </div>
                                </a>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama Dokter</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomor Induk Dokter</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>ID Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama Dokter</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomor Induk Dokter</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>ID Poli</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>PUD-1</td>
                                            <td>Rismawati</td>
                                            <td>Perempuan</td>
                                            <td>923045812347</td>
                                            <td>Masohi</td>
                                            <td>14-01-1986</td>
                                            <td>Kayu Merah Sebrang</td>
                                            <td>Poli Umum</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-dokter.html" class="preview-container" id="fillButton">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container" data-target="#exampleModal">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: red; border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Hapus data
                                                        </div>
                                                    </a>
                                                    <a href="profil-dokter.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>PUD-2</td>
                                            <td>Anien</td>
                                            <td>Perempuan</td>
                                            <td>929067435931</td>
                                            <td>Marley</td>
                                            <td>14-01-1986</td>
                                            <td>Sebrang</td>
                                            <td>Poli Umum</td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-dokter2.html" class="preview-container">
                                                        <div class="edit">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data 
                                                        </div>
                                                    </a>
                                                    <a href="#" class="preview-container" data-target="#exampleModal">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="background-color: red; border: none; transform: scale(0.8);">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Hapus data
                                                        </div>
                                                    </a>
                                                    <a href="profil-dokter2.html" class="preview-container">
                                                        <div class="see">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </div>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat profil 
                                                        </div>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Hapus data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-dokter.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
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
