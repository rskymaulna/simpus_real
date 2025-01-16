<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion apalah sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu apalah">
                        <div class="brand">
                        <i class="fa-solid fa-hospital fa-2xl logo-brand"></i>
                        <div class="nama-brand">
                            <div class="first-name">Apotek</div>
                        </div>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Antrian
                            </a>
                            <a class="nav-link" href="data-obat.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-pills"></i></div>
                                Data Obat
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