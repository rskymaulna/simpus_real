<?php 
include "layout/top.php";
include "layout/side.php";
?>
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
<?php include "layout/footer.php"; ?>