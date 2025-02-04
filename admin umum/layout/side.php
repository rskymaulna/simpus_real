<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion apalah sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu apalah">
                        <div class="brand">
                        <i class="fa-solid fa-hospital fa-2xl logo-brand"></i>
                        <div class="nama-brand">
                            <div class="first-name">Admin</div>
                            <div class="last-name">Utama</div>
                        </div>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="index.php">
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
                                    <a class="nav-link" href="../login/login.php">Poli Umum</a>
                                    <a class="nav-link" href="../login/login.php">Poli Gigi</a>
                                    <a class="nav-link" href="../login/login.php">Poli KIA</a>
                                    <a class="nav-link" href="../login/login.php">Laboratorium</a>
                                    <a class="nav-link" href="../login/login.php">Kasir</a>
                                    <a class="nav-link" href="../login/login.php">Apotek</a>
                                </nav>  
                            </div>
                            <a class="nav-link" href="data-pendaftaran.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-in"></i></div>
                                Pendaftaran
                            </a>
                            <!-- <a class="nav-link" href="data-pasien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-injured"></i></div>
                                Data Pasien
                            </a> -->
                            <a class="nav-link" href="data-kunjungan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-location-arrow"></i></div>
                                Kunjungan
                            </a>
                            <a class="nav-link" href="data-dokter.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-stethoscope"></i></div>
                                Data Dokter
                            </a>
                            <a class="nav-link" href="jadwal-dokter.php">
                                <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar"></i></div>
                                Jadwal Dokter
                            </a>
                            <a class="nav-link" href="data-lab.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-flask-vial"></i></div>
                                Tindakan Lab
                            </a>
                            <!-- <a class="nav-link" href="data-pegawai.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                                Data Pegawai
                            </a> -->
                            <a class="nav-link" href="data-pengguna.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Users
                            </a>
                            <a class="nav-link" href="data-obat.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pills"></i></div>
                                Data Obat
                            </a>
                            <a class="nav-link" href="data-tindakan.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-syringe"></i></div>
                                Data Tindakan Medis
                            </a>
                            <a class="nav-link" href="pendapatan.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill"></i></div>
                                Pendapatan
                            </a>
                            <a class="nav-link" id="openPopup" href="../login/logout.php">
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